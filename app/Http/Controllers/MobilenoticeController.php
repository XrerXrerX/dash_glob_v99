<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class MobilenoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/mobilenotice');

        $data = $response->json();
        $data = $data["data"];
        return view('mobilenotice.index', [
            'title' => 'Mobile Notice',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobilenotice.create', [
            'title' => 'Mobile Notice'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'website' => 'required',
            'info' => 'required',
            'switch' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()], 400);
        } else {
            $data = [
                'website' => $request->input('website'),
                'info' => $request->input('info'),
                'switch' => $request->input('switch') ? '1' : '0'
            ];

            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->post('https://l4soyk0.com/api/mobilenotice/', $data);

            if ($response->successful()) {
                return response()->json(['message' => 'Data berhasil disimpan.'], 200);
            } else {
                return response()->json(['message' => 'Gagal menyimpan data.'], 500);
            }
        }
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
                ])->get('https://l4soyk0.com/api/mobilenotice/' . $ids);

                $data = $response->json()["data"];
                $mobilenotice[$index] = $data;
            }
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->get('https://l4soyk0.com/api/mobilenotice/' . $id);

            $data = $response->json()["data"];
            $mobilenotice = [$data];
        }
        return view('mobilenotice.update', [
            'title' => 'Mobile Notice',
            'data' => $mobilenotice,
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
                ])->get('https://l4soyk0.com/api/mobilenotice/' . $ids);

                $data = $response->json()["data"];
                $mobilenotice[$index] = $data;
            }
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->get('https://l4soyk0.com/api/mobilenotice/' . $id);

            $data = $response->json()["data"];
            $mobilenotice = [$data];
        }
        return view('mobilenotice.update', [
            'title' => 'Mobile Notice',
            'data' => $mobilenotice,
            'disabled' => 'disabled'
        ]);
    }


    // public function data($id)
    // {
    //     $data = Mobilenotice::find($id);
    //     return response()->json($data);
    // }

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
                'info' => $data["info"][$index],
                'switch' => isset($data["switch"][$index]) ? '1' : '0'
            ];
            $validator = Validator::make($alldata, [
                'website' => 'required',
                'info' => 'required',
                'switch' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {

                Http::withHeaders([
                    'Authorization' => 'Bearer youk1llmyfvcking3x',
                ])->put('https://l4soyk0.com/api/mobilenotice/' . $idx, [
                    'website' => $alldata["website"],
                    'info' => $alldata["info"],
                    'switch' => $alldata["switch"]
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
            ])->delete('https://l4soyk0.com/api/mobilenotice/' . $id);

            if ($response->successful()) {
            } else {
                return response()->json(['message' => 'Gagal menghapus data.'], 500);
            }
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}
