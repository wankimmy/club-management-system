<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activities;
use Auth;

class ActivityController extends Controller
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
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('activity.create');
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
        'name'=>'required',
        'poster'=>'required',
        'start_date'=> 'required',
        'start_time' => 'required',
        'end_date'=> 'required',
        'end_time' => 'required',
        'desc' => 'required'
        ]);
    
         $Activities = new Activities([
        'club_id'=> '1',
        'user_id'=> Auth::user()->id,
        'name'=> $request->get('name'),
        'poster' => $request->file('poster')->getClientOriginalName(),
        'start_date'=> $request->get('start_date'),
        'start_time'=>  $request->get('start_time'),
        'end_date'=> $request->get('end_date'),
        'end_time'=>  $request->get('end_time'),
        'desc'=> $request->get('desc'),
        'status'=> '1',
        ]);

         if ($request->hasFile('poster')) {
        $image = $request->file('poster');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        }

       $Activities->save();
       toastr()->success('Activities has been added successfully!');
       
       return redirect('/home');
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

    public function status($id, $status)
    {
        Activities::where('id', $id)->update([
            'status' => $status,
       ]);
        
      toastr()->success('Activities has been updated successfully!');
      return redirect('/home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $Activities = Activities::find($id);

        return view('activity.edit', compact('Activities'));

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
      $activity_id = $request->input('activity_id');
      $name = $request->input('name');
      $start_date = $request->input('start_date');
      $start_time = $request->input('start_time');
      $end_date = $request->input('end_date');
      $end_time = $request->input('end_time');
      $desc = $request->input('desc');
       if ($request->hasFile('poster')) {
      $poster = $request->file('poster')->getClientOriginalName();
      }

       Activities::where('id', $activity_id)->update([
            'name' => $name,
            'start_date' => $start_date,
            'start_time' => $start_time,
            'end_date' => $end_date,
            'end_time' => $end_time,
            'desc' => $desc,
       ]);

         if ($request->hasFile('poster')) {
            $image = $request->file('poster');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            Activities::where('id', $activity_id)->update([
               'poster' => $poster,
              ]);
        }

       toastr()->success('Activities has been updated successfully!');
      return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $Activities = Activities::find($id);
     $Activities->delete();

      toastr()->success('Activities has been deleted successfully!');
      return redirect('/home');
    }
}
