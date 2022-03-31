@extends('template.main')

@section('content')
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="text-center">Edit Siswa</h3>
            </div>
            <form class="form-horizontal" action="{{url('/siswa/update')}}" method="POST">
            	{{csrf_field()}}
                <div class="box-body">
                    <div class="form-group">
                        <div class="col-sm-8">
                            <input type="hidden" id="id" name="id" value="{{$Siswa->id}}">
                            <label for="nis" class="control-label">Nis</label>
                            <input type="text" class="form-control" value="{{$Siswa->nis}}" id="nis" name="nis" placeholder="Nis">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <label for="nama" class="control-label">Nama</label>
                            <input type="text" class="form-control" value="{{$Siswa->nama}}" id="nama" name="nama" placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <label for="rombel" class="control-label">Rombel</label>
                            <input type="text" class="form-control" value="{{$Siswa->rombel}}" id="rombel" name="rombel" placeholder="Rombel">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-8">
                        <label for="rayon" class="control-label">Rayon</label>
                            <input type="text" class="form-control" value="{{$Siswa->rayon}}" id="rayon" name="rayon" placeholder="Rayon">
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