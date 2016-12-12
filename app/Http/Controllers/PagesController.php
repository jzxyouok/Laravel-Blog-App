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
        $first = 'cora';
        $last = 'chou';
        $full = $first . "  " .$last;
        //return view('pages.about')->with("fullname", $full);
        $email = 'phchou220@gmail.com';
        //return view('pages.about')->withFullname($full)->withEmail($email);
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $full;
        return view('pages.about')->withData($data);
    }
    public function getContact() {
        return view('pages.contact');
    }
}
