<?php

namespace App\Http\Controllers;

use App\Models\Aboutus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutusController extends Controller
{
    public function show()
    {
        $data = Aboutus::latest()->get();
        return view('aboutus.index', compact('data'));
    }

    public function add()
    {
        return view('aboutus.add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image'     => 'required|image|mimes:png,jpg,jpeg',
            'title'     => 'required',
            'content'   => 'required'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/aboutus', $image->hashName());

        $data = Aboutus::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        if($data){
            //redirect dengan pesan sukses
            return redirect()->route('aboutus')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('aboutus')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function edit($id)
    {
        $data = Aboutus::find($id);
        return view('aboutus.edit', compact('data'));
    }

    public function update(Request $request, Aboutus $aboutus, $id)
    {
    $request->validate([
        'title'     => 'required',
        'content'   => 'required'
    ]);
    $data = Aboutus::findOrFail($id);

    if($request->file('image') == "") {
        $data = Aboutus::find($id);
        $data->update($request->all());
    } else {

        //hapus old image
        Storage::disk('local')->delete('public/aboutus/'.$aboutus->image);

        //upload new image
        $image = $request->file('image');
        $image->storeAs('public/aboutus', $image->hashName());

        $data->update([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

    }

    if($data){
        //redirect dengan pesan sukses
        return redirect()->route('aboutus')->with(['success' => 'Data Berhasil Diupdate!']);
    }else{
        //redirect dengan pesan error
        return redirect()->route('aboutus')->with(['error' => 'Data Gagal Diupdate!']);
    }

}
}