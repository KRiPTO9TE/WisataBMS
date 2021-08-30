<?php

namespace App\Http\Controllers;

use App\Models\Kmenu;
use Illuminate\Http\Request;
use Auth;
class KmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kmenus = Kmenu::latest()->paginate(5);

    

        return view('kmenus.index',compact('kmenus'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kmenus.create');
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
        
        'kuliner_id' => 'required',
        
        'judul' => 'required',

        'detail' => 'required',

        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();

  

        if ($image = $request->file('image')) {

            $destinationPath = 'image/';

            $profileImage = date('YmdHis1menu') . "." . $image->getClientOriginalExtension();

            $image->move($destinationPath, $profileImage);

            $input['image'] = "$profileImage";

        }
        Kmenu::create($input);

    
        
        return redirect()->back()->with('message', 'Menu Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('kmenus.show',compact('kmenu'));
    }
    public function kasih()

    {

        $kmenu =Kmenu::all();
        return view('kuliners.show',['kmenus'=>$kmenu]);
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Kmenu $kmenu)
    {
        return view('kmenus.edit',compact('kmenu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kmenu $kmenu)
    {
        $request->validate([

            'kuliner_id' => 'required',
        
            'judul' => 'required',

            'detail' => 'required',
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

          

        $kmenu->update($input);

    

        return redirect()->back()->with('message', 'Menu Berhasil Diupdate');
    }

    public function destroy(Kmenu $kmenu)
    {
        $kmenu->delete();

     

        return redirect()->back()->with('message', 'Menu Berhasil Dihapus');

    }
}
