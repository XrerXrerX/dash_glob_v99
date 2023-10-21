<?php

namespace App\Http\Controllers;

use App\Models\Syair;
use App\Models\SyairPasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use \Cviebrock\EloquentSluggable\Services\SlugService;


class SyairCrudController extends Controller
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
    public function index()
    {
        return view('syair.index', [
            'title' => 'SYAIR_TABLE',
            'data' => Syair::latest('datepost')->get()
        ]);
    }

    /**pse
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('syair.create', [
            'pasarans' => SyairPasaran::all(),
            'title' => 'SYAIR_TABLE',

        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nm_pasar' => 'required|max:255',
            'slug' => 'required|unique:syairs',
            'artaImage' => 'image|file|max:5046',
            'arwanaImage' => 'image|file|max:5046',
            'doyanImage' => 'image|file|max:5046',
            'duoImage' => 'image|file|max:5046',
            'jeepImage' => 'image|file|max:5046',
            'neonImage' => 'image|file|max:5046',
            'neroImage' => 'image|file|max:5046',
            'romaImage' => 'image|file|max:5046',
            'tokeImage' => 'image|file|max:5046',
            'tsImage' => 'image|file|max:5046',
            'zaraImage' => 'image|file|max:5046',
            'datepost' => 'required'
        ]);

        if ($request->file('artaimage')) {
            $validatedData['artaimage'] = $request->file('artaimage')->store('post-images', 'public');
        }
        if ($request->file('arwanaimage')) {
            $validatedData['arwanaimage'] = $request->file('arwanaimage')->store('post-images', 'public');
        }
        if ($request->file('doyanimage')) {
            $validatedData['doyanimage'] = $request->file('doyanimage')->store('post-images', 'public');
        }
        if ($request->file('duoimage')) {
            $validatedData['duoimage'] = $request->file('duoimage')->store('post-images', 'public');
        }

        if ($request->file('jeepimage')) {
            $validatedData['jeepimage'] = $request->file('jeepimage')->store('post-images', 'public');
        }

        if ($request->file('neonimage')) {
            $validatedData['neonimage'] = $request->file('neonimage')->store('post-images', 'public');
        }

        if ($request->file('neroimage')) {
            $validatedData['neroimage'] = $request->file('neroimage')->store('post-images', 'public');
        }

        if ($request->file('romaimage')) {
            $validatedData['romaimage'] = $request->file('romaimage')->store('post-images', 'public');
        }

        if ($request->file('tokeimage')) {
            $validatedData['tokeimage'] = $request->file('tokeimage')->store('post-images', 'public');
        }
        if ($request->file('tsimage')) {
            $validatedData['tsimage'] = $request->file('tsimage')->store('post-images', 'public');
        }
        if ($request->file('zaraimage')) {
            $validatedData['zaraimage'] = $request->file('zaraimage')->store('post-images', 'public');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Syair::create($validatedData);

        // return redirect('syair/posts')->with('success', 'new post has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $syairs[$index] = Syair::where('id', $ids)->first();
            }
        } else {
            $syairs = [Syair::where('id', $id)->first()];
        }
        // $syairs = Syair::where('slug', $id)->first();

        return view('syair.update', [
            'data' => $syairs,
            'title' => 'SYAIR_TABLE',
            'pasarans' => SyairPasaran::all(),
            'disabled' => ''

        ]);
    }

    public function views(string $id)
    {
        $var1 = str_replace("&", " ", $id);
        $var2 = explode("values[]=", $var1);
        $var3 = array_slice($var2, 1);
        $var4 = str_replace(" ", "", $var3);

        if (!empty($var4)) {
            $id = $var4;
            foreach ($id as $index => $ids) {

                $syairs[$index] = Syair::where('id', $ids)->first();
            }
        } else {
            $syairs = [Syair::where('id', $id)->first()];
        }
        // $syairs = Syair::where('slug', $id)->first();

        return view('syair.update', [
            'data' => $syairs,
            'title' => 'SYAIR_TABLE',
            'pasarans' => SyairPasaran::all(),
            'disabled' => 'disabled'

        ]);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Validasi inputan
        $validatedData = $request->validate([
            'id' => 'required|array',
            'nm_pasar' => 'required|array',
            'datepost' => 'required|array',
            'slug' => 'required|array',
            'artaimage' => 'sometimes|array',
            'artaimage.*' => 'nullable|image|max:2048',
            'doyanimage' => 'sometimes|array',
            'doyanimage.*' => 'nullable|image|max:2048',
            'duoimage' => 'sometimes|array',
            'duoimage.*' => 'nullable|image|max:2048',
            'neonimage' => 'sometimes|array',
            'neonimage.*' => 'nullable|image|max:2048',
            'tokeimage' => 'sometimes|array',
            'tokeimage.*' => 'nullable|image|max:2048',
            'zaraimage' => 'sometimes|array',
            'zaraimage.*' => 'nullable|image|max:2048',
            'neroimage' => 'sometimes|array',
            'neroimage.*' => 'nullable|image|max:2048',
            'romaimage' => 'sometimes|array',
            'romaimage.*' => 'nullable|image|max:2048',
            'tsimage' => 'sometimes|array',
            'tsimage.*' => 'nullable|image|max:2048',
            'arwanaimage' => 'sometimes|array',
            'arwanaimage.*' => 'nullable|image|max:2048',
            'jeepimage' => 'sometimes|array',
            'jeepimage.*' => 'nullable|image|max:2048',
        ]);

        foreach ($validatedData['id'] as $index => $id) {
            $syair = Syair::find($id);

            if (!$syair) {
                continue;
            }

            $syair->nm_pasar = $validatedData['nm_pasar'][$index];
            $syair->datepost = $validatedData['datepost'][$index];
            $syair->slug = $validatedData['slug'][$index];

            if ($request->hasFile('artaimage') && $request->file('artaimage')[$index]) {
                if ($syair->artaimage) {
                    Storage::delete('public/' . $syair->artaimage);
                }
                $syair->artaimage = $request->file('artaimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('doyanimage') && $request->file('doyanimage')[$index]) {
                if ($syair->doyanimage) {
                    Storage::delete('public/' . $syair->doyanimage);
                }
                $syair->doyanimage = $request->file('doyanimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('duoimage') && $request->file('duoimage')[$index]) {
                if ($syair->duoimage) {
                    Storage::delete('public/' . $syair->duoimage);
                }
                $syair->duoimage = $request->file('duoimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('neonimage') && $request->file('neonimage')[$index]) {
                if ($syair->neonimage) {
                    Storage::delete('public/' . $syair->neonimage);
                }
                $syair->neonimage = $request->file('neonimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('tokeimage') && $request->file('tokeimage')[$index]) {
                if ($syair->tokeimage) {
                    Storage::delete('public/' . $syair->tokeimage);
                }
                $syair->tokeimage = $request->file('tokeimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('zaraimage') && $request->file('zaraimage')[$index]) {
                if ($syair->zaraimage) {
                    Storage::delete('public/' . $syair->zaraimage);
                }
                $syair->zaraimage = $request->file('zaraimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('neroimage') && $request->file('neroimage')[$index]) {
                if ($syair->neroimage) {
                    Storage::delete('public/' . $syair->neroimage);
                }
                $syair->neroimage = $request->file('neroimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('romaimage') && $request->file('romaimage')[$index]) {
                if ($syair->romaimage) {
                    Storage::delete('public/' . $syair->romaimage);
                }
                $syair->romaimage = $request->file('romaimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('tsimage') && $request->file('tsimage')[$index]) {
                if ($syair->tsimage) {
                    Storage::delete('public/' . $syair->tsimage);
                }
                $syair->tsimage = $request->file('tsimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('arwanaimage') && $request->file('arwanaimage')[$index]) {
                if ($syair->arwanaimage) {
                    Storage::delete('public/' . $syair->arwanaimage);
                }
                $syair->arwanaimage = $request->file('arwanaimage')[$index]->store('post-images', 'public');
            }

            if ($request->hasFile('jeepimage') && $request->file('jeepimage')[$index]) {
                if ($syair->jeepimage) {
                    Storage::delete('public/' . $syair->jeepimage);
                }
                $syair->jeepimage = $request->file('jeepimage')[$index]->store('post-images', 'public');
            }

            $syair->save();
        }

        return response()->json(['message' => 'Syair berhasil diperbarui']);
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
            $syair = Syair::find($id);

            if (!$syair) {
                continue;
            }

            // Hapus gambar terkait jika ada
            if ($syair->artaimage) {
                Storage::delete('public/' . $syair->artaimage);
            }
            if ($syair->doyanimage) {
                Storage::delete('public/' . $syair->doyanimage);
            }
            if ($syair->duoimage) {
                Storage::delete('public/' . $syair->duoimage);
            }
            if ($syair->neonimage) {
                Storage::delete('public/' . $syair->neonimage);
            }
            if ($syair->tokeimage) {
                Storage::delete('public/' . $syair->tokeimage);
            }
            if ($syair->zaraimage) {
                Storage::delete('public/' . $syair->zaraimage);
            }
            if ($syair->neroimage) {
                Storage::delete('public/' . $syair->neroimage);
            }
            if ($syair->romaimage) {
                Storage::delete('public/' . $syair->romaimage);
            }
            if ($syair->tsimage) {
                Storage::delete('public/' . $syair->tsimage);
            }
            if ($syair->arwanaimage) {
                Storage::delete('public/' . $syair->arwanaimage);
            }
            if ($syair->jeepimage) {
                Storage::delete('public/' . $syair->jeepimage);
            }

            $syair->delete();
        }

        // return response()->json(['success' => 'Data berhasil dihapus!']);
    }
    // public function destroy(string $id)
    // {
    //     $syairs = Syair::where('slug', $id)->get();

    //     if ($syairs) {
    //         Storage::delete('public/' . $artaimage);
    //         Storage::delete('public/' . $arwanaimage);
    //         Storage::delete('public/' . $doyanimage);
    //         Storage::delete('public/' . $duoimage);
    //         Storage::delete('public/' . $jeepimage);
    //         Storage::delete('public/' . $neonimage);
    //         Storage::delete('public/' . $neroimage);
    //         Storage::delete('public/' . $romaimage);
    //         Storage::delete('public/' . $tokeimage);
    //         Storage::delete('public/' . $zaraimage);
    //     }

    //     Syair::destroy($syairs);
    //     return redirect('https://lotto21top.net/syair/posts')->with('success', ' post has been deleted!');
    // }

    // public function destroy(Request $request)
    // {
    //     // Validasi inputan
    //     $validatedData = $request->validate([
    //         'id' => 'required|array',
    //     ]);

    //     foreach ($validatedData['id'] as $id) {
    //         $syair = Syair::find($id);

    //         if (!$syair) {
    //             continue;
    //         }

    //         // Hapus gambar terkait jika ada
    //         if ($syair->artaimage) {
    //             Storage::delete('public/' . $syair->artaimage);
    //         }
    //         if ($syair->doyanimage) {
    //             Storage::delete('public/' . $syair->doyanimage);
    //         }
    //         if ($syair->duoimage) {
    //             Storage::delete('public/' . $syair->duoimage);
    //         }
    //         if ($syair->neonimage) {
    //             Storage::delete('public/' . $syair->neonimage);
    //         }
    //         if ($syair->tokeimage) {
    //             Storage::delete('public/' . $syair->tokeimage);
    //         }
    //         if ($syair->zaraimage) {
    //             Storage::delete('public/' . $syair->zaraimage);
    //         }
    //         if ($syair->neroimage) {
    //             Storage::delete('public/' . $syair->neroimage);
    //         }
    //         if ($syair->romaimage) {
    //             Storage::delete('public/' . $syair->romaimage);
    //         }
    //         if ($syair->tsimage) {
    //             Storage::delete('public/' . $syair->tsimage);
    //         }
    //         if ($syair->arwanaimage) {
    //             Storage::delete('public/' . $syair->arwanaimage);
    //         }
    //         if ($syair->jeepimage) {
    //             Storage::delete('public/' . $syair->jeepimage);
    //         }

    //         $syair->delete();
    //     }

    //     return response()->json(['message' => 'Syair berhasil dihapus']);
    // }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Syair::class, 'slug', $request->datepost);
        return response()->json(['slug' => $slug]);
    }
}
