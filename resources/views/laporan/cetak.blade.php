<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan</title>    
</head>
<body onload="javascript:window.print()">

	<center>
		<table style="text-align: center;">
			<tr>
				<td><img src="#"></td>
				<td style="font-family: sans-serif;text-align: center;">
				<div>
					<h2>Laporan Absensi kehadiran</h2>
					<h2>SMK WIKRAMA 1 JEPARA</h2>
				</div>
				<p style="text-align: center">JL Kelet Ploso KM 36,Kelet,Keleng,Jepara,Jawa Tengah 59454</p>
			 	</td>
			 	<hr style="text-align: center">
			 	<td><img src="#"></td>
			</tr>
		</table>
	</center>
	<br>
	<table cellspacing="0" width="100%" border="1">
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
	<table style="text-align: center;">
		<tr>
			<td style="font-family: sans-serif;text-align: center">
				<div style="text-align: right;float: right;margin-left: 500px;margin-top: 25px;">Jepara,{{date('Y,m,d')}}</div>
			</td>
		</tr>	
	</table>
	<table style="text-align: center;">
		<tr>
			<td style="font-family: sans-serif;text-align: center;">
				<div style="text-align: center;float: right;margin-left: 520px;margin-top: 40px">Admin
				</div>
			</td>
		</tr>
	</table>

</body>
</html>