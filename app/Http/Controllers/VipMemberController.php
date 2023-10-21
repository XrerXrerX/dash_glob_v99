<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VipMemberController extends Controller
{
    public function index($bo)
    {
        $url = 'https://l4soyk0.com/api/' . $bo;
        $headers = array(
            'Authorization: Bearer youk1llmyfvcking3x'
        );
        $context = stream_context_create(array(
            'http' => array(
                'header' => $headers
            )
        ));
        $response = file_get_contents($url, false, $context);
        $data = json_decode($response, true);

        return view('vip.member.index', [
            'title' => 'Member VIP ' . $bo,
            'data' => $data,
            'bo' => $bo
        ]);
    }

    public function create($bo)
    {
        return view('vip.member.create', [
            'title' => 'Member VIP ' . $bo,
            'bo' => $bo
        ]);
    }

    public function store(Request $request)
    {
        $bo = $request->bo;
        $userids = explode("\r\n", $request->userid);
        $switch_active = $request->switch_active == null ? 0 : 1;
        $url = 'https://l4soyk0.com/api/' . $bo;

        $results = array();

        foreach ($userids as $userid) {
            $data = array(
                'userid' => $userid,
                'switch_active' => $switch_active,
            );

            $options = array(
                'http' => array(
                    'header' => "Content-type: application/x-www-form-urlencoded\r\n" .
                        'Authorization: Bearer youk1llmyfvcking3x',
                    'method' => 'POST',
                    'content' => http_build_query($data)
                )
            );

            $context = stream_context_create($options);
            $response = file_get_contents($url, false, $context);
            $result = json_decode($response, true);

            if ($result) {
                // Response sukses
                $results[] = $result;
            } else {
                // Response gagal atau error
                $results[] = "Error: Failed to post data to API.";
            }
        }

        return response()->json($results);
    }

    public function edit($bo, $id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
        }

        if (!is_array($id)) {
            $id = [$id];
        }

        foreach ($id as $index => $ids) {

            $url = 'https://l4soyk0.com/api/' . $bo .  '/' .  $ids;

            $options = [
                'http' => [
                    'header' => 'Authorization: Bearer youk1llmyfvcking3x'
                ]
            ];

            $context = stream_context_create($options);

            $data = file_get_contents($url, false, $context);
            $data = json_decode($data, true);

            $result[] = $data;
            // if ($data["data"] != []) {
            //     $data = $data['data'][0];
            // }

            // $telegram[] = $data[''];
            // $whatsapp[] = $data['whatsapp'];
            // $line[] = $data['line'];
            // $livechat[] = $data['livechat'];
            // $facebook[] = $data['facebook'];
            // $penilaian[] = $data['penilaian'];
        }
        return view('vip.member.update', [
            'title' => 'Banner',
            'data' => $result,
            'disabled' => '',
            'id' => $id,
            'bo' => $bo
        ]);
    }


    public function views($bo, $id)
    {

        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
        }

        if (!is_array($id)) {
            $id = [$id];
        }
        foreach ($id as $index => $ids) {
            $url = 'https://l4soyk0.com/api/' . $bo .  '/' .  $ids;
            $options = [
                'http' => [
                    'header' => 'Authorization: Bearer youk1llmyfvcking3x'
                ]
            ];

            $context = stream_context_create($options);

            $data = file_get_contents($url, false, $context);
            $data = json_decode($data, true);

            $result[] = $data;
            // if ($data["data"] != []) {
            //     $data = $data['data'][0];
            // }

            // $telegram[] = $data[''];
            // $whatsapp[] = $data['whatsapp'];
            // $line[] = $data['line'];
            // $livechat[] = $data['livechat'];
            // $facebook[] = $data['facebook'];
            // $penilaian[] = $data['penilaian'];
        }
        return view('vip.member.update', [
            'title' => 'Banner',
            'data' => $result,
            'disabled' => 'disabled',
            'id' => $id,
            'bo' => $bo
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $bo = $request->bo;
        $userid = $request->userid;
        $switch_active = $request->switch_active;
        foreach ($id as $index => $ids) {

            $url = 'https://l4soyk0.com/api/' . $bo[0] .  '/' .  $ids;

            $data = [
                'userid' => $userid[$index],
                'switch_active' => $switch_active[$index]["data"]
            ];

            $data_string = json_encode($data);

            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string),
                'Authorization: Bearer youk1llmyfvcking3x' // header baru
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

    public function destroy($bo, Request $request)
    {

        $ids = $request->input('values');

        if (!is_array($ids)) {
            $ids = [$ids];
        }
        // dd($bo);
        foreach ($ids as $id) {
            $ch = curl_init();
            $url = 'https://l4soyk0.com/api/' . $bo .  '/' .  $id;

            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer youk1llmyfvcking3x'
            ]);
            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            curl_close($ch);
            if ($httpCode == 200) {
                // echo "Pengguna berhasil dihapus.";
            } else {
                // echo "Terjadi kesalahan saat menghapus pengguna.";
            }
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }




    // public function update(Request $request)
    // {
    //     // Lakukan validasi input jika diperlukan
    //     $validatedData = $request->validate([
    //         'bo.*' => 'required',
    //         'image1.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300',
    //         'image2.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300',
    //         'image3.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300',
    //         'image4.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300',
    //         'image5.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:300',
    //     ]);

    //     // Looping untuk menyimpan data yang di-submit
    //     foreach ($validatedData['bo'] as $index => $bo) {
    //         // Buat array data untuk setiap item
    //         $data = [
    //             'bo' => $bo,
    //             'link1' => $validatedData['link1'][$index] ?? '',
    //             'link2' => $validatedData['link2'][$index] ?? '',
    //             'link3' => $validatedData['link3'][$index] ?? '',
    //             'link4' => $validatedData['link4'][$index] ?? '',
    //             'link5' => $validatedData['link5'][$index] ?? '',
    //             'idn_switchbutton1' => isset($validatedData['idn_switchbutton1'][$index]),
    //             'idn_switchbutton2' => isset($validatedData['idn_switchbutton2'][$index]),
    //             'idn_switchbutton3' => isset($validatedData['idn_switchbutton3'][$index]),
    //             'idn_switchbutton4' => isset($validatedData['idn_switchbutton4'][$index]),
    //             'idn_switchbutton5' => isset($validatedData['idn_switchbutton5'][$index]),
    //             'show_slideshow1' => isset($validatedData['show_slideshow1'][$index]),
    //             'show_slideshow2' => isset($validatedData['show_slideshow2'][$index]),
    //             'show_slideshow3' => isset($validatedData['show_slideshow3'][$index]),
    //             'show_slideshow4' => isset($validatedData['show_slideshow4'][$index]),
    //             'show_slideshow5' => isset($validatedData['show_slideshow5'][$index]),
    //             'priority' => $validatedData['priority'][$index] ?? '',
    //         ];

    //         // Simpan data ke database atau lakukan tindakan lainnya sesuai kebutuhan
    //         // ...

    //         // Simpan file gambar jika ada
    //         if ($request->hasFile('image1') && $request->file('image1')[$index]->isValid()) {
    //             $image1 = $request->file('image1')[$index]->store('banner-image', 'public');
    //             // Simpan nama file gambar ke database atau lakukan tindakan lainnya
    //             // ...
    //         }

    //         if ($request->hasFile('image2') && $request->file('image2')[$index]->isValid()) {
    //             $image2 = $request->file('image2')[$index]->store('banner-image', 'public');
    //             // Simpan nama file gambar ke database atau lakukan tindakan lainnya
    //             // ...
    //         }

    //         if ($request->hasFile('image3') && $request->file('image3')[$index]->isValid()) {
    //             $image3 = $request->file('image3')[$index]->store('banner-image', 'public');
    //             // Simpan nama file gambar ke database atau lakukan tindakan lainnya
    //             // ...
    //         }

    //         if ($request->hasFile('image4') && $request->file('image4')[$index]->isValid()) {
    //             $image4 = $request->file('image4')[$index]->store('banner-image', 'public');
    //             // Simpan nama file gambar ke database atau lakukan tindakan lainnya
    //             // ...
    //         }

    //         if ($request->hasFile('image5') && $request->file('image5')[$index]->isValid()) {
    //             $image5 = $request->file('image5')[$index]->store('banner-image', 'public');
    //             // Simpan nama file gambar ke database atau lakukan tindakan lainnya
    //             // ...
    //         }
    //     }

    //     // Response sukses
    //     return response()->json(['success' => true]);
    // }
}
