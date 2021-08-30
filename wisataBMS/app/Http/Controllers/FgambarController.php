<?php

namespace App\Http\Controllers;

use App\Models\Fgambar;
use Illuminate\Http\Request;

class FgambarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([

            'fasilitas_id' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }
    

        Fgambar::create($input);

     

        return redirect()->back()->with('success','Image added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fgambar  $fgambar
     * @return \Illuminate\Http\Response
     */
    public function show(Fgambar $fgambar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fgambar  $fgambar
     * @return \Illuminate\Http\Response
     */
    public function edit(Fgambar $fgambar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Fgambar  $fgambar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fgambar $fgambar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fgambar  $fgambar
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fgambar $fgambar)
    {
        $fgambar->delete();

     

        return redirect()->back()->with('message', 'Gambar Berhasil Dihapus');

    }
}
