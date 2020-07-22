<?php

namespace App\Http\Controllers;

use App\LoanRequest;
use App\Program;
use App\Tape;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home(){
        if (auth()->user()->level != 0){
            $data['users'] = User::all();
            $data['tapes'] = Tape::all();
            $data['programs'] = Program::all();
            $data['loan_requests'] = LoanRequest::latest()->where('status', 1)->limit(7)->get();
            return view('index', $data);
        }else{
            return redirect()->route('requestForm');
        }


    }
}
