@extends('app')

@section('content')
    <div class="well">
        <h3>Akta Kematian</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Detil Kematian</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8"><label>Nomor Induk Kependudukan</label><input class="form-control" placeholder="Nomor Induk Kependudukan"></div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Tempat Kematian</label><input class="form-control" placeholder="Tempat Lahir"></div>
                    <div class="col-xs-4"><label>Tanggal Kematian</label><input class="form-control" placeholder="01-01-2000"></div>
                </div>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Detil Wafat</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8"><label>Nama Lengkap</label><input class="form-control" placeholder="Nama Lengkap" disabled></div>
                    <div class="col-xs-2"><label>Jenis Kelamin</label><select class="form-control" disabled><option>Laki-laki</option></select></div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Tempat Lahir</label><input class="form-control" placeholder="Tempat Lahir" disabled></div>
                    <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control" placeholder="01-01-2000" disabled></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Lanjut</button>
        </div>
    </div>
@endsection