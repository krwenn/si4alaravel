@extends('layout.main')
@section('content')
    <!--begin::Row-->
    <div class="row">
        <div class="col-12">
          <!-- Default box -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">List Falkutas</h3>
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
            <div class="card-body">Start creating your amazing application!</div>
            <!-- /.card-body -->

            <h1>Fakultas</h1>
<table>
    <tr>
        <th>Nama</th>
        <th>Singkatan</th>
        <th>Dekan</th>
        <th>Wakil Dekan</th>
    </tr>
@foreach ($fakultas as $item)
    <tr>
        <td>{{$item->nama}}</td>
        <td>{{$item->singkatan}}</td>
        <td>{{$item->dekan}}</td>
        <td>{{$item->wakil_dekan}}</td>
    </tr>
@endforeach
</table>
@endsection

          <!-- /.card -->
        </div>
      </div>
      <!--end::Row-->
