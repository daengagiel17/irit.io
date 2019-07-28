<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fitur;

class FiturController extends Controller
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
     public function index($portofolio_id)
    {
        $fiturs = Fitur::where('portofolio_id', $portofolio_id)->get();

        return view('fitur.index', compact(['fiturs', 'portofolio_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($portofolio_id)
    {
        return view('fitur.create', compact(['portofolio_id']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $portofolio_id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Fitur::create([
            'name' => $request->name,
            'portofolio_id' => $portofolio_id,
        ]);

        return redirect()->route('fitur.index', ["portofolio_id" => $portofolio_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($portofolio_id, $id)
    {
        $fitur = Fitur::findOrFail($id);
        $fitur->delete();

        return redirect()->route('fitur.index', ["portofolio_id" => $portofolio_id]);
    }
}
