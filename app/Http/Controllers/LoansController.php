<?php

namespace App\Http\Controllers;

use App\LoanRequest;
use App\Tape;
use App\User;
use Illuminate\Http\Request;
use Webpatser\Uuid\Uuid;

class LoansController extends Controller
{
    public function viewRequestedTape(){
        $data['loan_requests'] = LoanRequest::all();
        return view('tape_request', $data);
    }

    public function loanRequest(){

    }

    public function requestForm(){
        $data['tapes'] = Tape::where('status', 1)->get();
        return view('loan_tape', $data);
    }

    public function viewLoan($id){
        $data['tape'] = Tape::find($id);
//        dd($data);
        return view('tape_details', $data);
    }

    public function loanTape(Request $request){
        request()->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'dept' => 'required',
            'tape_id' => 'required',
            'borrowedDate' => 'required',
            'returningDate' => 'required',
        ]);

        $new = new LoanRequest();
        $new->unique_id  =  Uuid::generate();
        $new->user_id  =  auth()->user()->unique_id;
        $new->firstname  =  $request->get('firstname');
        $new->lastname  =  $request->get('lastname');
        $new->email  =  $request->get('email');
        $new->phone  =  $request->get('phone');
        $new->dept  =  $request->get('dept');
        $new->tape_id  =  $request->get('tape_id');
        $new->borrowedDate  =  strtotime($request->get('borrowedDate'));
        $new->returningDate  =  strtotime($request->get('returningDate'));
        $new->status  =  0;

        $new->save();

        return redirect()->route('requestForm')
            ->with('success','Successfully Requested Tape.');
    }

    public function accept($id){
            $tapeRequest = LoanRequest::where('unique_id',$id)->first();
            if($tapeRequest->status == 0){
                $tapeRequest->status = 1;
                $tapeRequest->update();
            }
        return back();
    }

    public function decline($id){
            $tapeRequest = LoanRequest::where('unique_id',$id)->first();
            if($tapeRequest->status == 0){
                $tapeRequest->status = 2;
                $tapeRequest->update();
            }
        return back();
    }



    public function searchP(Request $request)
    {

        if ($request->ajax()) {

            $output="";
            $data=Tape::where('name', 'LIKE', '%' . $request->tape . '%')
                ->get();
            if($data)
            {
            foreach ($data as $key => $product) {
            $output.='<tr>'.
            '<td>'.$product->id.'</td>'.
            '<td>'.$product->name.'</td>'.
            '<td>'.$product->classOfTape.'</td>'.
            '<td>'.$product->tapeContent.'</td>'.
            '<td>'.date("jS M, Y", $product->date).'</td>'.
            '<td><a href="/viewLoan/'.$product->id.'" class="badge badge-success">Request'.'</a></td>'.
            '</tr>';
            }
            return Response($output);
               }

        }

    }
}
