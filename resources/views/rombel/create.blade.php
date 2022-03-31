@extends('template.main')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center">Tambah Rombel</h3>
            </div>
            <form class="form-horizontal" action="{{url('/rombel/store')}}" method="POST">
            	{{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="kelas" class="col-sm-2 control-label">Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kelas" name="kelas" placeholder="Kelas" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_kelas" class="col-sm-2 control-label">Nama Kelas</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama_kelas" name="nama_kelas" placeholder="Nama Kelas" required>
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