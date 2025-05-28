@extends('layout.main')
@section('title','Mahasiswa')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-primary card-outline mb-4">
            <!--begin::Header-->
            <div class="card-header">
                <div class="card-title"><b>Edit Mahasiswa</b></div>
            </div>
            <!--end::Header-->

            <!--begin::Form-->
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!--begin::Body-->
                <div class="card-body">
                    <div class="mb-3">
                        <label for="npm" class="form-label">NPM</label>
                        <input type="text" class="form-control" name="npm" value="{{ old('npm', $mahasiswa->npm) }}">
                        @error('npm')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Mahasiswa</label>
                        <input type="text" class="form-control" name="nama" value="{{ old('nama', $mahasiswa->nama) }}">
                        @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label><br>
                        <input type="radio" name="jenis_kelamin" value="L"
                            {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin ?? 'L') == 'L' ? 'checked' : '' }}> Laki-laki
                        <input type="radio" name="jenis_kelamin" value="P"
                            {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin ?? 'L') == 'P' ? 'checked' : '' }}> Perempuan
                        @error('jenis_kelamin')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}">
                        @error('tanggal_lahir')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}">
                        @error('tempat_lahir')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="asal_sma" class="form-label">Asal SMA</label>
                        <input type="text" class="form-control" name="asal_sma" value="{{ old('asal_sma', $mahasiswa->asal_sma) }}">
                        @error('asal_sma')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="prodi_id" class="form-label">Prodi</label>
                        <select class="form-control" name="prodi_id">
                            <option value="">--Pilih Prodi--</option>
                            @foreach ($prodi as $item)
                                <option value="{{ $item->id }}"
                                    {{ old('prodi_id', $mahasiswa->prodi_id) == $item->id ? 'selected' : '' }}>
                                    {{ $item->nama }}
                                </option>
                            @endforeach
                        </select>
                        @error('prodi_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="foto" class="form-label">Foto</label>
                        <input type="file" name="foto" class="form-control">
                        @if ($mahasiswa->foto)
                            <img src="{{ asset('foto/' . $mahasiswa->foto) }}" alt="Foto Mahasiswa" width="100" class="mt-2">
                        @endif
                        @error('foto')
                        <div class="text-danger">{{ $message }}</div>
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
@endsection
