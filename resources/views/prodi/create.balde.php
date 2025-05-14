@extends('layout.main')
@section('title','prodi')

@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
        <div class="card card-primary card-outline mb-4">
                  <!--begin::Header-->
                  <div class="card-header"><div class="card-title"><b>Tambah Prodi</b></div></div>
                  <!--end::Header-->
                  <!--begin::Form-->
                  <form action="{{ route('prodi.store') }}" method="POST">
                    @csrf
                    <!--begin::Body-->
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="nama" class="form-label">Nama Prodi</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="alert alert-danger mt-2">{{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="Singkatan" class="form-label">Singkatan</label>
                        <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') }}">
                        @error('singkatan')
                        <div class="alert alert-danger mt-2">{{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="dekan" class="form-label">Nama Dekan</label>
                        <input type="text" class="form-control" name="dekan" value="{{ old('dekan') }}">
                        @error('dekan')
                        <div class="alert alert-danger mt-2">{{ $message }}
                        </div>
                        @enderror
                      </div>
                      <div class="mb-3">
                        <label for="wakil_dekan" class="form-label">Nama Wakil Dekan</label>
                        <input type="text" class="form-control" name="wakil_dekan" value="{{ old('wakil_dekan') }}">
                        @error('wakil_dekan')
                        <div class="alert alert-danger mt-2">{{ $message }}
                        </div>
                        @enderror
                      </div>
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <!--end::Footer-->
                  </form>
                  <!--end::Form-->
                </div>

    </div>
  </div>
  <!--end::Row-->
  @endsection
