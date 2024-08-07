<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    //
    function listAllContacts(){
        $contacts=DB::table('contacts')->get();
        return view('index',['contacts'=>$contacts]);
    }
}
