<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Portofolio;
use File;

class PortofolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['show', 'all']);
    }

    public function all()
    {
        $portofolios = Portofolio::all()->sortByDesc('created_at');

        return view('portofolio.all', compact(['portofolios']));
    }

    public function index()
    {
        $portofolios = Portofolio::all()->sortByDesc('created_at');

        return view('portofolio.index', compact(['portofolios']));
    }

    public function show($id)
    {
        $portofolio = Portofolio::with('fitur', 'gambar')->findOrFail($id);

        return view('portofolio.show', compact(['portofolio']));
    }

    public function create()
    {
        return view('portofolio.create');
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
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'type' => 'required',
            'client' => 'required',
            'waktu_pengerjaan' => 'required',
            'image' => 'required|image',
        ]);


        $portofolio = Portofolio::create([
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'type' => $request->type,
            'gif' => $request->gif,
            'client' => $request->client,
            'waktu_pengerjaan' => $request->waktu_pengerjaan,
        ]);

        $dir = 'img/portofolio/' . $portofolio->id . '/';
        $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
        $fileName = str_random() . '.' . $extension; // rename image
        $request->file('image')->move($dir, $fileName);
        $portofolio->image = $dir . $fileName;
        $portofolio->save();

        return redirect()->route('portofolio.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $portofolio = Portofolio::findOrFail($id);

        return view('portofolio.edit', compact(['portofolio']));
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
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'type' => 'required',
            'client' => 'required',
            'waktu_pengerjaan' => 'required',
        ]);

        $portofolio = Portofolio::findOrFail($id);

        if ($request->hasFile('image')) {
            $dir = 'img/portofolio/' . $id . '/';
            if (($portofolio->image != '') && (File::exists($portofolio->image))){
                File::delete($portofolio->image);
            }
            $extension = strtolower($request->file('image')->getClientOriginalExtension()); // get image extension
            $fileName = str_random() . '.' . $extension; // rename image
            $request->file('image')->move($dir, $fileName);
            $portofolio->image = $dir . $fileName;
        }

        $portofolio->title = $request->title;
        $portofolio->description = $request->description;
        $portofolio->link = $request->link;
        $portofolio->type = $request->type;
        $portofolio->gif = $request->gif;
        $portofolio->client = $request->client;
        $portofolio->waktu_pengerjaan = $request->waktu_pengerjaan;
        $portofolio->save();

        return redirect()->route('portofolio.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $portofolio = portofolio::findOrFail($id);
        $portofolio->delete();

        return redirect()->route('portofolio.index');
    }
}
