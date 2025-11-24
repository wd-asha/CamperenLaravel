<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;

class AuthorDashboardController extends Controller
{
    public function index()
    {
        $accountLink = 'account';
        return view('dashboard', compact('accountLink'));
    }

    public function change()
    {
        $accountLink = 'change';
        return view('account.change', compact('accountLink'));
    }

    public function save(Request $request)
    {
        $user = User::query()->findOrFail(auth()->id());
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . auth()->id(),
            'address' => 'nullable|string',
            'phone' => 'nullable|string',
        ]);

        $user->update($validated);
        return redirect()->route('account');
    }

    public function orders()
    {
        $orders = Order::query()
            ->where('user_id', '=', auth()->id())
            ->orderBy('created_at', 'desc')
            /*->paginate(3);*/
            ->get();

        $accountLink = "order";
        return view('account.orders', compact('accountLink', 'orders'));
    }

    public function canceled($order_id)
    {
        $order = Order::findOrFail($order_id);
        $order->update([
            'status' => 0
        ]);
        return Redirect()->back();
    }

}
