<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proposal;
use Auth;

class ProposalController extends Controller
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
            $Proposal = Proposal::get();

        }else{

            $Proposal = Proposal::where('user_id', Auth::user()->id)->get();
        }
       
        return view('proposal.index',compact('Proposal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('proposal.create');
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
        'proposal'=>'required',
        ]);
    
         $Proposal = new Proposal([
        'club_id'=> '1',
        'user_id'=> Auth::user()->id,
        'propose'=> $request->get('proposal'),
        'status'=> '1',
        ]);

       $Proposal->save();
       toastr()->success('proposal has been added successfully!');
       
       return redirect('/proposal');
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
         $Proposal = Proposal::find($id);

        return view('proposal.edit', compact('Proposal'));
    }

     public function status($id, $status)
    {
        Proposal::where('id', $id)->update([
            'status' => $status,
       ]);
        
      toastr()->success('Proposal has been updated successfully!');
      return redirect('/proposal');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
      $proposal_id = $request->input('proposal_id');
      $proposal = $request->input('proposal');
      
       Proposal::where('id', $proposal_id)->update([
            'propose' => $proposal,
       ]);

       toastr()->success('Proposal has been updated successfully!');
      return redirect('/proposal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $Proposal = Proposal::find($id);
     $Proposal->delete();

      toastr()->success('Proposal has been deleted successfully!');
      return redirect('/proposal');
    }
    
}
