<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApkContactController extends Controller
{
    public function index()
    {
        $data = getDataBo();

        return view('apk.contact.index', [
            'title' => 'Contact',
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

        foreach ($namabo as $index => $nbo) {
            $url = 'https://www.m3y0kl1n3.com/api/' . $nbo . 'contacts';
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

            $telegram[] = $data['telegram'];
            $whatsapp[] = $data['whatsapp'];
            $line[] = $data['line'];
            $livechat[] = $data['livechat'];
            $facebook[] = $data['facebook'];
            $penilaian[] = $data['penilaian'];
        }

        return view('apk.contact.create', [
            'title' => 'Notifikasi',
            'namabo' => $namabo,
            'telegram' => $telegram,
            'whatsapp' => $whatsapp,
            'line' => $line,
            'livechat' => $livechat,
            'facebook' => $facebook,
            'penilaian' => $penilaian,
            'disabled' => ''
        ]);
    }


    public function views($namabo)
    {

        $namabo = [$namabo];
        foreach ($namabo as $index => $nbo) {
            $url = 'https://www.m3y0kl1n3.com/api/' . $nbo . 'contacts';
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

            $telegram[] = $data['telegram'];
            $whatsapp[] = $data['whatsapp'];
            $line[] = $data['line'];
            $livechat[] = $data['livechat'];
            $facebook[] = $data['facebook'];
            $penilaian[] = $data['penilaian'];
        }

        return view('apk.contact.create', [
            'title' => 'Notifikasi',
            'namabo' => $namabo,
            'telegram' => $telegram,
            'whatsapp' => $whatsapp,
            'line' => $line,
            'livechat' => $livechat,
            'facebook' => $facebook,
            'penilaian' => $penilaian,
            'disabled' => 'disabled'

        ]);
    }

    public function update(Request $request)
    {
        $nama_bo = $request['namabo'];
        $id = 1;
        $telegram = $request['telegram'];
        $whatsapp = $request['whatsapp'];
        $line = $request['line'];
        $livechat = $request['livechat'];
        $facebook = $request['facebook'];
        $penilaian = $request['penilaian'];
        // dd($nama_bo);
        foreach ($nama_bo as $index => $nbo) {
            $url = 'https://www.m3y0kl1n3.com/api/' . $nbo . 'contacts/' . $id;

            $data = [
                'telegram' => $telegram[$index],
                'whatsapp' => $whatsapp[$index],
                'line' => $line[$index],
                'livechat' => $livechat[$index],
                'facebook' => $facebook[$index],
                'penilaian' => $penilaian[$index]
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

        // return redirect("/apk/contact")->withSuccess('Success, Data berhasil diubah!');
    }
}
