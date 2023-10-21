<?php

namespace App\Http\Controllers;

use App\Models\WebContactl21;
use App\Models\paito_pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class WebContactl21Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $data = $data["data"];
        // dd($data);

        // $webcontactl21 = WebContactl21::latest()
        //     ->limit(10) // Menambahkan batasan limit 10
        //     ->get();

        // $results = WebContactl21::orderBy('created_at', 'desc')->paginate(8);
        return view('web.contactl21.index', [
            'title' => 'Contact L21',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.contactl21.create', [
            'title' => 'Contact L21'
        ]);
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
                ])->get('https://l4soyk0.com/api/kontakl21/' . $ids);

                $data = $response->json()["data"];
                $contactl21[$index] = $data;
            }
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->get('https://l4soyk0.com/api/kontakl21/' . $id);

            $data = $response->json()["data"];
            $contactl21 = [$data];
        }

        return view('web.contactl21.update', [
            'title' => 'Contact L21',
            'data' => $contactl21,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
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
                ])->get('https://l4soyk0.com/api/kontakl21/' . $ids);

                $data = $response->json()["data"];
                $contactl21[$index] = $data;
            }
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer youk1llmyfvcking3x',
            ])->get('https://l4soyk0.com/api/kontakl21/' . $id);

            $data = $response->json()["data"];
            $contactl21 = [$data];
        }

        return view('web.contactl21.update', [
            'title' => 'Contact L21',
            'data' => $contactl21,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
            'disabled' => 'disabled'
        ]);
    }


    // public function data($id)
    // {
    //     $data = WebContactl21::find($id);
    //     return response()->json($data);
    // }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        // dd($id);
        foreach ($id as $index => $idx) {
            $validator = Validator::make($request->all(), [
                'livechat.*' => 'required',
                'whatsapp.*' => 'required',
                'facebook.*' => 'required',
                'telegram.*' => 'required',
                'line.*' => 'required',
                'twitter.*' => 'required',
                'instagram.*' => 'required',
                'youtube.*' => 'required',
                'linkemail.*' => 'required',
                'link.*' => 'required',
                'runningtext.*' => 'required',
                'namapromo_togel.*' => 'required',
                'promotogel.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'ket_promotogel.*' => 'required',
                'detailpromo_togel.*' => 'required',
                'namapromo_slot.*' => 'required',
                'promoslot.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'ket_promoslot.*' => 'required',
                'detailpromo_slot.*' => 'required',
                'webrekomen.*' => 'required'
            ]);
            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {

                $response = Http::withHeaders([
                    'Authorization' => 'Bearer youk1llmyfvcking3x',
                ])->get('https://l4soyk0.com/api/kontakl21/' . $idx);

                $data = $response->json()["data"];

                if ($request->hasFile('promotogel.' . $index)) {
                    $promotogel = $request->file('promotogel.' . $index);
                    $promotogelPath = $promotogel->store('datawebsite-img', 'public');


                    if (isset($request->oldpromotogel[$index])) {
                        Storage::disk('public')->delete($data["promotogel"]);
                    }
                } else {
                    $promotogelPath = $data["promotogel"];
                }

                if ($request->hasFile('promoslot.' . $index)) {
                    $promoslot = $request->file('promoslot.' . $index);
                    $promoslotPath = $promoslot->store('datawebsite-img', 'public');

                    if (isset($request->oldpromoslot[$index])) {
                        Storage::disk('public')->delete($data["promoslot"]);
                    }
                } else {
                    $promoslotPath = $data["promoslot"];
                }
                // dd($request);
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer youk1llmyfvcking3x',
                ])->put('https://l4soyk0.com/api/kontakl21/' . $idx, [
                    'livechat' => $request->livechat[$index],
                    'whatsapp' => $request->whatsapp[$index],
                    'facebook' => $request->facebook[$index],
                    'telegram' => $request->telegram[$index],
                    'line' => $request->line[$index],
                    'twitter' => $request->twitter[$index],
                    'instagram' => $request->instagram[$index],
                    'youtube' => $request->youtube[$index],
                    'linkemail' => $request->linkemail[$index],
                    // 'link' => $request->link[$index],
                    'runningtext' => $request->runningtext[$index],
                    'namapromo_togel' => $request->namapromo_togel[$index],
                    'promotogel' => $promotogelPath,
                    'ket_promotogel' => $request->ket_promotogel[$index],
                    'detailpromo_togel' => $request->detailpromo_togel[$index],
                    'namapromo_slot' => $request->namapromo_slot[$index],
                    'promoslot' => $promoslotPath,
                    'ket_promoslot' => $request->ket_promoslot[$index],
                    'detailpromo_slot' => $request->detailpromo_slot[$index],
                    'webrekomen' => $request->webrekomen[$index],

                ]);
            }
        }
        return response()->json(['success' => 'Item berhasil diupdate!']);
    }
}
