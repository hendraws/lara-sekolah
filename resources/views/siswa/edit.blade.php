@extends('layouts.master')
@section('title')
Edit Siswa
@endsection
@section('content')
<h5>Edit Siswa</h5>
<div class="row">
    <div class="col-md-12">
        <form action="{{route('siswa.update',$siswa->id)}}" method="POST">
            {{ method_field('PUT') }}
            {{ csrf_field() }}
            <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" name="nama_depan" class="form-control" id="nama_depan" value="{{$siswa->nama_depan}}">
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" name="nama_belakang" class="form-control" id="nama_belakang" value="{{$siswa->nama_belakang}}">
            </div>
            <div class="form-group">
                <label for="jenis_kelamin">Jenis Kelamin</label>
                <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                    <option>Pilih Jenis Kelamin</option>
                    <option value="l" {{($siswa->jenis_kelamin == 'l') ? 'selected' : ''}}>Laki-laki</option>
                    <option value="p" {{($siswa->jenis_kelamin == 'p') ? 'selected' : ''}}>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" name="agama" class="form-control" id="agama" value="{{$siswa->agama}}">
            </div>
            <div class=" form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="{{$siswa->alamat}}">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
    </div>
    </form>
</div>
</div>

@endsection