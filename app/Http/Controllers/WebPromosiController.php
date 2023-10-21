<?php

namespace App\Http\Controllers;

use App\Models\WebPromosi;
use Illuminate\Support\Facades\Validator;
use App\Models\ApkBo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class WebPromosiController extends Controller
{
    public function index()
    {
        $promosi = WebPromosi::latest()->get();
        return view('web.promosi.index', [
            'title' => 'Promosi',
            'data' => $promosi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $data = getDataBo();

        return view('web.promosi.create', [
            'title' => 'WEB - Promosi',
            'menu' =>  'promosi'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'website' => 'required',
            'website_url' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048|not_regex:/\.(phpp|php|js|html)/i',
            'deskripsi' => 'required',

        ]);

        if ($request->image_url2 == '') {
            if ($request->file('image_url')) {
                $validatedData['image_url'] = $request->file('image_url')->store('Web-Promosi', 'public');
            }
        } else {
            $validatedData['image_url'] = $request->image_url2;
        }

        WebPromosi::create($validatedData);


        // if ($validator->fails()) {
        //     return response()->json(['errors'=>$validator->errors()->all()]);
        // } else {
        //     WebPromosi::create($request->all());
        //     $imageName = time() . '.' . $request->image_url->extension();
        //     $request->image_url->move(public_path('images'), $imageName);
        // }

        return redirect('/web/promosi')->with('success', 'Berhasil menambahkan promosi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bo  $bo
     * @return \Illuminate\Http\Response
     */
    public function show(WebPromosi $bo)
    {
        return view('web.show', compact('bo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebPromosi  $bo
     * @return \Illuminate\Http\Response
     */
    public function data($id)
    {
        $data = WebPromosi::find($id);
        return response()->json($data);
    }
    public function datapromosi($id)
    {
        $data = ApkBo::find($id);
        $bonama = '';
        if ($data['nama'] == 'arwana') {
            $bonama = 'ARWANATOTO';
        } else if ($data['nama'] == 'jeep') {
            $bonama = 'JEEPTOTO';
        } else if ($data['nama'] == 'doyantoto') {
            $bonama = 'DOYANTOTO';
        } else if ($data['nama'] == 'tstoto') {
            $bonama = 'TSTOTO';
        } else if ($data['nama'] == 'arta') {
            $bonama = 'ARTA4D';
        } else if ($data['nama'] == 'neon') {
            $bonama = 'NEON4D';
        } else if ($data['nama'] == 'zara') {
            $bonama = 'ZARA4D';
        } else if ($data['nama'] == 'roma') {
            $bonama = 'ROMA4D';
        } else if ($data['nama'] == 'nero') {
            $bonama = 'NERO4D';
        } else if ($data['nama'] == 'duo') {
            $bonama = 'JEEPTOTO';
        } else if ($data['nama'] == 'toke') {
            $bonama = 'DUOGAMING';
        }
        $data = [
            'id' => $data['id'],
            'nama' => $bonama,
            'site' => $data['site']
        ];
        return response()->json($data);
    }


    // public function edit(WebPromosi $promosi)
    // {
    //     dd($promosi);
    //     $data = getDataBo();

    //     return view('dashboard.web.promosi.edit', [
    //         'title' => 'WEB - Promosi',

    //         'data' => $data
    //     ], compact('promosi'));
    // }

    public function edit($id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $promosi[$index] = WebPromosi::where('id', $ids)->first();
            }
        } else {
            $promosi = [WebPromosi::where('id', $id)->first()];
        }

        return view('web.promosi.update', [
            'title' => 'Bo',
            'data' => $promosi,
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

                $promosi[$index] = WebPromosi::where('id', $ids)->first();
            }
        } else {
            $promosi = [WebPromosi::where('id', $id)->first()];
        }

        return view('web.promosi.update', [
            'title' => 'Bo',
            'data' => $promosi,
            'disabled' => 'disabled'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WebPromosi  $bo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // Perform validation on the request data
        $validatedData = $request->validate([
            'id' => 'required|array',
            'website' => 'required|array',
            'website.*' => 'string',
            'website_url' => 'required|array',
            'website_url.*' => 'string',
            'image_url' => 'array',
            'image_url.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'deskripsi' => 'required|array',
            'deskripsi.*' => 'string',
        ]);

        // Process the updated data
        foreach ($validatedData['id'] as $index => $id) {
            $promosi = WebPromosi::find($id);
            if ($promosi) {
                $promosi->website = $validatedData['website'][$index];
                $promosi->website_url = $validatedData['website_url'][$index];
                $promosi->deskripsi = $validatedData['deskripsi'][$index];

                $currentImage = $promosi->image_url;

                if ($request->hasFile('image_url.' . $index)) {
                    // Store the new image
                    $image = $request->file('image_url.' . $index);
                    $imageName = time() . '_' . $image->getClientOriginalName();
                    $imagePath = $image->storeAs('public/Web-Promosi', $imageName);

                    // Delete the old image
                    if (!empty($currentImage)) {
                        Storage::delete('public/' . $currentImage);
                    }

                    $promosi->image_url = 'Web-Promosi/' . $imageName;
                }

                $promosi->save();
            }
        }

        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebPromosi  $bo
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request)
    {

        $ids = $request->input('values');
        if (!is_array($ids)) {
            $ids = [$ids];
        }
        foreach ($ids as $index => $id) {
            $data = WebPromosi::where('id', $id)->get();
            $img = WebPromosi::where('id', $id)->first()->image_url;
            Storage::delete('public/' . $img);
            WebPromosi::destroy($data);
        }
        return response()->json(['success' => true]);
    }



    public function searchindex()
    {
        $data = WebPromosi::latest();
        $search = request('search');

        if ($search != '') {
            $data = $data->filter(request(['search']));
        }

        $data = $data->paginate(10)->withQueryString();


        // Mengembalikan data dalam bentuk JSON
        return response()->json($data);
    }
}
