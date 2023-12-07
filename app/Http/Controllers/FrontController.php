<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        //DATA CARAUSEL
        $row_carousel = DB::select('SELECT * FROM data_promo_l21
        ORDER BY
                CASE
                    WHEN urutan_promo = 1 THEN 0
                    WHEN urutan_promo = 2 THEN 1
                    WHEN urutan_promo = 3 THEN 2
                    ELSE 3
                END ASC, 
                id DESC
                LIMIT 3');
        $row_carousel = json_decode(json_encode($row_carousel), true);


        // DATA WEBSITE
        $url = 'https://l4soyk0.com/api/datawebsite';
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer youk1llmyfvcking3x'
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $datawebsite = json_decode($response, true);
        $row_website = json_decode(json_encode($datawebsite), true);



        //DATA HADIAH
        $row_hadiah = DB::select('SELECT *
        FROM data_hadiah_dsk
        JOIN data_hadiah_full ON data_hadiah_dsk.website = data_hadiah_full.website
        JOIN data_hadiah_bb ON data_hadiah_dsk.website = data_hadiah_bb.website
        JOIN data_hadiah_prize ON data_hadiah_dsk.website = data_hadiah_prize.website
        JOIN data_hadiah_v2 ON data_hadiah_dsk.website = data_hadiah_v2.website');
        $row_hadiah = json_decode(json_encode($row_hadiah), true);

        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);


        //DATA PRAGMATIC
        $row_pragmatic = DB::select("SELECT * FROM game_slot WHERE provider = 'pragmaticplay' ORDER BY RAND() LIMIT 1");
        $row_pragmatic = json_decode(json_encode($row_pragmatic), true);

        //DATA JOKER
        $row_joker = DB::select("SELECT * FROM game_slot WHERE provider = 'jokergaming' ORDER BY RAND() LIMIT 1");
        $row_joker = json_decode(json_encode($row_joker), true);

        //DATA HABANERO
        $row_habanero = DB::select("SELECT * FROM game_slot WHERE provider = 'habanero' ORDER BY RAND() LIMIT 1");
        $row_habanero = json_decode(json_encode($row_habanero), true);

        //DATA MICROGAMMING
        $row_microgaming = DB::select("SELECT * FROM game_slot WHERE provider = 'microgaming' ORDER BY RAND() LIMIT 1");
        $row_microgaming = json_decode(json_encode($row_microgaming), true);

        //DATA RELAXGAMING
        $row_relaxgaming = DB::select("SELECT * FROM game_slot WHERE provider = 'relaxgaming' ORDER BY RAND() LIMIT 1");
        $row_relaxgaming = json_decode(json_encode($row_relaxgaming), true);

        //DATA PLAYNGO
        $row_playngo = DB::select("SELECT * FROM game_slot WHERE provider = 'playngo' ORDER BY RAND() LIMIT 1");
        $row_playngo = json_decode(json_encode($row_playngo), true);

        //DATA PLAYTECH
        $row_playtech = DB::select("SELECT * FROM game_slot WHERE provider = 'playtech' ORDER BY RAND() LIMIT 1");
        $row_playtech = json_decode(json_encode($row_playtech), true);

        //DATA SPADEGAMING
        $row_spadegaming = DB::select("SELECT * FROM game_slot WHERE provider = 'spadegaming' ORDER BY RAND() LIMIT 1");
        $row_spadegaming = json_decode(json_encode($row_spadegaming), true);

        //DATA PGSOFT
        $row_pgsoft = DB::select("SELECT * FROM game_slot WHERE provider = 'pgsoft' ORDER BY RAND() LIMIT 1");
        $row_pgsoft = json_decode(json_encode($row_pgsoft), true);

        //DATA TOPTREND
        $row_toptrend = DB::select("SELECT * FROM game_slot WHERE provider = 'toptrend' ORDER BY RAND() LIMIT 1");
        $row_toptrend = json_decode(json_encode($row_toptrend), true);

        //DATA REDTIGER
        $row_redtiger = DB::select("SELECT * FROM game_slot WHERE provider = 'redtiger' ORDER BY RAND() LIMIT 1");
        $row_redtiger = json_decode(json_encode($row_redtiger), true);

        //DATA NETENT
        $row_netent = DB::select("SELECT * FROM game_slot WHERE provider = 'netent' ORDER BY RAND() LIMIT 1");
        $row_netent = json_decode(json_encode($row_netent), true);

        //DATA GENESIS
        $row_genesis = DB::select("SELECT * FROM game_slot WHERE provider = 'genesis' ORDER BY RAND() LIMIT 1");
        $row_genesis = json_decode(json_encode($row_genesis), true);

        //DATA BNG
        $row_bng = DB::select("SELECT * FROM game_slot WHERE provider = 'bng' ORDER BY RAND() LIMIT 1");
        $row_bng = json_decode(json_encode($row_bng), true);

        return view('front.index', [
            'title' => 'L21 Official',
            'row_carousel' => $row_carousel,
            'row_website' => $row_website,
            'row_hadiah' => $row_hadiah,
            'row_kontak' => $row_kontak,
            'row_pragmatic' => $row_pragmatic,
            'row_joker' => $row_joker,
            'row_habanero' => $row_habanero,
            'row_microgaming' => $row_microgaming,
            'row_relaxgaming' => $row_relaxgaming,
            'row_playngo' => $row_playngo,
            'row_playtech' => $row_playtech,
            'row_spadegaming' => $row_spadegaming,
            'row_pgsoft' => $row_pgsoft,
            'row_toptrend' => $row_toptrend,
            'row_redtiger' => $row_redtiger,
            'row_netent' => $row_netent,
            'row_genesis' => $row_genesis,
            'row_bng' => $row_bng
        ]);
    }

    public function rtp()
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        return view('front.rtp', [
            'title' => 'Rtp',
            'row_kontak' => $row_kontak
        ]);
    }

    public function paito($pasaran = 'HONGKONG')
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        $rows = DB::select("SELECT * FROM paito_pasarans");
        $rows = json_decode(json_encode($rows), true);

        $querytable = DB::select("SELECT result FROM paito_results WHERE pasaran = '$pasaran'");
        $querytable = json_decode(json_encode($querytable), true);
        // dd($querytable);

        return view('front.paito', [
            'title' => 'Paito',
            'row_kontak' => $row_kontak,
            'rows' => $rows,
            'querytable' => $querytable
        ]);
    }

    public function paitopost(Request $request)
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        $rows = DB::select("SELECT * FROM paito_pasarans");
        $rows = json_decode(json_encode($rows), true);

        if (isset($request->pasaran)) {
            $pasaran = $request->pasaran;
        } else {
            $pasaran = 'HONGKONG';
        }

        $querytable = DB::select("SELECT result FROM paito_results WHERE pasaran = '$pasaran'");
        $querytable = json_decode(json_encode($querytable), true);

        return view('front.paito', [
            'title' => 'Paito',
            'row_kontak' => $row_kontak,
            'rows' => $rows,
            'querytable' => $querytable
        ]);
    }

    public function paitohari($hari, $pasaran)
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        $rows = DB::select("SELECT * FROM paito_pasarans");
        $rows = json_decode(json_encode($rows), true);

        $querytable = DB::select("SELECT result FROM paito_results WHERE pasaran = '$pasaran' AND hari = '$hari'");
        $querytable = json_decode(json_encode($querytable), true);


        return view('front.paitohari', [
            'title' => 'Paito',
            'row_kontak' => $row_kontak,
            'hari' => $hari,
            'rows' => $rows,
            'querytable' => $querytable
        ]);
    }

    public function paitoharipost($hari, Request $request)
    {

        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        $rows = DB::select("SELECT * FROM paito_pasarans");
        $rows = json_decode(json_encode($rows), true);

        $pasaran = isset($request->pasaran) ? $request->pasaran : 'HONGKONG';

        $querytable = DB::select("SELECT result FROM paito_results WHERE pasaran = '$pasaran' AND hari = '$hari'");
        $querytable = json_decode(json_encode($querytable), true);


        return view('front.paitohari', [
            'title' => 'Paito',
            'row_kontak' => $row_kontak,
            'hari' => $hari,
            'rows' => $rows,
            'querytable' => $querytable
        ]);
    }

    public function tototools()
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        return view('front.tototools', [
            'title' => 'Tototools',
            'row_kontak' => $row_kontak
        ]);
    }

    public function demo($id)
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        $datagetdemo = DB::select("SELECT * FROM game_slot WHERE id='$id'");
        $datagetdemo = json_decode(json_encode($datagetdemo), true);

        //DATA PRAGMATIC
        $row_pragmatic = DB::select("SELECT * FROM game_slot WHERE provider = 'pragmaticplay' ORDER BY RAND() LIMIT 14");
        $row_pragmatic = json_decode(json_encode($row_pragmatic), true);

        //DATA JOKER
        $row_joker = DB::select("SELECT * FROM game_slot WHERE provider = 'jokergaming' ORDER BY RAND() LIMIT 14");
        $row_joker = json_decode(json_encode($row_joker), true);

        //DATA HABANERO
        $row_habanero = DB::select("SELECT * FROM game_slot WHERE provider = 'habanero' ORDER BY RAND() LIMIT 14");
        $row_habanero = json_decode(json_encode($row_habanero), true);

        //DATA MICROGAMMING
        $row_microgaming = DB::select("SELECT * FROM game_slot WHERE provider = 'microgaming' ORDER BY RAND() LIMIT 14");
        $row_microgaming = json_decode(json_encode($row_microgaming), true);

        //DATA RELAXGAMING
        $row_relaxgaming = DB::select("SELECT * FROM game_slot WHERE provider = 'relaxgaming' ORDER BY RAND() LIMIT 14");
        $row_relaxgaming = json_decode(json_encode($row_relaxgaming), true);

        //DATA PLAYNGO
        $row_playngo = DB::select("SELECT * FROM game_slot WHERE provider = 'playngo' ORDER BY RAND() LIMIT 14");
        $row_playngo = json_decode(json_encode($row_playngo), true);

        //DATA PLAYTECH
        $row_playtech = DB::select("SELECT * FROM game_slot WHERE provider = 'playtech' ORDER BY RAND() LIMIT 14");
        $row_playtech = json_decode(json_encode($row_playtech), true);

        //DATA SPADEGAMING
        $row_spadegaming = DB::select("SELECT * FROM game_slot WHERE provider = 'spadegaming' ORDER BY RAND() LIMIT 14");
        $row_spadegaming = json_decode(json_encode($row_spadegaming), true);

        //DATA PGSOFT
        $row_pgsoft = DB::select("SELECT * FROM game_slot WHERE provider = 'pgsoft' ORDER BY RAND() LIMIT 14");
        $row_pgsoft = json_decode(json_encode($row_pgsoft), true);

        //DATA TOPTREND
        $row_toptrend = DB::select("SELECT * FROM game_slot WHERE provider = 'toptrend' ORDER BY RAND() LIMIT 14");
        $row_toptrend = json_decode(json_encode($row_toptrend), true);

        //DATA REDTIGER
        $row_redtiger = DB::select("SELECT * FROM game_slot WHERE provider = 'redtiger' ORDER BY RAND() LIMIT 14");
        $row_redtiger = json_decode(json_encode($row_redtiger), true);

        //DATA NETENT
        $row_netent = DB::select("SELECT * FROM game_slot WHERE provider = 'netent' ORDER BY RAND() LIMIT 14");
        $row_netent = json_decode(json_encode($row_netent), true);

        //DATA GENESIS
        $row_genesis = DB::select("SELECT * FROM game_slot WHERE provider = 'genesis' ORDER BY RAND() LIMIT 14");
        $row_genesis = json_decode(json_encode($row_genesis), true);

        //DATA BNG
        $row_bng = DB::select("SELECT * FROM game_slot WHERE provider = 'bng' ORDER BY RAND() LIMIT 14");
        $row_bng = json_decode(json_encode($row_bng), true);

        //DATA BIGTIME
        $row_bigtime = DB::select("SELECT * FROM game_slot WHERE provider = 'bigtime' ORDER BY RAND() LIMIT 14");
        $row_bigtime = json_decode(json_encode($row_bigtime), true);

        //DATA GMW
        $row_gmw = DB::select("SELECT * FROM game_slot WHERE provider = 'gmw' ORDER BY RAND() LIMIT 14");
        $row_gmw = json_decode(json_encode($row_gmw), true);

        //DATA GMW
        $row_idnslot = DB::select("SELECT * FROM game_slot WHERE provider = 'idnslot' ORDER BY RAND() LIMIT 14");
        $row_idnslot = json_decode(json_encode($row_idnslot), true);

        return view('front.demo', [
            'title' => 'Demo',
            'row_kontak' => $row_kontak,
            'datagetdemo' => $datagetdemo,
            'row_pragmatic' => $row_pragmatic,
            'row_joker' => $row_joker,
            'row_habanero' => $row_habanero,
            'row_microgaming' => $row_microgaming,
            'row_relaxgaming' => $row_relaxgaming,
            'row_playngo' => $row_playngo,
            'row_playtech' => $row_playtech,
            'row_spadegaming' => $row_spadegaming,
            'row_pgsoft' => $row_pgsoft,
            'row_toptrend' => $row_toptrend,
            'row_redtiger' => $row_redtiger,
            'row_netent' => $row_netent,
            'row_genesis' => $row_genesis,
            'row_bng' => $row_bng,
            'row_bigtime' => $row_bigtime,
            'row_gmw' => $row_gmw,
            'row_idnslot' => $row_idnslot
        ]);
    }

    public function promo()
    {
        $row_promol21 = DB::select("SELECT * FROM data_promo_l21
        ORDER BY
                CASE
                    WHEN urutan_promo = 1 THEN 0
                    WHEN urutan_promo = 2 THEN 1
                    WHEN urutan_promo = 3 THEN 2
                    WHEN urutan_promo = 4 THEN 3
                    WHEN urutan_promo = 5 THEN 4
                    ELSE 5
                END ASC, 
                id DESC
                LIMIT 10");
        $row_promol21 = json_decode(json_encode($row_promol21), true);

        $row_promotogel = DB::select("SELECT * FROM data_promo_l21 WHERE tipe_togel = '1'
        ORDER BY
                CASE
                    WHEN urutan_promo = 1 THEN 0
                    WHEN urutan_promo = 2 THEN 1
                    WHEN urutan_promo = 3 THEN 2
                    WHEN urutan_promo = 4 THEN 3
                    WHEN urutan_promo = 5 THEN 4
                    ELSE 5
                END ASC, 
                id DESC
                LIMIT 10");
        $row_promotogel = json_decode(json_encode($row_promotogel), true);

        $row_promoslot = DB::select("SELECT * FROM data_promo_l21 WHERE tipe_slot = '1'
        ORDER BY
                CASE
                    WHEN urutan_promo = 1 THEN 0
                    WHEN urutan_promo = 2 THEN 1
                    WHEN urutan_promo = 3 THEN 2
                    WHEN urutan_promo = 4 THEN 3
                    WHEN urutan_promo = 5 THEN 4
                    ELSE 5
                END ASC, 
                id DESC
                LIMIT 10");
        $row_promoslot = json_decode(json_encode($row_promoslot), true);


        $row_promolivegames = DB::select("SELECT * FROM data_promo_l21 WHERE tipe_livegames = '1'
        ORDER BY
                CASE
                    WHEN urutan_promo = 1 THEN 0
                    WHEN urutan_promo = 2 THEN 1
                    WHEN urutan_promo = 3 THEN 2
                    WHEN urutan_promo = 4 THEN 3
                    WHEN urutan_promo = 5 THEN 4
                    ELSE 5
                END ASC, 
                id DESC
                LIMIT 10");
        $row_promolivegames = json_decode(json_encode($row_promolivegames), true);

        $row_promosportgames = DB::select("SELECT * FROM data_promo_l21 WHERE tipe_sportgames = '1'
        ORDER BY
                CASE
                    WHEN urutan_promo = 1 THEN 0
                    WHEN urutan_promo = 2 THEN 1
                    WHEN urutan_promo = 3 THEN 2
                    WHEN urutan_promo = 4 THEN 3
                    WHEN urutan_promo = 5 THEN 4
                    ELSE 5
                END ASC, 
                id DESC
                LIMIT 10");
        $row_promosportgames = json_decode(json_encode($row_promosportgames), true);

        $row_promofishing = DB::select("SELECT * FROM data_promo_l21 WHERE tipe_fishing = '1'
        ORDER BY
                CASE
                    WHEN urutan_promo = 1 THEN 0
                    WHEN urutan_promo = 2 THEN 1
                    WHEN urutan_promo = 3 THEN 2
                    WHEN urutan_promo = 4 THEN 3
                    WHEN urutan_promo = 5 THEN 4
                    ELSE 5
                END ASC, 
                id DESC
                LIMIT 10");
        $row_promofishing = json_decode(json_encode($row_promofishing), true);

        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        return view('front.promo', [
            'title' => 'Promo',
            'row_promol21' => $row_promol21,
            'row_promotogel' => $row_promotogel,
            'row_promoslot' => $row_promoslot,
            'row_promolivegames' => $row_promolivegames,
            'row_promosportgames' => $row_promosportgames,
            'row_promofishing' => $row_promofishing,
            'row_kontak' => $row_kontak
        ]);
    }

    public function listpools()
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        $row_jadwalpools = DB::select("SELECT * FROM web_jadwalpools");
        $row_jadwalpools = json_decode(json_encode($row_jadwalpools), true);

        return view('front.listpools', [
            'title' => 'Promo',
            'row_kontak' => $row_kontak,
            'row_jadwalpools' => $row_jadwalpools
        ]);
    }

    public function gallery()
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        $row_news = DB::select("SELECT * FROM web_media_news ORDER BY id DESC LIMIT 10");
        $row_news = json_decode(json_encode($row_news), true);

        $row_event = DB::select("SELECT * FROM web_media_event ORDER BY id DESC LIMIT 10");
        $row_event = json_decode(json_encode($row_event), true);

        $row_stream = DB::select("SELECT * FROM web_media_stream ORDER BY id");
        $row_stream = json_decode(json_encode($row_stream), true);

        $row_livestream = DB::select("SELECT * FROM web_media_livestream ORDER BY id DESC");
        $row_livestream = json_decode(json_encode($row_livestream), true);

        $row_panduan = DB::select("SELECT * FROM web_media_panduan ORDER BY id DESC LIMIT 10");
        $row_panduan = json_decode(json_encode($row_panduan), true);

        $row_galfoto = DB::select("SELECT * FROM web_media_gallery_foto ORDER BY id DESC LIMIT 12");
        $row_galfoto = json_decode(json_encode($row_galfoto), true);

        $row_galvideo = DB::select("SELECT * FROM web_media_gallery_video ORDER BY id DESC LIMIT 12");
        $row_galvideo = json_decode(json_encode($row_galvideo), true);

        $row_mediacarousel = DB::select("SELECT * FROM web_media_carousel ORDER BY id");
        $row_mediacarousel = json_decode(json_encode($row_mediacarousel), true);

        return view('front.gallery', [
            'title' => 'Promo',
            'row_kontak' => $row_kontak,
            'row_news' => $row_news,
            'row_event' => $row_event,
            'row_stream' => $row_stream,
            'row_livestream' => $row_livestream,
            'row_panduan' => $row_panduan,
            'row_galfoto' => $row_galfoto,
            'row_galvideo' => $row_galvideo,
            'row_mediacarousel' => $row_mediacarousel
        ]);
    }

    public function about()
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        return view('front.about', [
            'title' => 'Promo',
            'row_kontak' => $row_kontak
        ]);
    }

    public function contact()
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        return view('front.contact', [
            'title' => 'Promo',
            'row_kontak' => $row_kontak
        ]);
    }

    public function games()
    {
        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        return view('front.games', [
            'title' => 'Promo',
            'row_kontak' => $row_kontak
        ]);
    }

    public function linkalternatif($website)
    {

        // $datawebsite = mysqli_query($koneksi, "SELECT * FROM data_website WHERE website='$website'");
        // $row_website = array();
        // while ($row_web = mysqli_fetch_assoc($datawebsite)) {
        //     $row_website[] = $row_web;
        // }

        $id_website = $this->idWebsite($website);

        // DATA WEBSITE
        $url = 'https://l4soyk0.com/api/datawebsite/' . $id_website;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer youk1llmyfvcking3x'
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $datawebsite = json_decode($response, true);
        $row_website = json_decode(json_encode($datawebsite), true);

        //DATA KONTAK
        $response = Http::withHeaders([
            'Authorization' => 'Bearer youk1llmyfvcking3x',
        ])->get('https://l4soyk0.com/api/kontakl21');

        $data = $response->json();
        $row_kontak = $data["data"];
        $row_kontak = json_decode(json_encode($row_kontak), true);
        $row_kontak = json_decode(json_encode($row_kontak), true);

        return view('front.linkalternatif', [
            'title' => 'Promo',
            'row_kontak' => $row_kontak,
            'row_website' => $row_website
        ]);
    }

    public function hadiah_diskon($website)
    {
        $id_website = $this->idWebsite($website);

        // DATA WEBSITE
        $url = 'https://l4soyk0.com/api/datawebsite/' . $id_website;
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer youk1llmyfvcking3x'
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $datawebsite = json_decode($response, true);
        $row_website = json_decode(json_encode($datawebsite), true);

        $datahadiah = "SELECT * 
            FROM data_hadiah_dsk
            JOIN data_hadiah_full ON data_hadiah_dsk.website = data_hadiah_full.website
            JOIN data_hadiah_bb ON data_hadiah_dsk.website = data_hadiah_bb.website
            JOIN data_hadiah_prize ON data_hadiah_dsk.website = data_hadiah_prize.website
            JOIN data_hadiah_v2 ON data_hadiah_dsk.website = data_hadiah_v2.website
            WHERE data_hadiah_dsk.website = '$website'";
        $row_hadiah = DB::select($datahadiah);


        return view('front.hadiah_diskon', [
            'title' => 'Promo',
            'row_website' => $row_website,
            'row_hadiah' => $row_hadiah
        ]);
    }

    function idWebsite($website)
    {
        if ($website == 'arwanatoto') {
            $id_website = '97';
        } else if ($website == 'duogaming') {
            $id_website = '98';
        } else if ($website == 'jeeptoto') {
            $id_website = '99';
        } else if ($website == 'tstoto') {
            $id_website = '100';
        } else if ($website == 'doyantoto') {
            $id_website = '101';
        } else if ($website == 'arta4d') {
            $id_website = '102';
        } else if ($website == 'neon4d') {
            $id_website = '103';
        } else if ($website == 'zara4d') {
            $id_website = '104';
        } else if ($website == 'roma4d') {
            $id_website = '105';
        } else if ($website == 'nero4d') {
            $id_website = '106';
        } else if ($website == 'toke4d') {
            $id_website = '108';
        } else if ($website == 'diorgaming') {
            $id_website = '119';
        } else {
            return 'Error: Invalid website';
        }

        return $id_website;
    }
}
