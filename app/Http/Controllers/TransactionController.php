<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::with('phone')->where('user_id', Auth::id())->get();
        return view('transactions.user', compact('transactions'));
    }

    public function admin()
    {
        $transactions = Transaction::with('phone', 'user')->get();
        return view('transactions.admin', compact('transactions'));
    }

    public function buy(Phone $phone)
    {
        if ($phone->stock < 1) {
            return redirect()->back()->with('error', 'Sorry, this item is out of stock.');
        }

        Transaction::create([
            'user_id' => Auth::id(),
            'phone_id' => $phone->id,
            'quantity' => 1,
            'total_price' => $phone->price,
        ]);

        $phone->decrement('stock', 1);

        return redirect()->back()->with('success', 'Purchase successful!');
    }
}
