<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'pendidikan_terakhir' => 'required',
            'nomor_telp' => 'required|numeric',
            'alamat' => 'required',
            'email' => 'required|email',
            'konfirmasi' => 'required',
            'scan_ijazah' => 'required|file|mimes:pdf|max:20480', // 20 mb
            'essay' => 'required|file|mimes:doc,docx|max:20480' // 20 mb
        ];
    }

    public function messages()
    {
        return [
            'nama.required' => 'Nama tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'tempat_lahir.required' => 'Tempat lahir tidak boleh kosong',
            'tanggal_lahir.required' => 'Tanggal lahir tidak boleh kosong',
            'pendidikan_terakhir.required' => 'Pendidikan terakhir tidak boleh kosong',
            'nomor_telp.required' => 'Nomor yg dapat dihubungi tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Format email salah. Contoh : andi@gmail.com',
            'konfirmasi.required' => 'Konfirmasi pelatihan tidak boleh kosong',
            'scan_ijazah.required' => 'Scan ijazah belum diunggah',
            'essay.required' => 'Essay belum diunggah',
            'essay.mimes' => 'Essay hanya diijinkan file *.doc atau *.docx',
            'scan_ijazah.mimes' => 'Essay hanya diijinkan file *.pdf',
            'essay.max' => 'Ukuran file essay hanya diijinkan tidak lebih dari 20mb',
            'scan_ijazah.max' => 'Ukuran file ijazah/rapor hanya diijinkan tidak lebih dari 20mb',
        ];
    }
}
