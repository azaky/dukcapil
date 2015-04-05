@extends('app')

@section('content')
    <div class="well">
        <h3>Kartu Tanda Penduduk</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Detil</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4"><label>Nomor Induk Kependudukan</label><input class="form-control" placeholder="Nomor Induk Kependudukan"></div>
                    <div class="col-xs-4"><label>Foto</label><input class="form-control" type="file"></div>
                </div>
                <div class="row">
                    <div class="col-xs-8"><label>Nama Lengkap</label><input class="form-control" placeholder="Nama Lengkap"></div>
                    <div class="col-xs-2"><label>Jenis Kelamin</label><select class="form-control"><option>Laki-laki</option></select></div>
                    <div class="col-xs-2"><label>Golongan Darah</label><select class="form-control"><option>A</option></select></div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Tempat Lahir</label><input class="form-control" placeholder="Tempat Lahir"></div>
                    <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control" placeholder="01-01-2000"></div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Agama</label><input class="form-control" placeholder="Agama"></div>
                </div>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">Status</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4"><label>Pekerjaan</label><input class="form-control" placeholder="Pekerjaan"></div>
                    <div class="col-xs-4"><label>Status Perkawinan</label><select class="form-control"><option>Belum Kawin</option></select></div>
                    <div class="col-xs-4"><label>Kewarnegaraan</label><select class="form-control"><option>Warga Negara Indonesia</option></select></div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Lanjut</button>
        </div>
    </div>
@endsection