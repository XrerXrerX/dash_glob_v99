<?php

namespace App\Http\Controllers;

use App\Models\WebMediaGalleryVideo;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebMediaGalleryVideoController extends Controller
{
    public function index()
    {
        $mediagalleryvideo = WebMediaGalleryVideo::latest()->get();
        return view('web.mediagalleryvideo.index', [
            'title' => 'Web Gallery Video',
            'data' => $mediagalleryvideo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.mediagalleryvideo.create', [
            'title' => 'Web Gallery Video'
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
            'nama_video' => 'required',
            'thumb_video' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'p1080_video' => 'required|mimes:mp4,avi,mov,qt,wmv|max:100000',
            'tgl_video' => 'required'
        ]);

        $thumb_video = $request->file('thumb_video');
        $thumb_videoPath = $thumb_video->store('public/mediagalleryvideo/img');
        $thumb_videoPath = str_replace('public/', '', $thumb_videoPath);
        $validatedData['thumb_video'] = $thumb_videoPath;

        $p1080_video = $request->file('p1080_video');
        $p1080_videoPath = $p1080_video->store('public/mediagalleryvideo/video');
        $p1080_videoPath = str_replace('public/', '', $p1080_videoPath);
        $validatedData['p1080_video'] = $p1080_videoPath;

        WebMediaGalleryVideo::create($validatedData);

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
    public function show(WebMediaGalleryVideo $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebMediaGalleryVideo  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebMediaGalleryVideo::find($id);
        return response()->json($data);
    }
    public function datamediagalleryvideo($id)
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


    // public function edit(WebMediaGalleryVideo $mediagalleryvideo)
    // {
    //     dd($mediagalleryvideo);
    //     $data = getDataBo();

    //     return view('dashboard.web.mediagalleryvideo.edit', [
    //         'title' => 'WEB - Slider',

    //         'data' => $data
    //     ], compact('mediagalleryvideo'));
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

                $mediagalleryvideo[$index] = WebMediaGalleryVideo::where('id', $ids)->first();
            }
        } else {
            $mediagalleryvideo = [WebMediaGalleryVideo::where('id', $id)->first()];
        }

        return view('web.mediagalleryvideo.update', [
            'title' => 'Web Gallery Video',
            'data' => $mediagalleryvideo,
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

                $mediagalleryvideo[$index] = WebMediaGalleryVideo::where('id', $ids)->first();
            }
        } else {
            $mediagalleryvideo = [WebMediaGalleryVideo::where('id', $id)->first()];
        }

        return view('web.mediagalleryvideo.update', [
            'title' => 'Web Gallery Video',
            'data' => $mediagalleryvideo,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id.*' => 'required',
            'nama_video.*' => 'required',
            'thumb_video.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'p1080_video.*' => 'mimes:mp4,mpeg,x-m4v,quicktime|max:100000',
            'tgl_video.*' => 'required'
        ]);
        foreach ($validatedData['id'] as $index => $id) {
            $data = WebMediaGalleryVideo::find($id);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }

            $currentImagethumb_video = $data->thumb_video;
            if ($request->hasFile('thumb_video') && $request->file('thumb_video')[$index]->isValid()) {
                $thumb_video = $request->file('thumb_video')[$index];
                $thumb_videoPath = $thumb_video->store('public/mediagalleryvideo/img');
                $thumb_videoPath = str_replace('public/', '', $thumb_videoPath);
                $data->thumb_video = $thumb_videoPath;

                if (!empty($currentImagethumb_video)) {
                    Storage::delete('public/' . $currentImagethumb_video);
                }
            }

            $currentImagep1080_video = $data->p1080_video;
            if ($request->hasFile('p1080_video') && $request->file('p1080_video')[$index]->isValid()) {
                $p1080_video = $request->file('p1080_video')[$index];
                $p1080_videoPath = $p1080_video->store('public/mediagalleryvideo/video');
                $p1080_videoPath = str_replace('public/', '', $p1080_videoPath);
                $data->p1080_video = $p1080_videoPath;

                if (!empty($currentImagep1080_video)) {
                    Storage::delete('public/' . $currentImagep1080_video);
                }
            }

            $data->nama_video = $validatedData['nama_video'][$index];
            $data->tgl_video = $validatedData['tgl_video'][$index];

            $data->save();
        }

        return response()->json(['success' => 'Data updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebMediaGalleryVideo  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $data = WebMediaGalleryVideo::find($id);

            if ($data) {
                $thumb_video = $data->thumb_video;
                Storage::delete('public/' . $thumb_video);

                $p1080_video = $data->p1080_video;
                Storage::delete('public/' . $p1080_video);

                // Hapus data dari database
                $data->delete();
            }
        }

        return response()->json(['success' => true]);
    }

    public function searchindex()
    {
        $data = WebMediaGalleryVideo::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
