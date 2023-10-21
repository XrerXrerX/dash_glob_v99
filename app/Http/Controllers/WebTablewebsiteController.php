<?php

namespace App\Http\Controllers;

use App\Models\WebTableWebsite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use App\Models\Hadiahbb;
use App\Models\Hadiahdsk;
use App\Models\Hadiahfull;
use App\Models\Hadiahprize;
use App\Models\Hadiahv2;
use Illuminate\Support\Facades\Cache;

class WebTablewebsiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        // $data = [
        //     "betbb4dtptmin",
        //     "betbb4dtptdisk"

        // ];
        // $result = '';
        // foreach ($data as $index => $d) {
        //     $result .= '<input type="text" id="' . $d . '" name="' . $d . '" value="{{ $data->' . $d . ' }}">' . PHP_EOL;
        // }

        // $data = [
        //     "betv24dmin",
        //     "betv24ddisk",
        //     "betv24dhd",
        // ];
        // $result = "";

        // foreach ($data as $key => $value) {
        //     $result .= "\$result->$value = \$request->$value;\n";
        // }

        // dd($result);
        // die;

        // var_dump($result);
        // die;


        // $data = [
        //     "disc4dmin",
        //     "disc4ddisk",
        //     "disc4dhd",

        // ];
        // $result = "";

        // foreach ($data as $key => $value) {
        //     if ($key % 4 === 0) {
        //         if ($key !== 0) {
        //             $result .= "\n\n";
        //         }
        //         $result .= "\"minbet\" => \$hv2->$value,\n";
        //     } elseif ($key % 4 === 1) {
        //         $result .= " \"diskon\" => \$hv2->$value,\n";
        //     } elseif ($key % 4 === 2) {
        //         $result .= " \"hadiah\" => \$hv2->$value,\n";
        //     } elseif ($key % 4 === 3) {
        //         $result .= " \"keterangan\" => \$hv2->$value,\n";
        //     }
        // }

        // // Menghapus koma (,) di akhir string agar format menjadi benar
        // $result = rtrim($result, ",");

        // echo $result;
        // die;




        // $tablewebsite = WebTableWebsite::latest()->get();

        $url = 'https://l4soyk0.com/api/datawebsite';

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer youk1llmyfvcking3x'
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);

        // $tablewebsite = WebTableWebsite::orderBy('created_at', 'desc')->paginate(8);
        return view('web.tablewebsite.index', [
            'title' => 'Table Website',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.tablewebsite.create', [
            'title' => 'Table Website',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'tipe_website' => 'required',
            'website' => 'required',
            'facebook' => 'required',
            'whatsapp' => 'required',
            'telegram' => 'required',
            'line' => 'required',
            'instagram' => 'required',
            'youtube' => 'required',
            'deskripsi' => 'required',
            'pasaran' => 'required',
            'deposit' => 'required',
            'withdraw' => 'required',
            'promourl' => 'required',
            'buktijp' => 'required',
            'linkbutton' => 'required',
            'linkapk' => 'required',
            'linkalternatif1' => 'required',
            'linkalternatif2' => 'required',
            'linkalternatif3' => 'required',
            'linkalternatif4' => 'required',
            'linkalternatif5' => 'required',
            'gambar' => 'required|image|max:2000',
            'img' => 'required|image|max:2000',
            'promotogel' => 'required|image|max:2000',
            'promoslot' => 'required|image|max:2000',
            'livechat' => 'required',
            'url_canolical' => 'required',

        ]);

        $gambarPath = '';
        $imgPath = '';
        $promotogelPath = '';
        $promoslotPath = '';

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            $gambarPath = $gambar->store('datawebsite-img', 'public');
        }

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imgPath = $img->store('datawebsite-img', 'public');
        }

        if ($request->hasFile('promotogel')) {
            $promotogel = $request->file('promotogel');
            $promotogelPath = $promotogel->store('datawebsite-img', 'public');
        }

        if ($request->hasFile('promoslot')) {
            $promoslot = $request->file('promoslot');
            $promoslotPath = $promoslot->store('datawebsite-img', 'public');
        }

        $payload = [
            'tipe_website' => $validatedData['tipe_website'],
            'website' => $validatedData['website'],
            'facebook' => $validatedData['facebook'],
            'whatsapp' => $validatedData['whatsapp'],
            'telegram' => $validatedData['telegram'],
            'line' => $validatedData['line'],
            'instagram' => $validatedData['instagram'],
            'youtube' => $validatedData['youtube'],
            'deskripsi' => $validatedData['deskripsi'],
            'pasaran' => $validatedData['pasaran'],
            'deposit' => $validatedData['deposit'],
            'withdraw' => $validatedData['withdraw'],
            'promourl' => $validatedData['promourl'],
            'buktijp' => $validatedData['buktijp'],
            'linkbutton' => $validatedData['linkbutton'],
            'linkapk' => $validatedData['linkapk'],
            'linkalternatif1' => $validatedData['linkalternatif1'],
            'linkalternatif2' => $validatedData['linkalternatif2'],
            'linkalternatif3' => $validatedData['linkalternatif3'],
            'gambar' => $gambarPath,
            'img' => $imgPath,
            'promotogel' => $promotogelPath,
            'promoslot' => $promoslotPath,
            'linkalternatif4' => $validatedData['linkalternatif4'],
            'linkalternatif5' => $validatedData['linkalternatif5'],
            'livechat' => $validatedData['livechat'],
            'url_canolical' => $validatedData['url_canolical'],
        ];
        $url = 'https://l4soyk0.com/api/datawebsite';
        $token = 'youk1llmyfvcking3x';

        $jsonPayload = json_encode($payload);

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $token,
            'Content-Type: application/json',
        ));
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonPayload);
        $response = curl_exec($curl);
        curl_close($curl);

        $data = json_decode($response, true);

        if ($data !== null) {

            if ($data["data"]["tipe_website"] == "IDN") {
                $bo = 'arwanatoto';
            } else {
                $bo = 'duogaming';
            }

            $hadiahbb = Hadiahbb::where('website', '=', $bo)->latest()->first();
            $hadiahdsk = Hadiahdsk::where('website', '=', $bo)->latest()->first();
            $hadiahfull = Hadiahfull::where('website', '=', $bo)->latest()->first();
            $hadiahprize = Hadiahprize::where('website', '=', $bo)->latest()->first();
            $hadiahv2 = Hadiahv2::where('website', '=', $bo)->latest()->first();

            Hadiahbb::create([
                'website' => $data["data"]["website"],
                'betbb4dtptmin' => $hadiahbb->betbb4dtptmin,
                'betbb4dtptdisk' => $hadiahbb->betbb4dtptdisk,
                'betbb4dtpthd' => $hadiahbb->betbb4dtpthd,
                'betbb4dtptket' => $hadiahbb->betbb4dtptket,
                'betbb4dblkmin' => $hadiahbb->betbb4dblkmin,
                'betbb4dblkdisk' => $hadiahbb->betbb4dblkdisk,
                'betbb4dblkhd' => $hadiahbb->betbb4dblkhd,
                'betbb4dblkket' => $hadiahbb->betbb4dblkket,
                'betbb3dtptmin' => $hadiahbb->betbb3dtptmin,
                'betbb3dtptdisk' => $hadiahbb->betbb3dtptdisk,
                'betbb3dtpthd' => $hadiahbb->betbb3dtpthd,
                'betbb3dtptket' => $hadiahbb->betbb3dtptket,
                'betbb3dblkmin' => $hadiahbb->betbb3dblkmin,
                'betbb3dblkdisk' => $hadiahbb->betbb3dblkdisk,
                'betbb3dblkhd' => $hadiahbb->betbb3dblkhd,
                'betbb3dblkket' => $hadiahbb->betbb3dblkket,
                'betbb2dtptblkmin' => $hadiahbb->betbb2dtptblkmin,
                'betbb2dtptblkdisk' => $hadiahbb->betbb2dtptblkdisk,
                'betbb2dtptblkket' => $hadiahbb->betbb2dtptblkket,
                'betbb2dblkmin' => $hadiahbb->betbb2dblkmin,
                'betbb2dblkdisk' => $hadiahbb->betbb2dblkdisk,
                'betbb2dblkhd' => $hadiahbb->betbb2dblkhd,
                'betbb2dblkket' => $hadiahbb->betbb2dblkket,
                'betbbcbmin' => $hadiahbb->betbbcbmin,
                'betbbcbdisk' => $hadiahbb->betbbcbdisk,
                'betbbcbhd' => $hadiahbb->betbbcbhd,
                'betbbcbket' => $hadiahbb->betbbcbket,
                'betbbcb2dmin' => $hadiahbb->betbbcb2dmin,
                'betbbcb2ddisk' => $hadiahbb->betbbcb2ddisk,
                'betbbcb2dhd' => $hadiahbb->betbbcb2dhd,
                'betbbcb2dket' => $hadiahbb->betbbcb2dket,
                'betbbcb2d3min' => $hadiahbb->betbbcb2d3min,
                'betbbcb2d3disk' => $hadiahbb->betbbcb2d3disk,
                'betbbcb2d3hd' => $hadiahbb->betbbcb2d3hd,
                'betbbcb2d3ket' => $hadiahbb->betbbcb2d3ket,
                'betbbcb2d4min' => $hadiahbb->betbbcb2d4min,
                'betbbcb2d4disk' => $hadiahbb->betbbcb2d4disk,
                'betbbcb2d4hd' => $hadiahbb->betbbcb2d4hd,
                'betbbcb2d4ket' => $hadiahbb->betbbcb2d4ket,
                'betbbcbnagamin' => $hadiahbb->betbbcbnagamin,
                'betbbcbnagadisk' => $hadiahbb->betbbcbnagadisk,
                'betbbcbnagahd' => $hadiahbb->betbbcbnagahd,
                'betbbcbnagaket' => $hadiahbb->betbbcbnagaket,
                'betbbcbnaga4min' => $hadiahbb->betbbcbnaga4min,
                'betbbcbnaga4disk' => $hadiahbb->betbbcbnaga4disk,
                'betbbcbnaga4hd' => $hadiahbb->betbbcbnaga4hd,
                'betbbcbnaga4ket' => $hadiahbb->betbbcbnaga4ket,
                'betbbcjitumin' => $hadiahbb->betbbcjitumin,
                'betbbcjitudisk' => $hadiahbb->betbbcjitudisk,
                'betbbcjituhd' => $hadiahbb->betbbcjituhd,
                'betbbcjituket' => $hadiahbb->betbbcjituket,
                'betbbttepimin' => $hadiahbb->betbbttepimin,
                'betbbttepidisk' => $hadiahbb->betbbttepidisk,
                'betbbttepihd' => $hadiahbb->betbbttepihd,
                'betbbttepiket' => $hadiahbb->betbbttepiket,
                'betbbdsrmin' => $hadiahbb->betbbdsrmin,
                'betbbdsrdisk' => $hadiahbb->betbbdsrdisk,
                'betbbdsrhd' => $hadiahbb->betbbdsrhd,
                'betbbdsrket' => $hadiahbb->betbbdsrket,
                'betbbkombmin' => $hadiahbb->betbbkombmin,
                'betbbkombdisk' => $hadiahbb->betbbkombdisk,
                'betbbkombhd' => $hadiahbb->betbbkombhd,
                'betbbkombket' => $hadiahbb->betbbkombket,
                'betbb5050min' => $hadiahbb->betbb5050min,
                'betbb5050disk' => $hadiahbb->betbb5050disk,
                'betbb5050hd' => $hadiahbb->betbb5050hd,
                'betbb5050ket' => $hadiahbb->betbb5050ket,
                'betbbshiomin' => $hadiahbb->betbbshiomin,
                'betbbshiodisk' => $hadiahbb->betbbshiodisk,
                'betbbshiohd' => $hadiahbb->betbbshiohd,
                'betbbshioket' => $hadiahbb->betbbshioket,
                'betbbshomomin' => $hadiahbb->betbbshomomin,
                'betbbshomodisk' => $hadiahbb->betbbshomodisk,
                'betbbshomohd' => $hadiahbb->betbbshomohd,
                'betbbshomoket' => $hadiahbb->betbbshomoket,
                'betbbkkempismin' => $hadiahbb->betbbkkempismin,
                'betbbkkempisdisk' => $hadiahbb->betbbkkempisdisk,
                'betbbkkempishd' => $hadiahbb->betbbkkempishd,
                'betbbkkempisket' => $hadiahbb->betbbkkempisket
            ]);

            Hadiahv2::create([
                'website' => $data["data"]["website"],
                'betv24dmin' => $hadiahv2->betv24dmin,
                'betv24ddisk' => $hadiahv2->betv24ddisk,
                'betv24dhd' => $hadiahv2->betv24dhd,
                'betv24dket' => $hadiahv2->betv24dket,
                'betv23dmin' => $hadiahv2->betv23dmin,
                'betv23ddisk' => $hadiahv2->betv23ddisk,
                'betv23dhd' => $hadiahv2->betv23dhd,
                'betv23dket' => $hadiahv2->betv23dket,
                'betv22dmin' => $hadiahv2->betv22dmin,
                'betv22ddisk' => $hadiahv2->betv22ddisk,
                'betv22dhd' => $hadiahv2->betv22dhd,
                'betv22dket' => $hadiahv2->betv22dket,
                'betv2cbmin' => $hadiahv2->betv2cbmin,
                'betv2cbdisk' => $hadiahv2->betv2cbdisk,
                'betv2cbhd' => $hadiahv2->betv2cbhd,
                'betv2cbket' => $hadiahv2->betv2cbket,
                'betv2cb2dmin' => $hadiahv2->betv2cb2dmin,
                'betv2cb2ddisk' => $hadiahv2->betv2cb2ddisk,
                'betv2cb2dhd' => $hadiahv2->betv2cb2dhd,
                'betv2cb2dket' => $hadiahv2->betv2cb2dket,
                'betv2cb2d3min' => $hadiahv2->betv2cb2d3min,
                'betv2cb2d3disk' => $hadiahv2->betv2cb2d3disk,
                'betv2cb2d3hd' => $hadiahv2->betv2cb2d3hd,
                'betv2cb2d3ket' => $hadiahv2->betv2cb2d3ket,
                'betv2cb2d4min' => $hadiahv2->betv2cb2d4min,
                'betv2cb2d4disk' => $hadiahv2->betv2cb2d4disk,
                'betv2cb2d4hd' => $hadiahv2->betv2cb2d4hd,
                'betv2cb2d4ket' => $hadiahv2->betv2cb2d4ket,
                'betv2cbnagamin' => $hadiahv2->betv2cbnagamin,
                'betv2cbnagadisk' => $hadiahv2->betv2cbnagadisk,
                'betv2cbnagahd' => $hadiahv2->betv2cbnagahd,
                'betv2cbnagaket' => $hadiahv2->betv2cbnagaket,
                'betv2cbnaga4min' => $hadiahv2->betv2cbnaga4min,
                'betv2cbnaga4disk' => $hadiahv2->betv2cbnaga4disk,
                'betv2cbnaga4hd' => $hadiahv2->betv2cbnaga4hd,
                'betv2cbnaga4ket' => $hadiahv2->betv2cbnaga4ket,
                'betv2cjitumin' => $hadiahv2->betv2cjitumin,
                'betv2cjitudisk' => $hadiahv2->betv2cjitudisk,
                'betv2cjituhd' => $hadiahv2->betv2cjituhd,
                'betv2cjituket' => $hadiahv2->betv2cjituket,
                'betv2ttepimin' => $hadiahv2->betv2ttepimin,
                'betv2ttepidisk' => $hadiahv2->betv2ttepidisk,
                'betv2ttepihd' => $hadiahv2->betv2ttepihd,
                'betv2ttepiket' => $hadiahv2->betv2ttepiket,
                'betv2dsrmin' => $hadiahv2->betv2dsrmin,
                'betv2dsrdisk' => $hadiahv2->betv2dsrdisk,
                'betv2dsrhd' => $hadiahv2->betv2dsrhd,
                'betv2dsrket' => $hadiahv2->betv2dsrket,
                'betv2kombmin' => $hadiahv2->betv2kombmin,
                'betv2kombdisk' => $hadiahv2->betv2kombdisk,
                'betv2kombhd' => $hadiahv2->betv2kombhd,
                'betv2kombket' => $hadiahv2->betv2kombket,
                'betv25050min' => $hadiahv2->betv25050min,
                'betv25050disk' => $hadiahv2->betv25050disk,
                'betv25050hd' => $hadiahv2->betv25050hd,
                'betv25050ket' => $hadiahv2->betv25050ket,
                'betv2shiomin' => $hadiahv2->betv2shiomin,
                'betv2shiodisk' => $hadiahv2->betv2shiodisk,
                'betv2shiohd' => $hadiahv2->betv2shiohd,
                'betv2shioket' => $hadiahv2->betv2shioket,
                'betv2shomomin' => $hadiahv2->betv2shomomin,
                'betv2shomodisk' => $hadiahv2->betv2shomodisk,
                'betv2shomohd' => $hadiahv2->betv2shomohd,
                'betv2shomoket' => $hadiahv2->betv2shomoket,
                'betv2kkempismin' => $hadiahv2->betv2kkempismin,
                'betv2kkempisdisk' => $hadiahv2->betv2kkempisdisk,
                'betv2kkempishd' => $hadiahv2->betv2kkempishd,
                'betv2kkempisket' => $hadiahv2->betv2kkempisket
            ]);

            Hadiahprize::create([
                'website' => $data["data"]["website"],
                'prize4dp1min' => $hadiahprize->prize4dp1min,
                'prize4dp1disk' => $hadiahprize->prize4dp1disk,
                'prize4dp1hd' => $hadiahprize->prize4dp1hd,
                'prize4dp1ket' => $hadiahprize->prize4dp1ket,
                'prize4dp2min' => $hadiahprize->prize4dp2min,
                'prize4dp2disk' => $hadiahprize->prize4dp2disk,
                'prize4dp2hd' => $hadiahprize->prize4dp2hd,
                'prize4dp2ket' => $hadiahprize->prize4dp2ket,
                'prize4dp3min' => $hadiahprize->prize4dp3min,
                'prize4dp3disk' => $hadiahprize->prize4dp3disk,
                'prize4dp3hd' => $hadiahprize->prize4dp3hd,
                'prize4dp3ket' => $hadiahprize->prize4dp3ket,
                'prize3dp1min' => $hadiahprize->prize3dp1min,
                'prize3dp1disk' => $hadiahprize->prize3dp1disk,
                'prize3dp1hd' => $hadiahprize->prize3dp1hd,
                'prize3dp1ket' => $hadiahprize->prize3dp1ket,
                'prize3dp2min' => $hadiahprize->prize3dp2min,
                'prize3dp2disk' => $hadiahprize->prize3dp2disk,
                'prize3dp2hd' => $hadiahprize->prize3dp2hd,
                'prize3dp2ket' => $hadiahprize->prize3dp2ket,
                'prize3dp3min' => $hadiahprize->prize3dp3min,
                'prize3dp3disk' => $hadiahprize->prize3dp3disk,
                'prize3dp3hd' => $hadiahprize->prize3dp3hd,
                'prize3dp3ket' => $hadiahprize->prize3dp3ket,
                'prize2dp1min' => $hadiahprize->prize2dp1min,
                'prize2dp1disk' => $hadiahprize->prize2dp1disk,
                'prize2dp1hd' => $hadiahprize->prize2dp1hd,
                'prize2dp1ket' => $hadiahprize->prize2dp1ket,
                'prize2dp2min' => $hadiahprize->prize2dp2min,
                'prize2dp2disk' => $hadiahprize->prize2dp2disk,
                'prize2dp2hd' => $hadiahprize->prize2dp2hd,
                'prize2dp2ket' => $hadiahprize->prize2dp2ket,
                'prize2dp3min' => $hadiahprize->prize2dp3min,
                'prize2dp3disk' => $hadiahprize->prize2dp3disk,
                'prize2dp3hd' => $hadiahprize->prize2dp3hd,
                'prize2dp3ket' => $hadiahprize->prize2dp3ket,
                'prizecbmin' => $hadiahprize->prizecbmin,
                'prizecbdisk' => $hadiahprize->prizecbdisk,
                'prizecbhd' => $hadiahprize->prizecbhd,
                'prizecbket' => $hadiahprize->prizecbket,
                'prizecb2dmin' => $hadiahprize->prizecb2dmin,
                'prizecb2ddisk' => $hadiahprize->prizecb2ddisk,
                'prizecb2dhd' => $hadiahprize->prizecb2dhd,
                'prizecb2dket' => $hadiahprize->prizecb2dket,
                'prizecb2d3min' => $hadiahprize->prizecb2d3min,
                'prizecb2d3disk' => $hadiahprize->prizecb2d3disk,
                'prizecb2d3hd' => $hadiahprize->prizecb2d3hd,
                'prizecb2d3ket' => $hadiahprize->prizecb2d3ket,
                'prizecb2d4min' => $hadiahprize->prizecb2d4min,
                'prizecb2d4disk' => $hadiahprize->prizecb2d4disk,
                'prizecb2d4hd' => $hadiahprize->prizecb2d4hd,
                'prizecb2d4ket' => $hadiahprize->prizecb2d4ket,
                'prizecbnagamin' => $hadiahprize->prizecbnagamin,
                'prizecbnagadisk' => $hadiahprize->prizecbnagadisk,
                'prizecbnagahd' => $hadiahprize->prizecbnagahd,
                'prizecbnagaket' => $hadiahprize->prizecbnagaket,
                'prizecbnaga4min' => $hadiahprize->prizecbnaga4min,
                'prizecbnaga4disk' => $hadiahprize->prizecbnaga4disk,
                'prizecbnaga4hd' => $hadiahprize->prizecbnaga4hd,
                'prizecbnaga4ket' => $hadiahprize->prizecbnaga4ket,
                'prizecjitumin' => $hadiahprize->prizecjitumin,
                'prizecjitudisk' => $hadiahprize->prizecjitudisk,
                'prizecjituhd' => $hadiahprize->prizecjituhd,
                'prizecjituket' => $hadiahprize->prizecjituket,
                'prizettepimin' => $hadiahprize->prizettepimin,
                'prizettepidisk' => $hadiahprize->prizettepidisk,
                'prizettepihd' => $hadiahprize->prizettepihd,
                'prizettepiket' => $hadiahprize->prizettepiket,
                'prizedsrmin' => $hadiahprize->prizedsrmin,
                'prizedsrdisk' => $hadiahprize->prizedsrdisk,
                'prizedsrhd' => $hadiahprize->prizedsrhd,
                'prizedsrket' => $hadiahprize->prizedsrket,
                'prizekombmin' => $hadiahprize->prizekombmin,
                'prizekombdisk' => $hadiahprize->prizekombdisk,
                'prizekombhd' => $hadiahprize->prizekombhd,
                'prizekombket' => $hadiahprize->prizekombket,
                'prize5050min' => $hadiahprize->prize5050min,
                'prize5050disk' => $hadiahprize->prize5050disk,
                'prize5050hd' => $hadiahprize->prize5050hd,
                'prize5050ket' => $hadiahprize->prize5050ket,
                'prizeshiomin' => $hadiahprize->prizeshiomin,
                'prizeshiodisk' => $hadiahprize->prizeshiodisk,
                'prizeshiohd' => $hadiahprize->prizeshiohd,
                'prizeshioket' => $hadiahprize->prizeshioket,
                'prizeshomomin' => $hadiahprize->prizeshomomin,
                'prizeshomodisk' => $hadiahprize->prizeshomodisk,
                'prizeshomohd' => $hadiahprize->prizeshomohd,
                'prizeshomoket' => $hadiahprize->prizeshomoket,
                'prizekkempismin' => $hadiahprize->prizekkempismin,
                'prizekkempisdisk' => $hadiahprize->prizekkempisdisk,
                'prizekkempishd' => $hadiahprize->prizekkempishd,
                'prizekkempisket' => $hadiahprize->prizekkempisket

            ]);

            Hadiahfull::create([
                'website' => $data["data"]["website"],
                'full4dmin' => $hadiahdsk->full4dmin,
                'full4ddisk' => $hadiahdsk->full4ddisk,
                'full4dhd' => $hadiahdsk->full4dhd,
                'full4dket' => $hadiahdsk->full4dket,
                'full3dmin' => $hadiahdsk->full3dmin,
                'full3ddisk' => $hadiahdsk->full3ddisk,
                'full3dhd' => $hadiahdsk->full3dhd,
                'full3dket' => $hadiahdsk->full3dket,
                'full2dblkmin' => $hadiahdsk->full2dblkmin,
                'full2dblkdisk' => $hadiahdsk->full2dblkdisk,
                'full2dblkhd' => $hadiahdsk->full2dblkhd,
                'full2dblkket' => $hadiahdsk->full2dblkket,
                'fullcbmin' => $hadiahdsk->fullcbmin,
                'fullcbdisk' => $hadiahdsk->fullcbdisk,
                'fullcbhd' => $hadiahdsk->fullcbhd,
                'fullcbket' => $hadiahdsk->fullcbket,
                'fullcb2dmin' => $hadiahdsk->fullcb2dmin,
                'fullcb2ddisk' => $hadiahdsk->fullcb2ddisk,
                'fullcb2dhd' => $hadiahdsk->fullcb2dhd,
                'fullcb2dket' => $hadiahdsk->fullcb2dket,
                'fullcb2d3min' => $hadiahdsk->fullcb2d3min,
                'fullcb2d3disk' => $hadiahdsk->fullcb2d3disk,
                'fullcb2d3hd' => $hadiahdsk->fullcb2d3hd,
                'fullcb2d3ket' => $hadiahdsk->fullcb2d3ket,
                'fullcb2d4min' => $hadiahdsk->fullcb2d4min,
                'fullcb2d4disk' => $hadiahdsk->asdasd,
                'fullcb2d4hd' => $hadiahdsk->fullcb2d4hd,
                'fullcb2d4ket' => $hadiahdsk->fullcb2d4ket,
                'fullcbnagamin' => $hadiahdsk->fullcbnagamin,
                'fullcbnagadisk' => $hadiahdsk->fullcbnagadisk,
                'fullcbnagahd' => $hadiahdsk->fullcbnagahd,
                'fullcbnagaket' => $hadiahdsk->fullcbnagaket,
                'fullcbnaga4min' => $hadiahdsk->fullcbnaga4min,
                'fullcbnaga4disk' => $hadiahdsk->fullcbnaga4disk,
                'fullcbnaga4hd' => $hadiahdsk->fullcbnaga4hd,
                'fullcbnaga4ket' => $hadiahdsk->fullcbnaga4ket,
                'fullcjitumin' => $hadiahdsk->fullcjitumin,
                'fullcjitudisk' => $hadiahdsk->fullcjitudisk,
                'fullcjituhd' => $hadiahdsk->fullcjituhd,
                'fullcjituket' => $hadiahdsk->fullcjituket,
                'fullttepimin' => $hadiahdsk->fullttepimin,
                'fullttepidisk' => $hadiahdsk->fullttepidisk,
                'fullttepihd' => $hadiahdsk->fullttepihd,
                'fullttepiket' => $hadiahdsk->fullttepiket,
                'fulldsrmin' => $hadiahdsk->fulldsrmin,
                'fulldsrdisk' => $hadiahdsk->fulldsrdisk,
                'fulldsrhd' => $hadiahdsk->fulldsrhd,
                'fulldsrket' => $hadiahdsk->fulldsrket,
                'fullkombmin' => $hadiahdsk->fullkombmin,
                'fullkombdisk' => $hadiahdsk->fullkombdisk,
                'fullkombhd' => $hadiahdsk->fullkombhd,
                'fullkombket' => $hadiahdsk->fullkombket,
                'full5050min' => $hadiahdsk->full5050min,
                'full5050disk' => $hadiahdsk->full5050disk,
                'full5050hd' => $hadiahdsk->full5050hd,
                'full5050ket' => $hadiahdsk->full5050ket,
                'fullshiomin' => $hadiahdsk->fullshiomin,
                'fullshiodisk' => $hadiahdsk->fullshiodisk,
                'fullshiohd' => $hadiahdsk->fullshiohd,
                'fullshioket' => $hadiahdsk->fullshioket,
                'fullshomomin' => $hadiahdsk->fullshomomin,
                'fullshomodisk' => $hadiahdsk->fullshomodisk,
                'fullshomohd' => $hadiahdsk->fullshomohd,
                'fullshomoket' => $hadiahdsk->fullshomoket,
                'fullkkempismin' => $hadiahdsk->fullkkempismin,
                'fullkkempisdisk' => $hadiahdsk->fullkkempisdisk,
                'fullkkempishd' => $hadiahdsk->fullkkempishd,
                'fullkkempisket' => $hadiahdsk->fullkkempisket
            ]);

            Hadiahdsk::create([
                'website' => $data["data"]["website"],
                'disc4dmin' => $hadiahdsk->disc4dmin,
                'disc4ddisk' => $hadiahdsk->disc4ddisk,
                'disc4dhd' => $hadiahdsk->disc4dhd,
                'disc4dket' => $hadiahdsk->disc4dket,
                'disc3dmin' => $hadiahdsk->disc3dmin,
                'disc3ddisk' => $hadiahdsk->disc3ddisk,
                'disc3dhd' => $hadiahdsk->disc3dhd,
                'disc3dket' => $hadiahdsk->disc3dket,
                'disc2dblkmin' => $hadiahdsk->disc2dblkmin,
                'disc2dblkdisk' => $hadiahdsk->disc2dblkdisk,
                'disc2dblkhd' => $hadiahdsk->disc2dblkhd,
                'disc2dblkket' => $hadiahdsk->disc2dblkket,
                'disc2ddpnmin' => $hadiahdsk->disc2ddpnmin,
                'disc2ddpndisk' => $hadiahdsk->disc2ddpndisk,
                'disc2ddpnhd' => $hadiahdsk->disc2ddpnhd,
                'disc2ddpnket' => $hadiahdsk->disc2ddpnket,
                'disc2dtghmin' => $hadiahdsk->disc2dtghmin,
                'disc2dtghdisk' => $hadiahdsk->disc2dtghdisk,
                'disc2dtghhd' => $hadiahdsk->disc2dtghhd,
                'disc2dtghket' => $hadiahdsk->disc2dtghket,
                'disccbdisk' => $hadiahdsk->disccbdisk,
                'disccbhd' => $hadiahdsk->disccbhd,
                'disccbket' => $hadiahdsk->disccbket,
                'disccb2dmin' => $hadiahdsk->disccb2dmin,
                'disccb2ddisk' => $hadiahdsk->disccb2ddisk,
                'disccb2dhd' => $hadiahdsk->disccb2dhd,
                'disccb2dket' => $hadiahdsk->disccb2dket,
                'disccb2d3min' => $hadiahdsk->disccb2d3min,
                'disccb2d3disk' => $hadiahdsk->disccb2d3disk,
                'disccb2d3hd' => $hadiahdsk->disccb2d3hd,
                'disccb2d3ket' => $hadiahdsk->disccb2d3ket,
                'disccb2d4min' => $hadiahdsk->disccb2d4min,
                'disccb2d4disk' => $hadiahdsk->disccb2d4disk,
                'disccb2d4hd' => $hadiahdsk->disccb2d4hd,
                'disccb2d4ket' => $hadiahdsk->disccb2d4ket,
                'disccbnagamin' => $hadiahdsk->disccbnagamin,
                'disccbnagadisk' => $hadiahdsk->disccbnagadisk,
                'disccbnagahd' => $hadiahdsk->disccbnagahd,
                'disccbnagaket' => $hadiahdsk->disccbnagaket,
                'disccbnaga4min' => $hadiahdsk->disccbnaga4min,
                'disccbnaga4disk' => $hadiahdsk->disccbnaga4disk,
                'disccbnaga4hd' => $hadiahdsk->disccbnaga4hd,
                'disccbnaga4ket' => $hadiahdsk->disccbnaga4ket,
                'disccjitumin' => $hadiahdsk->disccjitumin,
                'disccjitudisk' => $hadiahdsk->disccjitudisk,
                'disccjituhd' => $hadiahdsk->disccjituhd,
                'disccjituket' => $hadiahdsk->disccjituket,
                'discttepimin' => $hadiahdsk->discttepimin,
                'discttepidisk' => $hadiahdsk->discttepidisk,
                'discttepihd' => $hadiahdsk->discttepihd,
                'discttepiket' => $hadiahdsk->discttepiket,
                'discdsrmin' => $hadiahdsk->discdsrmin,
                'discdsrdisk' => $hadiahdsk->discdsrdisk,
                'discdsrhd' => $hadiahdsk->discdsrhd,
                'discdsrket' => $hadiahdsk->discdsrket,
                'disckombmin' => $hadiahdsk->disckombmin,
                'disckombdisk' => $hadiahdsk->disckombdisk,
                'disckombhd' => $hadiahdsk->disckombhd,
                'disckombket' => $hadiahdsk->disckombket,
                'disc5050min' => $hadiahdsk->disc5050min,
                'disc5050disk' => $hadiahdsk->disc5050disk,
                'disc5050hd' => $hadiahdsk->disc5050hd,
                'disc5050ket' => $hadiahdsk->disc5050ket,
                'discshiomin' => $hadiahdsk->discshiomin,
                'discshiodisk' => $hadiahdsk->discshiodisk,
                'discshiohd' => $hadiahdsk->discshiohd,
                'discshioket' => $hadiahdsk->discshioket,
                'discshomomin' => $hadiahdsk->discshomomin,
                'discshomodisk' => $hadiahdsk->discshomodisk,
                'discshomohd' => $hadiahdsk->discshomohd,
                'discshomoket' => $hadiahdsk->discshomoket,
                'disckkempismin' => $hadiahdsk->disckkempismin,
                'disckkempisdisk' => $hadiahdsk->disckkempisdisk,
                'disckkempishd' => $hadiahdsk->disckkempishd,
                'disckkempisket' => $hadiahdsk->disckkempisket,
            ]);


            return 'Sukses'; // Ganti dengan pesan sukses atau hasil yang ingin Anda tampilkan
        } else {
            return 'Gagal mengirim permintaan POST ke API.'; // Pesan error jika permintaan gagal
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(WebTableWebsite $WebTableWebsite)
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

        $ids = (!empty($var4)) ? $var4 : [$id];

        foreach ($ids as $index => $id) {
            $url = 'https://l4soyk0.com/api/datawebsite/' . $id;

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer youk1llmyfvcking3x'
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $data[] = json_decode($response, true);
        }

        return view('web.tablewebsite.update', [
            'title' => 'Table Website',
            'data' => $data,
            'disabled' => ''
        ]);
    }

    public function views($id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        $ids = (!empty($var4)) ? $var4 : [$id];

        foreach ($ids as $index => $id) {
            $url = 'https://l4soyk0.com/api/datawebsite/' . $id;

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer youk1llmyfvcking3x'
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $data[] = json_decode($response, true);
        }

        return view('web.tablewebsite.update', [
            'title' => 'Table Website',
            'data' => $data,
            'disabled' => 'disabled'
        ]);
    }

    public function getData($id)
    {
        $response = Http::withHeaders([
            'Authorization: Bearer youk1llmyfvcking3x'
        ])->get("https://l4soyk0.com/api/datawebsite/{$id}");

        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['data'];

            return $data;
        } else {
            $errorResponse = $response->json();
            $errorMessage = $errorResponse['message'];
            return response()->json(['error' => $errorMessage], 400);
        }
    }


    public function data($id)
    {
        $data = WebTableWebsite::find($id);
        return response()->json($data);
    }

    public function update(Request $request)
    {
        $id = $request->id;

        $validatedData = $request->validate([
            'tipe_website.*' => 'required',
            'website.*' => 'required',
            'facebook.*' => 'required',
            'whatsapp.*' => 'required',
            'telegram.*' => 'required',
            'line.*' => 'required',
            'instagram.*' => 'required',
            'youtube.*' => 'required',
            'deskripsi.*' => 'required',
            'pasaran.*' => 'required',
            'deposit.*' => 'required',
            'withdraw.*' => 'required',
            'promourl.*' => 'required',
            'buktijp.*' => 'required',
            'linkbutton.*' => 'required',
            'linkapk.*' => 'required',
            'linkalternatif1.*' => 'required',
            'linkalternatif2.*' => 'required',
            'linkalternatif3.*' => 'required',
            'linkalternatif4.*' => 'required',
            'linkalternatif5.*' => 'required',
            'gambar.*' => 'nullable|image|max:2000',
            'img.*' => 'nullable|image|max:2000',
            'promotogel.*' => 'nullable|image|max:2000',
            'promoslot.*' => 'nullable|image|max:2000',
            'livechat.*' => 'required',
            'url_canolical.*' => 'required',
        ]);
        foreach ($validatedData['website'] as $index => $website) {

            $item = [
                'tipe_website' => $validatedData['tipe_website'][$index],
                'website' => $website,
                'facebook' => $validatedData['facebook'][$index],
                'whatsapp' => $validatedData['whatsapp'][$index],
                'telegram' => $validatedData['telegram'][$index],
                'line' => $validatedData['line'][$index],
                'instagram' => $validatedData['instagram'][$index],
                'youtube' => $validatedData['youtube'][$index],
                'deskripsi' => $validatedData['deskripsi'][$index],
                'pasaran' => $validatedData['pasaran'][$index],
                'deposit' => $validatedData['deposit'][$index],
                'withdraw' => $validatedData['withdraw'][$index],
                'promourl' => $validatedData['promourl'][$index],
                'buktijp' => $validatedData['buktijp'][$index],
                'linkbutton' => $validatedData['linkbutton'][$index],
                'linkapk' => $validatedData['linkapk'][$index],
                'linkalternatif1' => $validatedData['linkalternatif1'][$index],
                'linkalternatif2' => $validatedData['linkalternatif2'][$index],
                'linkalternatif3' => $validatedData['linkalternatif3'][$index],
                'linkalternatif4' => $validatedData['linkalternatif4'][$index],
                'linkalternatif5' => $validatedData['linkalternatif5'][$index],
                'livechat' => $validatedData['livechat'][$index],
                'url_canolical' => $validatedData['url_canolical'][$index],
            ];
            if ($request->hasFile('gambar.' . $index)) {
                $gambar = $request->file('gambar.' . $index);
                $gambarPath = $gambar->store('datawebsite-img', 'public');
                $item['gambar'] = $gambarPath;

                if (isset($request->oldgambar[$index])) {
                    Storage::disk('public')->delete($request->oldgambar[$index]);
                }
            } else {
                $item['gambar'] = $request->oldgambar[$index];
            }

            if ($request->hasFile('img.' . $index)) {
                $img = $request->file('img.' . $index);
                $imgPath = $img->store('datawebsite-img', 'public');
                $item['img'] = $imgPath;

                if (isset($request->oldimg[$index])) {
                    Storage::disk('public')->delete($request->oldimg[$index]);
                }
            } else {
                $item['img'] = $request->oldimg[$index];
            }

            if ($request->hasFile('promotogel.' . $index)) {
                $promotogel = $request->file('promotogel.' . $index);
                $promotogelPath = $promotogel->store('datawebsite-img', 'public');
                $item['promotogel'] = $promotogelPath;

                if (isset($request->oldpromotogel[$index])) {
                    Storage::disk('public')->delete($request->oldpromotogel[$index]);
                }
            } else {
                $item['promotogel'] = $request->oldpromotogel[$index];
            }

            if ($request->hasFile('promoslot.' . $index)) {
                $promoslot = $request->file('promoslot.' . $index);
                $promoslotPath = $promoslot->store('datawebsite-img', 'public');
                $item['promoslot'] = $promoslotPath;

                if (isset($request->oldpromoslot[$index])) {
                    Storage::disk('public')->delete($request->oldpromoslot[$index]);
                }
            } else {
                $item['promoslot'] = $request->oldpromoslot[$index];
            }

            $url = 'https://l4soyk0.com/api/datawebsite/' . $id[$index];
            $token = 'youk1llmyfvcking3x';

            $jsonData = json_encode($item);

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $token,
                'Content-Type: application/json',
            ));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PUT');
            curl_setopt($curl, CURLOPT_POSTFIELDS, $jsonData);
            $response = curl_exec($curl);

            if (curl_errno($curl)) {
                $errorMessage = curl_error($curl);
                curl_close($curl);
                return 'Error: ' . $errorMessage;
            }

            curl_close($curl);

            $data = json_decode($response, true);
        }
        return response()->json(['success' => 'Data berhasil diupdate!']);
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

            $this->deleteImg($id);

            $url = 'https://l4soyk0.com/api/datawebsite/' . $id;
            $token = 'youk1llmyfvcking3x';

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer ' . $token,
            ));
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'DELETE'); // Tentukan metode DELETE
            $response = curl_exec($curl);

            // Cek apakah ada error saat melakukan permintaan cURL
            if (curl_errno($curl)) {
                $errorMessage = curl_error($curl);
                curl_close($curl);
                return 'Error: ' . $errorMessage;
            }

            curl_close($curl);

            $data = json_decode($response, true);

            if ($data !== null) {
                // return 'Sukses'; 
            } else {
                // return 'Gagal mengirim permintaan DELETE ke API.'; 
            }
        }
        return response()->json(['success' => 'Data berhasil dihapus!']);
    }

    public function deleteImg($id)
    {
        $response = Http::withHeaders([
            'Authorization: Bearer youk1llmyfvcking3x'
        ])->get("https://l4soyk0.com/api/datawebsite/{$id}");

        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['data'];

            $gambar = $data['gambar'] ?? null;
            $img = $data['img'] ?? null;
            $promotogel = $data['promotogel'] ?? null;
            $promoslot = $data['promoslot'] ?? null;

            if ($gambar) {
                Storage::disk('public')->delete($gambar);
            }
            if ($img) {
                Storage::disk('public')->delete($img);
            }
            if ($promotogel) {
                Storage::disk('public')->delete($promotogel);
            }
            if ($promoslot) {
                Storage::disk('public')->delete($promoslot);
            }
        } else {
            // $statusCode = $response->status();
            // $errorMessage = $response->json()['message'];
        }
    }
}
