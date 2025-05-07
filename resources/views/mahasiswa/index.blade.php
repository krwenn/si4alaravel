@extends('layout.main')
@section('title', 'Mahasiswa')
@section('content')

 <!--begin::Row-->
 <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List mahasiswa</h3>
          <div class="card-tools">
            <button
              type="button"
              class="btn btn-tool"
              data-lte-toggle="card-collapse"
              title="Collapse"
            >
              <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
              <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
            </button>
            <button
              type="button"
              class="btn btn-tool"
              data-lte-toggle="card-remove"
              title="Remove"
            >
              <i class="bi bi-x-lg"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
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
        </div>
        <!-- /.card-body -->
      <!-- /.card -->
    </div>
  </div>
  <!--end::Row-->
@endsection
