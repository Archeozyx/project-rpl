<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrderForm()
    {
        return view('pesan');
    }

    public function pesan(Request $request)
    {
        $ticketOrder = new Order();
        $ticketOrder->user_email = Auth::user()->email;
        $ticketOrder->name = $request->input('name');
        $ticketOrder->email = $request->input('email');
        $ticketOrder->phone = $request->input('phone');
        $ticketOrder->event = $request->input('event');
        $ticketOrder->tickets = $request->input('tickets');
        $ticketOrder->date = $request->input('date');
        $ticketOrder->time = $request->input('time');
        $ticketOrder->status = 'pending';
        $ticketOrder->save();

        return redirect()->route('pesan');
    }
}
