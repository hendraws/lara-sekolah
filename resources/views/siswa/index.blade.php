@extends('layouts.master')
@section('title')
Siswa
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-heading">
                <h1 class="panel-title">Hover Row</h1>
            </div>

            <div class="panel-body table-responsive">
                @if(session('sukses'))
                <div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <i class="fa fa-check-circle"></i> {{session('sukses')}}
                </div>
                @endif

                <button type="button" class="btn btn-sm btn-primary pull-right" data-toggle="modal" data-target="#exampleModal" style="margin: 0px 10px 20px 0px;">
                    <i class="fa fa-plus-square"></i> Tambah Siswa
                </button>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Depan</th>
                            <th scope="col">Nama Belakang</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                        @foreach($data_siswa as $data)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td><a href="{{route('siswa.show',$data->id)}}">{{$data->nama_depan}}</a></td>
                            <td>{{$data->nama_belakang}}</td>
                            <td>{{($data->jenis_kelamin == 'l') ? 'Laki - Laki' : 'Perempuan'}}</td>
                            <td>{{$data->agama}}</td>
                            <td>{{$data->alamat}}</td>
                            <td>
                                <a href="{{route('siswa.edit',$data->id)}}" class="btn btn-info">edit</a>
                                <a href="{{route('siswa.hapus',$data->id)}}" class="btn btn-danger" onclick="return confirm('apakah anda yakin')">hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('siswa.store')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" name="nama_depan" class="form-control" id="nama_depan">
                    </div>
                    <div class="form-group">
                        <label for="nama_belakang">Nama Belakang</label>
                        <input type="text" name="nama_belakang" class="form-control" id="nama_belakang">
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option>Pilih Jenis Kelamin</option>
                            <option value="l">Laki-laki</option>
                            <option value="p">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agama">Agama</label>
                        <input type="text" name="agama" class="form-control" id="agama">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection