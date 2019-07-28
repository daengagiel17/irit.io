<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimoni;
use File;

class TestimoniController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $testimonis = Testimoni::all();

        return view('testimoni.index', compact(['testimonis']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
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
            'testimoni' => 'required',
            'position' => 'required',
            'photo' => 'required|image',
        ]);

        $dir = 'img/testimoni/';
        $extension = strtolower($request->file('photo')->getClientOriginalExtension()); // get photo extension
        $fileName = str_random() . '.' . $extension; // rename photo
        $request->file('photo')->move($dir, $fileName);

        Testimoni::create([
            'name' => $request->name,
            'testimoni' => $request->testimoni,
            'position' => $request->position,
            'photo' => $dir . $fileName,
        ]);

        return redirect()->route('testimoni.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);

        return view('testimoni.edit', compact(['testimoni']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'testimoni' => 'required',
            'position' => 'required',
        ]);

        $testimoni = Testimoni::findOrFail($id);

        if ($request->hasFile('photo')) {
            $dir = 'img/testimoni/';
            if (($testimoni->photo != '') && (File::exists($testimoni->photo))){
                File::delete($testimoni->photo);
            }
            $extension = strtolower($request->file('photo')->getClientOriginalExtension()); // get photo extension
            $fileName = str_random() . '.' . $extension; // rename photo
            $request->file('photo')->move($dir, $fileName);
            $testimoni->photo = $dir . $fileName;
        }

        $testimoni->name = $request->name;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->position = $request->position;
        $testimoni->save();

        return redirect()->route('testimoni.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();

        return redirect()->route('testimoni.index');
    }
}
