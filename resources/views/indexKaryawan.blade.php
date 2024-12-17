@extends('template')

@section('konten')

    <table class="table table-striped table-hover">
        <tr>
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
        </tr>
        @foreach($karyawan as $k)
        <tr>
            <td>{{ $k->kodepegawai }}</td>
            <td>{{ strtoupper($k->namalengkap) }}</td>
            <td>{{ $k->divisi }}</td>
            <td>{{ strtolower($k->departemen) }}</td>
            <td>
                <a href="/karyawan/hapus/{{ $k->kodepegawai}}" class="btn btn-info">Hapus Data</a>
            </td>
        </tr>
        @endforeach
    </table>

<a href="/karyawan/tambah" class="btn btn-primary mt-3">
    <i class="bi bi-plus-circle"></i> Tambah Data
</a>

@endsection
