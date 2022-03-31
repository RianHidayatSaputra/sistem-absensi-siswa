@extends('template.main')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center">Edit Absensi</h3>
            </div>
            <form class="form-horizontal" action="{{url('/absen/update')}}" method="POST">
            	{{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="hidden" id="id" name="id" value="{{$Absen->id}}">
                            <label for="id_siswa" class="control-label">Id Siswa</label>
                            <input type="text" class="form-control" value="{{$Absen->id_siswa}}" id="id_siswa" name="id_siswa" placeholder="Id Siswa">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <label for="status" class="control-label">Status</label>
                            <input type="text" class="form-control" value="{{$Absen->status}}" id="status" name="status" placeholder="Status">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <label for="keterangan" class="control-label">Keterangan</label>
                            <input type="text" class="form-control" value="{{$Absen->keterangan}}" id="keterangan" name="keterangan" placeholder="Keterangan">
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