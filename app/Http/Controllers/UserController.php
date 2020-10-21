<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;

class UserController extends Controller
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
        $User = User::get();

         }else{
            $User = User::where('id', Auth::user()->id)->get();
        }
        return view('user.index',compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
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
        'profile_photo_path'=>'required',
        'name'=>'required',
        'email'=> 'required',
        'password' => 'required',
        'role' => 'required',
        'student_id' => 'required',
        'semester' => 'required',
        'course' => 'required',
        ]);
    
         $User = new User([
        'profile_photo_path' => $request->file('profile_photo_path')->getClientOriginalName(),
        'name' => $request->get('name'),
        'email'=> $request->get('email'),
        'password'=>  Hash::make($request->get('password')),
        'user_type'=> $request->get('role'),
        'student_id' => $request->get('student_id'),
        'semester' => $request->get('semester'),
        'course' => $request->get('course'),
        'club_id'=> '1',
        ]);

         if ($request->hasFile('profile_photo_path')) {
        $image = $request->file('profile_photo_path');
        $name = $image->getClientOriginalName();
        $destinationPath = public_path('/uploads');
        $image->move($destinationPath, $name);
        }

       $User->save();
       toastr()->success('User has been added successfully!');
       
       return redirect('/user');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User = User::where('id', $id)->first();
        return view('user.show',compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = User::find($id);

        return view('user.edit', compact('User'));
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
      $user_id = $request->input('user_id');
      $name = $request->input('name');
      $email = $request->input('email');
      $password = $request->input('password');
      $role = $request->input('role');
      $student_id = $request->input('student_id');
      $semester = $request->input('semester');
      $course = $request->input('course');

      if ($request->hasFile('profile_photo_path')) {
      $profile_photo_path = $request->file('profile_photo_path')->getClientOriginalName();
      }


       User::where('id', $user_id)->update([
            'name' => $name,
            'email' => $email,
            'student_id' => $student_id,
            'semester' => $semester,
            'course' => $course,
            // 'password' => Hash::make($password),
            'user_type' => $role,
       ]);

       if ($request->hasFile('profile_photo_path')) {
            $image = $request->file('profile_photo_path');
            $name = $image->getClientOriginalName();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            User::where('id', $user_id)->update([
               'profile_photo_path' => $profile_photo_path,
              ]);
        }

       toastr()->success('User has been updated successfully!');
      return redirect('/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $User = User::find($id);
     $User->delete();

      toastr()->success('User has been deleted successfully!');
      return redirect('/user');
    }
}
