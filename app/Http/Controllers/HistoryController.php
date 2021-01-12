<?php

namespace App\Http\Controllers;

use App\TransactionHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoryController extends Controller
{

    public function history(){
        $header = TransactionHeader::where('user_id', Auth::user()->id)->get();
        return view('transaction', ['header' => $header]);
    }

    public function detail($id){
        $header = TransactionHeader::find($id);
        return view('history', ['header' => $header]);
    }
}
