<?php

namespace App\Http\Controllers;

use App\Models\BannerModal;
use App\Models\paito_pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class BannerModalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/bannermodal');

        $data = $response->json();
        $data = $data["data"];
        return view('bannermodal.index', [
            'title' => 'Banner Modal',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bannermodal.create', [
            'title' => 'Banner Modal'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'website' => 'required',
            'gambar' => 'required',
            // 'switch_active' => 'required', // Validate as boolean
            // 'button_switch' => 'required', // Validate as boolean
            'link' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()], 400);
        } else {
            $data = [
                'website' => $request->input('website'),
                'gambar' => $request->input('gambar'),
                'switch_active' => $request->input('switch_active') ? '1' : '0',
                'button_switch' => $request->input('button_switch') ? '1' : '0',
                'link' => $request->input('link'),
                'judul' => $request->input('judul'),
                'deskripsi' => $request->input('deskripsi'),
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->post('https://l4soyk0.com/api/bannermodal/', $data);

            if ($response->successful()) {
                return response()->json(['message' => 'Data berhasil disimpan.'], 200);
            } else {
                return response()->json(['message' => 'Gagal menyimpan data.'], 500);
            }
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(BannerModal $BannerModal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer youk1llmyfvcking3x',
                ])->get('https://l4soyk0.com/api/bannermodal/' . $ids);

                $data = $response->json()["data"];
                $bannermodal[$index] = $data;
            }
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->get('https://l4soyk0.com/api/bannermodal/' . $id);

            $data = $response->json()["data"];
            $bannermodal = [$data];
        }
        return view('bannermodal.update', [
            'title' => 'Banner Modal',
            'data' => $bannermodal,
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

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer youk1llmyfvcking3x',
                ])->get('https://l4soyk0.com/api/bannermodal/' . $ids);

                $data = $response->json()["data"];
                $bannermodal[$index] = $data;
            }
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->get('https://l4soyk0.com/api/bannermodal/' . $id);

            $data = $response->json()["data"];
            $bannermodal = [$data];
        }
        return view('bannermodal.update', [
            'title' => 'Banner Modal',
            'data' => $bannermodal,
            'disabled' => 'disabled'
        ]);
    }


    public function data($id)
    {
        $data = BannerModal::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $data = $request->all();
        foreach ($id as $index => $idx) {
            $alldata = [
                "_token" => $data["_token"],
                'website' => $data["website"][$index],
                'gambar' => $data["gambar"][$index],
                'switch_active' => isset($data["switch_active"][$index]) ? '1' : '0',
                'button_switch' => isset($data["button_switch"][$index]) ? '1' : '0',
                'link' => $data["link"][$index],
                'judul' => $data["judul"][$index],
                'deskripsi' => $data["deskripsi"][$index]
            ];
            $validator = Validator::make($alldata, [
                'website' => 'required',
                'gambar' => 'required',
                'switch_active' => 'required',
                'button_switch' => 'required',
                'link' => 'required',
                'judul' => 'required',
                'deskripsi' => 'required',
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {

                Http::withHeaders([
                    'Authorization' => 'Bearer youk1llmyfvcking3x',
                ])->put('https://l4soyk0.com/api/bannermodal/' . $idx, [
                    'website' => $alldata["website"],
                    'gambar' => $alldata["gambar"],
                    'switch_active' => $alldata["switch_active"],
                    'button_switch' => $alldata["button_switch"],
                    'link' => $alldata["link"],
                    'judul' => $alldata["judul"],
                    'deskripsi' => $alldata["deskripsi"]
                ]);
            }
        }
        return response()->json(['success' => 'Item berhasil diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->delete('https://l4soyk0.com/api/bannermodal/' . $id);

            if ($response->successful()) {
            } else {
                return response()->json(['message' => 'Gagal menghapus data.'], 500);
            }
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}
