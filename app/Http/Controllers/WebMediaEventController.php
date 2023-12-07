<?php

namespace App\Http\Controllers;

use App\Models\WebMediaEvent;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebMediaEventController extends Controller
{
    public function index()
    {
        $mediaevent = WebMediaEvent::latest()->get();
        return view('web.mediaevent.index', [
            'title' => 'web Stream',
            'data' => $mediaevent
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.mediaevent.create', [
            'title' => 'web Stream'
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
            'nama_event' => 'required',
            'gambar_event' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'durasi_event' => 'required',
            'desk_event' => 'required',
            'tgl_event' => 'required'
        ]);

        // $gambar_event = $request->file('gambar_event');
        // $gambar_eventPath = $gambar_event->store('public/mediaevent-img');
        // $gambar_eventPath = str_replace('public/', '', $gambar_eventPath);

        // $validatedData['gambar_event'] = $gambar_eventPath;

        if ($request->hasFile('gambar_event') && $request->file('gambar_event')->isValid()) {
            $gambar_event = $request->file('gambar_event');
            $gambar_eventPath = 'public/front/img/media/event';
            $gambar_eventPath = str_replace('public/', '', $gambar_eventPath);
            $randomString = Str::random(10);
            $extension = $gambar_event->getClientOriginalExtension();
            $gambar_eventName = $randomString . '.' . $extension;
            $gambar_event->move($gambar_eventPath, $gambar_eventName);
            $validatedData['gambar_event'] = $gambar_eventName;

            if (!empty($currentImage_gambar_event)) {
                $imagePath_gambar_event = 'front/img/media/event/' . $currentImage_gambar_event;
                if (file_exists($imagePath_gambar_event)) {
                    unlink($imagePath_gambar_event);
                }
            }
        }

        WebMediaEvent::create($validatedData);

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
    public function show(WebMediaEvent $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebMediaEvent  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebMediaEvent::find($id);
        return response()->json($data);
    }
    public function datamediaevent($id)
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


    // public function edit(WebMediaEvent $mediaevent)
    // {
    //     dd($mediaevent);
    //     $data = getDataBo();

    //     return view('dashboard.web.mediaevent.edit', [
    //         'title' => 'WEB - Slider',

    //         'data' => $data
    //     ], compact('mediaevent'));
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

                $mediaevent[$index] = WebMediaEvent::where('id', $ids)->first();
            }
        } else {
            $mediaevent = [WebMediaEvent::where('id', $id)->first()];
        }

        return view('web.mediaevent.update', [
            'title' => 'web Stream',
            'data' => $mediaevent,
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

                $mediaevent[$index] = WebMediaEvent::where('id', $ids)->first();
            }
        } else {
            $mediaevent = [WebMediaEvent::where('id', $id)->first()];
        }

        return view('web.mediaevent.update', [
            'title' => 'web Stream',
            'data' => $mediaevent,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id.*' => 'required',
            'nama_event.*' => 'required',
            'gambar_event.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'durasi_event.*' => 'required',
            'desk_event.*' => 'required',
            'tgl_event.*' => 'required'
        ]);
        foreach ($validatedData['id'] as $index => $id) {
            $data = WebMediaEvent::find($id);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }

            $currentImage_gambar_event = $data->gambar_event;

            if ($request->hasFile('gambar_event') && $request->file('gambar_event')[$index]->isValid()) {
                $gambar_event = $request->file('gambar_event')[$index];
                $gambar_eventPath = 'public/front/img/media/event';
                $gambar_eventPath = str_replace('public/', '', $gambar_eventPath);
                $randomString = Str::random(10);
                $extension = $gambar_event->getClientOriginalExtension();
                $gambar_eventName = $randomString . '.' . $extension;
                $gambar_event->move($gambar_eventPath, $gambar_eventName);
                $data->gambar_event = $gambar_eventName;

                if (!empty($currentImage_gambar_event)) {
                    $imagePath_gambar_event = 'front/img/media/event/' . $currentImage_gambar_event;
                    if (file_exists($imagePath_gambar_event)) {
                        unlink($imagePath_gambar_event);
                    }
                }
            }
            $data->nama_event = $validatedData['nama_event'][$index];
            $data->durasi_event = $validatedData['durasi_event'][$index];
            $data->desk_event = $validatedData['desk_event'][$index];
            $data->tgl_event = $validatedData['tgl_event'][$index];

            $data->save();
        }

        return response()->json(['success' => 'Data updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebMediaEvent  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $data = WebMediaEvent::find($id);

            if ($data) {
                $gambar_event = $data->gambar_event;

                if (!empty($gambar_event)) {
                    $imagePath_gambar_event = 'front/img/media/event/' . $gambar_event;
                    if (file_exists($imagePath_gambar_event)) {
                        unlink($imagePath_gambar_event);
                    }
                }

                // Hapus data dari database
                $data->delete();
            }
        }

        return response()->json(['success' => true]);
    }

    public function searchindex()
    {
        $data = WebMediaEvent::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
