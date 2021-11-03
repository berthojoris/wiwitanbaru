@extends('layouts.sky_layout')

@push('library_css')
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
@endpush

@push('library_js')
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
@endpush

@section('content')
<form method="POST" action="{{ route('register_submit') }}" enctype="multipart/form-data" class="sky-form">
    @csrf
    <header>Gratiss Pelatihan Bahasa Jepang Tanpa Potongan Setelah Bekerja <br> <h4 class="noted">Formulir calon peserta magang Angkatan 3 LPK WIWITAN BARU SUKABUMI khusus SMK/D3/S1 KEPERAWATAN dan KEBIDANAN</h4></header>

    <fieldset>

        @if ($errors->any())
            <section>
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </section>
        @endif

        @if(Session::has('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
        @endif

        <section>
            <label class="label">Nama lengkap <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="nama" id="nama" autocomplete="off">
            </label>
        </section>

        <section>
            <label class="label">Tempat lahir <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="tempat_lahir" id="tempat_lahir" autocomplete="off">
            </label>
        </section>

        <section>
            <label class="label">Tanggal lahir <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="tanggal_lahir" id="tanggal_lahir" autocomplete="off">
            </label>
        </section>

        <section>
            <label class="label">Golongan darah</label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="golongan_darah" value="O"><i></i>O</label>
                    <label class="radio"><input type="radio" name="golongan_darah" value="A"><i></i>A</label>
                    <label class="radio"><input type="radio" name="golongan_darah" value="B"><i></i>B</label>
                    <label class="radio"><input type="radio" name="golongan_darah" value="AB"><i></i>AB</label>
                </div>
            </div>
        </section>

        <section>
            <label class="label">Alamat lengkap <span class="requirement">*</span></label>
            <label class="textarea">
                <textarea rows="3" id="alamat" name="alamat"></textarea>
            </label>
            <div class="note"><strong>Note:</strong> masukan alamat anda dengan lengkap.</div>
        </section>

        <section>
            <label class="label">Pendidikan Terakhir <span class="requirement">*</span></label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="pendidikan_terakhir" value="SMA/SMK"><i></i>SMA/SMK</label>
                    <label class="radio"><input type="radio" name="pendidikan_terakhir" value="D3"><i></i>D3</label>
                    <label class="radio"><input type="radio" name="pendidikan_terakhir" value="S1"><i></i>S1</label>
                </div>
            </div>
        </section>

        <section>
            <label class="label">Nomor yang dapat dihubungi <span class="requirement">*</span></label>
            <label class="input">
                <input type="number" name="nomor_telp" id="nomor_telp" autocomplete="off">
            </label>
        </section>

        <section>
            <label class="label">Alamat email aktif <span class="requirement">*</span></label>
            <label class="input">
                <input type="text" name="email" id="email" autocomplete="off">
            </label>
        </section>

        <section>
            <label class="label">Apakah anda bersedia mengikuti Pelatihan selama 6 bulan? <span class="requirement">*</span></label>
            <div class="row">
                <div class="col col-4">
                    <label class="radio"><input type="radio" name="konfirmasi" value="Ya"><i></i>Ya</label>
                    <label class="radio"><input type="radio" name="konfirmasi" value="Tidak"><i></i>Tidak</label>
                </div>
            </div>
        </section>

        <section>
            <label class="label">Unggah scan Raport/Ijazah <span class="requirement">*</span></label>
            <label for="file" class="input input-file">
                <div class="button"><input type="file" id="scan_ijazah" name="scan_ijazah" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
            </label>
            <div class="note"><strong>Note:</strong> Kumpulkan berkas di 1 (satu) file PDF dengan ukuran tidak lebih dari 20 MB.</div>
        </section>

        <section>
            <label class="label">Tulis essay min. 700 kata di Ms. Word dengan font Calibri ukuran judul essay 14 (bold) dan isi essay 11 yang memuat tentang : <span class="requirement">*</span><br>1. Perkenalan diri (Latar belakang, Kelebihan dan kekurangan, Cita-cita) <br>2. Alasan kenapa ingin ke Jepang <br>3. Alasan kenapa anda harus diterima dalam Program Pemagangan ini</label>
            <label for="file" class="input input-file">
                <div class="button"><input type="file" id="essay" name="essay" onchange="this.parentNode.nextSibling.value = this.value">Browse</div><input type="text" readonly>
            </label>
            <div class="note"><strong>Note:</strong> Unggah essai dalam format Microsoft Word.</div>
        </section>

    </fieldset>

    <footer>
        <input type="submit" value="Submit" class="button">
    </footer>
</form>
@endsection

@push('page_css')
<style>
.noted {
    font-size: 14px;
    font-weight: 100;
}
.requirement {
    font-weight: bold;
    color: red;
}
</style>
@endpush

@push('page_js')
<script>
$(document).ready(function () {
    $("#tanggal_lahir").datepicker({
        dateFormat: 'dd-mm-yy',
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        yearRange: '1950:2021'
    });
})
</script>
@endpush