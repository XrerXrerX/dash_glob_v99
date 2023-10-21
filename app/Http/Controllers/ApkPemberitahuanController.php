<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemberitahuan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class ApkPemberitahuanController extends Controller
{
    public function index()
    {
        $data = $this->getData();

        return view('apk.pemberitahuan.index', [
            'title' => 'Pemberitahuan',
            'menu' => 'pemberitahaun',
            'data' => $data,
            'disabled' => ''
        ]);
    }

    public function data($id = '')
    {

        $data = $this->getData($id);

        return response()->json($data);
    }

    public function create()
    {
        return view('apk.pemberitahuan.create', [
            'title' => 'Pemberitahuan'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $data = $request->all();

        $title = $data['title'];
        $content = $data['content'];

        $methode  = "POST";


        $this->action($id = '', $title, $content, $methode);
        return redirect("/apk/pemberitahuan")->withSuccess('Data berhasil disimpan!');
    }

    public function edit($id)
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
            $data[] = $this->getData($ids);
        }

        return view('apk.pemberitahuan.update', [
            'title' => 'Pemberitahuan',
            'data' => $data,
            'disabled' => ''
        ]);
    }

    public function views($id)
    {

        $id = [$id];
        foreach ($id as $index => $ids) {
            $data[] = $this->getData($ids);
        }

        return view('apk.pemberitahuan.update', [
            'title' => 'Pemberitahuan',
            'data' => $data,
            'disabled' => 'disabled'
        ]);
    }

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);
        $id = $request->id;
        $titles = $request->title;
        $contents = $request->content;
        foreach ($id as $index => $idx) {
            $id = $idx;
            $title = $titles[$index];
            $content = $contents[$index];

            $methode  = "PUT";

            $this->action($id, $title, $content, $methode);
        }



        return response()->json(['success' => 'Item berhasil diupdate!']);
    }

    public function destroy(Request $request)
    {
        $values = $request->input('values');

        if (!is_array($values)) {
            $values = [$values];
        }
        foreach ($values as $index => $value) {
            $data = $this->getData($value);
            $id = $value;

            $methode = "DELETE";

            $this->action($id, $title = '',  $content = '', $methode);
        }

        // return redirect("/apk/pemberitahuan")->withSuccess('Data berhasil dihapus!');
    }

    public function getData($id = '')
    {
        $url = $this->getUrl($id);
        $options = [
            'http' => [
                'header' => 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
            ]
        ];
        $context = stream_context_create($options);
        $data = file_get_contents($url, false, $context);
        $data = json_decode($data, true);
        $data = $data['data'];

        // if ($id != '') {
        //     foreach ($data as $index => $d) {
        //         if ($d['id'] == $id) {
        //             $data = $data[$index];
        //         }
        //     }
        // }
        return $data;
    }

    public function getUrl($id = '')
    {
        if ($id != '') {
            if (getDataBo2() != 'ortu') {
                $url = "https://www.m3y0kl1n3.com/api/pemberitahuans/" . $id;
            } else {
                $url = "https://www.m3y0kl1n3.com/api/ortupemberitahuans/" . $id;
            }
        } else {
            if (getDataBo2() != 'ortu') {
                $url = "https://www.m3y0kl1n3.com/api/pemberitahuans";
            } else {
                $url = "https://www.m3y0kl1n3.com/api/ortupemberitahuans/";
            }
        }

        return $url;
    }

    public function action($id, $title, $content, $methode)
    {
        $url = $this->getUrl($id);

        $data = [
            'title' => $title,
            'content' => $content
        ];
        $data_string = json_encode($data);

        $ch = curl_init($url);

        $headers = [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string),
            'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
        ];

        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $methode);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        // Cek apakah ada error saat melakukan request
        if (curl_error($ch)) {
            echo 'Error:' . curl_error($ch);
        }

        curl_close($ch);
    }


    public function searchindex()
    {
        $data = $this->getData();
        $search = request('search');

        if ($search != '') {
            $results = [];
            foreach ($data as $d) {
                if ((stripos($d['title'], $search) !== false) || (stripos($d['content'], $search) !== false)) {
                    $results[] = $d;
                }
            }
            $data = $results;
        }

        $perPage = 10;
        $page = request()->get('page', 1);
        $slicedData = array_slice($data, ($page - 1) * $perPage, $perPage);
        $totalData = count($data);

        $paginator = new LengthAwarePaginator(
            $slicedData,
            $totalData,
            $perPage,
            $page,
            ['path' => url()->current()]
        );

        // Mengembalikan data dalam bentuk JSON
        return response()->json($paginator);
    }
}
