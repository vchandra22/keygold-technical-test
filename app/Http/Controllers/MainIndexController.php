<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainIndexController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['pageTitle'] = 'Beranda';

        return view('frontend.home.home', $data);
    }
}
