@extends('app')

@section('content')
    <div class="well">
        <h3>Akta Pernikahan</h3>
        <div class="row">
            <div class="col-xs-6"><label>Tanggal Pernikahan</label><input class="form-control" placeholder="Tanggal Penceraian"></div>
            <div class="col-xs-4"><label>Tempat Pernikahan</label><input class="form-control" placeholder="Tempat Pernikahan"></div>
        </div>
        <div class="row">
            <div class="col-xs-6"><label>Nomor Induk Kependudukan Laki-laki</label><input class="form-control" placeholder="Nomor Induk Kependudukan Laki-laki">
                <hr>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detil Mempelai Pria</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8"><label>Nama Lengkap</label><input class="form-control" placeholder="Nama Lengkap" disabled></div>
                            <div class="col-xs-4"><label>Jenis Kelamin</label><select class="form-control" disabled><option>Laki-laki</option></select></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>Tempat Lahir</label><input class="form-control" placeholder="Tempat Lahir" disabled></div>
                            <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control" placeholder="01-01-2000" disabled></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6"><label>Nomor Induk Kependudukan Perempuan</label><input class="form-control" placeholder="Nomor Induk Kependudukan Perempuan">
                <hr>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detil Mempelai Perempuan</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8"><label>Nama Lengkap</label><input class="form-control" placeholder="Nama Lengkap" disabled></div>
                            <div class="col-xs-4"><label>Jenis Kelamin</label><select class="form-control" disabled><option>Perempuan</option></select></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>Tempat Lahir</label><input class="form-control" placeholder="Tempat Lahir" disabled></div>
                            <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control" placeholder="01-01-2000" disabled></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-success">Lanjut</button>
        </div>
    </div>
@endsection