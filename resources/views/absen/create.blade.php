@extends('template.main')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center">Tambah Absensi</h3>
            </div>
            <form class="form-horizontal" action="{{url('/absen/store')}}" method="POST">
            	{{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <input type="hidden" name="id" id="id">
                        <label for="nis" class="col-sm-2 control-label">Nis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nis" name="nis" placeholder="Nis" required onkeyup="Siswa()">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rombel" class="col-sm-2 control-label">Rombel</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rombel" name="rombel" placeholder="Rombel" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rayon" class="col-sm-2 control-label">Rayon</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="rayon" name="rayon" placeholder="Rayon" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="status" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status" id="status">
                                <option value="">--Pilih--</option>
                                <option value="Masuk">Masuk</option>
                                <option value="Sakit">Sakit</option>
                                <option value="Izin">Izin</option>
                                <option value="Alpa">Alpa</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Keterangan" required>
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-default">Cancel</button>
                    <button type="submit" class="btn btn-info pull-right">Save</button>
                </div>
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
@push('bottom')
    <script type="text/javascript">
        function Siswa(){

            iddd = $('#nis').val()
                if (iddd == ''){
                    $('#nama').val('');
                    $('#rombel').val('');
                    $('#rayon').val('');
                    $('#id').val('');
                }

                $.ajax({

                    url:"{{route('cari')}}",
                    type:"GET",
                    dataType:"json",
                    data:{
                        id:$("#nis").val()
                    },
                success:function(hasil){
                    if (hasil.val == 0) {
                        $('#nama').val('');
                        $('#rombel').val('');
                        $('#rayon').val('');
                        $('#id').val('');
                    }else if(hasil.val == 2){
                        $('#nama').val('');
                        $('#rombel').val('');
                        $('#rayon').val('');
                        $('#id').val('');
                    }else{
                        $('#nama').val(hasil.data.nama);
                        $('#rombel').val(hasil.data.rombel);
                        $('#rayon').val(hasil.data.rayon);
                        $('#id').val(hasil.data.id);
                    }
                }
            });
        }
    </script>
@endpush