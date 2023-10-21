<?php

namespace App\Http\Controllers;

use App\Models\LinkPga;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LinkPgaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($bo)
    {
        $url = 'https://l4soyk0.com/api/linkpga' . $bo;

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer youk1llmyfvcking3x'
            // 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'

        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $data = json_decode($response, true);

        return view('link.pga.index', [
            'title' => 'Link_PGA_' . strtoupper($bo),
            'data' => $data,
            'bo' => $bo
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($bo)
    {
        return view('link.pga.create', [
            'title' => 'Link_PGA_' . strtoupper($bo),
            'bo' => $bo
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $bo)
    {
        $url = 'https://l4soyk0.com/api/linkpga' . $bo;
        // $url = 'https://www.m3y0kl1n3.com/api/linkpga' . $bo;
        $data = [
            'link_pga' => $request->input('link_pga'),
            'switch_active' => isset($request->switch_active) ? '1' : '0',
        ];

        $curl = curl_init($url);

        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/x-www-form-urlencoded',
            'Authorization: Bearer youk1llmyfvcking3x'
            // 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
        ]);

        $response = curl_exec($curl);

        if ($response === false) {
            $error = curl_error($curl);
            die('Error: ' . $error);
        }

        $responseData = json_decode($response, true);
        curl_close($curl);

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }


    /**
     * Display the specified resource.
     */
    public function show(LinkPga $LinkPga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($bo, $id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        $id = !empty($var4) ? $var4 : [$id];
        foreach ($id as $index => $ids) {
            $url = 'https://l4soyk0.com/api/linkpga' . $bo . '/' . $ids;
            // $url = 'https://www.m3y0kl1n3.com/api/linkpga' . $bo . '/' . $ids;

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer youk1llmyfvcking3x'
                // 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $data[] = json_decode($response, true);
        }

        return view('link.pga.update', [
            'title' => 'LinkPga',
            'data' => $data,
            'disabled' => '',
            'bo' => $bo
        ]);
    }

    public function views($bo, $id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        $id = !empty($var4) ? $var4 : [$id];
        foreach ($id as $index => $ids) {
            $url = 'https://l4soyk0.com/api/linkpga' . $bo . '/' . $ids;
            // $url = 'https://www.m3y0kl1n3.com/api/linkpga' . $bo . '/' . $ids;

            $curl = curl_init($url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                'Authorization: Bearer youk1llmyfvcking3x'
                // 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $data[] = json_decode($response, true);
        }

        return view('link.pga.update', [
            'title' => 'LinkPga',
            'data' => $data,
            'disabled' => 'disabled',
            'bo' => $bo
        ]);
    }


    public function data($id)
    {
        $data = LinkPga::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $bo)
    {
        $ids = $request->id;
        $link_pga = $request->link_pga;
        $switch_active = $request->switch_active;
        $switch_active = array_filter($switch_active, function ($value) {
            return $value !== "on";
        });
        $switch_active = array_values($switch_active);
        foreach ($ids as $index => $id) {
            $url = 'https://l4soyk0.com/api/linkpga' . $bo . '/' . $id;
            // $url = 'https://www.m3y0kl1n3.com/api/linkpga' . $bo . '/' . $id;
            $data = [
                'link_pga' => $link_pga[$index],
                'switch_active' => $switch_active[$index],
            ];

            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/x-www-form-urlencoded',
                'Authorization: Bearer youk1llmyfvcking3x'
                // 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
            ]);

            $response = curl_exec($curl);

            if ($response === false) {
                $error = curl_error($curl);
                die('Error: ' . $error);
            }

            $responseData = json_decode($response, true);
            curl_close($curl);
        }

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $bo)
    {
        $ids = is_array($request->values) ? $request->values : [$request->values];

        foreach ($ids as $index => $id) {
            $url = 'https://l4soyk0.com/api/linkpga' . $bo . '/' . $id;
            // $url = 'https://www.m3y0kl1n3.com/api/linkpga' . $bo . '/' . $id;

            $curl = curl_init($url);

            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE");
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer youk1llmyfvcking3x'
                // 'postman-token: 54a06989-9a14-4515-afca-766a0f6f3dd9'
            ]);

            $response = curl_exec($curl);

            if ($response === false) {
                $error = curl_error($curl);
                die('Error: ' . $error);
            }

            $responseData = json_decode($response, true);
            curl_close($curl);
        }
        return response()->json([
            'message' => 'Data berhasil dihapus.',
        ]);
    }
}
