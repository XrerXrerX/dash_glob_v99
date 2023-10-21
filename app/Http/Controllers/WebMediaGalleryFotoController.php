<?php

namespace App\Http\Controllers;

use App\Models\WebMediaGalleryFoto;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebMediaGalleryFotoController extends Controller
{
    public function index()
    {
        $mediagalleryfoto = WebMediaGalleryFoto::latest()->get();
        return view('web.mediagalleryfoto.index', [
            'title' => 'Web Gallery Foto',
            'data' => $mediagalleryfoto
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.mediagalleryfoto.create', [
            'title' => 'Web Gallery Foto'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_foto' => 'required',
            'foto_url' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'tgl_foto' => 'required'
        ]);

        $foto_url = $request->file('foto_url');
        $foto_urlPath = $foto_url->store('public/mediagalleryfoto-img');
        $foto_urlPath = str_replace('public/', '', $foto_urlPath);
        $validatedData['foto_url'] = $foto_urlPath;


        WebMediaGalleryFoto::create($validatedData);

        $response = [
            'status' => 'success',
            'message' => 'Data berhasil disimpan.'
        ];

        return response()->json($response, 200);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bo  $bo
     * @return \Illuminate\Http\Response
     */
    public function show(WebMediaGalleryFoto $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebMediaGalleryFoto  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebMediaGalleryFoto::find($id);
        return response()->json($data);
    }
    public function datamediagalleryfoto($id)
    {
        $data = ApkBo::find($id);
        $bonama = '';
        if ($data['nama'] == 'arwana') {
            $bonama = 'ARWANATOTO';
        } else if ($data['nama'] == 'jeep') {
            $bonama = 'JEEPTOTO';
        } else if ($data['nama'] == 'doyantoto') {
            $bonama = 'DOYANTOTO';
        } else if ($data['nama'] == 'tstoto') {
            $bonama = 'TSTOTO';
        } else if ($data['nama'] == 'arta') {
            $bonama = 'ARTA4D';
        } else if ($data['nama'] == 'neon') {
            $bonama = 'NEON4D';
        } else if ($data['nama'] == 'zara') {
            $bonama = 'ZARA4D';
        } else if ($data['nama'] == 'roma') {
            $bonama = 'ROMA4D';
        } else if ($data['nama'] == 'nero') {
            $bonama = 'NERO4D';
        } else if ($data['nama'] == 'duo') {
            $bonama = 'JEEPTOTO';
        } else if ($data['nama'] == 'toke') {
            $bonama = 'DUOGAMING';
        }
        $data = [
            'id' => $data['id'],
            'nama' => $bonama,
            'site' => $data['site']
        ];
        return response()->json($data);
    }


    // public function edit(WebMediaGalleryFoto $mediagalleryfoto)
    // {
    //     dd($mediagalleryfoto);
    //     $data = getDataBo();

    //     return view('dashboard.web.mediagalleryfoto.edit', [
    //         'title' => 'WEB - Slider',

    //         'data' => $data
    //     ], compact('mediagalleryfoto'));
    // }

    public function edit($id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $mediagalleryfoto[$index] = WebMediaGalleryFoto::where('id', $ids)->first();
            }
        } else {
            $mediagalleryfoto = [WebMediaGalleryFoto::where('id', $id)->first()];
        }

        return view('web.mediagalleryfoto.update', [
            'title' => 'Web Gallery Foto',
            'data' => $mediagalleryfoto,
            'disabled' => ''
        ]);
    }

    public function views($id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $mediagalleryfoto[$index] = WebMediaGalleryFoto::where('id', $ids)->first();
            }
        } else {
            $mediagalleryfoto = [WebMediaGalleryFoto::where('id', $id)->first()];
        }

        return view('web.mediagalleryfoto.update', [
            'title' => 'Web Gallery Foto',
            'data' => $mediagalleryfoto,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id.*' => 'required',
            'nama_foto.*' => 'required',
            'foto_url.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'tgl_foto.*' => 'required'
        ]);
        foreach ($validatedData['id'] as $index => $id) {
            $data = WebMediaGalleryFoto::find($id);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }

            $currentImagefoto_url = $data->foto_url;
            if ($request->hasFile('foto_url') && $request->file('foto_url')[$index]->isValid()) {
                $foto_url = $request->file('foto_url')[$index];
                $foto_urlPath = $foto_url->store('public/mediagalleryfoto-img');
                $foto_urlPath = str_replace('public/', '', $foto_urlPath);
                $data->foto_url = $foto_urlPath;

                if (!empty($currentImagefoto_url)) {
                    Storage::delete('public/' . $currentImagefoto_url);
                }
            }
            $data->nama_foto = $validatedData['nama_foto'][$index];
            $data->tgl_foto = $validatedData['tgl_foto'][$index];

            $data->save();
        }

        return response()->json(['success' => 'Data updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebMediaGalleryFoto  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $data = WebMediaGalleryFoto::find($id);

            if ($data) {
                $foto_url = $data->foto_url;
                Storage::delete('public/' . $foto_url);


                // Hapus data dari database
                $data->delete();
            }
        }

        return response()->json(['success' => true]);
    }

    public function searchindex()
    {
        $data = WebMediaGalleryFoto::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
