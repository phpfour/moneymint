<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{

    public function store(Request $request)
    {
        Transaction::create($request->all());
        return redirect('/');
    }
}
