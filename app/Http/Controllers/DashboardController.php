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
            $latest_loans = LoanRequest::latest()->where('status', 1)->limit(7)->get();
            $dTapes = array();
            foreach ($latest_loans as $tape){
                $dTapes[] = array(
                    'tapes' =>  Tape::where('unique_id', $tape->tape_id)->get()
                );
            }
            return view('index', $data,['dTapes' => $dTapes]);
        }else{
            return redirect()->route('requestForm');
        }


    }
}
