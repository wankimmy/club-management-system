<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewProgramController extends Controller
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


        return view('viewprogram.index');

    }
}
