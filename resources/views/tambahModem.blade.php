@extends('template')

@section('tulisan1','Data Modem')

@section('link1')
<a href="/modem"> Kembali</a>
@endsection

@section('konten')

	<form action="/modem/store" method="post">
		{{ csrf_field() }}
		<div class="col-md-6">
            <label for="merk_modem" class="form-label">Merk Modem</label>
            <input type="text" name="merk_modem" id="merk_modem" class="form-control" required>
        </div>
        <div class="col-md-6">
            <label for="stock_modem" class="form-label">Stock Modem</label>
            <input type="number" name="stock_modem" id="stock_modem" class="form-control" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Tersedia</label>
            <div class="d-flex align-items-center">
                <div class="form-check me-3">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_ada" value="Y" checked>
                    <label class="form-check-label" for="tersedia_ada">Ada</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="tersedia" id="tersedia_habis" value="N">
                    <label class="form-check-label" for="tersedia_habis">Habis</label>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <button type="submit" class="btn btn-primary">Simpan Data</button>
        </div>
    </form>
@endsection
