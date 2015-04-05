@extends('app')

@section('content')
    <div class="well">
        <h3>Data Kelahiran</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Bayi</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8"><label>Nama Lengkap</label><input class="form-control" placeholder="Nama Lengkap"></div>
                    <div class="col-xs-4"><label>Jenis Kelamin</label><select class="form-control"><option>Laki-laki</option></select></div>
                </div>
                <div class="row">
                    <div class="col-xs-8"><label>Tempat Kelahiran</label><input class="form-control" placeholder="Tempat Kelahiran"></div>
                    <div class="col-xs-4"><label>Tempat Dilahirkan</label><select class="form-control">
                            <option>1. RS/RB</option>
                            <option>2. Puskesmas</option>
                            <option>3. Polindes</option>
                            <option>4. Rumah</option>
                            <option>5. Lainnya</option>
                        </select></div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control" placeholder="01-01-2000"></div>
                    <div class="col-xs-4"><label>Jam Lahir</label><input class="form-control" placeholder="Jam Lahir"></div>
                </div>
                <div class="row">
                    <div class="col-xs-3"><label>Jenis Kelahiran</label><select class="form-control">
                            <option>1. Tunggal</option>
                            <option>2. Kembar 2</option>
                            <option>3. Kembar 3</option>
                            <option>4. Kembar 4</option>
                            <option>5. Lainnya</option>
                        </select></div>
                    <div class="col-xs-3"><label>Kelahiran Ke</label><input class="form-control" placeholder="Kelahiran Ke"></div>
                    <div class="col-xs-3"><label>Penolong Kelahiran</label><select class="form-control">
                            <option>1. Dokter</option>
                            <option>2. Bidan/Perawat</option>
                            <option>3. Dukun</option>
                            <option>4. Lainnya</option>
                        </select></div>
                    <div class="col-xs-3"><label>Berat Bayi</label><input class="form-control" placeholder="Berat Bayi"></div>
                </div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Orang Tua</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12"><label>NIK Ayah</label><input class="form-control" placeholder="NIK Ayah"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12"><label>NIK Ibu</label><input class="form-control" placeholder="NIK Ibu"></div>
                </div>
                <div class="row">
                    <div class="col-xs-6"><label>Nomor Akta Nikah</label><input class="form-control" placeholder="Nomor Akta Nikah"></div>
                    <div class="col-xs-6"><label>Tanggal Pencatatan Perkawinan</label><input class="form-control" type="date" placeholder="Tanggal Pencatatan Perkawinan"></div>
                </div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Pelapor dan Saksi</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-12"><label>NIK Pelapor</label><input class="form-control" placeholder="NIK Pelapor"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12"><label>NIK Saksi 1</label><input class="form-control" placeholder="NIK Saksi 1"></div>
                </div>
                <div class="row">
                    <div class="col-xs-12"><label>NIK Saksi 2</label><input class="form-control" placeholder="NIK Saksi 2"></div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-success">Submit</button>
        </div>
    </div>
@endsection