@extends('template.main')
@section('content')
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Data Laporan Bulan</h3>
				</div>

				<div class="box-body">
					<form class="navbar-form" role="search" action="{{url('laporan')}}">
						<div class="form-group">
							<a href="{{url('/laporan/cetak?bulan='.Request::get('bulan'))}}" class="btn btn-primary" style="float: right; margin: 0 0 0 20px;" target="_blank">Cetak</a>
							<select class="form-control" name="bulan">
                                <option value="00">Bulan</option>
								<option value="01">Januari</option>
								<option value="02">Febuari</option>
								<option value="03">Maret</option>
								<option value="04">April</option>
								<option value="05">Mei</option>
								<option value="06">Juni</option>
								<option value="07">Juli</option>
								<option value="08">Agustus</option>
								<option value="09">September</option>
								<option value="10">Oktober</option>
								<option value="11">November</option>
								<option value="12">Desember</option>
							</select>
							<button class="btn btn-info" type="submit"><i class="fa fa-search"></i></button>
						</div>
					</form>
					<table id="example2" class="table table-bordered table-hover">
						<tr>
							<th>No</th>
							<th>Id Absen</th>
							<th>Id Siswa</th>
							<th>Nis</th>
							<th>Nama</th>
							<th>Rombel</th>
							<th>Rayon</th>
							<th>Status</th>
							<th>Keterangan</th>
							<th>Waktu Absensi</th>
						</tr>
                        @foreach($datas as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->id}}</td>
                            <td>{{$data->id_siswa}}</td>
                            <td>{{$data->nis}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->rombel}}</td>
                            <td>{{$data->rayon}}</td>
                            <td>{{$data->status}}</td>
                            <td>{{$data->keterangan}}</td>
                            <td>{{$data->created_at}}</td>

                        </tr>
                        @endforeach
				    </table>
			    </div>
		    </div>
	    </div>
    </div>
</section>
@endsection