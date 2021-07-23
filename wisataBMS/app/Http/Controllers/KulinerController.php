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
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            
            'btdays' => 'required',
            'btend' => 'required',

            'category' => 'required',
            
            'mapslat' => 'required',
            'mapslong' => 'required',

            'alamat' => 'required',

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
        if ($image1 = $request->file('image1')) {

            $destinationPath1 = 'image/';

            $profileImage1 = date('YmdHis77') . "." . $image1->getClientOriginalExtension();

            $image1->move($destinationPath1, $profileImage1);

            $input['image1'] = "$profileImage1";

        }
        if ($image2 = $request->file('image2')) {

            $destinationPath2 = 'image/';

            $profileImage2 = date('YmdHis66') . "." . $image2->getClientOriginalExtension();

            $image2->move($destinationPath2, $profileImage2);

            $input['image2'] = "$profileImage2";

        }
        if ($image3 = $request->file('image3')) {

            $destinationPath3 = 'image/';

            $profileImage3 = date('YmdHis3') . "." . $image3->getClientOriginalExtension();

            $image3->move($destinationPath3, $profileImage3);

            $input['image3'] = "$profileImage3";

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
            
            'btdays' => 'required',
            'btend' => 'required',

            'category' => 'required',
            
            'mapslat' => 'required',
            'mapslong' => 'required',

            'alamat' => 'required',
            
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
        if ($image1 = $request->file('image1')) {

            $destinationPath1 = 'image/';

            $profileImage1 = date('YmdHis77') . "." . $image1->getClientOriginalExtension();

            $image1->move($destinationPath1, $profileImage1);

            $input['image1'] = "$profileImage1";

        }else{

            unset($input['image1']);

        }
        if ($image2 = $request->file('image2')) {

            $destinationPath2 = 'image/';

            $profileImage2 = date('YmdHis66') . "." . $image2->getClientOriginalExtension();

            $image2->move($destinationPath2, $profileImage2);

            $input['image2'] = "$profileImage2";

        }else{

            unset($input['image2']);

        }
        if ($image3 = $request->file('image3')) {

            $destinationPath3 = 'image/';

            $profileImage3 = date('YmdHis3') . "." . $image3->getClientOriginalExtension();

            $image3->move($destinationPath3, $profileImage3);

            $input['image3'] = "$profileImage3";

        }else{

            unset($input['image3']);

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