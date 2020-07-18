<?php

namespace App\Http\Controllers;

use App\Program;
use Illuminate\Http\Request;

class TapesController extends Controller
{
    public function viewProgram(){

        return view('admin.program');
    }

    public function addProgram(Request $request){
        request()->validate([
            'title' => 'required',
            'location' => 'required',
            'date' => 'required',
        ]);

        $cat = new Program();
        $cat->title     = $request->get('title');
        $cat->location     = $request->get('location');
        $cat->date     = strtotime($request->get('date'));
        $cat->save();


        return redirect()->route('viewProgram')
            ->with('success','Successfully Added Program.');

    }


}
