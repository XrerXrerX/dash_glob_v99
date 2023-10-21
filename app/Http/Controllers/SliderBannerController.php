<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderBannerController extends Controller
{
    public function index()
    {
        $url = 'https://l4soyk0.com/api/idnslidersmobile';
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

        return view('slider.banner.index', [
            'title' => 'Banner',
            'data' => $data
        ]);
    }

    public function create()
    {
        return view('slider.banner.create', [
            'title' => 'Banner'
        ]);
    }

    public function store(Request $request)
    {
        // $request->validate([
        //     'image1' => 'image|mimes:jpeg,png,jpg,gif,svg|max:300',
        //     'image2' => 'image|mimes:jpeg,png,jpg,gif,svg|max:300',
        //     'image3' => 'image|mimes:jpeg,png,jpg,gif,svg|max:300',
        //     'image4' => 'image|mimes:jpeg,png,jpg,gif,svg|max:300',
        //     'image5' => 'image|mimes:jpeg,png,jpg,gif,svg|max:300',
        // ]);

        $url = 'https://l4soyk0.com/api/idnslidersmobile';
        $data = array(
            'bo' => $request->bo,
            'link1' => $request->link1 == '' ? '#' : $request->link1,
            'link2' => $request->link2 == '' ? '#' : $request->link2,
            'link3' => $request->link3 == '' ? '#' : $request->link3,
            'link4' => $request->link4 == '' ? '#' : $request->link4,
            'link5' => $request->link5 == '' ? '#' : $request->link5,
            'idn_switchbutton1' => $request->idn_switchbutton1 == null ? 0 : 1,
            'idn_switchbutton2' => $request->idn_switchbutton2 == null ? 0 : 1,
            'idn_switchbutton3' => $request->idn_switchbutton3 == null ? 0 : 1,
            'idn_switchbutton4' => $request->idn_switchbutton4 == null ? 0 : 1,
            'idn_switchbutton5' => $request->idn_switchbutton5 == null ? 0 : 1,
            'show_slideshow1' => $request->show_slideshow1 == null ? 0 : 1,
            'show_slideshow2' => $request->show_slideshow2 == null ? 0 : 1,
            'show_slideshow3' => $request->show_slideshow3 == null ? 0 : 1,
            'show_slideshow4' => $request->show_slideshow4 == null ? 0 : 1,
            'show_slideshow5' => $request->show_slideshow5 == null ? 0 : 1,
            'priority' => $request->priority,
            // 'image1' => $request->file('image1') == null ? '' : $request->file('image1')->store('banner-image', 'public'),
            // 'image2' => $request->file('image2') == null ? '' : $request->file('image2')->store('banner-image', 'public'),
            // 'image3' => $request->file('image3') == null ? '' : $request->file('image3')->store('banner-image', 'public'),
            // 'image4' => $request->file('image4') == null ? '' : $request->file('image4')->store('banner-image', 'public'),
            // 'image5' => $request->file('image5') == null ? '' : $request->file('image5')->store('banner-image', 'public')
            'image1' => $request->image1,
            'image2' => $request->image2,
            'image3' => $request->image3,
            'image4' => $request->image4,
            'image5' => $request->image5
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
            print_r($result);
        } else {
            // Response gagal atau error
            echo "Error: Failed to post data to API.";
        }
    }

    public function edit(Request $request, $id)
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
            $url = 'https://l4soyk0.com/api/idnslidersmobile/' .  $ids;
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
        return view('slider.banner.update', [
            'title' => 'Banner',
            'data' => $result,
            'disabled' => '',
            'id' => $id
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
        }

        if (!is_array($id)) {
            $id = [$id];
        }
        foreach ($id as $index => $ids) {
            $url = 'https://l4soyk0.com/api/idnslidersmobile/' .  $ids;
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
        return view('slider.banner.update', [
            'title' => 'Banner',
            'data' => $result,
            'disabled' => 'disabled',
            'id' => $id
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $bo = $request->bo;
        $link1 = $request->link1;
        $link2 = $request->link2;
        $link3 = $request->link3;
        $link4 = $request->link4;
        $link5 = $request->link5;
        $idn_switchbutton1 = $request->idn_switchbutton1;
        $idn_switchbutton2 = $request->idn_switchbutton2;
        $idn_switchbutton3 = $request->idn_switchbutton3;
        $idn_switchbutton4 = $request->idn_switchbutton4;
        $idn_switchbutton5 = $request->idn_switchbutton5;
        $show_slideshow1 = $request->show_slideshow1;
        $show_slideshow2 = $request->show_slideshow2;
        $show_slideshow3 = $request->show_slideshow3;
        $show_slideshow4 = $request->show_slideshow4;
        $show_slideshow5 = $request->show_slideshow5;
        $priority = $request->priority;
        $imageold1 = $request->imageold1;
        $imageold2 = $request->imageold2;
        $imageold3 = $request->imageold3;
        $imageold4 = $request->imageold4;
        $imageold5 = $request->imageold5;
        $image1 = $request->image1;
        $image2 = $request->image2;
        $image3 = $request->image3;
        $image4 = $request->image4;
        $image5 = $request->image5;

        // $this->getData();

        // $image1 = $request->file('image1');
        // if($image1 == ''){

        // }


        // == null ? '' : $request->file('image1')->store('banner-image', 'public')


        // 



        foreach ($bo as $index => $nbo) {
            $url = 'https://l4soyk0.com/api/idnslidersmobile/' . $id[$index];

            $data = [
                'bo' => $nbo,
                'link1' => $link1[$index] == '' ? '#' : $link1[$index],
                'link2' => $link2[$index] == '' ? '#' : $link2[$index],
                'link3' => $link3[$index] == '' ? '#' : $link3[$index],
                'link4' => $link4[$index] == '' ? '#' : $link4[$index],
                'link5' => $link5[$index] == '' ? '#' : $link5[$index],
                'idn_switchbutton1' => $idn_switchbutton1[$index]["data"],
                'idn_switchbutton2' => $idn_switchbutton2[$index]["data"],
                'idn_switchbutton3' => $idn_switchbutton3[$index]["data"],
                'idn_switchbutton4' => $idn_switchbutton4[$index]["data"],
                'idn_switchbutton5' => $idn_switchbutton5[$index]["data"],
                'show_slideshow1' => $show_slideshow1[$index]["data"],
                'show_slideshow2' => $show_slideshow2[$index]["data"],
                'show_slideshow3' => $show_slideshow3[$index]["data"],
                'show_slideshow4' => $show_slideshow4[$index]["data"],
                'show_slideshow5' => $show_slideshow5[$index]["data"],
                'priority' => $priority[$index],
                'image1' => $image1[$index],
                'image2' => $image2[$index],
                'image3' => $image3[$index],
                'image4' => $image4[$index],
                'image5' => $image5[$index]
                // 'image1' => isset($request->file('image1')[$index]) && $request->file('image1')[$index]->isValid()
                //     ? $request->file('image1')[$index]->store('banner-image', 'public')
                //     : ($index == 0 ? $imageold1[$index] : null),
                // 'image2' => isset($request->file('image2')[$index]) && $request->file('image2')[$index]->isValid()
                //     ? $request->file('image2')[$index]->store('banner-image', 'public')
                //     : ($index == 0 ? $imageold2[$index] : null),
                // 'image3' => isset($request->file('image3')[$index]) && $request->file('image3')[$index]->isValid()
                //     ? $request->file('image3')[$index]->store('banner-image', 'public')
                //     : ($index == 0 ? $imageold3[$index] : null),
                // 'image4' => isset($request->file('image4')[$index]) && $request->file('image4')[$index]->isValid()
                //     ? $request->file('image4')[$index]->store('banner-image', 'public')
                //     : ($index == 0 ? $imageold4[$index] : null),
                // 'image5' => isset($request->file('image5')[$index]) && $request->file('image5')[$index]->isValid()
                //     ? $request->file('image5')[$index]->store('banner-image', 'public')
                //     : ($index == 0 ? $imageold5[$index] : null)

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

    public function destroy(Request $request)
    {
        $ids = $request->input('values');
        if (!is_array($ids)) {
            $ids = [$ids];
        }

        foreach ($ids as $id) {
            $ch = curl_init();
            $url = 'https://l4soyk0.com/api/idnslidersmobile/' . $id;
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
