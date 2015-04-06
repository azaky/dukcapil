@extends('app')

@section('content')
    <form method="post" action="{{url('kartukeluarga')}}">
        <div class="well">
            <h3>Data Keluarga</h3>

            <div class="row">
                <div class="col-xs-9">
                    <label for="kepalaKeluarga">NIK Kepala Keluarga</label>
                    <input class="form-control" placeholder="NIK Kepala Keluarga" id="kepalaKeluarga"
                           name="kepalaKeluarga">
                </div>
                <div class="col-xs-3">
                    <label for="jumlahAnggotaKeluarga">Jumlah Anggota Keluarga</label>
                    <input type="number" min="0" class="form-control" placeholder="Jumlah" id="jumlahAnggotaKeluarga">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <label for="alamat">Alamat</label>
                    <input class="form-control" placeholder="Alamat" id="alamat" name="alamat">
                </div>
                <div class="col-xs-6">
                    <label for="kodepos">Kode Pos</label>
                    <input class="form-control" placeholder="Kode Pos" id="kodepos" name="kodepos">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <label for="provinsi">Kode-Nama Provinsi</label>
                    <input class="form-control" placeholder="Kode-Nama Propinsi" id="provinsi" name="provinsi">
                </div>
                <div class="col-xs-6">
                    <label for="kota">Kode-Nama Kabupatan/Kota</label>
                    <input class="form-control" placeholder="Kode-Nama Kabupatan/Kota" id="kota" name="kota">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <label for="kecamatan">Kode-Nama Kecamatan</label>
                    <input class="form-control" placeholder="Kode-Nama Kecamatan" id="kecamatan" name="kecamatan">
                </div>
                <div class="col-xs-6">
                    <label for="kelurahan">Kode-Nama Kelurahan</label>
                    <input class="form-control" placeholder="Kode-Nama Kelurahan" id="kelurahan" name="kelurahan">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Lanjut</button>
            </div>
        </div>

        <div class="well">
            <h3>Data Anggota Keluarga</h3>

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Anggota 1</h3>
                </div>
                <div class="panel-body">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Detil</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-8">
                                    <label>Nama Lengkap</label>
                                    <input class="form-control" placeholder="Nama Lengkap">
                                </div>
                                <div class="col-xs-2"><label>Jenis Kelamin</label><select class="form-control">
                                        <option>Laki-laki</option>
                                    </select></div>
                                <div class="col-xs-2"><label>Golongan Darah</label><select class="form-control">
                                        <option>A</option>
                                    </select></div>
                            </div>
                            <div class="row">
                                <div class="col-xs-4"><label>Tempat Lahir</label><input class="form-control"
                                                                                        placeholder="Tempat Lahir">
                                </div>
                                <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control"
                                                                                         placeholder="01-01-2000"></div>
                                <div class="col-xs-4"><label>Akta Lahir</label><input class="form-control"
                                                                                      placeholder="Kode Akta Lahir">
                                </div>
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
    </form>
@endsection