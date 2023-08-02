<?php

namespace App\Http\Controllers;

use App\Models\datapeminjam;
use Illuminate\Http\Request;
use Termwind\Components\Dd;

class ControllerPeminjam extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('peminjam',[


        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function showall()
    {
        return view('showall',[
            "showpeminjam" => datapeminjam::all()
        ]);
    }



    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $data =[
            'nim' =>$request ->nim,
            'nama' => $request ->nama,
            'kelas' => $request ->kelas,
            'idbuku' => $request ->idbuku,
            'namabuku' => $request ->namabuku,
            'pengarang' => $request ->pengarang,


        ];

        datapeminjam::create($data);

        return redirect('showall');

    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('showid',[
            'id'=>datapeminjam::find($id)
        ]);
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

        $peminjam = datapeminjam::findOrfail($id);

        $data =[
            'id' => $request ->id,
            'nama' => $request ->nama,
            'kelas' => $request ->kelas
        ];

        $peminjam->update($data);

        return redirect('showall');





        // datapeminjam::update($data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peminjam = datapeminjam::findOrfail($id);


        $peminjam->delete($id);
        return redirect('showall');
    }


    public function showdata()
    {
       return redirect('showall');
    }

    public function datapeminjam()
    {
        return view('datapeminjam',[

            'showpeminjam' => datapeminjam::all()

        ]);
    }

    public function databuku(){
        return view('databuku',[
            'showpeminjam' => datapeminjam::all()
        ]);
    }

}
