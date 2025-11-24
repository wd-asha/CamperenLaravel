<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('admin');
    }*/

    /**
     * Список категорий
     */
    public function index()
    {
        $categories = Category::orderBy('id', 'DESC')->paginate(5);
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Форма создания категории
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Сохранение новой категории
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'subtitle'    => 'nullable|string|max:255',
            'image'       => 'nullable|image',
            'persons'     => 'nullable|string|max:255',
            'icons'       => 'nullable|integer',
            'sqr'         => 'nullable|integer',
            'is_main'     => 'nullable|boolean',
        ]);

        $data['is_main'] = $request->has('is_main');

        // Загрузка изображения
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('media/images'), $filename);
            $data['image'] = $filename;
        }

        Category::create($data);

        return redirect()->route('admin.categories.index')
            ->with('success', 'Категория создана');
    }

    /**
     * Форма редактирования категории
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.categories.edit', compact('category'));
    }

    /**
     * Обновление категории
     */
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $data = $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'nullable|string',
            'subtitle'    => 'nullable|string|max:255',
            'image'       => 'nullable|image',
            'persons'     => 'nullable|string|max:255',
            'icons'       => 'nullable|integer',
            'sqr'         => 'nullable|integer',
            'is_main'     => 'nullable|boolean',
        ]);

        $data['is_main'] = $request->has('is_main');

        // Обработка нового изображения
        if ($request->hasFile('image')) {
            // Удаляем старое изображение
            if ($category->image && file_exists(public_path('media/images/' . $category->image))) {
                unlink(public_path('media/images/' . $category->image));
            }

            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('media/images'), $filename);
            $data['image'] = $filename;
        }

        $category->update($data);

        return redirect()->route('admin.categories')
            ->with('success', 'Категория обновлена');
    }

    /**
     * Полное удаление категории с удалением изображения
     */
    public function delete($id)
    {
        $category = Category::withTrashed()->findOrFail($id);

        // Удаляем изображение
        if ($category->image && file_exists(public_path('media/images/' . $category->image))) {
            unlink(public_path('media/images/' . $category->image));
        }

        $category->forceDelete();

        return redirect()->back()->with([
            'message' => 'Категория удалена',
            'alert-type' => 'success'
        ]);
    }

    public function status0($id)
    {
        Category::find($id)->update([
            'is_main' => false
        ]);
        return Redirect()->back();
    }

    public function status1($id)
    {
        Category::find($id)->update([
            'is_main' => true
        ]);
        return Redirect()->back();
    }

}
