<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'no_pendaftaran' => 'required|string',
            'nisn'=> 'required|string',
            'nama'=> 'required|string',
            'alamat'=> 'required|string',
            'tempat_lahir'=> 'string',
            'tanggal_lahir'=> 'string',
            'asal_sekolah'=> 'string',
            'jenis_kelamin'=> 'string',
            'jurusan'=> 'string',
            'nama_ayah'=> 'string',
            'pekerjaan_ayah'=> 'string',
            'nama_ibu'=> 'string',
            'pekerjaan_ibu'=> 'string',
            'penghasilan_orang_tua'=> 'string',
            'foto'=> 'string',
        ];
    }
}
