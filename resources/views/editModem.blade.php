@extends('template')

@section('tulisan1','Edit Modem')

@section('link1')
<a href="{{ url('/modem') }}" class="btn btn-link">
    <i class="bi bi-arrow-left"></i> Kembali
</a>
@endsection

@section('konten')
	@foreach($modem as $m)

        {{-- <form action="/modem/update/{{ $m->kode_modem }}" method="post" class="row g-3" style="max-width: 600px;">
            {{ csrf_field() }} --}}
        <form action="/modem/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $m->kode_modem }}"> <br/>
            <div class="col-md-6">
                <label for="merk modem" class="form-label">Merk Modem</label>
                <input type="text" name="merk modem" id="merk modem" class="form-control" value="{{ $m->merk_modem }}" required>
            </div>
            <div class="col-md-6">
                <label for="stock modem" class="form-label">Stock Modem</label>
                <input type="number" name="stock modem" id="stock modem" class="form-control" value="{{ $m->stock_modem }}" required>
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
            {{-- <div class="row mb-3">
                <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="tersedia"
                            id="tersediaY"
                            value="Y"
                        >
                        <label class="form-check-label" for="tersediaY">
                            Ada
                        </label>
                    </div>
                    <div class="form-check">
                        <input
                            class="form-check-input"
                            type="radio"
                            name="tersedia"
                            id="tersediaN"
                            value="N"
                        >
                        <label class="form-check-label" for="tersediaN">
                            Habis
                        </label>
                    </div>
                </div>
            </div> --}}
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    @endforeach
@endsection
