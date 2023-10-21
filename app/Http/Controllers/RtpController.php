<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RtpProvider;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreRtpProviderRequest;
use App\Http\Requests\UpdateRtpProviderRequest;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Http;


class RtpController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            if ($request->session()->has('login_expired') && $request->session()->get('login_expired')) {
                return redirect('/trex1diath/login')->withErrors(['login_expired' => 'Session habis. Silakan login kembali.']);
            }
            return $next($request);
        });
    }
    /**
     * Display a listing of the resource.
     */
    public function index($divisi)
    {
        // $data = RtpProvider::where('divisi', $divisi)
        //     ->orderBy('created_at', 'desc')
        //     ->get();

        if ($divisi == 'pp') {
            $divisigame = 'PRAGMATIC';
        } else if ($divisi == 'hb') {
            $divisigame = 'HABANERO';
        } else if ($divisi == 'mic') {
            $divisigame = 'MICRO GAMING';
        } else if ($divisi == 'rtp') {
            $divisigame = 'PG SOFT';
        } else if ($divisi == 'ttr') {
            $divisigame = 'TOP GAMING';
        } else if ($divisi == 'idn') {
            $divisigame = 'IDN SLOT';
        } else if ($divisi == 'sg') {
            $divisigame = 'GMW';
        }

        $data = $this->getData();

        usort($data, function ($a, $b) {
            // Urutkan berdasarkan priority secara menurun (DESC)
            if ($a['priority'] === $b['priority']) {
                // Jika priority sama, urutkan berdasarkan created_at secara menurun (DESC)
                if ($a['created_at'] === $b['created_at']) {
                    // Jika created_at sama, urutkan berdasarkan updated_at secara menurun (DESC)
                    return strtotime($b['updated_at']) - strtotime($a['updated_at']);
                }
                return strtotime($b['created_at']) - strtotime($a['created_at']);
            }
            return $b['priority'] - $a['priority'];
        });
        // Filter berdasarkan $divisi jika diperlukan
        $data = array_filter($data, function ($item) use ($divisi) {
            return $item['divisi'] === $divisi;
        });
        $data = array_filter($data, function ($item) use ($divisi) {
            return $item['divisi'] == $divisi;
        });

        return view('rtp.index', [
            'title' => 'RTP - ' . $divisigame,
            'data' => $data,
            'divisi' => $divisi
        ]);
    }

    public function getData($id = '')
    {
        $response = Http::withHeaders([
            'Postman-Token' => '54a06989-9a14-4515-afca-766a0f6f3dd9'
        ])->get("https://www.rtpl21group.com/api/goksuy0k/ko01ls91kj9sjjakf9");

        if ($response->successful()) {
            $responseData = $response->json();
            $data = $responseData['data'];

            if ($id != '') {
                $data = array_filter($data, function ($item) use ($id) {
                    return $item['id'] == $id;
                });
            }

            return $data;
        } else {
            $errorResponse = $response->json();
            $errorMessage = $errorResponse['message'];
            return response()->json(['error' => $errorMessage], 400);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($divisi)
    {
        if ($divisi == 'pp') {
            $divisigame = 'PRAGMATIC';
        } else if ($divisi == 'hb') {
            $divisigame = 'HABANERO';
        } else if ($divisi == 'mic') {
            $divisigame = 'MICRO GAMING';
        } else if ($divisi == 'rtp') {
            $divisigame = 'PG SOFT';
        } else if ($divisi == 'ttr') {
            $divisigame = 'TOP GAMING';
        } else if ($divisi == 'idn') {
            $divisigame = 'IDN SLOT';
        } else if ($divisi == 'sg') {
            $divisigame = 'GMW';
        }

        return view('rtp.create', [
            'title' => 'RTP - ' . $divisigame,
            'divisi' => $divisi
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'divisi' => 'required',
            'nama' => 'required',
            'gambar' => 'required|image|max:7500',
        ]);

        // Mengambil file gambar dari permintaan
        $gambar = $request->file('gambar');

        // Menyiapkan data yang akan dikirimkan
        $data = [
            'devisi' => $validatedData['divisi'],
            'nama' => $validatedData['nama'],
        ];

        // Mengupload file gambar ke URL menggunakan HTTP Client
        $response = Http::withHeaders([
            'Authorization' => 'Bearer your_token_here',
        ])->attach('gambar', $gambar)->post('https://www.rtpl21group.com/api/goksuy0k/ko01ls91kj9sjjakf9', $data);

        // Periksa respons dari API
        if ($response->successful()) {
            // Jika permintaan berhasil, lakukan tindakan selanjutnya
            return redirect()->back()->with('success', 'Data berhasil dikirim.');
        } else {
            // Jika permintaan gagal, tangani kesalahan yang mungkin terjadi
            $errorMessage = $response->json('message');
            return redirect()->back()->with('error', $errorMessage);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {



        if ($id == 'pp') {
            return view('dashboard.rtp.show', [
                'provider' => 'PRAGMATIC PLAY',
                'id' => 'pp',
                'posts' => RtpProvider::where('divisi', 'pp')
                    ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'hb') {
            return view('dashboard.rtp.show', [
                'provider' => 'HABANERO',
                'id' => 'hb',
                'posts' => RtpProvider::where('divisi', 'hb')
                    ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'idn') {
            return view('dashboard.rtp.show', [
                'provider' => 'IDN PLAY',
                'id' => 'idn',
                'posts' => RtpProvider::where('divisi', 'idn')
                    ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'rtp') {
            return view('dashboard.rtp.show', [
                'provider' => 'PG SOFT',
                'id' => 'rtp',
                'posts' => RtpProvider::where('divisi', 'rtp')
                    ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'ttr') {
            return view('dashboard.rtp.show', [
                'provider' => 'TOP TREND',
                'id' => 'ttr',
                'posts' => RtpProvider::where('divisi', 'ttr')
                    ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'mic') {
            return view('dashboard.rtp.show', [
                'provider' => 'MICRO GAMING',
                'id' => 'mic',
                'posts' => RtpProvider::where('divisi', 'mic')
                    ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
            ]);
        } else {
            return view('dashboard.rtp.show', [
                'provider' => 'GMW',
                'id' => 'sg',
                'posts' => RtpProvider::where('divisi', 'sg')
                    ->orderBy('nama', 'asc')->paginate(20)->withQueryString()
            ]);
            dd($id);
        }
    }

    public function showsearch(string $id)
    {



        if ($id == 'pp') {
            return view('dashboard.rtp.show', [
                'provider' => 'PRAGMATIC PLAY',
                'id' => 'pp',
                'posts' => RtpProvider::where('divisi', 'pp')
                    ->orderBy('nama', 'asc')->filter(request(['search']))->paginate(20)->withQueryString(),
            ]);
        } else if ($id == 'hb') {
            return view('dashboard.rtp.show', [
                'provider' => 'HABANERO',
                'id' => 'hb',
                'posts' => RtpProvider::where('divisi', 'hb')
                    ->orderBy('nama', 'asc')->filter(request(['search']))->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'idn') {
            return view('dashboard.rtp.show', [
                'provider' => 'IDN PLAY',
                'id' => 'idn',
                'posts' => RtpProvider::where('divisi', 'idn')
                    ->orderBy('nama', 'asc')->filter(request(['search']))->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'rtp') {
            return view('dashboard.rtp.show', [
                'provider' => 'PG SOFT',
                'id' => 'rtp',
                'posts' => RtpProvider::where('divisi', 'rtp')
                    ->orderBy('nama', 'asc')->filter(request(['search']))->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'ttr') {
            return view('dashboard.rtp.show', [
                'provider' => 'TOP TREND',
                'id' => 'ttr',
                'posts' => RtpProvider::where('divisi', 'ttr')
                    ->orderBy('nama', 'asc')->filter(request(['search']))->paginate(20)->withQueryString()
            ]);
        } else if ($id == 'mic') {
            return view('dashboard.rtp.show', [
                'provider' => 'MICRO GAMING',
                'id' => 'mic',
                'posts' => RtpProvider::where('divisi', 'mic')
                    ->orderBy('nama', 'asc')->filter(request(['search']))->paginate(20)->withQueryString()
            ]);
        } else {
            return view('dashboard.rtp.show', [
                'provider' => 'GMW',
                'id' => 'sg',
                'posts' => RtpProvider::where('divisi', 'sg')
                    ->orderBy('nama', 'asc')->filter(request(['search']))->paginate(20)->withQueryString()
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($divisi, $id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {
                $rtp[$index] = $this->getData($ids);
            }
        } else {
            $rtp = [$this->getData($id)];
        }
        if ($divisi == 'pp') {
            $divisigame = 'PRAGMATIC';
        } else if ($divisi == 'hb') {
            $divisigame = 'HABANERO';
        } else if ($divisi == 'mic') {
            $divisigame = 'MICRO GAMING';
        } else if ($divisi == 'rtp') {
            $divisigame = 'PG SOFT';
        } else if ($divisi == 'ttr') {
            $divisigame = 'TOP GAMING';
        } else if ($divisi == 'idn') {
            $divisigame = 'IDN SLOT';
        } else if ($divisi == 'sg') {
            $divisigame = 'GMW';
        }

        return view('rtp.update', [
            'title' => 'Edit RTP - ' . $divisigame,
            'data' => $rtp,
            'divisi' => $divisi,
            'disabled' => ''
        ]);
    }

    public function views($divisi, $id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $rtp[$index] = $this->getData($ids);
            }
        } else {
            $rtp = [$this->getData($id)];
        }


        if ($divisi == 'pp') {
            $divisigame = 'PRAGMATIC';
        } else if ($divisi == 'hb') {
            $divisigame = 'HABANERO';
        } else if ($divisi == 'mic') {
            $divisigame = 'MICRO GAMING';
        } else if ($divisi == 'rtp') {
            $divisigame = 'PG SOFT';
        } else if ($divisi == 'ttr') {
            $divisigame = 'TOP GAMING';
        } else if ($divisi == 'idn') {
            $divisigame = 'IDN SLOT';
        } else if ($divisi == 'sg') {
            $divisigame = 'GMW';
        }

        return view('rtp.update', [
            'title' => 'Edit RTP - ' . $divisigame,
            'data' => $rtp,
            'divisi' => $divisi,
            'disabled' => 'disabled'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {

        $ids = $request->id;
        $divisi = $request->divisi;
        $token = $request->Authorization;

        $priority = array_filter($request->priority, function ($value) {
            return $value !== "on";
        });
        $priority = array_values($priority);

        foreach ($ids as $index => $id) {
            $date = RtpProvider::where('id', $id)->first()->created_at;

            if ($divisi == 'IDN') {
                $divisi = strtolower($divisi);
            }

            $oldgmbr = substr($request->oldrtpimage[$index], 0, 6);

            if (isset($request->file('gambar')[$index])) {
                $validatedData = $request->validate([
                    'nama.' . $index => 'required',
                    'gambar.' . $index => 'image|file|max:5046',
                ]);

                $validatedData['divisi'] = $divisi;
                $validatedData['nama'] = $request->nama[$index];


                $validatedData['priority'] = $priority[$index];


                if (strtotime($date) < strtotime('2020-01-01')) {
                    Storage::delete('public/imgrtp/' . $divisi . '/' . $request->oldrtpimage[$index]);
                } else {
                    Storage::delete('public/' . $request->oldrtpimage[$index]);
                }

                $validatedData['gambar'] = $request->file('gambar')[$index]->store('imgrtp/' . $divisi, 'public');
            } else {
                $validatedData = $request->validate([
                    'nama.' . $index => 'required',
                ]);

                $validatedData['divisi'] = $divisi;
                $validatedData['priority'] = $priority[$index];
                $validatedData['nama'] = $request->nama[$index];

                if ($oldgmbr == 'imgrtp') {
                    $validatedData['gambar'] = $request->oldrtpimage[$index];
                } else {
                    $validatedData['gambar'] = 'imgrtp/' . $divisi . '/' . $request->oldrtpimage[$index];
                }
            }

            RtpProvider::where('id', $id)
                ->update($validatedData);
        }
        return response()->json(['success' => true, 'message' => 'Post has been updated!']);
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $divisi)
    {
        try {
            $ids = is_array($request->values) ? $request->values : [$request->values];

            foreach ($ids as $index => $id) {
                $rpts = RtpProvider::where('id', $id)->get();
                $rpt = RtpProvider::where('id', $id)->first()->gambar;
                $psrn = RtpProvider::where('id', $id)->first()->divisi;
                $date = RtpProvider::where('id', $id)->first()->created_at;

                if (strtotime($date) < strtotime('2020-01-01')) {
                    if ($psrn == 'pp') {
                        Storage::delete('public/imgrtp/PP/' . $rpt);
                    } else if ($psrn == 'hb') {
                        Storage::delete('public/imgrtp/HB/' . $rpt);
                    } else if ($psrn == 'ttr') {
                        Storage::delete('public/imgrtp/TTR/' . $rpt);
                    } else if ($psrn == 'mic') {
                        Storage::delete('public/imgrtp/MIC/' . $rpt);
                    } else if ($psrn == 'rtp') {
                        Storage::delete('public/imgrtp/PG/' . $rpt);
                    } else if ($psrn == 'idn') {
                        Storage::delete('public/imgrtp/idn/' . $rpt);
                    } else if ($psrn == 'sg') {
                        Storage::delete('public/imgrtp/SG/' . $rpt);
                    }
                } else {
                    if ($psrn) {
                        Storage::delete('public/' . $rpt);
                    }
                }
                RtpProvider::destroy($rpts);
            }

            return response()->json(['success' => true, 'message' => 'Post has been deleted!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => $e->getMessage()]);
        }
    }
}
