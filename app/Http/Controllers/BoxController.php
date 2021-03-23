<?php

namespace App\Http\Controllers;

use App\Models\Box;
use Illuminate\Http\Request;

class BoxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $boxes = Box::all(); //visos dezes
        $boxes = $boxes->sortBy('bananas'); //https://laravel.com/docs/8.x/collections
        //objektas - kolekcija
        return view('box.index', ['boxes' => $boxes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('box.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $box = new Box; //<--modelis abstraktus kodas/objektas
        $box->bananas = $request->bananas_in_box;
        //DB bananas                formos name
        $box->save();  //<-- modelis irasomas i db
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function show(Box $box)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function edit(Box $box)
    {
        return view('box.edit', ['box' => $box]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Box $box)
    {
        $box->bananas = $request->bananas_in_box;
        //DB bananas                formos name
        $box->save();  //<-- modelis irasomas i db
        return redirect()->back();
    }

    public function add(Box $box)
    {
        return view('');
    }

    public function addToBox(Request $request, Box $box)
    {
        $box->bananas = $request->bananas + $request->add;
        //DB bananas                formos name
        $box->save();  //<-- modelis irasomas i db
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Box  $box
     * @return \Illuminate\Http\Response
     */
    public function destroy(Box $box)
    {
        //
    }
}
