@extends('template.main')

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Data Rombel</h3>
                </div>
                <div class="box-body">
                    <a href="{{url('rombel/create')}}" class="btn btn-info mb-2">Tambah Data</a>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Id</th>
                            <th>Kelas</th>
                            <th>Nama Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_data as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->id}}</td>
                            <td>{{$data->kelas}}</td>
                            <td>{{$data->nama_kelas}}</td>
                            <td>
                                <a href="{{url('/rombel/edit/'.$data->id)}}" class="btn btn-warning">Edit</a>
                                <a href="{{url('/rombel/delete/'.$data->id)}}" class="btn btn-danger">Hapus</a>
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
