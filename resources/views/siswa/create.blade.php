@extends('template.main')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center">Tambah Siswa</h3>
            </div>
            <form class="form-horizontal" action="{{url('/siswa/store')}}" method="POST">
            	{{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <label for="nis" class="col-sm-2 control-label">Nis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nis" name="nis" placeholder="Nis" required>
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