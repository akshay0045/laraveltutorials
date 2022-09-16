<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function data()
    {
        return [
            [
                "title" => "Akshay shah",
                "comments" => "Techevin Solution LLP",
            ],
            [
                "title" => "Yash shah",
                "comments" => "Vraj bhoomi international school",
            ]
        ];
    }
}
