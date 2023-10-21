<?php

namespace App\Http\Controllers;

use App\Models\WebMediaNews;
use App\Models\paito_pasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WebMediaNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $webmedianews = WebMediaNews::latest()
            ->get();
        return view('web.medianews.index', [
            'title' => 'Media News',
            'data' => $webmedianews
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('web.medianews.create', [
            'title' => 'Media News'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_berita' => 'required',
            'desk_berita' => 'required',
            'tgl_berita' => 'required',
            'news_wa' => 'required',
            'news_twit' => 'required',
            'news_youtube' => 'required',
            'news_facebook' => 'required',
            'news_instagram' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        } else {
            WebMediaNews::create($request->all());
        }

        return response()->json([
            'message' => 'Data berhasil disimpan.',
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(WebMediaNews $WebMediaNews)
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
                $paito[$index] = WebMediaNews::where('id', $ids)->first();
            }
        } else {
            $paito = [WebMediaNews::where('id', $id)->first()];
        }

        return view('web.medianews.update', [
            'title' => 'Media News',
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
                $paito[$index] = WebMediaNews::where('id', $ids)->first();
            }
        } else {
            $paito = [WebMediaNews::where('id', $id)->first()];
        }

        return view('web.medianews.update', [
            'title' => 'Media News',
            'data' => $paito,
            'pasarans' => paito_pasaran::orderBy('pasaran_nama', 'asc')->get(),
            'disabled' => 'disabled'
        ]);
    }


    public function data($id)
    {
        $data = WebMediaNews::find($id);
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
                'nama_berita.*' => 'required',
                'desk_berita.*' => 'required',
                'tgl_berita.*' => 'required',
                'news_wa.*' => 'required',
                'news_twit.*' => 'required',
                'news_youtube.*' => 'required',
                'news_facebook.*' => 'required',
                'news_instagram.*' => 'required'
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()->all()]);
            } else {
                $result = WebMediaNews::find($idx);
                $result->nama_berita = $request->nama_berita[$index];
                $result->desk_berita = $request->desk_berita[$index];
                $result->tgl_berita = $request->tgl_berita[$index];
                $result->news_wa = $request->news_wa[$index];
                $result->news_twit = $request->news_twit[$index];
                $result->news_youtube = $request->news_youtube[$index];
                $result->news_facebook = $request->news_facebook[$index];
                $result->news_instagram = $request->news_instagram[$index];
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
            $WebMediaNews = WebMediaNews::findOrFail($id);
            $WebMediaNews->delete();
        }

        return response()->json(['success' => 'Data berhasil dihapus!']);
    }
}
