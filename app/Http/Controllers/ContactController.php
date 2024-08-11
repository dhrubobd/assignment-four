<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->sort=="datea"){
            $contacts  = Contact::orderBy('created_at','asc')->get();
        }else if($request->sort=="dated"){
            $contacts  = Contact::orderBy('created_at','desc')->get();
        }else if($request->sort=="namea"){
            $contacts  = Contact::orderBy('name','asc')->get();
        }else if($request->sort=="named"){
            $contacts  = Contact::orderBy('name','desc')->get();
        }else if($request->search!=null){
            $contacts = Contact::where('name','LIKE',"%$request->search%")->orWhere('email','LIKE',"%$request->search%")->get();
        }else{
            $contacts  = Contact::all();
        }
        return view('index',['contacts'=>$contacts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $insert = Contact::create($request->input());
         if($insert != null){
            $contacts  = Contact::all();
            return view('index',['contacts'=>$contacts]);
        } 
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $contact = Contact::find($request->id);
        return view('edit',['contact'=>$contact]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Contact::find($request->id)->update($request->input());
        $contacts  = Contact::all();
        return view('index',['contacts'=>$contacts]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $delete = Contact::where('id',$request->id)->delete();
        if($delete==1){
            $contacts  = Contact::all();
            return view('index',['contacts'=>$contacts]);
        }
    }
}
