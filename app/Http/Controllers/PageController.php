<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        //echo "This is about page";
        return view('pages.about',['message' => "This is about us message", 'name' => "Akshay shah"]);
    }
    public function service() {
        echo "This is services Page";
    }
    public function home() {
        echo "This is home page";
    }
    public function profile() {
        echo "This is profile page";
    }
    public function contactus() {
        echo "This is contact us";
    }


}
