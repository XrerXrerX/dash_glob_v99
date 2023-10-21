<?php

namespace App\Http\Controllers;

use App\Models\WebMediaLivestream;
use App\Models\WebMediaStream;
use App\Models\paito_pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebMediaLivestreamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webmedialivestream = WebMediaLivestream::latest()
            ->get();

        // $results = WebMediaLivestream::orderBy('created_at', 'desc')->paginate(8);
        return view('web.medialivestream.index', [
            'title' => 'Media Live Stream',
            'data' => $webmedialivestream
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namastreamer = WebMediaStream::latest()->get();
        $namastreamer = $namastreamer->pluck('strm_nama');

        return view('web.medialivestream.create', [
            'title' => 'Media Live Stream',
            'namastreamer' => $namastreamer
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_live' => 'required',
            'live_url' => 'required',
            'desk_live' => 'required',
            'tgl_live' => 'required'
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            WebMediaLivestream::create($request->all());
        }

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(WebMediaLivestream $WebMediaLivestream)
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

        $namastreamer = WebMediaStream::latest()->get();
        $namastreamer = $namastreamer->pluck('strm_nama');

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {
                $paito[$index] = WebMediaLivestream::where('id', $ids)->first();
            }
        } else {
            $paito = [WebMediaLivestream::where('id', $id)->first()];
        }

        return view('web.medialivestream.update', [
            'title' => 'Media Live Stream',
            'data' => $paito,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
            'disabled' => '',
            'namastreamer' => $namastreamer
        ]);
    }

    public function views($id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        $namastreamer = WebMediaStream::latest()->get();
        $namastreamer = $namastreamer->pluck('strm_nama');

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {
                $paito[$index] = WebMediaLivestream::where('id', $ids)->first();
            }
        } else {
            $paito = [WebMediaLivestream::where('id', $id)->first()];
        }

        return view('web.medialivestream.update', [
            'title' => 'Media Live Stream',
            'data' => $paito,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
            'disabled' => 'disabled',
            'namastreamer' => $namastreamer
        ]);
    }


    public function data($id)
    {
        $data = WebMediaLivestream::find($id);
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
                'nama_live.*' => 'required',
                'live_url.*' => 'required',
                'desk_live.*' => 'required',
                'tgl_live.*' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {
                $result = WebMediaLivestream::find($idx);
                $result->nama_live = $request->nama_live[$index];
                $result->live_url = $request->live_url[$index];
                $result->desk_live = $request->desk_live[$index];
                $result->tgl_live = $request->tgl_live[$index];
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
            $WebMediaLivestream = WebMediaLivestream::findOrFail($id);
            $WebMediaLivestream->delete();
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}
