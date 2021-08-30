<?php

  

namespace App\Http\Controllers;

  

use App\Models\Fasil;
use App\Models\Fgambar;
use Illuminate\Http\Request;
use Auth;
  

class FasilController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $pagination  = 10;
            $fasils   = Fasil::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('name', 'ilike', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc')->paginate($pagination);
        
            $fasils->appends($request->only('keyword'));
        
            return view('fasils.index', [
                'name'    => 'Fasils',
                'fasils' => $fasils,
            ])->with('i', ($request->input('page', 1) - 1) * $pagination);

    }
    public function userindex(Request $request)

    {

        $pagination  = 9999;
            $fasils   = Fasil::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('name', 'ilike', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc')->paginate($pagination);
        
            $fasils->appends($request->only('keyword'));
        
            return view('fasil', [
                'name'    => 'Fasils',
                'fasils' => $fasils,
            ])->with('i', ($request->input('page', 1) - 1) * $pagination);

    }
   

    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('fasils.create');

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
            
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            'detail' => 'required',

            'category' => 'required',
            
            'mapslat' => 'required',
            'mapslong' => 'required',

            'alamat' => 'required',

            'bukday' => 'required',
            'bukend' => 'required',
            'ttpday' => 'required',
            'ttpend' => 'required',

            'fasi' => 'required',
            
            'web' => 'required',
            'telefon' => 'required',

        ]);

  

        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }
        

        Fasil::create($input);

     

        return redirect()->route('fasils.index')

                        ->with('success','Fasil created successfully.');

    }

     

    /**

     * Display the specified resource.

     *

     * @param  \App\Fasil  $fasil

     * @return \Illuminate\Http\Response

     */

    public function show(Fasil $fasil)

    {

        $fgambar =Fgambar::all();
        return view('fasils.show',['fgambars'=>$fgambar],compact('fasil')) ->with('i');

    }

     

    /**

     * Show the form for editing the specified resource.

     *

     * @param  \App\Fasil  $fasil

     * @return \Illuminate\Http\Response

     */

    public function edit(Fasil $fasil)

    {

        return view('fasils.edit',compact('fasil'));

    }

    

    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  \App\Fasil  $fasil

     * @return \Illuminate\Http\Response

     */

    public function update(Request $request, Fasil $fasil)

    {

        $request->validate([

            'name' => 'required',
            

            'detail' => 'required',

            'category' => 'required',
            
            'mapslat' => 'required',
            'mapslong' => 'required',

            'alamat' => 'required',

            'bukday' => 'required',
            'bukend' => 'required',
            'ttpday' => 'required',
            'ttpend' => 'required',

            'fasi' => 'required',
            
            'web' => 'required',
            'telefon' => 'required',

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
        

        $fasil->update($input);

    

        return redirect()->route('fasils.index')

                        ->with('success','Fasil updated successfully');

    }

  

    /**

     * Remove the specified resource from storage.

     *

     * @param  \App\Fasil  $fasil

     * @return \Illuminate\Http\Response

     */

    public function destroy(Fasil $fasil)

    {

        $fasil->delete();

     

        return redirect()->route('fasils.index')

                        ->with('success','Fasil deleted successfully');

    }

}