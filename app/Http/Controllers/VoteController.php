<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\User;
use App\Models\Nominees;
use Auth;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index()
    {
         if (Auth::user()->user_type == '1' || Auth::user()->user_type == '2') {
            $Nominees = Nominees::get();

        }else{

            $Nominees = Nominees::where('status', '2')->get();
        }

        return view('vote.index',compact('Nominees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
         $User = User::where('user_type', '2')->get();
        return view('vote.create',compact('User'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'position'=>'required',
        'committee_id1'=>'required',
        'committee_id2'=>'required',
        ]);
    
        $Nominees = new Nominees([
        'committee_id1'=> $request->get('committee_id1'),
        'committee_id2'=> $request->get('committee_id2'),
        'committee_id3'=> $request->get('committee_id3'),
        'committee_id4'=> $request->get('committee_id4'),
        'committee_id5'=> $request->get('committee_id5'),
        'committee_id6'=> $request->get('committee_id6'),
        'status'=> '1',
        'position'=> $request->get('position'),
        ]);

       $Nominees->save();
       toastr()->success('Nominees has been added successfully!');
       
       return redirect('/vote');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function result($id)
    {
        $Nominees = Nominees::where('id', $id)->first();
        return view('vote.result',compact('Nominees'));
    }

     public function status($id, $status)
    {
        Nominees::where('id', $id)->update([
            'status' => $status,
       ]);
        
      toastr()->success('Nominees has been updated successfully!');
      return redirect('/vote');
    }

     public function voting(Request $request)
    {
        $vote = new Vote;
        $vote->nominee_id = $request->get('nominee_id');
        $vote->committee_id = $request->get('nominee');
        $vote->user_id = Auth::user()->id;
        $vote->remark = '1';
        $vote->save();

       toastr()->success('Vote Success!');
      return redirect('/vote');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Nominees = Nominees::find($id);
     $Nominees->delete();

      toastr()->success('Nominees has been deleted successfully!');
      return redirect('/vote');
    }
}
