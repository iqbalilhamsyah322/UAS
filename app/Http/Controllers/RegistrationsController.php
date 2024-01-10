<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registrations;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistrationsController extends Controller
{
    public function index(Request $request)
    {
        $registrations = DB::table('registrations')
            ->when($request->input('no_pendaftaran'), function ($query, $no_pendaftaran) {
                return $query->where('no_pendaftaran', 'like', '%' . $no_pendaftaran . '%');
            })
            ->select('id','no_pendaftaran','nisn','nama','alamat','tempat_lahir','tanggal_lahir','asal_sekolah','jenis_kelamin','jurusan','nama_ayah','pekerjaan_ayah','nama_ibu','pekerjaan_ibu','penghasilan_orang_tua','foto')
            ->orderBy('id', 'asc')
            ->paginate(15);
            return view('pages.registrations.index', compact('registrations'));

    }

    public function create()
    {
        return view('pages.registrations.create');
    }

    public function store(StoreRegistrationRequest $request)
    {
        Registrations::create([
            'no_pendaftaran' => $request['no_pendaftaran'],
            'nisn'=> $request['nisn'],
            'nama'=> $request['nama'],
            'alamat'=> $request['alamat'],
            'tempat_lahir'=> $request['tempat_lahir'],
            'tanggal_lahir'=> $request['tanggal_lahir'],
            'asal_sekolah'=> $request['asal_sekolah'],
            'jenis_kelamin'=> $request['jenis_kelamin'],
            'jurusan'=> $request['jurusan'],
            'nama_ayah'=> $request['nama_ayah'],
            'pekerjaan_ayah'=> $request['pekerjaan_ayah'],
            'nama_ibu'=> $request['nama_ibu'],
            'pekerjaan_ibu'=> $request['pekerjaan_ibu'],
            'penghasilan_orang_tua'=> $request['penghasilan_orang_tua'],
            'foto',
        ]);
        return redirect(route('registration.index'))->with('success', 'Create New Register Successfully');
    }

    public function edit(Registrations $registration)
    {
        return view('pages.registrations.edit')->with('registration', $registration);
    }

    public function update(UpdateRegistrationRequest $request, Registrations $registration)
{
    $validate = $request->validated();
    $registration->update($validate);
    return redirect()->route('registration.index')->with('success', 'Edit Register Successfully');

}

    public function destroy(Registrations $registration)
{
        $registration->delete();
        return redirect(route('registration.index'))->with('success', 'Delete Register Successfully');
}

}
