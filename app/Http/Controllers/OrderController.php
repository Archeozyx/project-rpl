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

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|min:8',
            'event' => 'required|string|max:30',
            'tickets' => 'required|integer|min:1',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
        ]);

        $ticketOrder = new Order();
        $ticketOrder->user_email = Auth::user()->email;
        $ticketOrder->name = $validatedData['name'];
        $ticketOrder->email =  $validatedData['email'];
        $ticketOrder->phone = $validatedData['phone'];
        $ticketOrder->event = $validatedData['event'];
        $ticketOrder->tickets = $validatedData['tickets'];
        $ticketOrder->date = $validatedData['date'];
        $ticketOrder->time = $validatedData['time'];
        $ticketOrder->status = 'pending';
        $ticketOrder->save();

        return redirect()->route('home');
    }
}
