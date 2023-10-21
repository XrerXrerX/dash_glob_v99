<?php

namespace App\Http\Controllers;

use App\Models\WebJadwalPools;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebJadwalPoolsController extends Controller
{
    public function index()
    {
        $jadwalpools = WebJadwalPools::latest()->get();
        return view('web.jadwalpools.index', [
            'title' => 'Tabel Jadwal Pools',
            'data' => $jadwalpools
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('web.jadwalpools.create', [
            'title' => 'WEB - Jadwal Pools'
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
        $logoPath = $logo->store('public/jadwalpools-img');
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

        WebJadwalPools::create($validatedData);

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
    public function show(WebJadwalPools $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebJadwalPools  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebJadwalPools::find($id);
        return response()->json($data);
    }
    public function datajadwalpools($id)
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


    // public function edit(WebJadwalPools $jadwalpools)
    // {
    //     dd($jadwalpools);
    //     $data = getDataBo();

    //     return view('dashboard.web.jadwalpools.edit', [
    //         'title' => 'WEB - Tabel JAdwal Pools',

    //         'data' => $data
    //     ], compact('jadwalpools'));
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

                $jadwalpools[$index] = WebJadwalPools::where('id', $ids)->first();
            }
        } else {
            $jadwalpools = [WebJadwalPools::where('id', $id)->first()];
        }

        return view('web.jadwalpools.update', [
            'title' => 'Bo',
            'data' => $jadwalpools,
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

                $jadwalpools[$index] = WebJadwalPools::where('id', $ids)->first();
            }
        } else {
            $jadwalpools = [WebJadwalPools::where('id', $id)->first()];
        }

        return view('web.jadwalpools.update', [
            'title' => 'Bo',
            'data' => $jadwalpools,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $request->harilibur = array_map(function ($item) {
            return implode(", ", $item);
        }, $request->harilibur);

        $request->harilibur = array_combine(range(0, count($request->harilibur) - 1), $request->harilibur);

        $validatedData = $request->validate([
            'id' => 'required|array',
            'pasaran' => 'required|array',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300|array',
            'jamtutup' => 'required|array',
            'jamresult' => 'required|array',
            'link' => 'required|array',
            'webrekomendasi' => 'required|array',
            'prediksi' => 'required|array',
            'switch' => 'nullable',
            'harilibur' => 'nullable|array',
            'senin' => 'nullable',
            'selasa' => 'nullable',
            'rabu' => 'nullable',
            'kamis' => 'nullable',
            'jumat' => 'nullable',
            'sabtu' => 'nullable',
            'minggu' => 'nullable',
        ]);

        $validatedData['switch'] = array_filter($validatedData['switch'], function ($value) {
            return $value !== "on";
        });
        $validatedData['switch'] = array_values($validatedData['switch']);

        $validatedData['senin'] = array_filter($validatedData['senin'], function ($value) {
            return $value !== "on";
        });
        $validatedData['senin'] = array_values($validatedData['senin']);

        $validatedData['selasa'] = array_filter($validatedData['selasa'], function ($value) {
            return $value !== "on";
        });
        $validatedData['selasa'] = array_values($validatedData['selasa']);

        $validatedData['rabu'] = array_filter($validatedData['rabu'], function ($value) {
            return $value !== "on";
        });
        $validatedData['rabu'] = array_values($validatedData['rabu']);

        $validatedData['kamis'] = array_filter($validatedData['kamis'], function ($value) {
            return $value !== "on";
        });
        $validatedData['kamis'] = array_values($validatedData['kamis']);

        $validatedData['jumat'] = array_filter($validatedData['jumat'], function ($value) {
            return $value !== "on";
        });
        $validatedData['jumat'] = array_values($validatedData['jumat']);

        $validatedData['sabtu'] = array_filter($validatedData['sabtu'], function ($value) {
            return $value !== "on";
        });
        $validatedData['sabtu'] = array_values($validatedData['sabtu']);

        $validatedData['minggu'] = array_filter($validatedData['minggu'], function ($value) {
            return $value !== "on";
        });
        $validatedData['minggu'] = array_values($validatedData['minggu']);


        foreach ($validatedData['id'] as $index => $id) {
            $data = WebJadwalPools::find($id);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }

            $data->pasaran = $validatedData['pasaran'][$index];

            $currentImage = $data->logo;

            if ($request->hasFile('logo') && $request->file('logo')[$index]->isValid()) {
                $logo = $request->file('logo')[$index];
                $logoPath = $logo->store('public/jadwalpools');
                $logoPath = str_replace('public/', '', $logoPath);
                $data->logo = $logoPath;

                if (!empty($currentImage)) {
                    Storage::delete('public/' . $currentImage);
                }
            }

            $data->jamtutup = $validatedData['jamtutup'][$index];
            $data->jamresult = $validatedData['jamresult'][$index];
            $data->link = $validatedData['link'][$index];
            $data->webrekomendasi = $validatedData['webrekomendasi'][$index];
            $data->prediksi = $validatedData['prediksi'][$index];
            $data->switch = $validatedData['switch'][$index];

            $data->harilibur = implode(", ", $validatedData['harilibur'][$index] ?? []);
            $data->senin = $validatedData['senin'][$index];

            $data->selasa = $validatedData['selasa'][$index];
            $data->rabu = $validatedData['rabu'][$index];
            $data->kamis = $validatedData['kamis'][$index];
            $data->jumat = $validatedData['jumat'][$index];
            $data->sabtu = $validatedData['sabtu'][$index];
            $data->minggu = $validatedData['minggu'][$index];

            $data->save();
        }

        return response()->json(['success' => 'Data updated successfully.']);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebJadwalPools  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $data = WebJadwalPools::find($id);

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
        $data = WebJadwalPools::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
