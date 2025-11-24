<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Список категорий
     */
    public function index()
    {
        $orders = Order::orderBy('id', 'DESC')->paginate(5);
        return view('admin.orders.index', compact('orders'));
    }

    public function checked(Request $request, $id)
    {
        $order = Order::find($id);
        $data['checked'] = $request->order_checked;

        $order->update($data);
        return redirect()->route('admin.orders');
    }

    public function status0($id)
    {
        Order::find($id)->update([
            'status' => false
        ]);
        return Redirect()->back();
    }

    public function status1($id)
    {
        Order::find($id)->update([
            'status' => true
        ]);
        return Redirect()->back();
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->forceDelete();

        return redirect()->back()->with([
            'message' => 'Order deleted successfully!',
            'alert-type' => 'success'
        ]);
    }
}
