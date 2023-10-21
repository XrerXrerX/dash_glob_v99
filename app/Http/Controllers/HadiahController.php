<?php

namespace App\Http\Controllers;

use App\Models\Hadiahbb;
use App\Models\Hadiahdsk;
use App\Models\Hadiahfull;
use App\Models\Hadiahprize;
use App\Models\Hadiahv2;
use App\Models\paito_pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

use function Ramsey\Uuid\v1;

class HadiahController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     */
    public function index(Request $request, $bo)
    {
        $queryParams = $request->query->all();
        $param1Tipe = $request->query->get('tipe');


        if ($bo == '') {
            $bo = 'arwanatoto';
        }

        $hadiahbb = Hadiahbb::where('website', '=', $bo)->latest()->get();
        $hadiahdsk = Hadiahdsk::where('website', '=', $bo)->latest()->get();
        $hadiahfull = Hadiahfull::where('website', '=', $bo)->latest()->get();
        $hadiahprize = Hadiahprize::where('website', '=', $bo)->latest()->get();
        $hadiahv2 = Hadiahv2::where('website', '=', $bo)->latest()->get();

        $datahadiahv2 = [];
        foreach ($hadiahv2 as $idx => $hv2) {
            $datahadiahv2[$idx] = [
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "4D",
                    "minbet" => $hv2->betv24dmin,
                    "diskon" => $hv2->betv24ddisk,
                    "hadiah" => $hv2->betv24dhd,
                    "keterangan" => $hv2->betv24dket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "3D",
                    "minbet" => $hv2->betv23dmin,
                    "diskon" => $hv2->betv23ddisk,
                    "hadiah" => $hv2->betv23dhd,
                    "keterangan" => $hv2->betv23dket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "2D",
                    "minbet" => $hv2->betv22dmin,
                    "diskon" => $hv2->betv22ddisk,
                    "hadiah" => $hv2->betv22dhd,
                    "keterangan" => $hv2->betv22dket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Colok Bebas",
                    "minbet" => $hv2->betv2cbmin,
                    "diskon" => $hv2->betv2cbdisk,
                    "hadiah" => $hv2->betv2cbhd,
                    "keterangan" => $hv2->betv2cbket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Colok Bebas 2D",
                    "minbet" => $hv2->betv2cb2dmin,
                    "diskon" => $hv2->betv2cb2ddisk,
                    "hadiah" => $hv2->betv2cb2dhd,
                    "keterangan" => $hv2->betv2cb2dket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Colok Bebas 2D 3 Angka",
                    "minbet" => $hv2->betv2cb2d3min,
                    "diskon" => $hv2->betv2cb2d3disk,
                    "hadiah" => $hv2->betv2cb2d3hd,
                    "keterangan" => $hv2->betv2cb2d3ket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Colok Bebas 2D 4 Angka",
                    "minbet" => $hv2->betv2cb2d4min,
                    "diskon" => $hv2->betv2cb2d4disk,
                    "hadiah" => $hv2->betv2cb2d4hd,
                    "keterangan" => $hv2->betv2cb2d4ket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Colok Naga",
                    "minbet" => $hv2->betv2cbnagamin,
                    "diskon" => $hv2->betv2cbnagadisk,
                    "hadiah" => $hv2->betv2cbnagahd,
                    "keterangan" => $hv2->betv2cbnagaket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Colok Naga 4 Angka",
                    "minbet" => $hv2->betv2cbnaga4min,
                    "diskon" => $hv2->betv2cbnaga4disk,
                    "hadiah" => $hv2->betv2cbnaga4hd,
                    "keterangan" => $hv2->betv2cbnaga4ket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Colok Jitu",
                    "minbet" => $hv2->betv2cjitumin,
                    "diskon" => $hv2->betv2cjitudisk,
                    "hadiah" => $hv2->betv2cjituhd,
                    "keterangan" => $hv2->betv2cjituket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Tengah Tepi",
                    "minbet" => $hv2->betv2ttepimin,
                    "diskon" => $hv2->betv2ttepidisk,
                    "hadiah" => $hv2->betv2ttepihd,
                    "keterangan" => $hv2->betv2ttepiket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Dasar",
                    "minbet" => $hv2->betv2dsrmin,
                    "diskon" => $hv2->betv2dsrdisk,
                    "hadiah" => $hv2->betv2dsrhd,
                    "keterangan" => $hv2->betv2dsrket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Kombinasi",
                    "minbet" => $hv2->betv2kombmin,
                    "diskon" => $hv2->betv2kombdisk,
                    "hadiah" => $hv2->betv2kombhd,
                    "keterangan" => $hv2->betv2kombket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "50-50",
                    "minbet" => $hv2->betv25050min,
                    "diskon" => $hv2->betv25050disk,
                    "hadiah" => $hv2->betv25050hd,
                    "keterangan" => $hv2->betv25050ket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Siho",
                    "minbet" => $hv2->betv2shiomin,
                    "diskon" => $hv2->betv2shiodisk,
                    "hadiah" => $hv2->betv2shiohd,
                    "keterangan" => $hv2->betv2shioket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Silang Homo",
                    "minbet" => $hv2->betv2shomomin,
                    "diskon" => $hv2->betv2shomodisk,
                    "hadiah" => $hv2->betv2shomohd,
                    "keterangan" => $hv2->betv2shomoket
                ],
                [
                    "id" => $hv2->id,
                    "website" => $hv2->website,
                    "jenisbet" => "Kembang Kempis",
                    "minbet" => $hv2->betv2kkempismin,
                    "diskon" => $hv2->betv2kkempisdisk,
                    "hadiah" => $hv2->betv2kkempishd,
                    "keterangan" => $hv2->betv2kkempisket
                ],

            ];
        }

        $datahadiahprize = [];
        foreach ($hadiahprize as $idx => $hprize) {
            $datahadiahprize[$idx] = [
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "4D (PRIZE 1)",
                    "minbet" => $hprize->prize4dp1min,
                    "diskon" => $hprize->prize4dp1disk,
                    "hadiah" => $hprize->prize4dp1hd,
                    "keterangan" => $hprize->prize4dp1ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "4D (PRIZE 2)",
                    "minbet" => $hprize->prize4dp2min,
                    "diskon" => $hprize->prize4dp2disk,
                    "hadiah" => $hprize->prize4dp2hd,
                    "keterangan" => $hprize->prize4dp2ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "4D (PRIZE 3)",
                    "minbet" => $hprize->prize4dp3min,
                    "diskon" => $hprize->prize4dp3disk,
                    "hadiah" => $hprize->prize4dp3hd,
                    "keterangan" => $hprize->prize4dp3ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "3D (PRIZE 1)",
                    "minbet" => $hprize->prize3dp1min,
                    "diskon" => $hprize->prize3dp1disk,
                    "hadiah" => $hprize->prize3dp1hd,
                    "keterangan" => $hprize->prize3dp1ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "3D (PRIZE 2)",
                    "minbet" => $hprize->prize3dp2min,
                    "diskon" => $hprize->prize3dp2disk,
                    "hadiah" => $hprize->prize3dp2hd,
                    "keterangan" => $hprize->prize3dp2ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "3D (PRIZE 3)",
                    "minbet" => $hprize->prize3dp3min,
                    "diskon" => $hprize->prize3dp3disk,
                    "hadiah" => $hprize->prize3dp3hd,
                    "keterangan" => $hprize->prize3dp3ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "2D Depan/Tengah/Belakang (PRIZE 1)",
                    "minbet" => $hprize->prize2dp1min,
                    "diskon" => $hprize->prize2dp1disk,
                    "hadiah" => $hprize->prize2dp1hd,
                    "keterangan" => $hprize->prize2dp1ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "2D Depan/Tengah/Belakang (PRIZE 2)",
                    "minbet" => $hprize->prize2dp2min,
                    "diskon" => $hprize->prize2dp2disk,
                    "hadiah" => $hprize->prize2dp2hd,
                    "keterangan" => $hprize->prize2dp2ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "2D Depan/Tengah/Belakang (PRIZE 3)",
                    "minbet" => $hprize->prize2dp3min,
                    "diskon" => $hprize->prize2dp3disk,
                    "hadiah" => $hprize->prize2dp3hd,
                    "keterangan" => $hprize->prize2dp3ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Colok Bebas",
                    "minbet" => $hprize->prizecbmin,
                    "diskon" => $hprize->prizecbdisk,
                    "hadiah" => $hprize->prizecbhd,
                    "keterangan" => $hprize->prizecbket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Colok Bebas 2D",
                    "minbet" => $hprize->prizecb2dmin,
                    "diskon" => $hprize->prizecb2ddisk,
                    "hadiah" => $hprize->prizecb2dhd,
                    "keterangan" => $hprize->prizecb2dket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Colok Bebas 2D 3 Angka",
                    "minbet" => $hprize->prizecb2d3min,
                    "diskon" => $hprize->prizecb2d3disk,
                    "hadiah" => $hprize->prizecb2d3hd,
                    "keterangan" => $hprize->prizecb2d3ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Colok Bebas 2D 4 Angka",
                    "minbet" => $hprize->prizecb2d4min,
                    "diskon" => $hprize->prizecb2d4disk,
                    "hadiah" => $hprize->prizecb2d4hd,
                    "keterangan" => $hprize->prizecb2d4ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Colok Naga",
                    "minbet" => $hprize->prizecbnagamin,
                    "diskon" => $hprize->prizecbnagadisk,
                    "hadiah" => $hprize->prizecbnagahd,
                    "keterangan" => $hprize->prizecbnagaket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Colok Naga 4 Angka",
                    "minbet" => $hprize->prizecbnaga4min,
                    "diskon" => $hprize->prizecbnaga4disk,
                    "hadiah" => $hprize->prizecbnaga4hd,
                    "keterangan" => $hprize->prizecbnaga4ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Colok Jitu",
                    "minbet" => $hprize->prizecjitumin,
                    "diskon" => $hprize->prizecjitudisk,
                    "hadiah" => $hprize->prizecjituhd,
                    "keterangan" => $hprize->prizecjituket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Tengah Tepi",
                    "minbet" => $hprize->prizettepimin,
                    "diskon" => $hprize->prizettepidisk,
                    "hadiah" => $hprize->prizettepihd,
                    "keterangan" => $hprize->prizettepiket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Dasar",
                    "minbet" => $hprize->prizedsrmin,
                    "diskon" => $hprize->prizedsrdisk,
                    "hadiah" => $hprize->prizedsrhd,
                    "keterangan" => $hprize->prizedsrket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Kombinasi",
                    "minbet" => $hprize->prizekombmin,
                    "diskon" => $hprize->prizekombdisk,
                    "hadiah" => $hprize->prizekombhd,
                    "keterangan" => $hprize->prizekombket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "50-50",
                    "minbet" => $hprize->prize5050min,
                    "diskon" => $hprize->prize5050disk,
                    "hadiah" => $hprize->prize5050hd,
                    "keterangan" => $hprize->prize5050ket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Siho",
                    "minbet" => $hprize->prizeshiomin,
                    "diskon" => $hprize->prizeshiodisk,
                    "hadiah" => $hprize->prizeshiohd,
                    "keterangan" => $hprize->prizeshioket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Silang Homo",
                    "minbet" => $hprize->prizeshomomin,
                    "diskon" => $hprize->prizeshomodisk,
                    "hadiah" => $hprize->prizeshomohd,
                    "keterangan" => $hprize->prizeshomoket
                ],
                [
                    "id" => $hprize->id,
                    "website" => $hprize->website,
                    "jenisbet" => "Kembang Kempis",
                    "minbet" => $hprize->prizekkempismin,
                    "diskon" => $hprize->prizekkempisdisk,
                    "hadiah" => $hprize->prizekkempishd,
                    "keterangan" => $hprize->prizekkempisket
                ],
            ];
        }

        $datahadiahfull = [];
        foreach ($hadiahfull as $idx => $hfull) {
            $datahadiahfull[$idx] = [
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "4D",
                    "minbet" => $hfull->full4dmin,
                    "diskon" => $hfull->full4ddisk,
                    "hadiah" => $hfull->full4dhd,
                    "keterangan" => $hfull->full4dket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "3D",
                    "minbet" => $hfull->full3dmin,
                    "diskon" => $hfull->full3ddisk,
                    "hadiah" => $hfull->full3dhd,
                    "keterangan" => $hfull->full3dket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "2D Belakang",
                    "minbet" => $hfull->full2dblkmin,
                    "diskon" => $hfull->full2dblkdisk,
                    "hadiah" => $hfull->full2dblkhd,
                    "keterangan" => $hfull->full2dblkket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Colok Bebas",
                    "minbet" => $hfull->fullcbmin,
                    "diskon" => $hfull->fullcbdisk,
                    "hadiah" => $hfull->fullcbhd,
                    "keterangan" => $hfull->fullcbket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Colok Bebas 2D",
                    "minbet" => $hfull->fullcb2dmin,
                    "diskon" => $hfull->fullcb2ddisk,
                    "hadiah" => $hfull->fullcb2dhd,
                    "keterangan" => $hfull->fullcb2dket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Colok Bebas 2D 3 Angka",
                    "minbet" => $hfull->fullcb2d3min,
                    "diskon" => $hfull->fullcb2d3disk,
                    "hadiah" => $hfull->fullcb2d3hd,
                    "keterangan" => $hfull->fullcb2d3ket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Colok Bebas 2D 4 Angka",
                    "minbet" => $hfull->fullcb2d4min,
                    "diskon" => $hfull->fullcb2d4disk,
                    "hadiah" => $hfull->fullcb2d4hd,
                    "keterangan" => $hfull->fullcb2d4ket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Colok Naga",
                    "minbet" => $hfull->fullcbnagamin,
                    "diskon" => $hfull->fullcbnagadisk,
                    "hadiah" => $hfull->fullcbnagahd,
                    "keterangan" => $hfull->fullcbnagaket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Colok Naga 4 Angka",
                    "minbet" => $hfull->fullcbnaga4min,
                    "diskon" => $hfull->fullcbnaga4disk,
                    "hadiah" => $hfull->fullcbnaga4hd,
                    "keterangan" => $hfull->fullcbnaga4ket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Colok Jitu",
                    "minbet" => $hfull->fullcjitumin,
                    "diskon" => $hfull->fullcjitudisk,
                    "hadiah" => $hfull->fullcjituhd,
                    "keterangan" => $hfull->fullcjituket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Tengah Tepi",
                    "minbet" => $hfull->fullttepimin,
                    "diskon" => $hfull->fullttepidisk,
                    "hadiah" => $hfull->fullttepihd,
                    "keterangan" => $hfull->fullttepiket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Dasar",
                    "minbet" => $hfull->fulldsrmin,
                    "diskon" => $hfull->fulldsrdisk,
                    "hadiah" => $hfull->fulldsrhd,
                    "keterangan" => $hfull->fulldsrket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Kombinasi",
                    "minbet" => $hfull->fullkombmin,
                    "diskon" => $hfull->fullkombdisk,
                    "hadiah" => $hfull->fullkombhd,
                    "keterangan" => $hfull->fullkombket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "50-50",
                    "minbet" => $hfull->full5050min,
                    "diskon" => $hfull->full5050disk,
                    "hadiah" => $hfull->full5050hd,
                    "keterangan" => $hfull->full5050ket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Shino",
                    "minbet" => $hfull->fullshiomin,
                    "diskon" => $hfull->fullshiodisk,
                    "hadiah" => $hfull->fullshiohd,
                    "keterangan" => $hfull->fullshioket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Silang Homo",
                    "minbet" => $hfull->fullshomomin,
                    "diskon" => $hfull->fullshomodisk,
                    "hadiah" => $hfull->fullshomohd,
                    "keterangan" => $hfull->fullshomoket
                ],
                [
                    "id" => $hfull->id,
                    "website" => $hfull->website,
                    "jenisbet" => "Kembang Kempis",
                    "minbet" => $hfull->fullkkempismin,
                    "diskon" => $hfull->fullkkempisdisk,
                    "hadiah" => $hfull->fullkkempishd,
                    "keterangan" => $hfull->fullkkempisket
                ]

            ];
        }
        $datahadiahbb = [];
        foreach ($hadiahbb as $idx => $hbb) {
            $datahadiahbb[$idx] = [
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "4D (TEPAT)",
                    "jen" => 1,
                    "minbet" => $hbb->betbb4dtptmin,
                    "diskon" => $hbb->betbb4dtptdisk,
                    "hadiah" => $hbb->betbb4dtpthd,
                    "keterangan" => $hbb->betbb4dtptket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "4D (TERBALIK)",
                    "jen" => 2,
                    "minbet" => $hbb->betbb4dblkmin,
                    "diskon" => $hbb->betbb4dblkdisk,
                    "hadiah" => $hbb->betbb4dblkhd,
                    "keterangan" => $hbb->betbb4dblkket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "3D (TEPAT)",
                    "jen" => 3,
                    "minbet" => $hbb->betbb3dtptmin,
                    "diskon" => $hbb->betbb3dtptdisk,
                    "hadiah" => $hbb->betbb3dtpthd,
                    "keterangan" => $hbb->betbb3dtptket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "3D (TERBALIK)",
                    "jen" => 4,
                    "minbet" => $hbb->betbb3dblkmin,
                    "diskon" => $hbb->betbb3dblkdisk,
                    "hadiah" => $hbb->betbb3dblkhd,
                    "keterangan" => $hbb->betbb3dblkket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "2D (TEPAT)",
                    "jen" => 5,
                    "minbet" => $hbb->betbb2dtptblkmin,
                    "diskon" => $hbb->betbb2dtptblkdisk,
                    "hadiah" => $hbb->betbb2dtptblkhd,
                    "keterangan" => $hbb->betbb2dtptblkket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "2D (TERBALIK)",
                    "jen" => 6,
                    "minbet" => $hbb->betbb2dblkmin,
                    "diskon" => $hbb->betbb2dblkdisk,
                    "hadiah" => $hbb->betbb2dblkhd,
                    "keterangan" => $hbb->betbb2dblkket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Colok Bebas",
                    "jen" => 7,
                    "minbet" => $hbb->betbbcbmin,
                    "diskon" => $hbb->betbbcbdisk,
                    "hadiah" => $hbb->betbbcbhd,
                    "keterangan" => $hbb->betbbcbket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Colok Bebas 2D",
                    "jen" => 8,
                    "minbet" => $hbb->betbbcb2dmin,
                    "diskon" => $hbb->betbbcb2ddisk,
                    "hadiah" => $hbb->betbbcb2dhd,
                    "keterangan" => $hbb->betbbcb2dket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Colok Bebas 2D 3 Angka",
                    "jen" => 9,
                    "minbet" => $hbb->betbbcb2d3min,
                    "diskon" => $hbb->betbbcb2d3disk,
                    "hadiah" => $hbb->betbbcb2d3hd,
                    "keterangan" => $hbb->betbbcb2d3ket,

                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Colok Bebas 2D 4 Angka",
                    "jen" => 10,
                    "minbet" => $hbb->betbbcb2d4min,
                    "diskon" => $hbb->betbbcb2d4disk,
                    "hadiah" => $hbb->betbbcb2d4hd,
                    "keterangan" => $hbb->betbbcb2d4ket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Colok Naga",
                    "jen" => 11,
                    "minbet" => $hbb->betbbcbnagamin,
                    "diskon" => $hbb->betbbcbnagadisk,
                    "hadiah" => $hbb->betbbcbnagahd,
                    "keterangan" => $hbb->betbbcbnagaket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Colok Naga 4 Angka",
                    "jen" => 12,
                    "minbet" => $hbb->betbbcbnaga4min,
                    "diskon" => $hbb->betbbcbnaga4disk,
                    "hadiah" => $hbb->betbbcbnaga4hd,
                    "keterangan" => $hbb->betbbcbnaga4ket,
                ],
                [
                    "id" => $hbb->id,
                    "jenisbet" => "Colok Jitu",
                    "jen" => 13,
                    "minbet" => $hbb->betbbcjitumin,
                    "diskon" => $hbb->betbbcjitudisk,
                    "hadiah" => $hbb->betbbcjituhd,
                    "keterangan" => $hbb->betbbcjituket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Tengah Tepi",
                    "jen" => 14,
                    "minbet" => $hbb->betbbttepimin,
                    "diskon" => $hbb->betbbttepidisk,
                    "hadiah" => $hbb->betbbttepihd,
                    "keterangan" => $hbb->betbbttepiket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Dasar",
                    "jen" => 15,
                    "minbet" => $hbb->betbbdsrmin,
                    "diskon" => $hbb->betbbdsrdisk,
                    "hadiah" => $hbb->betbbdsrhd,
                    "keterangan" => $hbb->betbbdsrket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Kombinasi",
                    "jen" => 16,
                    "minbet" => $hbb->betbbkombmin,
                    "diskon" => $hbb->betbbkombdisk,
                    "hadiah" => $hbb->betbbkombhd,
                    "keterangan" => $hbb->betbbkombket,

                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "50-50",
                    "jen" => 17,
                    "minbet" => $hbb->betbb5050min,
                    "diskon" => $hbb->betbb5050disk,
                    "hadiah" => $hbb->betbb5050hd,
                    "keterangan" => $hbb->betbb5050ket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Shio",
                    "jen" => 18,
                    "minbet" => $hbb->betbbshiomin,
                    "diskon" => $hbb->betbbshiodisk,
                    "hadiah" => $hbb->betbbshiohd,
                    "keterangan" => $hbb->betbbshioket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Silang Homo",
                    "jen" => 19,
                    "minbet" => $hbb->betbbshomomin,
                    "diskon" => $hbb->betbbshomodisk,
                    "hadiah" => $hbb->betbbshomohd,
                    "keterangan" => $hbb->betbbshomoket,
                ],
                [
                    "id" => $hbb->id,
                    "website" => $hbb->website,
                    "jenisbet" => "Kembang Kempis",
                    "jen" => 20,
                    "minbet" => $hbb->betbbkkempismin,
                    "diskon" => $hbb->betbbkkempisdisk,
                    "hadiah" => $hbb->betbbkkempishd,
                    "keterangan" => $hbb->betbbkkempisket,
                ]
            ];
        }

        $datahadiahdsk = [];
        foreach ($hadiahdsk as $idx => $hdsk) {
            $datahadiahdsk[$idx] = [
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "4D",
                    "jen" => 1,
                    "minbet" => $hdsk->disc4dmin,
                    "diskon" => $hdsk->disc4ddisk,
                    "hadiah" => $hdsk->disc4dhd,
                    "keterangan" => $hdsk->disc4dket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "3D",
                    "jen" => 2,
                    "minbet" => $hdsk->disc3dmin,
                    "diskon" => $hdsk->disc3ddisk,
                    "hadiah" => $hdsk->disc3dhd,
                    "keterangan" => $hdsk->disc3dket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "2D Belakang",
                    "jen" => 3,
                    "minbet" => $hdsk->disc2dblkmin,
                    "diskon" => $hdsk->disc2dblkdisk,
                    "hadiah" => $hdsk->disc2dblkhd,
                    "keterangan" => $hdsk->disc2dblkket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "2D Depan",
                    "jen" => 4,
                    "minbet" => $hdsk->disc2ddpnmin,
                    "diskon" => $hdsk->disc2ddpndisk,
                    "hadiah" => $hdsk->disc2ddpnhd,
                    "keterangan" => $hdsk->disc2ddpnket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "2D Tengah",
                    "jen" => 5,
                    "minbet" => $hdsk->disc2dtghmin,
                    "diskon" => $hdsk->disc2dtghdisk,
                    "hadiah" => $hdsk->disc2dtghhd,
                    "keterangan" => $hdsk->disc2dtghket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Colok Bebas",
                    "jen" => 6,
                    "minbet" => $hdsk->disccbmin,
                    "diskon" => $hdsk->disccbdisk,
                    "hadiah" => $hdsk->disccbhd,
                    "keterangan" => $hdsk->disccbket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Colok Bebas 2D",
                    "jen" => 7,
                    "minbet" => $hdsk->disccb2dmin,
                    "diskon" => $hdsk->disccb2ddisk,
                    "hadiah" => $hdsk->disccb2dhd,
                    "keterangan" => $hdsk->disccb2dket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Colok Bebas 2D 3 Angka",
                    "jen" => 8,
                    "minbet" => $hdsk->disccb2d3min,
                    "diskon" => $hdsk->disccb2d3disk,
                    "hadiah" => $hdsk->disccb2d3hd,
                    "keterangan" => $hdsk->disccb2d3ket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Colok Bebas 2D 4 Angka",
                    "jen" => 9,
                    "minbet" => $hdsk->disccb2d4min,
                    "diskon" => $hdsk->disccb2d4disk,
                    "hadiah" => $hdsk->disccb2d4hd,
                    "keterangan" => $hdsk->disccb2d4ket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Colok Naga",
                    "jen" => 10,
                    "minbet" => $hdsk->disccbnagamin,
                    "diskon" => $hdsk->disccbnagadisk,
                    "hadiah" => $hdsk->disccbnagahd,
                    "keterangan" => $hdsk->disccbnagaket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Colok Naga 4 Angka",
                    "jen" => 11,
                    "minbet" => $hdsk->disccbnaga4min,
                    "diskon" => $hdsk->disccbnaga4disk,
                    "hadiah" => $hdsk->disccbnaga4hd,
                    "keterangan" => $hdsk->disccbnaga4ket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Colok Jitu",
                    "jen" => 12,
                    "minbet" => $hdsk->disccjitumin,
                    "diskon" => $hdsk->disccjitudisk,
                    "hadiah" => $hdsk->disccjituhd,
                    "keterangan" => $hdsk->disccjituket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Tengah Tepi",
                    "jen" => 13,
                    "minbet" => $hdsk->discttepimin,
                    "diskon" => $hdsk->discttepidisk,
                    "hadiah" => $hdsk->discttepihd,
                    "keterangan" => $hdsk->discttepiket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Dasar",
                    "jen" => 14,
                    "minbet" => $hdsk->discdsrmin,
                    "diskon" => $hdsk->discdsrdisk,
                    "hadiah" => $hdsk->discdsrhd,
                    "keterangan" => $hdsk->discdsrket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Kombinasi",
                    "jen" => 15,
                    "minbet" => $hdsk->disckombmin,
                    "diskon" => $hdsk->disckombdisk,
                    "hadiah" => $hdsk->disckombhd,
                    "keterangan" => $hdsk->disckombket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "50-50",
                    "jen" => 16,
                    "minbet" => $hdsk->disc5050min,
                    "diskon" => $hdsk->disc5050disk,
                    "hadiah" => $hdsk->disc5050hd,
                    "keterangan" => $hdsk->disc5050ket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "siho",
                    "jen" => 17,
                    "minbet" => $hdsk->discshiomin,
                    "diskon" => $hdsk->discshiodisk,
                    "hadiah" => $hdsk->discshiohd,
                    "keterangan" => $hdsk->discshioket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Silang Homo",
                    "jen" => 18,
                    "minbet" => $hdsk->discshomomin,
                    "diskon" => $hdsk->discshomodisk,
                    "hadiah" => $hdsk->discshomohd,
                    "keterangan" => $hdsk->discshomoket
                ],
                [
                    "id" => $hdsk->id,
                    "website" => $hdsk->website,
                    "jenisbet" => "Kembang Kempis",
                    "jen" => 19,
                    "minbet" => $hdsk->disckkempismin,
                    "diskon" => $hdsk->disckkempisdisk,
                    "hadiah" => $hdsk->disckkempishd,
                    "keterangan" => $hdsk->disckkempisket
                ],


            ];
        }

        $alldata = [
            "datahadiahbb" => $datahadiahbb,
            "datahadiahdsk" => $datahadiahdsk,
            "datahadiahfull" => $datahadiahfull,
            "datahadiahprize" => $datahadiahprize,
            "datahadiahv2" => $datahadiahv2
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x'
        ])->get('https://l4soyk0.com/api/datawebsite/');
        $responseBody = $response->getBody()->getContents();
        $data = json_decode($responseBody, true);
        $websites = array_column($data['data'], 'website');

        return view('web.hadiah.index', [
            'title' => 'Hadiah & Diskon',
            'data' => json_encode($alldata),
            'databo' => $websites,
            'bo' => $bo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.hadiah.create', [
            'title' => 'Hadiah & Diskon'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_berita' => 'required',
            'desk_berita' => 'required',
            'tgl_berita' => 'required',
            'news_wa' => 'required',
            'news_twit' => 'required',
            'news_youtube' => 'required',
            'news_facebook' => 'required',
            'news_instagram' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            Hadiahbb::create($request->all());
        }

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Hadiahbb $Hadiahbb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = explode("&", $id);
        $part1 = $data[0];
        $part1 = explode("values[]=", $part1);
        $part1 = array_slice($part1, 1);
        $ids = $part1[0];

        $part2 = $data[1];
        $part2 = explode("values[]=", $part2);
        $part2 = array_slice($part2, 1);
        $tipe = $part2[0];

        $part3 = $data[2];
        $part3 = explode("values[]=", $part3);
        $part3 = array_slice($part3, 1);
        $website = $part3[0];

        if ($tipe == 'datahadiahbb') {
            $item = Hadiahbb::where('website', '=', $website)->latest()->first();
        } else if ($tipe == 'datahadiahdsk') {
            $item = Hadiahdsk::where('website', '=', $website)->latest()->first();
        } else if ($tipe == 'datahadiahfull') {
            $item = Hadiahfull::where('website', '=', $website)->latest()->first();
        } else if ($tipe == 'datahadiahprize') {
            $item = Hadiahprize::where('website', '=', $website)->latest()->first();
        } else if ($tipe == 'datahadiahv2') {
            $item = Hadiahv2::where('website', '=', $website)->latest()->first();
        }

        return view('web.hadiah.update', [
            'title' => 'Hadiah & Diskon',
            'data' => $item,
            'id' => $ids,
            'tipe' => $tipe,
            'website' => $website,
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
                $paito[$index] = Hadiahbb::where('id', $ids)->first();
            }
        } else {
            $paito = [Hadiahbb::where('id', $id)->first()];
        }

        return view('web.hadiah.update', [
            'title' => 'Hadiah & Diskon',
            'data' => $paito,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
            'disabled' => 'disabled'
        ]);
    }


    public function data($id)
    {
        $data = Hadiahbb::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $tipe = $request->tipe;
        $id = $request->id;
        if ($tipe == 'datahadiahbb') {
            $result = Hadiahbb::find($id);
            $result->betbb4dtptmin = $request->betbb4dtptmin;
            $result->betbb4dtptdisk = $request->betbb4dtptdisk;
            $result->betbb4dtpthd = $request->betbb4dtpthd;
            $result->betbb4dtptket = $request->betbb4dtptket;
            $result->betbb4dblkmin = $request->betbb4dblkmin;
            $result->betbb4dblkdisk = $request->betbb4dblkdisk;
            $result->betbb4dblkhd = $request->betbb4dblkhd;
            $result->betbb4dblkket = $request->betbb4dblkket;
            $result->betbb3dtptmin = $request->betbb3dtptmin;
            $result->betbb3dtptdisk = $request->betbb3dtptdisk;
            $result->betbb3dtpthd = $request->betbb3dtpthd;
            $result->betbb3dtptket = $request->betbb3dtptket;
            $result->betbb3dblkmin = $request->betbb3dblkmin;
            $result->betbb3dblkdisk = $request->betbb3dblkdisk;
            $result->betbb3dblkhd = $request->betbb3dblkhd;
            $result->betbb3dblkket = $request->betbb3dblkket;
            $result->betbb2dtptblkmin = $request->betbb2dtptblkmin;
            $result->betbb2dtptblkdisk = $request->betbb2dtptblkdisk;
            $result->betbb2dtptblkhd = $request->betbb2dtptblkhd;
            $result->betbb2dtptblkket = $request->betbb2dtptblkket;
            $result->betbb2dblkmin = $request->betbb2dblkmin;
            $result->betbb2dblkdisk = $request->betbb2dblkdisk;
            $result->betbb2dblkhd = $request->betbb2dblkhd;
            $result->betbb2dblkket = $request->betbb2dblkket;
            $result->betbbcbmin = $request->betbbcbmin;
            $result->betbbcbdisk = $request->betbbcbdisk;
            $result->betbbcbhd = $request->betbbcbhd;
            $result->betbbcbket = $request->betbbcbket;
            $result->betbbcb2dmin = $request->betbbcb2dmin;
            $result->betbbcb2ddisk = $request->betbbcb2ddisk;
            $result->betbbcb2dhd = $request->betbbcb2dhd;
            $result->betbbcb2dket = $request->betbbcb2dket;
            $result->betbbcb2d3min = $request->betbbcb2d3min;
            $result->betbbcb2d3disk = $request->betbbcb2d3disk;
            $result->betbbcb2d3hd = $request->betbbcb2d3hd;
            $result->betbbcb2d3ket = $request->betbbcb2d3ket;
            $result->betbbcb2d4min = $request->betbbcb2d4min;
            $result->betbbcb2d4disk = $request->betbbcb2d4disk;
            $result->betbbcb2d4hd = $request->betbbcb2d4hd;
            $result->betbbcb2d4ket = $request->betbbcb2d4ket;
            $result->betbbcbnagamin = $request->betbbcbnagamin;
            $result->betbbcbnagadisk = $request->betbbcbnagadisk;
            $result->betbbcbnagahd = $request->betbbcbnagahd;
            $result->betbbcbnagaket = $request->betbbcbnagaket;
            $result->betbbcbnaga4min = $request->betbbcbnaga4min;
            $result->betbbcbnaga4disk = $request->betbbcbnaga4disk;
            $result->betbbcbnaga4hd = $request->betbbcbnaga4hd;
            $result->betbbcbnaga4ket = $request->betbbcbnaga4ket;
            $result->betbbcjitumin = $request->betbbcjitumin;
            $result->betbbcjitudisk = $request->betbbcjitudisk;
            $result->betbbcjituhd = $request->betbbcjituhd;
            $result->betbbcjituket = $request->betbbcjituket;
            $result->betbbttepimin = $request->betbbttepimin;
            $result->betbbttepidisk = $request->betbbttepidisk;
            $result->betbbttepihd = $request->betbbttepihd;
            $result->betbbttepiket = $request->betbbttepiket;
            $result->betbbdsrmin = $request->betbbdsrmin;
            $result->betbbdsrdisk = $request->betbbdsrdisk;
            $result->betbbdsrhd = $request->betbbdsrhd;
            $result->betbbdsrket = $request->betbbdsrket;
            $result->betbbkombmin = $request->betbbkombmin;
            $result->betbbkombdisk = $request->betbbkombdisk;
            $result->betbbkombhd = $request->betbbkombhd;
            $result->betbbkombket = $request->betbbkombket;
            $result->betbb5050min = $request->betbb5050min;
            $result->betbb5050disk = $request->betbb5050disk;
            $result->betbb5050hd = $request->betbb5050hd;
            $result->betbb5050ket = $request->betbb5050ket;
            $result->betbbshiomin = $request->betbbshiomin;
            $result->betbbshiodisk = $request->betbbshiodisk;
            $result->betbbshiohd = $request->betbbshiohd;
            $result->betbbshioket = $request->betbbshioket;
            $result->betbbshomomin = $request->betbbshomomin;
            $result->betbbshomodisk = $request->betbbshomodisk;
            $result->betbbshomohd = $request->betbbshomohd;
            $result->betbbshomoket = $request->betbbshomoket;
            $result->betbbkkempismin = $request->betbbkkempismin;
            $result->betbbkkempisdisk = $request->betbbkkempisdisk;
            $result->betbbkkempishd = $request->betbbkkempishd;
            $result->betbbkkempisket = $request->betbbkkempisket;
            $result->save();
        } else if ($tipe == 'datahadiahdsk') {

            $result = Hadiahdsk::find($id);
            $result->disc4dmin = $request->disc4dmin;
            $result->disc4ddisk = $request->disc4ddisk;
            $result->disc4dhd = $request->disc4dhd;
            $result->disc4dket = $request->disc4dket;
            $result->disc3dmin = $request->disc3dmin;
            $result->disc3ddisk = $request->disc3ddisk;
            $result->disc3dhd = $request->disc3dhd;
            $result->disc3dket = $request->disc3dket;
            $result->disc2dblkmin = $request->disc2dblkmin;
            $result->disc2dblkdisk = $request->disc2dblkdisk;
            $result->disc2dblkhd = $request->disc2dblkhd;
            $result->disc2dblkket = $request->disc2dblkket;
            $result->disc2ddpnmin = $request->disc2ddpnmin;
            $result->disc2ddpndisk = $request->disc2ddpndisk;
            $result->disc2ddpnhd = $request->disc2ddpnhd;
            $result->disc2ddpnket = $request->disc2ddpnket;
            $result->disc2dtghmin = $request->disc2dtghmin;
            $result->disc2dtghdisk = $request->disc2dtghdisk;
            $result->disc2dtghhd = $request->disc2dtghhd;
            $result->disc2dtghket = $request->disc2dtghket;
            $result->disccbmin = $request->disccbmin;
            $result->disccbdisk = $request->disccbdisk;
            $result->disccbhd = $request->disccbhd;
            $result->disccbket = $request->disccbket;
            $result->disccb2dmin = $request->disccb2dmin;
            $result->disccb2ddisk = $request->disccb2ddisk;
            $result->disccb2dhd = $request->disccb2dhd;
            $result->disccb2dket = $request->disccb2dket;
            $result->disccb2d3min = $request->disccb2d3min;
            $result->disccb2d3disk = $request->disccb2d3disk;
            $result->disccb2d3hd = $request->disccb2d3hd;
            $result->disccb2d3ket = $request->disccb2d3ket;
            $result->disccb2d4min = $request->disccb2d4min;
            $result->disccb2d4disk = $request->disccb2d4disk;
            $result->disccb2d4hd = $request->disccb2d4hd;
            $result->disccb2d4ket = $request->disccb2d4ket;
            $result->disccbnagamin = $request->disccbnagamin;
            $result->disccbnagadisk = $request->disccbnagadisk;
            $result->disccbnagahd = $request->disccbnagahd;
            $result->disccbnagaket = $request->disccbnagaket;
            $result->disccbnaga4min = $request->disccbnaga4min;
            $result->disccbnaga4disk = $request->disccbnaga4disk;
            $result->disccbnaga4hd = $request->disccbnaga4hd;
            $result->disccbnaga4ket = $request->disccbnaga4ket;
            $result->disccjitumin = $request->disccjitumin;
            $result->disccjitudisk = $request->disccjitudisk;
            $result->disccjituhd = $request->disccjituhd;
            $result->disccjituket = $request->disccjituket;
            $result->discttepimin = $request->discttepimin;
            $result->discttepidisk = $request->discttepidisk;
            $result->discttepihd = $request->discttepihd;
            $result->discttepiket = $request->discttepiket;
            $result->discdsrmin = $request->discdsrmin;
            $result->discdsrdisk = $request->discdsrdisk;
            $result->discdsrhd = $request->discdsrhd;
            $result->discdsrket = $request->discdsrket;
            $result->disckombmin = $request->disckombmin;
            $result->disckombdisk = $request->disckombdisk;
            $result->disckombhd = $request->disckombhd;
            $result->disckombket = $request->disckombket;
            $result->disc5050min = $request->disc5050min;
            $result->disc5050disk = $request->disc5050disk;
            $result->disc5050hd = $request->disc5050hd;
            $result->disc5050ket = $request->disc5050ket;
            $result->discshiomin = $request->discshiomin;
            $result->discshiodisk = $request->discshiodisk;
            $result->discshiohd = $request->discshiohd;
            $result->discshioket = $request->discshioket;
            $result->discshomomin = $request->discshomomin;
            $result->discshomodisk = $request->discshomodisk;
            $result->discshomohd = $request->discshomohd;
            $result->discshomoket = $request->discshomoket;
            $result->disckkempismin = $request->disckkempismin;
            $result->disckkempisdisk = $request->disckkempisdisk;
            $result->disckkempishd = $request->disckkempishd;
            $result->disckkempisket = $request->disckkempisket;
            $result->save();
        } else if ($tipe == 'datahadiahfull') {
            $result = Hadiahfull::find($id);
            $result->full4dmin = $request->full4dmin;
            $result->full4ddisk = $request->full4ddisk;
            $result->full4dhd = $request->full4dhd;
            $result->full4dket = $request->full4dket;
            $result->full3dmin = $request->full3dmin;
            $result->full3ddisk = $request->full3ddisk;
            $result->full3dhd = $request->full3dhd;
            $result->full3dket = $request->full3dket;
            $result->full2dblkmin = $request->full2dblkmin;
            $result->full2dblkdisk = $request->full2dblkdisk;
            $result->full2dblkhd = $request->full2dblkhd;
            $result->full2dblkket = $request->full2dblkket;
            $result->fullcbmin = $request->fullcbmin;
            $result->fullcbdisk = $request->fullcbdisk;
            $result->fullcbhd = $request->fullcbhd;
            $result->fullcbket = $request->fullcbket;
            $result->fullcb2dmin = $request->fullcb2dmin;
            $result->fullcb2ddisk = $request->fullcb2ddisk;
            $result->fullcb2dhd = $request->fullcb2dhd;
            $result->fullcb2dket = $request->fullcb2dket;
            $result->fullcb2d3min = $request->fullcb2d3min;
            $result->fullcb2d3disk = $request->fullcb2d3disk;
            $result->fullcb2d3hd = $request->fullcb2d3hd;
            $result->fullcb2d3ket = $request->fullcb2d3ket;
            $result->fullcb2d4min = $request->fullcb2d4min;
            $result->fullcb2d4disk = $request->fullcb2d4disk;
            $result->fullcb2d4hd = $request->fullcb2d4hd;
            $result->fullcb2d4ket = $request->fullcb2d4ket;
            $result->fullcbnagamin = $request->fullcbnagamin;
            $result->fullcbnagadisk = $request->fullcbnagadisk;
            $result->fullcbnagahd = $request->fullcbnagahd;
            $result->fullcbnagaket = $request->fullcbnagaket;
            $result->fullcbnaga4min = $request->fullcbnaga4min;
            $result->fullcbnaga4disk = $request->fullcbnaga4disk;
            $result->fullcbnaga4hd = $request->fullcbnaga4hd;
            $result->fullcbnaga4ket = $request->fullcbnaga4ket;
            $result->fullcjitumin = $request->fullcjitumin;
            $result->fullcjitudisk = $request->fullcjitudisk;
            $result->fullcjituhd = $request->fullcjituhd;
            $result->fullcjituket = $request->fullcjituket;
            $result->fullttepimin = $request->fullttepimin;
            $result->fullttepidisk = $request->fullttepidisk;
            $result->fullttepihd = $request->fullttepihd;
            $result->fullttepiket = $request->fullttepiket;
            $result->fulldsrmin = $request->fulldsrmin;
            $result->fulldsrdisk = $request->fulldsrdisk;
            $result->fulldsrhd = $request->fulldsrhd;
            $result->fulldsrket = $request->fulldsrket;
            $result->fullkombmin = $request->fullkombmin;
            $result->fullkombdisk = $request->fullkombdisk;
            $result->fullkombhd = $request->fullkombhd;
            $result->fullkombket = $request->fullkombket;
            $result->full5050min = $request->full5050min;
            $result->full5050disk = $request->full5050disk;
            $result->full5050hd = $request->full5050hd;
            $result->full5050ket = $request->full5050ket;
            $result->fullshiomin = $request->fullshiomin;
            $result->fullshiodisk = $request->fullshiodisk;
            $result->fullshiohd = $request->fullshiohd;
            $result->fullshioket = $request->fullshioket;
            $result->fullshomomin = $request->fullshomomin;
            $result->fullshomodisk = $request->fullshomodisk;
            $result->fullshomohd = $request->fullshomohd;
            $result->fullshomoket = $request->fullshomoket;
            $result->fullkkempismin = $request->fullkkempismin;
            $result->fullkkempisdisk = $request->fullkkempisdisk;
            $result->fullkkempishd = $request->fullkkempishd;
            $result->fullkkempisket = $request->fullkkempisket;
            $result->save();
        } else if ($tipe == 'datahadiahprize') {
            $result = Hadiahprize::find($id);
            $result->prize4dp1min = $request->prize4dp1min;
            $result->prize4dp1disk = $request->prize4dp1disk;
            $result->prize4dp1hd = $request->prize4dp1hd;
            $result->prize4dp1ket = $request->prize4dp1ket;
            $result->prize4dp2min = $request->prize4dp2min;
            $result->prize4dp2disk = $request->prize4dp2disk;
            $result->prize4dp2hd = $request->prize4dp2hd;
            $result->prize4dp2ket = $request->prize4dp2ket;
            $result->prize4dp3min = $request->prize4dp3min;
            $result->prize4dp3disk = $request->prize4dp3disk;
            $result->prize4dp3hd = $request->prize4dp3hd;
            $result->prize4dp3ket = $request->prize4dp3ket;
            $result->prize3dp1min = $request->prize3dp1min;
            $result->prize3dp1disk = $request->prize3dp1disk;
            $result->prize3dp1hd = $request->prize3dp1hd;
            $result->prize3dp1ket = $request->prize3dp1ket;
            $result->prize3dp2min = $request->prize3dp2min;
            $result->prize3dp2disk = $request->prize3dp2disk;
            $result->prize3dp2hd = $request->prize3dp2hd;
            $result->prize3dp2ket = $request->prize3dp2ket;
            $result->prize3dp3min = $request->prize3dp3min;
            $result->prize3dp3disk = $request->prize3dp3disk;
            $result->prize3dp3hd = $request->prize3dp3hd;
            $result->prize3dp3ket = $request->prize3dp3ket;
            $result->prize2dp1min = $request->prize2dp1min;
            $result->prize2dp1disk = $request->prize2dp1disk;
            $result->prize2dp1hd = $request->prize2dp1hd;
            $result->prize2dp1ket = $request->prize2dp1ket;
            $result->prize2dp2min = $request->prize2dp2min;
            $result->prize2dp2disk = $request->prize2dp2disk;
            $result->prize2dp2hd = $request->prize2dp2hd;
            $result->prize2dp2ket = $request->prize2dp2ket;
            $result->prize2dp3min = $request->prize2dp3min;
            $result->prize2dp3disk = $request->prize2dp3disk;
            $result->prize2dp3hd = $request->prize2dp3hd;
            $result->prize2dp3ket = $request->prize2dp3ket;
            $result->prizecbmin = $request->prizecbmin;
            $result->prizecbdisk = $request->prizecbdisk;
            $result->prizecbhd = $request->prizecbhd;
            $result->prizecbket = $request->prizecbket;
            $result->prizecb2dmin = $request->prizecb2dmin;
            $result->prizecb2ddisk = $request->prizecb2ddisk;
            $result->prizecb2dhd = $request->prizecb2dhd;
            $result->prizecb2dket = $request->prizecb2dket;
            $result->prizecb2d3min = $request->prizecb2d3min;
            $result->prizecb2d3disk = $request->prizecb2d3disk;
            $result->prizecb2d3hd = $request->prizecb2d3hd;
            $result->prizecb2d3ket = $request->prizecb2d3ket;
            $result->prizecb2d4min = $request->prizecb2d4min;
            $result->prizecb2d4disk = $request->prizecb2d4disk;
            $result->prizecb2d4hd = $request->prizecb2d4hd;
            $result->prizecb2d4ket = $request->prizecb2d4ket;
            $result->prizecbnagamin = $request->prizecbnagamin;
            $result->prizecbnagadisk = $request->prizecbnagadisk;
            $result->prizecbnagahd = $request->prizecbnagahd;
            $result->prizecbnagaket = $request->prizecbnagaket;
            $result->prizecbnaga4min = $request->prizecbnaga4min;
            $result->prizecbnaga4disk = $request->prizecbnaga4disk;
            $result->prizecbnaga4hd = $request->prizecbnaga4hd;
            $result->prizecbnaga4ket = $request->prizecbnaga4ket;
            $result->prizecjitumin = $request->prizecjitumin;
            $result->prizecjitudisk = $request->prizecjitudisk;
            $result->prizecjituhd = $request->prizecjituhd;
            $result->prizecjituket = $request->prizecjituket;
            $result->prizettepimin = $request->prizettepimin;
            $result->prizettepidisk = $request->prizettepidisk;
            $result->prizettepihd = $request->prizettepihd;
            $result->prizettepiket = $request->prizettepiket;
            $result->prizedsrmin = $request->prizedsrmin;
            $result->prizedsrdisk = $request->prizedsrdisk;
            $result->prizedsrhd = $request->prizedsrhd;
            $result->prizedsrket = $request->prizedsrket;
            $result->prizekombmin = $request->prizekombmin;
            $result->prizekombdisk = $request->prizekombdisk;
            $result->prizekombhd = $request->prizekombhd;
            $result->prizekombket = $request->prizekombket;
            $result->prize5050min = $request->prize5050min;
            $result->prize5050disk = $request->prize5050disk;
            $result->prize5050hd = $request->prize5050hd;
            $result->prize5050ket = $request->prize5050ket;
            $result->prizeshiomin = $request->prizeshiomin;
            $result->prizeshiodisk = $request->prizeshiodisk;
            $result->prizeshiohd = $request->prizeshiohd;
            $result->prizeshioket = $request->prizeshioket;
            $result->prizeshomomin = $request->prizeshomomin;
            $result->prizeshomodisk = $request->prizeshomodisk;
            $result->prizeshomohd = $request->prizeshomohd;
            $result->prizeshomoket = $request->prizeshomoket;
            $result->prizekkempismin = $request->prizekkempismin;
            $result->prizekkempisdisk = $request->prizekkempisdisk;
            $result->prizekkempishd = $request->prizekkempishd;
            $result->prizekkempisket = $request->prizekkempisket;
            $result->save();
        } else if ($tipe == 'datahadiahv2') {
            $result = Hadiahv2::find($id);
            $result->betv24dmin = $request->betv24dmin;
            $result->betv24ddisk = $request->betv24ddisk;
            $result->betv24dhd = $request->betv24dhd;
            $result->betv24dket = $request->betv24dket;
            $result->betv23dmin = $request->betv23dmin;
            $result->betv23ddisk = $request->betv23ddisk;
            $result->betv23dhd = $request->betv23dhd;
            $result->betv23dket = $request->betv23dket;
            $result->betv22dmin = $request->betv22dmin;
            $result->betv22ddisk = $request->betv22ddisk;
            $result->betv22dhd = $request->betv22dhd;
            $result->betv22dket = $request->betv22dket;
            $result->betv2cbmin = $request->betv2cbmin;
            $result->betv2cbdisk = $request->betv2cbdisk;
            $result->betv2cbhd = $request->betv2cbhd;
            $result->betv2cbket = $request->betv2cbket;
            $result->betv2cb2dmin = $request->betv2cb2dmin;
            $result->betv2cb2ddisk = $request->betv2cb2ddisk;
            $result->betv2cb2dhd = $request->betv2cb2dhd;
            $result->betv2cb2dket = $request->betv2cb2dket;
            $result->betv2cb2d3min = $request->betv2cb2d3min;
            $result->betv2cb2d3disk = $request->betv2cb2d3disk;
            $result->betv2cb2d3hd = $request->betv2cb2d3hd;
            $result->betv2cb2d3ket = $request->betv2cb2d3ket;
            $result->betv2cb2d4min = $request->betv2cb2d4min;
            $result->betv2cb2d4disk = $request->betv2cb2d4disk;
            $result->betv2cb2d4hd = $request->betv2cb2d4hd;
            $result->betv2cb2d4ket = $request->betv2cb2d4ket;
            $result->betv2cbnagamin = $request->betv2cbnagamin;
            $result->betv2cbnagadisk = $request->betv2cbnagadisk;
            $result->betv2cbnagahd = $request->betv2cbnagahd;
            $result->betv2cbnagaket = $request->betv2cbnagaket;
            $result->betv2cbnaga4min = $request->betv2cbnaga4min;
            $result->betv2cbnaga4disk = $request->betv2cbnaga4disk;
            $result->betv2cbnaga4hd = $request->betv2cbnaga4hd;
            $result->betv2cbnaga4ket = $request->betv2cbnaga4ket;
            $result->betv2cjitumin = $request->betv2cjitumin;
            $result->betv2cjitudisk = $request->betv2cjitudisk;
            $result->betv2cjituhd = $request->betv2cjituhd;
            $result->betv2cjituket = $request->betv2cjituket;
            $result->betv2ttepimin = $request->betv2ttepimin;
            $result->betv2ttepidisk = $request->betv2ttepidisk;
            $result->betv2ttepihd = $request->betv2ttepihd;
            $result->betv2ttepiket = $request->betv2ttepiket;
            $result->betv2dsrmin = $request->betv2dsrmin;
            $result->betv2dsrdisk = $request->betv2dsrdisk;
            $result->betv2dsrhd = $request->betv2dsrhd;
            $result->betv2dsrket = $request->betv2dsrket;
            $result->betv2kombmin = $request->betv2kombmin;
            $result->betv2kombdisk = $request->betv2kombdisk;
            $result->betv2kombhd = $request->betv2kombhd;
            $result->betv2kombket = $request->betv2kombket;
            $result->betv25050min = $request->betv25050min;
            $result->betv25050disk = $request->betv25050disk;
            $result->betv25050hd = $request->betv25050hd;
            $result->betv25050ket = $request->betv25050ket;
            $result->betv2shiomin = $request->betv2shiomin;
            $result->betv2shiodisk = $request->betv2shiodisk;
            $result->betv2shiohd = $request->betv2shiohd;
            $result->betv2shioket = $request->betv2shioket;
            $result->betv2shomomin = $request->betv2shomomin;
            $result->betv2shomodisk = $request->betv2shomodisk;
            $result->betv2shomohd = $request->betv2shomohd;
            $result->betv2shomoket = $request->betv2shomoket;
            $result->betv2kkempismin = $request->betv2kkempismin;
            $result->betv2kkempisdisk = $request->betv2kkempisdisk;
            $result->betv2kkempishd = $request->betv2kkempishd;
            $result->betv2kkempisket = $request->betv2kkempisket;
            $result->save();
        }
        $id = $request->id;

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
            $Hadiahbb = Hadiahbb::findOrFail($id);
            $Hadiahbb->delete();
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}
