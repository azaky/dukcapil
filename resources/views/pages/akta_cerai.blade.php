@extends('app')

@section('content')
<form action="{{ url('/aktacerai/buat') }}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="well">
        <h3>Akta Penceraian</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Detil</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4"><label>Nomor Akta Nikah</label><input name="no-akta-nikah" class="form-control" placeholder="Nomor Akta Nikah"></div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Tanggal Perceraian</label><input class="form-control" type="date" placeholder="Tanggal Perceraian"></div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Nomor Induk Kependudukan Laki-laki</label><input name="nik-pria"  class="form-control" placeholder="Nomor Induk Kependudukan Laki-laki"></div>
                    <div class="col-xs-4"><label>Nomor Induk Kependudukan Perempuan</label><input name="nik-wanita" class="form-control" placeholder="Nomor Induk Kependudukan Perempuan"></div>
                </div>
                <div class="row">
                    <div class="col-xs-2"><label>Penceraian ke</label><select class="form-control"><option>1</option></select></div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Status Istri Bekas</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4"><label>Keadaan Bekas Istri</label><select class="form-control"><option>Hamil</option></select></div>
                    <div class="col-xs-4"><label>Status Penceraian</label><select class="form-control"><option>Qabla</option></select></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-success">Lanjut</button>
        </div>
    </div>
</form>
@endsection