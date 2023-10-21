<?php

namespace App\Http\Controllers;

use App\Models\paito_result;
use App\Models\paito_pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaitoResultController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search_pasaran = isset($request->search_pasaran) ? $request->search_pasaran : 'HONGKONG';

        $paitoResults = paito_result::where('pasaran', $search_pasaran)
            ->latest()
            ->get();

        $data_pasaran = paito_pasaran::get();
        $nama_pasaran = [];
        foreach ($data_pasaran as $pasaran) {
            $nama_pasaran[] = $pasaran->pasaran_nama;
        }

        return view('paito.result.index', [
            'title' => 'Result',
            'data' => $paitoResults,
            'nama_pasaran' => $nama_pasaran,
            'search_pasaran' => $search_pasaran
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pasarans = paito_pasaran::orderBy('pasaran_nama', 'asc')->get();
        return view('paito.result.create', [
            'title' => 'Result',
            'pasarans' => $pasarans
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pasaran' => 'required',
            'result' => 'required',
            'hari' => 'required',
            'bulan' => 'required',
            'tahun' => 'required'
        ]);

        // Jika validasi gagal, kirimkan respon error ke Ajax
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            paito_result::create($request->all());
        }

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(paito_result $paito_result)
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
                $paito[$index] = paito_result::where('id', $ids)->first();
            }
        } else {
            $paito = [paito_result::where('id', $id)->first()];
        }

        return view('paito.result.update', [
            'title' => 'Result',
            'data' => $paito,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
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
                $paito[$index] = paito_result::where('id', $ids)->first();
            }
        } else {
            $paito = [paito_result::where('id', $id)->first()];
        }

        return view('paito.result.update', [
            'title' => 'Result',
            'data' => $paito,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
            'disabled' => 'disabled'
        ]);
    }


    public function data($id)
    {
        $data = paito_result::find($id);
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
                'pasaran' => 'required',
                'result' => 'required',
                'hari' => 'required',
                'bulan' => 'required',
                'tahun' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {
                $result = paito_result::find($idx);
                $result->pasaran = $request->pasaran[$index];
                $result->result = $request->result[$index];
                $result->hari = $request->hari[$index];
                $result->bulan = $request->bulan[$index];
                $result->tahun = $request->tahun[$index];
                $result->save();
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
            $paito_result = paito_result::findOrFail($id);
            $paito_result->delete();
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}
