<?php

  

namespace App\Http\Controllers;

  

use App\Models\Kuliner;

use Illuminate\Http\Request;
use Auth;
  

class KulinerController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $kuliners = Kuliner::latest()->paginate(999);

    

        return view('kuliners.index',compact('kuliners'))

            ->with('i', (request()->input('page', 1) - 1) * 999);

    }

   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('kuliners.create');

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

    

        Kuliner::create($input);

     

        return redirect()->route('kuliners.index')

                        ->with('success','Kuliner created successfully.');

    }

     

    /**

     * Display the specified resource.

     *

     * @param  \App\Kuliner  $kuliner

     * @return \Illuminate\Http\Response

     */

    public function show(Kuliner $kuliner)

    {

        return view('kuliners.show',compact('kuliner'));

    }

     

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Kuliner  $kuliner

     * @return \Illuminate\Http\Response

     */

    public function edit(Kuliner $kuliner)

    {

        return view('kuliners.edit',compact('kuliner'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Kuliner  $kuliner

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Kuliner $kuliner)

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

          

        $kuliner->update($input);

    

        return redirect()->route('kuliners.index')

                        ->with('success','Kuliner updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Kuliner  $kuliner

     * @return \Illuminate\Http\Response

     */

    public function destroy(Kuliner $kuliner)

    {

        $kuliner->delete();

     

        return redirect()->route('kuliners.index')

                        ->with('success','Kuliner deleted successfully');

    }

}