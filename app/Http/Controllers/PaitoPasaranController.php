<?php

namespace App\Http\Controllers;

use App\Models\paito_pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaitoPasaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pasarans = paito_pasaran::latest()->filter(request(['search']))->paginate(10)->withQueryString();
        // $pasarans = paito_pasaran::orderBy('created_at', 'desc')->paginate(8);
        return view('paito.pasaran.index', [
            'title' => 'Pasaran',
            'data' => $pasarans
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('paito.pasaran.create', [
            'title' => 'Pasaran'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pasaran_nama' => 'required',
            'pasaran_text' => 'required'
        ]);

        // Jika validasi gagal, kirimkan respon error ke Ajax
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            paito_pasaran::create($request->all());
        }

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(paito_pasaran $paito_pasaran)
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

                $paito[$index] = paito_pasaran::where('id', $ids)->first();
            }
        } else {
            $paito = [paito_pasaran::where('id', $id)->first()];
        }

        return view('paito.pasaran.update', [
            'title' => 'Pasaran',
            'data' => $paito,
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

                $paito[$index] = paito_pasaran::where('id', $ids)->first();
            }
        } else {
            $paito = [paito_pasaran::where('id', $id)->first()];
        }

        return view('paito.pasaran.update', [
            'title' => 'Pasaran',
            'data' => $paito,
            'disabled' => 'disabled'
        ]);
    }


    public function data($id)
    {
        $data = paito_pasaran::find($id);
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
                'pasaran_nama' => 'required',
                'pasaran_text' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {
                $pasaran = paito_pasaran::find($idx);
                $pasaran->pasaran_nama = $request->pasaran_nama[$index];
                $pasaran->pasaran_text = $request->pasaran_text[$index];
                $pasaran->save();
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
            $paito_pasaran = paito_pasaran::findOrFail($id);
            $paito_pasaran->delete();
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}
