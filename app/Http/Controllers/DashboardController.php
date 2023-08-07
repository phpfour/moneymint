<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $transactionList = Transaction::all(); // Fetch all income records from the database

        return view('app', compact('transactionList'));
    }
}
