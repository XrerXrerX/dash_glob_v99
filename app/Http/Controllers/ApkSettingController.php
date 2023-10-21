<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApkSettingController extends Controller
{
    public function index()
    {
        $data = getDataBo();
        return view('apk.setting.index', [
            'title' => 'Setting',
            'data' => $data
        ]);
    }

    public function edit($namabo)
    {
        $var1 = str_replace("&", " ", $namabo);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $namabo = $var4;
        }

        if (!is_array($namabo)) {
            $namabo = [$namabo];
        }

        // $telegram = [];
        // $whatsapp = [];
        // $line = [];
        // $livechat = [];
        // $facebook = [];
        // $penilaian = [];

        foreach ($namabo as $index => $nbo) {
            $url = 'https://www.m3y0kl1n3.com/api/' . $nbo . 'settings';
            $options = [
                'http' => [
                    'header' => 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
                ]
            ];

            $context = stream_context_create($options);

            $data = file_get_contents($url, false, $context);
            $data = json_decode($data, true);

            if ($data["data"] != []) {
                $data = $data['data'][0];
            }

            $home[] = $data['home'];
            $syair[] = $data['syair'];
            $hadiah[] = $data['hadiah'];
            $jadwal[] = $data['jadwal'];
            $promo[] = $data['promo'];
            $content[] = $data['content'];
            $rtp[] = $data['rtp'];
            $newhome[] = $data['newhome'];
            $version_apk[] = $data['version_apk'];
            $newhome1[] = $data['newhome1'];
            $newhome2[] = $data['newhome2'];
            $newhome3[] = $data['newhome3'];
            $pwa[] = $data['pwa'];
        }

        return view('apk.setting.create', [
            'title' => 'Notifikasi',
            'namabo' => $namabo,
            'home' => $home,
            'syair' => $syair,
            'hadiah' => $hadiah,
            'jadwal' => $jadwal,
            'promo' => $promo,
            'content' => $content,
            'rtp' => $rtp,
            'newhome' => $newhome,
            'version_apk' => $version_apk,
            'newhome1' => $newhome1,
            'newhome2' => $newhome2,
            'newhome3' => $newhome3,
            'pwa' => $pwa,
            'disabled' => ''
        ]);
    }


    public function update(Request $request)
    {
        $nama_bo = $request['namabo'];
        $id = 1;
        $home = $request['home'];
        $syair = $request['syair'];
        $hadiah = $request['hadiah'];
        $jadwal = $request['jadwal'];
        $promo = $request['promo'];
        $content = $request['content'];
        $rtp = $request['rtp'];
        $newhome = $request['newhome'];
        $version_apk = $request['version_apk'];
        $newhome1 = $request['newhome1'];
        $newhome2 = $request['newhome2'];
        $newhome3 = $request['newhome3'];
        $pwa = $request['pwa'];
        // dd($nama_bo);
        foreach ($nama_bo as $index => $nbo) {
            $url = 'https://www.m3y0kl1n3.com/api/' . $nbo . 'settings/' . $id;

            $data = [
                'home' => $home[$index],
                'syair' => $syair[$index],
                'hadiah' => $hadiah[$index],
                'jadwal' => $jadwal[$index],
                'promo' => $promo[$index],
                'content' => $content[$index],
                'rtp' => $rtp[$index],
                'newhome' => $newhome[$index],
                'version_apk' => $version_apk[$index],
                'newhome1' => $newhome1[$index],
                'newhome2' => $newhome2[$index],
                'newhome3' => $newhome3[$index],
                'pwa' => $pwa[$index]
            ];

            $data_string = json_encode($data);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string),
                'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9' // header baru
            ));

            $result = curl_exec($ch);

            // Cek apakah ada error saat melakukan request
            if (curl_error($ch)) {
                echo 'Error:' . curl_error($ch);
            }

            curl_close($ch);
        }

        // return redirect("/apk/setting")->withSuccess('Success, Data berhasil diubah!');
    }

    public function views($namabo)
    {
        $namabo = [$namabo];
        foreach ($namabo as $index => $nbo) {
            $url = 'https://www.m3y0kl1n3.com/api/' . $nbo . 'settings';
            $options = [
                'http' => [
                    'header' => 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
                ]
            ];

            $context = stream_context_create($options);

            $data = file_get_contents($url, false, $context);
            $data = json_decode($data, true);

            if ($data["data"] != []) {
                $data = $data['data'][0];
            }

            $home[] = $data['home'];
            $syair[] = $data['syair'];
            $hadiah[] = $data['hadiah'];
            $jadwal[] = $data['jadwal'];
            $promo[] = $data['promo'];
            $content[] = $data['content'];
            $rtp[] = $data['rtp'];
            $newhome[] = $data['newhome'];
        }

        return view('apk.setting.create', [
            'title' => 'Notifikasi',
            'namabo' => $namabo,
            'home' => $home,
            'syair' => $syair,
            'hadiah' => $hadiah,
            'jadwal' => $jadwal,
            'promo' => $promo,
            'content' => $content,
            'rtp' => $rtp,
            'newhome' => $newhome,
            'disabled' => 'disabled'
        ]);
    }
}
