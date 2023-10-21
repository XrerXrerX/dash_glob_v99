<?php

namespace App\Http\Controllers;

use App\Models\WebMediaSlider;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebMediaSliderController extends Controller
{
    public function index()
    {
        $mediaslider = WebMediaSlider::latest()->get();
        return view('web.mediaslider.index', [
            'title' => 'Web Slider',
            'data' => $mediaslider
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.mediaslider.create', [
            'title' => 'Web Slider'
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
            'pasaran' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'jamtutup' => 'required',
            'jamresult' => 'required',
            'link' => 'required',
            'webrekomendasi' => 'required',
            'prediksi' => 'required',
            'harilibur' => 'required|array',
            'senin' => 'nullable',
            'selasa' => 'nullable',
            'rabu' => 'nullable',
            'kamis' => 'nullable',
            'jumat' => 'nullable',
            'sabtu' => 'nullable',
            'minggu' => 'nullable',
        ]);

        $logo = $request->file('logo');
        $logoPath = $logo->store('public/mediaslider-img');
        $logoPath = str_replace('public/', '', $logoPath);

        $validatedData['logo'] = $logoPath;

        $validatedData['harilibur'] = implode(", ", $validatedData['harilibur']);
        $validatedData['switch'] = isset($validatedData['switch']) ? 1 : 0;
        $validatedData['senin'] = isset($validatedData['senin']) ? 1 : 0;
        $validatedData['selasa'] = isset($validatedData['selasa']) ? 1 : 0;
        $validatedData['rabu'] = isset($validatedData['rabu']) ? 1 : 0;
        $validatedData['kamis'] = isset($validatedData['kamis']) ? 1 : 0;
        $validatedData['jumat'] = isset($validatedData['jumat']) ? 1 : 0;
        $validatedData['sabtu'] = isset($validatedData['sabtu']) ? 1 : 0;
        $validatedData['minggu'] = isset($validatedData['minggu']) ? 1 : 0;

        WebMediaSlider::create($validatedData);

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
    public function show(WebMediaSlider $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebMediaSlider  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebMediaSlider::find($id);
        return response()->json($data);
    }
    public function datamediaslider($id)
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


    // public function edit(WebMediaSlider $mediaslider)
    // {
    //     dd($mediaslider);
    //     $data = getDataBo();

    //     return view('dashboard.web.mediaslider.edit', [
    //         'title' => 'WEB - Slider',

    //         'data' => $data
    //     ], compact('mediaslider'));
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

                $mediaslider[$index] = WebMediaSlider::where('id', $ids)->first();
            }
        } else {
            $mediaslider = [WebMediaSlider::where('id', $id)->first()];
        }

        return view('web.mediaslider.update', [
            'title' => 'Web Slider',
            'data' => $mediaslider,
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

                $mediaslider[$index] = WebMediaSlider::where('id', $ids)->first();
            }
        } else {
            $mediaslider = [WebMediaSlider::where('id', $id)->first()];
        }

        return view('web.mediaslider.update', [
            'title' => 'Web Slider',
            'data' => $mediaslider,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'id' => 'required|array',
            'car_news' => 'nullable|array',
            'car_news.*' => 'image|max:2048',
            'car_event' => 'nullable|array',
            'car_event.*' => 'image|max:2048',
            'car_stream' => 'nullable|array',
            'car_stream.*' => 'image|max:2048',
            'car_panduan' => 'nullable|array',
            'car_panduan.*' => 'image|max:2048',
            'car_gallery' => 'nullable|array',
            'car_gallery.*' => 'image|max:2048',
            'card_news' => 'nullable|array',
            'card_news.*' => 'image|max:2048',
            'card_event' => 'nullable|array',
            'card_event.*' => 'image|max:2048',
            'card_stream' => 'nullable|array',
            'card_stream.*' => 'image|max:2048',
            'card_panduan' => 'nullable|array',
            'card_panduan.*' => 'image|max:2048',
            'card_gallery' => 'nullable|array',
            'card_gallery.*' => 'image|max:2048',
        ]);

        foreach ($validatedData['id'] as $index => $id) {
            $data = WebMediaSlider::find($id);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }

            $currentImage_car_news = $data->car_news;
            $currentImage_car_event = $data->car_event;
            $currentImage_car_stream = $data->car_stream;
            $currentImage_car_panduan = $data->car_panduan;
            $currentImage_car_gallery = $data->car_gallery;
            $currentImage_card_news = $data->card_news;
            $currentImage_card_event = $data->card_event;
            $currentImage_card_stream = $data->card_stream;
            $currentImage_card_panduan = $data->card_panduan;
            $currentImage_card_gallery = $data->card_gallery;


            if ($request->hasFile('car_news') && $request->file('car_news')[$index]->isValid()) {
                $car_news = $request->file('car_news')[$index];
                $car_newsPath = $car_news->store('public/mediaslider-img');
                $car_newsPath = str_replace('public/', '', $car_newsPath);
                $data->car_news = $car_newsPath;

                if (!empty($currentImage_car_news)) {
                    Storage::delete('public/' . $currentImage_car_news);
                }
            }

            if ($request->hasFile('car_event') && $request->file('car_event')[$index]->isValid()) {
                $car_event = $request->file('car_event')[$index];
                $car_eventPath = $car_event->store('public/mediaslider-img');
                $car_eventPath = str_replace('public/', '', $car_eventPath);
                $data->car_event = $car_eventPath;

                if (!empty($currentImage_car_event)) {
                    Storage::delete('public/' . $currentImage_car_event);
                }
            }

            if ($request->hasFile('car_stream') && $request->file('car_stream')[$index]->isValid()) {
                $car_stream = $request->file('car_stream')[$index];
                $car_streamPath = $car_stream->store('public/mediaslider-img');
                $car_streamPath = str_replace('public/', '', $car_streamPath);
                $data->car_stream = $car_streamPath;

                if (!empty($currentImage_car_stream)) {
                    Storage::delete('public/' . $currentImage_car_stream);
                }
            }

            if ($request->hasFile('car_panduan') && $request->file('car_panduan')[$index]->isValid()) {
                $car_panduan = $request->file('car_panduan')[$index];
                $car_panduanPath = $car_panduan->store('public/mediaslider-img');
                $car_panduanPath = str_replace('public/', '', $car_panduanPath);
                $data->car_panduan = $car_panduanPath;

                if (!empty($currentImage_car_panduan)) {
                    Storage::delete('public/' . $currentImage_car_panduan);
                }
            }

            if ($request->hasFile('car_gallery') && $request->file('car_gallery')[$index]->isValid()) {
                $car_gallery = $request->file('car_gallery')[$index];
                $car_galleryPath = $car_gallery->store('public/mediaslider-img');
                $car_galleryPath = str_replace('public/', '', $car_galleryPath);
                $data->car_gallery = $car_galleryPath;

                if (!empty($currentImage_car_gallery)) {
                    Storage::delete('public/' . $currentImage_car_gallery);
                }
            }

            if ($request->hasFile('card_news') && $request->file('card_news')[$index]->isValid()) {
                $card_news = $request->file('card_news')[$index];
                $card_newsPath = $card_news->store('public/mediaslider-img');
                $card_newsPath = str_replace('public/', '', $card_newsPath);
                $data->card_news = $card_newsPath;

                if (!empty($currentImage_card_news)) {
                    Storage::delete('public/' . $currentImage_card_news);
                }
            }

            if ($request->hasFile('card_event') && $request->file('card_event')[$index]->isValid()) {
                $card_event = $request->file('card_event')[$index];
                $card_eventPath = $card_event->store('public/mediaslider-img');
                $card_eventPath = str_replace('public/', '', $card_eventPath);
                $data->card_event = $card_eventPath;

                if (!empty($currentImage_card_event)) {
                    Storage::delete('public/' . $currentImage_card_event);
                }
            }

            if ($request->hasFile('card_stream') && $request->file('card_stream')[$index]->isValid()) {
                $card_stream = $request->file('card_stream')[$index];
                $card_streamPath = $card_stream->store('public/mediaslider-img');
                $card_streamPath = str_replace('public/', '', $card_streamPath);
                $data->card_stream = $card_streamPath;

                if (!empty($currentImage_card_stream)) {
                    Storage::delete('public/' . $currentImage_card_stream);
                }
            }

            if ($request->hasFile('card_panduan') && $request->file('card_panduan')[$index]->isValid()) {
                $card_panduan = $request->file('card_panduan')[$index];
                $card_panduanPath = $card_panduan->store('public/mediaslider-img');
                $card_panduanPath = str_replace('public/', '', $card_panduanPath);
                $data->card_panduan = $card_panduanPath;

                if (!empty($currentImage_card_panduan)) {
                    Storage::delete('public/' . $currentImage_card_panduan);
                }
            }

            if ($request->hasFile('card_gallery') && $request->file('card_gallery')[$index]->isValid()) {
                $card_gallery = $request->file('card_gallery')[$index];
                $card_galleryPath = $card_gallery->store('public/mediaslider-img');
                $card_galleryPath = str_replace('public/', '', $card_galleryPath);
                $data->card_gallery = $card_galleryPath;

                if (!empty($currentImage_card_gallery)) {
                    Storage::delete('public/' . $currentImage_card_gallery);
                }
            }

            $data->save();
        }
        return response()->json(['success' => 'Data updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebMediaSlider  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $data = WebMediaSlider::find($id);

            if ($data) {
                $logo = $data->logo;

                // Hapus file logo dari penyimpanan
                Storage::delete('public/' . $logo);

                // Hapus data dari database
                $data->delete();
            }
        }

        return response()->json(['success' => true]);
    }



    public function searchindex()
    {
        $data = WebMediaSlider::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
