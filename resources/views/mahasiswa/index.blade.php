@extends('layout.main')
@section('content')

<h1>Mahasiswa</h1>

<table>
    <tr>
        <th>Nama</th>
        <th>NPM</th>
        <th>Jenis Kelamin</th>
        <th>Tanggal</th>
        <th>Tempat</th>
        <th>Asal SMA</th>
        <th>Prodi</th>
    </tr>
    @foreach ($mahasiswa as $item)
    <tr>
        <td>{{ $item->nama }}</td>
        <td>{{ $item->npm}}</td>
        <td>{{ $item->jenis_kelamin}}</td>
        <td>{{ $item->tanggal_lahir}}</td>
        <td>{{ $item->tempat_lahir}}</td>
        <td>{{ $item->asal_sma}}</td>
        <td>{{ $item->prodi->nama}}</td>
    </tr>
    @endforeach
</table>
@endsection
