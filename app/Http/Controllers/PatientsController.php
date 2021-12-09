<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/home');
    }

    public function kartu()
    {
        return view('user/kartu');
    }

    public function jadwal()
    {
        // return view('user/jadwal');
        return view('user.jadwal',[
            'schedules' => Schedule::all()
        ]);
    }

    public function dokter()
    {
        // return view('user/dokter');
        return view('user.dokter',[
            'doctors' => Doctor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // ddd($request);
        // return $request->file('fotoktp')->store('post-image');

                $validateData = $request->validate([
                    'name' => 'required',
                    'tanggalLahir' => 'required',
                    'alamat' => 'required',
                    'pekerjaan' => 'required',
                    'nik' => 'required|size:16|unique:patients',
                    'fotoktp' => 'required|nullable',
                    'nobpjs' => 'required',
                    'fotobpjs' => 'required|max : 10000',
                ]);

                // dd($request);
                if($request->file('fotoktp')){
                    $validateData['fotoktp'] = $request->file('fotoktp')->store('post-fotoktp');
                }
                if($request->file('fotobpjs')){
                    $validateData['fotobpjs'] = $request->file('fotobpjs')->store('post-fotobpjs');
                }

                Patient::create($validateData);
                
                return redirect('/user/kartu')->with('success', 'Data Anda berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Auth::user()->name;
        $patients = DB::table('patients')
                ->where('name', '=', $data)
                ->get();

                // return view('user.view_kartu',[
                //     'doctors' => Doctor::all()
                // ]);

        return view('user.kartu_view', compact('patients'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
