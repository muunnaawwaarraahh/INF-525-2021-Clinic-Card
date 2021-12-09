<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Schedule;
use App\Models\Doctor;

class AdminsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/home');
    }

    public function jadwal()
    {
        // return view('admin.jadwal');
        return view('admin.jadwal',[
            'schedules' => Schedule::all()
        ]);

    }
    public function tambahJadwal()
    {
        return view('admin.tambah_jadwal');
    }
    
    public function createJadwal(Request $request)
    {
        $validateData = $request->validate([
            'doctor_name' => 'required',
            'jadwal' => 'required'
        ]);
        
        // ddd($request);
        
        Schedule::create($validateData);
        
        return redirect('/admin/jadwal/tambah_jadwal')->with('success', 'Data Anda berhasil disimpan');
    }
    
    public function dokter()
    {
        // return view('admin.dokter');
        return view('admin.dokter',[
            'doctors' => Doctor::all()
        ]);
    }
    
    public function tambahDokter()
    {
        return view('admin.tambah_dokter');
    }
    
    public function createDokter(Request $request)
    {
        $validateData = $request->validate([
            'doctor_name' => 'required',
            'fotodokter' => 'required|nullable|max:10000',
            'deskripsi' => 'required'
        ]);
        
        // ddd($request);
        if($request->file('fotodokter')){
            $validateData['fotodokter'] = $request->file('fotodokter')->store('post-fotodokter');
        }
        Doctor::create($validateData);
        
        return redirect('admin/dokter/tambah_dokter')->with('success', 'Data berhasil disimpan!');
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
        //
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function kartu()
    {
        return view('admin.kartu',[
            'patients' => Patient::all()
        ]);
    }
    
    public function tambahPasien()
    {
        return view('admin.tambah_pasien');
    }
        
    public function createPasien(Request $request)
    {
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

        if($request->file('fotoktp')){
            $validateData['fotoktp'] = $request->file('fotoktp')->store('post-fotoktp');
        }
        if($request->file('fotobpjs')){
            $validateData['fotobpjs'] = $request->file('fotobpjs')->store('post-fotobpjs');
        }

        Patient::create($validateData);
        
        return redirect('/admin/kartu/tambah_pasien')->with('success', 'Data Anda berhasil disimpan');
    }

        public function show(Patient $patient)
    {
        return view('admin.data_detail',compact('patient'));
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
    public function destroyPasien(Patient $pasien)
    {
        Patient::destroy($pasien->id);
        return redirect('/admin/kartu')->with('success', 'Data berhasil dihapus!!');
    }
}
