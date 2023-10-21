<?php

namespace App\Http\Controllers;

use App\Models\ApkBo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApkBoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bos = ApkBo::latest()
            ->filter(request(['search']))
            ->get();
        // $bos = apk_bo::orderBy('created_at', 'desc')->paginate(8);
        return view('apk.bo.index', [
            'title' => 'Bo',
            'data' => $bos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('apk.bo.create', [
            'title' => 'Bo'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'site' => 'required',
        ]);
        $request['livechat'] = '#';
        // Jika validasi gagal, kirimkan respon error ke Ajax
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            ApkBo::create($request->all());
        }

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(ApkBo $ApkBo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $apk[$index] = ApkBo::where('id', $ids)->first();
            }
        } else {
            $apk = [ApkBo::where('id', $id)->first()];
        }

        return view('apk.bo.update', [
            'title' => 'Bo',
            'data' => $apk,
            'disabled' => ''
        ]);
    }


    public function data($id)
    {
        $data = ApkBo::find($id);
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $id = $request->id;
        foreach ($id as $index => $idx) {
            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'site' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {
                $bo = ApkBo::find($idx);
                $bo->nama = $request->nama[$index];
                $bo->site = $request->site[$index];
                $bo->save();
            }
        }
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
            $ApkBo = ApkBo::findOrFail($id);
            $ApkBo->delete();
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
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

                $apk[$index] = ApkBo::where('id', $ids)->first();
            }
        } else {
            $apk = [ApkBo::where('id', $id)->first()];
        }

        return view('apk.bo.update', [
            'title' => 'Bo',
            'data' => $apk,
            'disabled' => 'disabled'
        ]);
    }
}
