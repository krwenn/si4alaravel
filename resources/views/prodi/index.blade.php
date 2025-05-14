@extends('layout.main')
@section('title', 'Program Studi')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Program Studi</h3>
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
                        <tr>
                            <th>Nama</th>
                            <th>Singkatan</th>
                            <th>Kaprodi</th>
                            <th>Kekretaris</th>
                            <th>Fakultas</th>
                        </tr>
                    </tr>
                @foreach ($prodi as $item)
                <tr>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->singkatan}}</td>
                    <td>{{ $item->kaprodi}}</td>
                    <td>{{ $item->sekretaris}}</td>
                    <td>{{  $item->fakultas->nama_fakultas}}</td>
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
