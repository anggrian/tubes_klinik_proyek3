<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $login = Auth::user();
        $abouts = DB::table('abouts')->get();
        return view('Backend_admin.Contents.Page.about', compact('login', 'abouts'));
    }
    public function frontend_about()
    {
        // $tentang = DB::table('abouts')->get();
        // return view('Backend_admin.Contents.Page.about', ['abouts' => $tentang]);
        $tentang_frontend = About::latest('id')->first();
        return view('Frontend.About_Us.frontend_about', ['abouts' => $tentang_frontend]);
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
        if ($request->hasFile('img_about')) {
            $img_about = $request->file('img_about');
            $tujuan_upload = 'assets/uploads/';
            $nama_file = time() . "." . $img_about->getClientOriginalExtension();
            $img_about->move($tujuan_upload, $nama_file);
            DB::table('abouts')->insert([
                'title_about' => $request->title_about,
                'description_about' => $request->description_about,
                'img_about' => $nama_file
            ]);
            // dd($request->all());
        }

        return redirect('tentang');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $login = Auth::user();
        $abouts = About::findorfail($id);
        return view('Backend_admin.Contents.Page.about_edit', compact('login', 'abouts'));
    }

    // {
    //     // $tentang = About::find($request->id);
    //     $tentang = About::where('id', $request->id)->first();
    //     return view('Backend_admin.Contents.Page.about_edit', compact('tentang'));
    // }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        // DB::table('abouts')->where('id', $request->id)->update([
        //     'title_about' => $request->title_about,
        //     'description_about' => $request->description_about,
        //     'img_about'     => $request->img_about
        // ]);

        if ($request->hasFile('img_about')) {
            $img_about = $request->file('img_about');
            $tujuan_upload = 'assets/uploads/';
            $nama_file = time() . "." . $img_about->getClientOriginalExtension();
            $img_about->move($tujuan_upload, $nama_file);
            DB::table('abouts')->where('id', $request->id)->update([
                'title_about' => $request->title_about,
                'description_about' => $request->description_about,
                'img_about' => $nama_file
            ]);
        }

        // $data = About::find($request->id);
        // if ($request->hasFile('img_about')) {
        //     $foto = $request->file('img_about');
        //     $tujuan_upload = 'assets/uploads/';
        //     $nama_file = time() . "." . $foto->getClientOriginalExtension();
        //     $foto->move($tujuan_upload, $nama_file);
        //     $input = [
        //         'title_about' => $request->title_about,
        //         'description_about' => $request->description_about,
        //         'img_about' => $nama_file
        //     ];
        // } else {
        //     $input = [
        //         'title_about' => $request->title_about,
        //         'description_about' => $request->description_about,
        //         'img_about' => null
        //     ];
        // }
        // $action = $data->update($input);
        // if($action) {
        // }
        return redirect('tentang');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy($about)
    {
        $tentang = About::find($about);
        $image_path = "assets/uploads/" . $tentang->img_about;

        //dd($tentang);

        if (file_exists(public_path($image_path))) {
            //File::delete($image_path);
            unlink(public_path($image_path));
        }
        $tentang->delete();
        return redirect('tentang');
    }
}
