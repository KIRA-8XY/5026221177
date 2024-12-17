@extends('template')

@section('tulisan1','Data Karyawan')

@section('link1')
<a href="/karyawan" class="btn btn-secondary">Kembali</a>
@endsection

@section('konten')
<form action="/karyawan/store" method="post" class="form-horizontal">
    {{ csrf_field() }}
    <div class="form-group row">
        <label for="kodepegawai" class="col-sm-2 col-form-label">Kode Pegawai</label>
        <div class="col-sm-10">
            <input type="text" name="kodepegawai" id="kodepegawai" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" name="namalengkap" id="namalengkap" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <input type="text" name="divisi" id="divisi" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-10">
            <input type="number" name="departemen" id="departemen" class="form-control" required>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2 mt-5">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </div>
</form>
@endsection
