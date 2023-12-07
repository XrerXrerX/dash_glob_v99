<?php

namespace App\Http\Controllers;

use App\Models\WebJadwalPools;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;
use Illuminate\Support\Str;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebJadwalPoolsController extends Controller
{
    public function index()
    {
        $jadwalpools = WebJadwalPools::get();
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
            'harilibur' => 'nullable|array',
            'senin' => 'nullable',
            'selasa' => 'nullable',
            'rabu' => 'nullable',
            'kamis' => 'nullable',
            'jumat' => 'nullable',
            'sabtu' => 'nullable',
            'minggu' => 'nullable',
        ]);

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoPath = 'public/front/img/pools/logo';
            $logoPath = str_replace('public/', '', $logoPath);

            $randomString = Str::random(10);
            $extension = $logo->getClientOriginalExtension();
            $logoName = $randomString . '.' . $extension;

            $logo->move($logoPath, $logoName);

            $validatedData['logo'] = $logoName;
        } else {
            $validatedData['logo'] = 'null';
        }
        $validatedData['harilibur'] = isset($request->harilibur) ? implode(", ", $validatedData['harilibur']) : '';
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
        if (isset($request->harilibur)) {
            $request->harilibur = array_map(function ($item) {
                return implode(", ", $item);
            }, $request->harilibur);

            $request->harilibur = array_combine(range(0, count($request->harilibur) - 1), $request->harilibur);
        }

        $request->switch = array_filter($request->switch, function ($value) {
            return $value !== "on";
        });
        $request->switch = array_values($request->switch);

        $request->senin = array_filter($request->senin, function ($value) {
            return $value !== "on";
        });
        $request->senin = array_values($request->senin);

        $request->selasa = array_filter($request->selasa, function ($value) {
            return $value !== "on";
        });
        $request->selasa = array_values($request->selasa);

        $request->rabu = array_filter($request->rabu, function ($value) {
            return $value !== "on";
        });
        $request->rabu = array_values($request->rabu);

        $request->kamis = array_filter($request->kamis, function ($value) {
            return $value !== "on";
        });
        $request->kamis = array_values($request->kamis);

        $request->jumat = array_filter($request->jumat, function ($value) {
            return $value !== "on";
        });
        $request->jumat = array_values($request->jumat);

        $request->sabtu = array_filter($request->sabtu, function ($value) {
            return $value !== "on";
        });
        $request->sabtu = array_values($request->sabtu);

        $request->minggu = array_filter($request->minggu, function ($value) {
            return $value !== "on";
        });
        $request->minggu = array_values($request->minggu);

        $alldata = [];
        foreach ($request->all()["id"] as $key => $id) {

            $alldata[$key]['id'] = $id;
            $alldata[$key]['pasaran'] = $request->pasaran[$key];
            $alldata[$key]['logo'] = isset($request->logo[$key]) ? $request->logo[$key] : '';
            $alldata[$key]['jamtutup'] = $request->jamtutup[$key];
            $alldata[$key]['jamresult'] = $request->jamresult[$key];
            $alldata[$key]['link'] = $request->link[$key];
            $alldata[$key]['webrekomendasi'] = $request->webrekomendasi[$key];
            $alldata[$key]['prediksi'] = $request->prediksi[$key];
            $alldata[$key]['switch'] = $request->switch[$key] ?? null;
            $alldata[$key]['harilibur'] = $request->harilibur[$key] ?? null;
            $alldata[$key]['senin'] = $request->senin[$key] ?? null;
            $alldata[$key]['selasa'] = $request->selasa[$key] ?? null;
            $alldata[$key]['rabu'] = $request->rabu[$key] ?? null;
            $alldata[$key]['kamis'] = $request->kamis[$key] ?? null;
            $alldata[$key]['jumat'] = $request->jumat[$key] ?? null;
            $alldata[$key]['sabtu'] = $request->sabtu[$key] ?? null;
            $alldata[$key]['minggu'] = $request->minggu[$key] ?? null;
        }
        foreach ($alldata as $index => $validatedData) {

            $validatedData = Validator::make($validatedData, [
                'id' => 'required',
                'pasaran' => 'required',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300',
                'jamtutup' => 'required',
                'jamresult' => 'required',
                'link' => 'required',
                'webrekomendasi' => 'required',
                'prediksi' => 'required',
                'switch' => 'nullable',
                'harilibur' => 'nullable',
                'senin' => 'nullable',
                'selasa' => 'nullable',
                'rabu' => 'nullable',
                'kamis' => 'nullable',
                'jumat' => 'nullable',
                'sabtu' => 'nullable',
                'minggu' => 'nullable',
            ]);

            $data = WebJadwalPools::find($validatedData->getData()['id']);

            if (!$data) {
                return response()->json(['error' => 'Data not found.'], 404);
            }
            $data->pasaran = $validatedData->getData()['pasaran'];

            $currentImage = $data->logo;

            if ($validatedData->getData()['logo'] != "") {
                $logo = $request->file('logo')[$index];
                $logoPath = 'public/front/img/pools/logo';
                $logoPath = str_replace('public/', '', $logoPath);

                $randomString = Str::random(10);
                $extension = $logo->getClientOriginalExtension();
                $logoName = $randomString . '.' . $extension;

                $logo->move($logoPath, $logoName);

                $data->logo = $logoName;

                if (!empty($currentImage)) {
                    $imagePath = 'public/front/img/pools/logo/' . $currentImage;
                    Storage::delete($imagePath);
                }
            }
            $data->jamtutup = $validatedData->getData()['jamtutup'];
            $data->jamresult = $validatedData->getData()['jamresult'];
            $data->link = $validatedData->getData()['link'];
            $data->webrekomendasi = $validatedData->getData()['webrekomendasi'];
            $data->prediksi = $validatedData->getData()['prediksi'];
            $data->switch = $validatedData->getData()['switch'] ?? null;
            $data->harilibur = $validatedData->getData()['harilibur'] ?? null;
            $data->senin = $validatedData->getData()['senin'] ?? null;

            $data->selasa = $validatedData->getData()['selasa'] ?? null;
            $data->rabu = $validatedData->getData()['rabu'] ?? null;
            $data->kamis = $validatedData->getData()['kamis'] ?? null;
            $data->jumat = $validatedData->getData()['jumat'] ?? null;
            $data->sabtu = $validatedData->getData()['sabtu'] ?? null;
            $data->minggu = $validatedData->getData()['minggu'] ?? null;

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
