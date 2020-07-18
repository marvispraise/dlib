<?php

namespace App\Http\Controllers;

use App\Library;
use App\Row;
use App\Section;
use App\Shelf;
use App\Tape;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class LibraryController extends Controller
{
    //////////////////////////////////////library
    public function view(){
        $data['libraries'] = Library::all();
        return view('library', $data);
    }

    public function addLibrary(Request $request){
        request()->validate([
            'name' => 'required',

        ]);

        $cat = new Library();
        $cat->unique_id     = Uuid::generate();
        $cat->library = $request->get('name');

        $cat->save();


        return redirect()->route('viewLibrary')
            ->with('success','Successfully Added Library.');
    }
    /////////////////////////////////shelf
    public function viewShelf($library){
        $data['shelves'] = Shelf::where('library_id', $library)->get();
        $data['library'] = Library::where('unique_id', $library)->first();

        return view('shelf', $data);
    }

    public function addShelf($library,Request $request){
        request()->validate([
            'name' => 'required',

        ]);
            $cat = new Shelf();
            $cat->unique_id     = Uuid::generate();
            $cat->library_id     = $request->get('library_id');
            $cat->shelf = $request->get('name');

            $cat->save();


        return redirect()->route('viewShelf',$library)
            ->with('success','Successfully Added Shelf.');
    }

    /////////////////////////////////shelf
    public function viewSection($shelf){
        $data['shelf'] = Shelf::where('unique_id', $shelf)->first();
        $data['sections'] = Section::where('shelf_id', $shelf)->get();
        return view('section', $data);
    }

    public function addSection($shelf, Request $request){
        request()->validate([
            'name' => 'required',

        ]);

        $cat = new Section();
        $cat->unique_id     = Uuid::generate();
        $cat->shelf_id     = $request->get('shelf_id');
        $cat->section = $request->get('name');

        $cat->save();


        return redirect()->route('viewSection',$shelf)
            ->with('success','Successfully Added Section.');
    }

    ///////////////////////////////////////row
    public function viewRow($section){
        $data['section'] = Section::where('unique_id', $section)->first();
        $data['rows'] = Row::where('section_id', $section)->get();
        return view('row', $data);
    }

    public function addRow($section,Request $request){
        request()->validate([
            'name' => 'required',

        ]);

        $cat = new Row();
        $cat->unique_id     = Uuid::generate();
        $cat->section_id     = $request->get('section_id');
        $cat->row = $request->get('name');

        $cat->save();


        return redirect()->route('viewRow',$section)
            ->with('success','Successfully Added Row.');
    }


    //////////////////////////////////////tapes
    public function viewRowTape($row){
        $data['tapes'] = Tape::where('row_id', $row)->get();
        return view('admin.row_tapes', $data);
    }
}
