<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $sayi=23;
        return view('admin.users.index',compact('sayi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function home(){
        return view('home');
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');



    }





}
