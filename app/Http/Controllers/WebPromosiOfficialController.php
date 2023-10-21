<?php

namespace App\Http\Controllers;

use App\Models\WebPromosiOfficial;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebPromosiOfficialController extends Controller
{
    public function index()
    {
        $promosi = WebPromosiOfficial::orderByRaw("CASE WHEN urutan_promo = 0 THEN 1 ELSE 0 END, urutan_promo")->get();
        return view('web.promosiofficial.index', [
            'title' => 'Promosi',
            'data' => $promosi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = getDataBo();

        return view('web.promosiofficial.create', [
            'title' => 'WEB - Promosi',
            'menu' =>  'promosi'
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
        try {

            $request->validate([
                'judul_promo' => 'required',
                'banner_promo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'start_promo' => 'required',
                'close_promo' => 'required',
                'desk_singkat' => 'required',
                'desk_lengkap' => 'required',
                'link_web_rekom' => 'required',
                'urutan_promo' => 'required'
            ]);

            $requestall = $request->all();

            $requestall['tipe_togel'] = isset($requestall['tipe_togel']) ? '1' : '0';
            $requestall['tipe_slot'] = isset($requestall['tipe_slot']) ? '1' : '0';
            $requestall['tipe_livegames'] = isset($requestall['tipe_livegames']) ? '1' : '0';
            $requestall['tipe_sportgames'] = isset($requestall['tipe_sportgames']) ? '1' : '0';
            $requestall['tipe_fishing'] = isset($requestall['tipe_fishing']) ? '1' : '0';

            if ($request->hasFile('banner_promo')) {
                $requestall['banner_promo'] = $request->file('banner_promo')->store('Web-PromosiOfficial', 'public');
            }

            WebPromosiOfficial::create($requestall);

            return response()->json(['message' => 'Berhasil menambahkan promosi!'], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Gagal menambahkan promosi: ' . $e->getMessage()], 500);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bo  $bo
     * @return \Illuminate\Http\Response
     */
    public function show(WebPromosiOfficial $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebPromosiOfficial  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebPromosiOfficial::find($id);
        return response()->json($data);
    }
    public function datapromosi($id)
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


    // public function edit(WebPromosiOfficial $promosi)
    // {
    //     dd($promosi);
    //     $data = getDataBo();

    //     return view('dashboard.web.promosiofficial.edit', [
    //         'title' => 'WEB - Promosi',

    //         'data' => $data
    //     ], compact('promosi'));
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

                $promosi[$index] = WebPromosiOfficial::where('id', $ids)->first();
            }
        } else {
            $promosi = [WebPromosiOfficial::where('id', $id)->first()];
        }

        return view('web.promosiofficial.update', [
            'title' => 'Bo',
            'data' => $promosi,
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

                $promosi[$index] = WebPromosiOfficial::where('id', $ids)->first();
            }
        } else {
            $promosi = [WebPromosiOfficial::where('id', $id)->first()];
        }

        return view('web.promosiofficial.update', [
            'title' => 'Bo',
            'data' => $promosi,
            'disabled' => 'disabled'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebPromosiOfficial  $bo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        foreach ($id as $index => $idx) {
            // $requestall[$index] = $request->judul_promo[$index];  
            $validator = Validator::make($request->all(), [
                'judul_promo.*' => 'required',
                'start_promo.*' => 'required',
                'close_promo.*' => 'required',
                'banner_promo.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                // 'desk_singkat.*' => 'required',
                // 'desk_lengkap.*' => 'required',
                'urutan_promo.*' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {
                $result = WebPromosiOfficial::find($idx);
                $result->judul_promo = $request->judul_promo[$index];
                $result->start_promo = $request->start_promo[$index];
                $result->close_promo = $request->close_promo[$index];
                $result->tipe_togel = isset($request->tipe_togel[$index]) ? '1' : '0';
                $result->tipe_slot = isset($request->tipe_slot[$index]) ? '1' : '0';
                $result->tipe_livegames = isset($request->tipe_livegames[$index]) ? '1' : '0';
                $result->tipe_sportgames = isset($request->tipe_sportgames[$index]) ? '1' : '0';
                $result->tipe_fishing = isset($request->tipe_fishing[$index]) ? '1' : '0';
                $result->desk_singkat = $request->desk_singkat[$index];
                $result->desk_lengkap = $request->desk_lengkap[$index];
                $result->urutan_promo = $request->urutan_promo[$index];

                if ($request->hasFile('banner_promo.' . $index)) {
                    $image = $request->file('banner_promo.' . $index);
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $imagePath = $image->storeAs('public/Web-PromosiOfficial', $imageName);

                    if (!empty($currentImage)) {
                        Storage::delete('public/' . $currentImage);
                    }
                    $result->banner_promo = 'Web-PromosiOfficial/' . $imageName;
                }
                $result->save();
            }
        }
        return response()->json(['success' => 'Item berhasil diupdate!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebPromosiOfficial  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {

        $ids = $request->input('values');
        if (!is_array($ids)) {
            $ids = [$ids];
        }
        foreach ($ids as $index => $id) {
            $data = WebPromosiOfficial::where('id', $id)->get();
            $img = WebPromosiOfficial::where('id', $id)->first()->banner_promo;
            Storage::delete('public/' . $img);
            WebPromosiOfficial::destroy($data);
        }
        return response()->json(['success' => true]);
    }



    public function searchindex()
    {
        $data = WebPromosiOfficial::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
