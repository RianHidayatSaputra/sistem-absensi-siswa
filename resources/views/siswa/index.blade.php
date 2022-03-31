@extends('template.main')

@section('content')
<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Siswa</h3>
            </div>
            <div class="box-body">
            	<a href="{{url('siswa/create')}}" class="btn btn-info mb-2">Tambah Data</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Nis</th>
                  <th>Nama</th>
                  <th>Rombel</th>
                  <th>Rayon</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                	@foreach ($list_data as $data)
                <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$data->id}}</td>
                  <td>{{$data->nis}}</td>
                  <td>{{$data->nama}}</td>
                  <td>{{$data->rombel}}</td>
                  <td>{{$data->rayon}}</td>
                  <td>
                  	<a href="{{url('/siswa/edit/'.$data->id)}}" class="btn btn-warning">Edit</a>
                  	<a href="{{url('/siswa/delete/'.$data->id)}}" class="btn btn-danger">Hapus</a>
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
