@extends('template.main')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center">Edit Rombel</h3>
            </div>
            <form class="form-horizontal" action="{{url('/rombel/update')}}" method="POST">
            	{{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="hidden" id="id" name="id" value="{{$Kelas->id}}">
                            <label for="kelas" class="control-label">Kelas</label>
                            <input type="text" class="form-control" value="{{$Kelas->kelas}}" id="kelas" name="kelas" placeholder="Kelas">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <label for="nama_kelas" class="control-label">Nama Kelas</label>
                            <input type="text" class="form-control" value="{{$Kelas->nama_kelas}}" id="nama_kelas" name="nama_kelas" placeholder="Nama Kelas">
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