<?php

  

namespace App\Http\Controllers;

  

use App\Models\Wisata;

use Illuminate\Http\Request;
use Auth;
  

class WisataController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $wisatas = Wisata::latest()->paginate(5);

    

        return view('wisatas.index',compact('wisatas'))

            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('wisatas.create');

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

            'name' => 'required',

            'detail' => 'required',

            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            'category' => 'required',
            
            'maps' => 'required',

        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }

    

        Wisata::create($input);

     

        return redirect()->route('wisatas.index')

                        ->with('success','Wisata created successfully.');

    }

     

    /**

     * Display the specified resource.

     *

     * @param  \App\Wisata  $wisata

     * @return \Illuminate\Http\Response

     */

    public function show(Wisata $wisata)

    {

        return view('wisatas.show',compact('wisata'));

    }

     

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Wisata  $wisata

     * @return \Illuminate\Http\Response

     */

    public function edit(Wisata $wisata)

    {

        return view('wisatas.edit',compact('wisata'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Wisata  $wisata

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Wisata $wisata)

    {

        $request->validate([

            'name' => 'required',

            'detail' => 'required',

            'category' => 'required',
            
            'maps' => 'required',
        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }else{

            unset($input['image']);

        }

          

        $wisata->update($input);

    

        return redirect()->route('wisatas.index')

                        ->with('success','Wisata updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Wisata  $wisata

     * @return \Illuminate\Http\Response

     */

    public function destroy(Wisata $wisata)

    {

        $wisata->delete();

     

        return redirect()->route('wisatas.index')

                        ->with('success','Wisata deleted successfully');

    }

}