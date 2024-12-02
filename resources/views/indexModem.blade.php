@extends('template')

@section('tulisan1','Modem')

@section('link1')
	<a href="/modem/tambahModem"class="btn btn-primary"> + Tambah Modem Baru</a>
    <br>
@endsection

@section('konten')

	<br/>
    <div class="row mb-3">
        <p>Cari Merk Modem:</p>
        <form action="/modem/cari" method="GET" class="d-flex">
            <input type="text" name="cari" class="form-control me-2" placeholder="Cari Modem..." value="{{ old('cari') }}">
            <button type="submit" class="btn btn-success">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
    </div>
	{{-- <form action="/modem/cari" method="GET">
        <div class="row mb-3">
            <label for="cari" class="col-sm-2 col-form-label">Cari Merk Modem:</label>
            <div class="col-sm-6">
              <input type="text" name="cari" class="form-control" id="cariModem" placeholder="Cari Modem .." value="{{ old('cari') }}">
            </div>
            <div class="col-sm-4">
                <input type="submit" value="CARI"class="btn btn-success">
              </div>
          </div>
	</form> --}}
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Merk Modem</th>
			<th>Stock Modem</th>
			<th>Tersedia</th>
            <th>Opsi</th>
		</tr>
		@foreach($modem as $m)
		<tr>
			<td>{{ $m->merk_modem }}</td>
			<td>{{ $m->stock_modem }}</td>
			<td>{{ $m->tersedia }}</td>
			<td>
				<a href="/modem/editModem/{{ $m->kode_modem }} " class="btn btn-danger"><i class="fa-solid fa-pen-to-square"></i></a>
				|
				<a href="/modem/hapus/{{ $m->kode_modem}}" class="btn btn-info"><i class="fa-solid fa-trash"></i></a>
			</td>
		</tr>
		@endforeach
	</table>


    <div class="mt-4">
        <p>Halaman: {{ $modem->currentPage() }}</p>
        <p>Jumlah Data: {{ $modem->total() }}</p>
        <p>Data Per Halaman: {{ $modem->perPage() }}</p>
        {{ $modem->links() }}
    </div>

 @endsection
