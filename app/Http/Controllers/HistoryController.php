<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{
    public function index() {
        $histories = Auth::user()->transactions;

        return view('history', ['histories' => $histories]);
    }
}
