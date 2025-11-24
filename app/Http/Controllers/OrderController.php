<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function checkNow($category_id, Request $request )
    {
        if (Auth::check()) {
            $user_id = Auth::id();
        } else {
            $user_id = 0;
        }
        $category = Category::find($category_id);
        $status = true;
        $checked = false;

        $request->validate([
            'checkin' => 'required',
            'checkout' => 'required',
            'totalPrice' => 'required',
        ],
            [
                'checkin.required' => 'date',
                'checkout.required' => 'date',
                'totalPrice' => 'total price',

            ]);

        $data = array();
        $data['user_id'] = $user_id;
        $data['category_id'] = $category->id;
        $data['checkin'] = $request->checkin;
        $data['checkout'] = $request->checkout;
        $data['price'] = $request->totalPrice;
        $data['status'] = $status;
        $data['checked'] = $checked;
        $data['created_at'] = now();

        Order::create($data);
        return redirect('/')
            ->with('order_yes', 'Your Order has been accepted');
    }

    public function show(Request $request)
    {
        $data = array();
        $data['datein'] = $request->datein;
        $data['dateout'] = $request->dateout;
        $data['guest'] = $request->guest;
        $data['accomm'] = $request->accomm;

        if($request->accomm == 'all') {
            $categories = Category::all();
        }else{
            $categories = Category::where('subtitle', $data['accomm'])->get();
        }

        return view('accommodation', [
            'data' => $data,
            'categories' => $categories,
        ]);
    }
}
