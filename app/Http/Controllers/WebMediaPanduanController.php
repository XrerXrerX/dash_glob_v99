<?php

namespace App\Http\Controllers;

use App\Models\WebMediaPanduan;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebMediaPanduanController extends Controller
{
    public function index()
    {
        $mediapanduan = WebMediaPanduan::latest()->get();
        return view('web.mediapanduan.index', [
            'title' => 'Web Panduan',
            'data' => $mediapanduan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.mediapanduan.create', [
            'title' => 'Web Panduan'
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
            'panduan_judul' => 'required',
            'panduan_gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'p1080_panduan' => 'required|mimetypes:video/mp4|max:100000',
            'panduan_desk' => 'required',
            'panduan_tgl' => 'required'

        ]);

        $panduan_gambar = $request->file('panduan_gambar');
        $panduan_gambarPath = $panduan_gambar->store('public/mediapanduan/img');
        $panduan_gambarPath = str_replace('public/', '', $panduan_gambarPath);
        $validatedData['panduan_gambar'] = $panduan_gambarPath;


        $p1080_panduan = $request->file('p1080_panduan');
        $p1080_panduanPath = $p1080_panduan->store('public/mediapanduan/video');
        $p1080_panduanPath = str_replace('public/', '', $p1080_panduanPath);
        $validatedData['p1080_panduan'] = $p1080_panduanPath;

        WebMediaPanduan::create($validatedData);

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
    public function show(WebMediaPanduan $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebMediaPanduan  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebMediaPanduan::find($id);
        return response()->json($data);
    }
    public function datamediapanduan($id)
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


    // public function edit(WebMediaPanduan $mediapanduan)
    // {
    //     dd($mediapanduan);
    //     $data = getDataBo();

    //     return view('dashboard.web.mediapanduan.edit', [
    //         'title' => 'WEB - Slider',

    //         'data' => $data
    //     ], compact('mediapanduan'));
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

                $mediapanduan[$index] = WebMediaPanduan::where('id', $ids)->first();
            }
        } else {
            $mediapanduan = [WebMediaPanduan::where('id', $id)->first()];
        }

        return view('web.mediapanduan.update', [
            'title' => 'Web Panduan',
            'data' => $mediapanduan,
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

                $mediapanduan[$index] = WebMediaPanduan::where('id', $ids)->first();
            }
        } else {
            $mediapanduan = [WebMediaPanduan::where('id', $id)->first()];
        }

        return view('web.mediapanduan.update', [
            'title' => 'Web Panduan',
            'data' => $mediapanduan,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id.*' => 'required',
            'panduan_judul.*' => 'required',
            'panduan_gambar.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'p1080_panduan.*' => 'mimes:mp4,mpeg,x-m4v,quicktime|max:100000',
            'panduan_desk.*' => 'required',
            'panduan_tgl.*' => 'required'
        ]);
        foreach ($validatedData['id'] as $index => $id) {
            $data = WebMediaPanduan::find($id);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }

            $currentImagepanduan_gambar = $data->panduan_gambar;
            if ($request->hasFile('panduan_gambar') && $request->file('panduan_gambar')[$index]->isValid()) {
                $panduan_gambar = $request->file('panduan_gambar')[$index];
                $panduan_gambarPath = $panduan_gambar->store('public/mediapanduan/img');
                $panduan_gambarPath = str_replace('public/', '', $panduan_gambarPath);
                $data->panduan_gambar = $panduan_gambarPath;

                if (!empty($currentImagepanduan_gambar)) {
                    Storage::delete('public/' . $currentImagepanduan_gambar);
                }
            }

            $currentImagep1080_panduan = $data->p1080_panduan;
            if ($request->hasFile('p1080_panduan') && $request->file('p1080_panduan')[$index]->isValid()) {
                $p1080_panduan = $request->file('p1080_panduan')[$index];
                $p1080_panduanPath = $p1080_panduan->store('public/mediapanduan/video');
                $p1080_panduanPath = str_replace('public/', '', $p1080_panduanPath);
                $data->p1080_panduan = $p1080_panduanPath;

                if (!empty($currentImagep1080_panduan)) {
                    Storage::delete('public/' . $currentImagep1080_panduan);
                }
            }

            $data->panduan_judul = $validatedData['panduan_judul'][$index];
            $data->panduan_desk = $validatedData['panduan_desk'][$index];
            $data->panduan_tgl = $validatedData['panduan_tgl'][$index];

            $data->save();
        }

        return response()->json(['success' => 'Data updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebMediaPanduan  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $data = WebMediaPanduan::find($id);

            if ($data) {
                $panduan_gambar = $data->panduan_gambar;
                Storage::delete('public/' . $panduan_gambar);

                $p1080_panduan = $data->p1080_panduan;
                Storage::delete('public/' . $p1080_panduan);

                // Hapus data dari database
                $data->delete();
            }
        }

        return response()->json(['success' => true]);
    }

    public function searchindex()
    {
        $data = WebMediaPanduan::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
