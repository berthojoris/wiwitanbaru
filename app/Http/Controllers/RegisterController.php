<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function submit(RegisterRequest $request)
    {
        $data = $request->all();

        $data['tanggal_lahir'] = date("Y-m-d", strtotime($request->tanggal_lahir));
        $data['nama'] = ucfirst($request->nama);
        $data['tempat_lahir'] = ucfirst($request->tempat_lahir);
        $data['email'] = strtolower($request->email);
        $data['konfirmasi'] = strtoupper($request->konfirmasi);

        if($request->hasFile('scan_ijazah')) {
            $file = $request->file('scan_ijazah');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/ijazah/');
            $file->move($destinationPath, $randomName);
            $data['scan_ijazah'] = $randomName;
        } else {
            $data['scan_ijazah'] = 'no_file.png';
        }

        if($request->hasFile('essay')) {
            $file = $request->file('essay');
            $randomName = Str::random(20) . '.' . $file->getClientOriginalExtension();
            $destinationPath = public_path('uploads/essay/');
            $file->move($destinationPath, $randomName);
            $data['essay'] = $randomName;
        } else {
            $data['essay'] = 'no_file.png';
        }

        Register::create($data);

        return redirect()->route('index')->with('message', 'Data anda berhasil dikirim dan akan segera kami proses. Terima kasih');
    }
}
