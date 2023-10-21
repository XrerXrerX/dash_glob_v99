<?php

namespace App\Http\Controllers;

use App\Models\WebMediaStream;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebMediaStreamController extends Controller
{
    public function index()
    {
        $mediastream = WebMediaStream::latest()->get();
        return view('web.mediastream.index', [
            'title' => 'Web Stream',
            'data' => $mediastream
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.mediastream.create', [
            'title' => 'Web Stream'
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
            'strm_nama' => 'required',
            'strm_foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'strm_youtube' => 'required',
            'strm_facebook' => 'required',
            'strm_instagram' => 'required',
            'strm_tiktok' => 'required',
            'bannerup' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'webrekomen' => 'required'
        ]);

        $strm_foto = $request->file('strm_foto');
        $strm_fotoPath = $strm_foto->store('public/mediastream-img');
        $strm_fotoPath = str_replace('public/', '', $strm_fotoPath);
        $validatedData['strm_foto'] = $strm_fotoPath;


        $bannerup = $request->file('bannerup');
        $bannerupPath = $bannerup->store('public/mediastream-img');
        $bannerupPath = str_replace('public/', '', $bannerupPath);
        $validatedData['bannerup'] = $bannerupPath;

        WebMediaStream::create($validatedData);

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
    public function show(WebMediaStream $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebMediaStream  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebMediaStream::find($id);
        return response()->json($data);
    }
    public function datamediastream($id)
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


    // public function edit(WebMediaStream $mediastream)
    // {
    //     dd($mediastream);
    //     $data = getDataBo();

    //     return view('dashboard.web.mediastream.edit', [
    //         'title' => 'WEB - Slider',

    //         'data' => $data
    //     ], compact('mediastream'));
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

                $mediastream[$index] = WebMediaStream::where('id', $ids)->first();
            }
        } else {
            $mediastream = [WebMediaStream::where('id', $id)->first()];
        }

        return view('web.mediastream.update', [
            'title' => 'Web Stream',
            'data' => $mediastream,
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

                $mediastream[$index] = WebMediaStream::where('id', $ids)->first();
            }
        } else {
            $mediastream = [WebMediaStream::where('id', $id)->first()];
        }

        return view('web.mediastream.update', [
            'title' => 'Web Stream',
            'data' => $mediastream,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id.*' => 'required',
            'strm_nama.*' => 'required',
            'strm_foto.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'strm_youtube.*' => 'required',
            'strm_facebook.*' => 'required',
            'strm_instagram.*' => 'required',
            'strm_tiktok.*' => 'required',
            'bannerup.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'webrekomen.*' => 'required',
        ]);

        foreach ($validatedData['id'] as $index => $id) {
            $data = WebMediaStream::find($id);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }

            $currentImagestrm_foto = $data->strm_foto;
            if ($request->hasFile('strm_foto') && $request->file('strm_foto')[$index]->isValid()) {
                $strm_foto = $request->file('strm_foto')[$index];
                $strm_fotoPath = $strm_foto->store('public/mediastream-img');
                $strm_fotoPath = str_replace('public/', '', $strm_fotoPath);
                $data->strm_foto = $strm_fotoPath;

                if (!empty($currentImagestrm_foto)) {
                    Storage::delete('public/' . $currentImagestrm_foto);
                }
            }

            $currentImagebannerup = $data->bannerup;
            if ($request->hasFile('bannerup') && $request->file('bannerup')[$index]->isValid()) {
                $bannerup = $request->file('bannerup')[$index];
                $bannerupPath = $bannerup->store('public/mediastream-img');
                $bannerupPath = str_replace('public/', '', $bannerupPath);
                $data->bannerup = $bannerupPath;

                if (!empty($currentImagebannerup)) {
                    Storage::delete('public/' . $currentImagebannerup);
                }
            }

            $data->strm_nama = $validatedData['strm_nama'][$index];
            $data->strm_youtube = $validatedData['strm_youtube'][$index];
            $data->strm_facebook = $validatedData['strm_facebook'][$index];
            $data->strm_instagram = $validatedData['strm_instagram'][$index];
            $data->strm_tiktok = $validatedData['strm_tiktok'][$index];
            $data->webrekomen = $validatedData['webrekomen'][$index];

            $data->save();
        }

        return response()->json(['success' => 'Data updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebMediaStream  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $data = WebMediaStream::find($id);

            if ($data) {
                $strm_foto = $data->strm_foto;
                Storage::delete('public/' . $strm_foto);

                $bannerup = $data->bannerup;
                Storage::delete('public/' . $bannerup);

                // Hapus data dari database
                $data->delete();
            }
        }

        return response()->json(['success' => true]);
    }

    public function searchindex()
    {
        $data = WebMediaStream::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
