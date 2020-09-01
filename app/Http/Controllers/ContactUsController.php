<?php
/**
 * Created by PhpStorm.
 * User: nimeshjayasankha
 * Date: 7/12/20
 * Time: 1:32 PM
 */

namespace App\Http\Controllers;


class ContactUsController extends Controller
{
    public function contactUsIndex(){

        return view('contact-us',['title'=>"Contact Us"]);
    }

}