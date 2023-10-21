<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Link;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ApkLinkController extends Controller
{
    public function index()
    {
        $data = getDataBo();
        return view('apk.link.index', [
            'title' => 'Links',
            'data' => $data
        ]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $link = $request->link;
        $namabo = $request->namabo;
        // dd($namabo);
        foreach ($id as $index => $item) {
            $data = [
                'link' => $link[$index]
            ];
            if ($item != '') {
                $methode  = "PUT";

                $this->action($item, $data, $methode, $namabo[$index]);
            } else {
                $methode  = "POST";

                $this->action('', $data, $methode, $namabo[$index]);
            }
        }

        // return response()->json(['success' => 'Item berhasil diupdate!']);
    }

    // public function delete($id)
    // {
    //     $data = $this->getData($id);
    //     $id = $data['id'];
    //     $link = $data['link'];
    //     $methode = "DELETE";

    //     // $this->action($id, $link, $methode);
    //     return redirect("/apk/link")->with('success', 'Bo berhasil dihapus!');;
    // }

    // public function getData($id = '')
    // {
    //     $url = $this->getUrl($id);

    //     foreach ($url as $index => $u) {
    //         $options = [
    //             'http' => [
    //                 'header' => 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
    //             ]
    //         ];
    //         $context = stream_context_create($options);
    //         $data[$index] = file_get_contents($u, false, $context);

    //         $data[$index] = json_decode($data[$index], true);
    //         $data[$index] = $data[$index]['data'];


    //         if ($id != '') {
    //             foreach ($data[$index] as $index => $d) {
    //                 if ($d['id'] == $id) {
    //                     $data[$index] = $data[$index];
    //                 }l;
    //             }
    //         }
    //     }

    //     return $data;
    // }

    public function getUrl($id = '', $namabo)
    {
        if ($id != '') {
            $url = 'https://www.m3y0kl1n3.com/api/' . $namabo . 'linkalts/'  .  $id;
        } else {
            $url = 'https://www.m3y0kl1n3.com/api/' . $namabo . 'linkalts';
        }
        return $url;
    }

    public function action($id, $data, $method = "POST", $namabo)
    {
        // dd($namabo);
        $url = $this->getUrl($id, $namabo);
        // dd($url);
        // dd($data);
        // $data = [
        //     'link' => $link,
        // ];

        $data_string = json_encode($data);

        $headers = array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string),
            // 'header' => "Authorization: Bearer youk1llmyfvcking3x"
            'header' => 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
        );

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);

        if (curl_error($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);

        return $result;
    }

    // public function searchindex()
    // {
    //     $data = $this->getData();
    //     $search = request('search');

    //     if ($search  != '') {
    //         $results = [];
    //         foreach ($data as $d) {
    //             if (strpos($d['link'], $search) !== false) {
    //                 $results[] = $d;
    //             }
    //         }
    //         $data =  $results;
    //     }

    //     $perPage = 10;
    //     $page =  request()->get('page', 1);
    //     $slicedData = array_slice($data, ($page - 1) * $perPage, $perPage);
    //     $paginator = new LengthAwarePaginator(
    //         $slicedData,
    //         count($data),
    //         $perPage,
    //         $page,
    //         ['path' => url()->current()]
    //     );

    //     return response()->json($paginator);
    // }


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
            $idbo = $this->getWebsite($nbo);
            // dd($idbo);
            // $url = 'https://www.m3y0kl1n3.com/api/' . $idbo;
            $url = 'https://www.m3y0kl1n3.com/api/' . $idbo;
            // dd($url);
            $options = [
                'http' => [
                    // 'header' => "Authorization: Bearer youk1llmyfvcking3x"
                    'header' => 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
                ]
            ];

            $context = stream_context_create($options);

            $data[$index] = file_get_contents($url, false, $context);
            $data[$index] = json_decode($data[$index], true);
        }

        return view('apk.link.create', [
            'title' => 'Link',
            'namabo' => $namabo,
            'data' => $data,
            'disabled' => ''

        ]);
    }

    public function views($namabo)
    {
        $namabo = [$namabo];
        foreach ($namabo as $index => $nbo) {
            $url = 'https://www.m3y0kl1n3.com/api/' . $nbo . 'linkalts';
            $options = [
                'http' => [
                    'header' => 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
                ]
            ];

            $context = stream_context_create($options);

            $data[$index] = file_get_contents($url, false, $context);
            $data[$index] = json_decode($data[$index], true);
        }

        return view('apk.link.create', [
            'title' => 'Link',
            'namabo' => $namabo,
            'data' => $data,
            'disabled' => 'disabled'

        ]);
    }

    public function getWebsite($namabo)
    {
        $idbo = $namabo . 'linkalts';

        return $idbo;
    }
}
