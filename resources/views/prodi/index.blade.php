@extends('layout.main')
@section('content')

<h1>Program Studi</h1>

<table>
    <tr>
        <tr>
            <th>Nama</th>
            <th>Singkatan</th>
            <th>kaprodi</th>
            <th>sekretaris</th>
            <th>Fakultas</th>
        </tr>
    </tr>
@foreach ($prodi as $item)
<tr>
    <td>{{ $item->nama }}</td>
    <td>{{ $item->singkatan}}</td>
    <td>{{ $item->kaprodi}}</td>
    <td>{{ $item->sekretaris}}</td>
    <td>{{ $item->fakultas->nama_fakultas}}</td>
</tr>

@endforeach
</table>
@endsection
