<?php

namespace App\Http\Controllers;

use App\Library;
use App\LoanRequest;
use App\Program;
use App\Row;
use App\Section;
use App\Shelf;
use App\Tape;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class TapesController extends Controller
{
    public function viewProgram(){

        $data['programs'] = Program::all();

        return view('all_program', $data);
    }

    public function addProgram(Request $request){
        request()->validate([
            'title' => 'required',
            'location' => 'required',
            'date' => 'required',
        ]);

        $cat = new Program();
        $cat->unique_id     = Uuid::generate();
        $cat->title     = $request->get('title');
        $cat->location     = $request->get('location');
        $cat->date     = strtotime($request->get('date'));
        $cat->save();


        return redirect()->route('viewProgram')
            ->with('success','Successfully Added Program.');

    }

    public function viewTape() {
        $data['items'] = Tape::orderBy('name','DESC')->paginate(10);
        $data['libraries'] = Library::all();
        $data['rows'] = Row::all();
        $data['sections'] = Section::all();
        $data['shelves'] = Shelf::all();
        $data['programs'] = Program::all();
        return view('all_items',$data);
    }

    public function addTape(Request $request) {
        request()->validate([
            'classOfTape' => 'required',
            'program' => 'required',
            'editor' => 'required',
            'minister' => 'required',
            'libNo' => 'required',
            'shelfNo' => 'required',
            'section' => 'required',
            'rowNo' => 'required',
            'date' => 'required',
        ]);

        $new = new Tape();
        $new->unique_id  = Uuid::generate();
        $new->name  = $request->get('name');
        $new->classOfTape  = $request->get('classOfTape');
        $new->program  = $request->get('program');
        $new->editor  = $request->get('editor');
        $new->minister  = $request->get('minister');
        $new->libNo  = $request->get('libNo');
        $new->shelfNo  = $request->get('shelfNo');
        $new->section  = $request->get('section');
        $new->rowNo  = $request->get('rowNo');
        $new->tapeNumbering  = $request->get('tapeNumbering');
        $new->tapePresence  = $request->get('tapePresence');
        $new->tapeType  = $request->get('tapeType');
        $new->tapeContent  = $request->get('tapeContent');
        $new->date  = strtotime($request->get('date'));
        $new->status  = 1;

        $new->save();

        return redirect()->route('viewTape')
            ->with('success','Successfully Added Tape.');

    }


    public function viewTapeLL(){
        $data['tapes'] = Tape::where('status', 0)->get();
        $data['lTapes'] = Tape::where('status', 1)->get();
        return view('tapeLL', $data);
    }

    public function loginTape(Request $request){
        request()->validate([
            'tape' => 'required',
        ]);
        $new = Tape::where('unique_id',$request->get('tape'))->first();
        $new->status = 1;
        $new->update();


        return redirect()->route('viewTapeLL')
            ->with('success','Successfully Logged In Tape.');
    }


    public function logoutTape(Request $request){
        request()->validate([
            'tape' => 'required',
        ]);
        $new = Tape::where('unique_id',$request->get('tape'))->first();
        $new->status = 0;
        $new->update();

        return redirect()->route('viewTapeLL')
            ->with('success','Successfully Logged Out Tape.');
    }


    public function accessShelf($id){
//        $data['shelves'] = Shelf::where('library_id', $id);



            $output="";
            $data = Shelf::where('library_id', $id)->get();

            if($data)
            {
                return response()->json([
                    'status'=> true,
                    'data'=> $data,
                ]);
            }

    }

    public function accessSection($id){

            $output="";
            $data = Section::where('shelf_id', $id)->get();
//            dd($data);
            if($data)
            {

                return response()->json([
                    'status'=> true,
                    'data'=> $data,
                ]);
            }
    }

    public function accessRow($id){
        $data = Row::where('section_id', $id)->get();
        if($data)
        {
            return response()->json([
                'status'=> true,
                'data'=> $data,
            ]);
        }
    }

    public function searchTape(Request $request){
        $data=Tape::where('name', 'LIKE', '%' . $request->tape . '%')
            ->get();



        $dataArr = array();
        if($data)
        {

           foreach ($data as $dat){
               $dataArr[] = array(
                   'name' => $dat -> name,
                   'classOfTape' => $dat->classOfTape,
                   'program' => $dat->programs->title,
                   'editor' => $dat->editor,
                   'minister' => $dat->minister,
                   'libNo' => $dat->library->library,
                   'shelfNo' => $dat->shelf->shelf,
                   'section' => $dat->sections->section,
                   'rowNo' => $dat->row->row,
                   'tapeNumbering' =>$dat->tapeNumbering,
                   'tapePresence' => $dat->tapePresence,
                   'tapeType' => $dat->tapeType,
                   'tapeContent' => $dat -> tapeContent,
                   'date' => date("D jS M", $dat->date),
                   'year' => date("Y", $dat->date),
                   'status' => $dat->status,
               );

           }

            return response()->json([
                'status'=> true,
                'data'=> $dataArr,
            ]);

        }
    }


}
