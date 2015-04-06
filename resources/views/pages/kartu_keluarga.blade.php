@extends('app')

@section('content')
    <div class="well">
        <h3>Data Keluarga</h3>

        <div class="panel panel-default">
            <div class="panel-heading"><h3 class="panel-title">Anggota 1</h3></div>
            <div class="panel-body">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detil</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8"><label>Nama Lengkap</label><input class="form-control"
                                                                                    placeholder="Nama Lengkap"></div>
                            <div class="col-xs-2"><label>Jenis Kelamin</label><select class="form-control">
                                    <option>Laki-laki</option>
                                </select></div>
                            <div class="col-xs-2"><label>Golongan Darah</label><select class="form-control">
                                    <option>A</option>
                                </select></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>Tempat Lahir</label><input class="form-control"
                                                                                    placeholder="Tempat Lahir"></div>
                            <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control"
                                                                                     placeholder="01-01-2000"></div>
                            <div class="col-xs-4"><label>Akta Lahir</label><input class="form-control"
                                                                                  placeholder="Kode Akta Lahir"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>NIK Ayah</label><input class="form-control"
                                                                                placeholder="NIK Ayah"></div>
                            <div class="col-xs-4"><label>NIK Ibu</label><input class="form-control"
                                                                               placeholder="NIK Ibu"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6"><label>Kelainan Fisik</label><textarea class="form-control"
                                                                                         placeholder="Kelainan Fisik"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Status</h3></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-4"><label>Pendidikan Terakhir</label><input class="form-control"
                                                                                           placeholder="Pendidikan Terakhir">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>Pekerjaan</label><input class="form-control"
                                                                                 placeholder="Pekerjaan"></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>Status Perkawinan</label><select class="form-control">
                                    <option>Belum Kawin</option>
                                </select></div>
                            <div class="col-xs-4"><label>Akta Perkawinan</label><input class="form-control"
                                                                                       placeholder="Kode Akta Perkawinan">
                            </div>
                            <div class="col-xs-4"><label>Akta Penceraian</label><input class="form-control"
                                                                                       placeholder="Kode Akta Penceraian">
                            </div>
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