<?php

  

namespace App\Http\Controllers;

  

use App\Models\Kuliner;
use App\Models\Kmenu;
use App\Models\Kgambar;
use Illuminate\Http\Request;
use Auth;
  

class KulinerController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $pagination  = 10;
            $kuliners   = Kuliner::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('name', 'ilike', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc')->paginate($pagination);
        
            $kuliners->appends($request->only('keyword'));
        
            return view('kuliners.index', [
                'name'    => 'Kuliners',
                'kuliners' => $kuliners,
            ])->with('i', ($request->input('page', 1) - 1) * $pagination);

    }
    public function userindex(Request $request)

    {

        $pagination  = 9999;
            $kuliners   = Kuliner::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('name', 'ilike', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc')->paginate($pagination);
        
            $kuliners->appends($request->only('keyword'));
        
            return view('kuliner', [
                'name'    => 'Kuliners',
                'kuliners' => $kuliners,
            ])->with('i', ($request->input('page', 1) - 1) * $pagination);

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

        $kmenu =Kmenu::all();
        $kgambar =kgambar::all();
        return view('kuliners.show',['kmenus'=>$kmenu,'kgambars'=>$kgambar],compact('kuliner'));

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
    public function tambahmenu(Kuliner $id)

    {

        return view('kmenus.create',compact('id'));
        
    }
    public function showmenu(Kuliner $kuliner)

    {
        $kmenu =Kmenu::all();
        return view('kuliners.show',['kmenus'=>$kmenu],compact('kuliner'));
        
    }

    public function lihatmenu(Kuliner $kuliner)

    {

        return view('kmenus.index', [
            'kuliner' => $kuliner
        ]);

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