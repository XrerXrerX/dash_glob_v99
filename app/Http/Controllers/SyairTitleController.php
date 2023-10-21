<?php

namespace App\Http\Controllers;

use App\Models\Syair;
use App\Models\SyairTitle;
use App\Models\syairPasaran;

use Illuminate\Http\Request;


class SyairTitleController extends Controller
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

        return view('syair.indextitle', [
            'title' => 'Title & Body',
            'Posts' => Syair::all(),
            'data' => SyairTitle::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $syair = syairTitle::where('id', '1')->first();
        return view('syair.updatetitle', [
            'data' => $syair,
            'title' => 'Title & Body',
            'disabled' => ''
        ]);
    }

    public function views(string $id)
    {
        $syair = syairTitle::where('id', '1')->first();
        return view('syair.updatetitle', [
            'data' => $syair,
            'title' => 'Title & Body',
            'disabled' => 'disabled'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $rules = [
            'title' => 'required|min:35',
            'body' => 'required|min:35',
        ];

        $validatedData = $request->validate($rules);


        syairTitle::where('id', '1')
            ->update($validatedData);

        // return redirect('https://lotto21top.net/syair/title')->with('success', 'post has been updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
