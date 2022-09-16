<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "title" => "required|alpha|between:2,4",//alpha_dash,alpha_num
            "password" => "bail|confirmed|required",
            "comments" => "required",
            "check" => "required|array",
            "photo" => "bail|file|mimes:jpg,png,csv|between:2,4|required",
            "tos" => "accepted",
            "website" => "required|active_url",
            "start_date" => "required|date",
            "end_date" => "required|date|after_or_equal:start_date",
            "email" => "required|email:filter",
            "message" => "required|ends_with:thanks,Thanks"
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Please  enter a :attribute value",
            "comments.required" => "Please enter a :attribute value",
            "check.required" => "please select any one :attribute value",
            "photo.required" => "please select any :attribute",
            "tos.accepted" => "please select :attribute",
            "website.required" => "please enter :attribute",
            "start_date.required" => "please enter :attribute",
            "end_date.required" => "please enter :attribute"
        ];
    }

    public function attributes()
    {
        return [
            
            "check" => "study",
            "photo" => "photo",
            "tos" => "Term and condition",
            "website" => "website address",
            "start_date" =>"Start Date",
            "end_date" =>"End Date"

        ];
    }
}
