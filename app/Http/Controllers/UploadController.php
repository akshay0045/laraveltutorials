<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function __invoke() {
        $this->message();
    }
    
    public function message() {
        echo "Hello i am invocked of singleton controller";
    }
}
