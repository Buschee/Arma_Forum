<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beitraege;
use Mockery\Exception;

class BeitraegeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $beitraege = Beitraege::all();
        return view('beitraege.index')->with('beitraege', $beitraege);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('beitraege.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,
            [
                'creator' => 'required|max:150',
                'inhalt' => 'required|max:160',
                'title' => 'required|max:150'
            ]
        );
        try {
            //
            $beitraege = new Beitraege();
            $beitraege->creator = $request->creator;
            $beitraege->inhalt = $request->inhalt;
            $beitraege->title = $request->title;
            $beitraege->save();

            return redirect()->route('beitraege.index')->with('beitraege', Beitraege::all());
        }
        catch (Exception $ex){
            return redirect()->route('beitraege.index')->withErrors('Error, you cannot create the object');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $beitraege = Beitraege::find($id);
        if ($beitraege != null) {
        return view('beitraege.show')->with('beitraege', $beitraege);
        }
        else{
            return redirect()->route('beitraege.index')->withErrors('No Post with the id='.$id.'found');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $beitraege = Beitraege::find($id);
        if ($beitraege != null) {
            return view('beitraege.edit')->with('beitraege', $beitraege);
        }
        else{
            return redirect()->route('beitraege.index')->withErrors('No Post with the id='.$id.'found');
        }

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
        $this->validate($request,
        [
            'creator' => 'required|max:150',
            'inhalt' => 'required|max:160',
            'title' => 'required|max:150'
        ]
            );
        $beitrag = Beitraege::find($id);
        $beitrag->creator = $request->creator;
        $beitrag->inhalt = $request->inhalt;
        $beitrag->title = $request->title;
        $beitrag->save();
        return redirect()->route('beitraege.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $beitraege = Beitraege::find($id);
        if ($beitraege != null) {
            $beitraege->delete();
            return redirect()->route('beitraege.index');
        }
        else{
            return redirect()->route('beitraege.index')->withErrors('No Post with the id='.$id.'found');
        }

    }
}
