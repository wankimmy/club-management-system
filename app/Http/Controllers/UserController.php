<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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
        $User = User::get();
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
        'name'=>'required',
        'email'=> 'required',
        'password' => 'required',
        'role' => 'required'
        ]);
    
         $User = new User([
        'name' => $request->get('name'),
        'email'=> $request->get('email'),
        'password'=>  Hash::make($request->get('password')),
        'user_type'=> $request->get('role'),
        ]);

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

       User::where('id', $user_id)->update([
            'name' => $name,
            'email' => $email,
            // 'password' => Hash::make($password),
            'user_type' => $role,
       ]);

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
