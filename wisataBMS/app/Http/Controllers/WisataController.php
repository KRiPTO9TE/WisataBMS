<?php

  

namespace App\Http\Controllers;

  

use App\Models\Wisata;
use App\Models\Wgambar;
use Cornford\Googlmapper\Facades\MapperFacade as Mapper;
use Illuminate\Http\Request;
use Auth;
  

class WisataController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {
        
            $pagination  = 10;
            $wisatas   = Wisata::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('name', 'ilike', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc')->paginate($pagination);
        
            $wisatas->appends($request->only('keyword'));
        
            return view('wisatas.index', [
                'name'    => 'Wisatas',
                'wisatas' => $wisatas,
            ])->with('i', ($request->input('page', 1) - 1) * $pagination);
    }
    
    public function userindex(Request $request)

    {
        
            $pagination  = 9999;
            $wisatas   = Wisata::when($request->keyword, function ($query) use ($request) {
                $query
                ->where('name', 'ilike', "%{$request->keyword}%");
            })->orderBy('created_at', 'desc')->paginate($pagination);
        
            $wisatas->appends($request->only('keyword'));
        
            return view('wisata', [
                'name'    => 'Wisatas',
                'wisatas' => $wisatas,
            ])->with('i', ($request->input('page', 1) - 1) * $pagination);
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

            'tktaday' => 'required',
            'tktaend' => 'required',
            'tktdday' => 'required',
            'tktdend' => 'required',

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
        
        $input['fasi'] = $request->input('fasi');

        Wisata::create($input);

        return redirect()->route('wisatas.index')

                        ->with('success','Wisata created successfully.');

    }

    public function fileStore(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $image->move(public_path('images'),$imageName);
        
        $imageUpload = new ImageUpload();
        $imageUpload->filename = $imageName;
        $imageUpload->save();
        
        return response()->json(['success'=>$imageName]);
    }
    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageUpload::where('filename',$filename)->delete();
        $path=public_path().'/images/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }

    /**

     * Display the specified resource.

     *

     * @param  \App\Wisata  $wisata

     * @return \Illuminate\Http\Response

     */

    public function show(Wisata $wisata)

    {
        $wgambar =Wgambar::all();
        return view('wisatas.show',['wgambars'=>$wgambar],compact('wisata')) ->with('i');

    }
    public function tambahgambar(Wisata $id)

    {

        return view('wgambar.create',compact('id'));
        
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
            
            'mapslat' => 'required',

            'alamat' => 'required',

            'bukday' => 'required',
            'bukend' => 'required',
            'ttpday' => 'required',
            'ttpend' => 'required',

            'tktaday' => 'required',
            'tktaend' => 'required',
            'tktdday' => 'required',
            'tktdend' => 'required',

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