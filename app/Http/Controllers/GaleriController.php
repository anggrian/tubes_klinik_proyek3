<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galery = DB::table('galery')->get();
        return view('Backend.galeri.galeri', compact('galery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $tujuan_upload = 'assets/uploads/galeri';
            $nama_file = time() . "." . $foto->getClientOriginalExtension();
            $foto->move($tujuan_upload, $nama_file);
            DB::table('galery')->insert([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama_file
            ]);
            // dd($request->all());
        }

        return redirect('galeri');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galery = Galery::findorfail($id);
        return view('Backend.galeri.edit_galeri', compact('galery'));
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
        if ($request->hasFile('foto')) {
            $foto = $request->file('foto');
            $tujuan_upload = 'assets/uploads/galeri';
            $nama_file = time() . "." . $foto->getClientOriginalExtension();
            $foto->move($tujuan_upload, $nama_file);
            DB::table('galery')->where('id', $request->id)->update([
                'judul' => $request->judul,
                'deskripsi' => $request->deskripsi,
                'foto' => $nama_file
            ]);
        }
        return redirect('galeri');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $foto = Galery::find($id);
        // $foto = "assets/uploads/galeri" . $foto->foto;

        // // dd($foto);

        // if (file_exists(public_path($foto))) {
        //     //File::delete($foto);
        //     unlink(public_path($foto));
        // }
        $foto->delete();
        return redirect('galeri');
    }
}
