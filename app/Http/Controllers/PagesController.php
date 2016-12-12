<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
        # process variable data or params
        # talk to the model
        # recieve from the model
        # compile or process data from the model if needed
        # pass that data to the correct view
        return view('pages.welcome');
    }
    public function getAbout() {
        return view('pages.about');
    }
    public function getContact() {
        return view('pages.contact');
    }
}
