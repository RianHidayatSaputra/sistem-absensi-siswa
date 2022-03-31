@extends('template.main')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Data Absensi</h3>
                </div>
                <div class="box-body">
                    <a href="{{url('absen/create')}}" class="btn btn-info mb-2">Tambah Absen</a>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id Siswa</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_data as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->id_siswa}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->keterangan}}</td>
                            <td>
                                <a href="{{url('/absen/edit/'.$data->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{url('/absen/delete/'.$data->id)}}" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
