@extends('app')

@section('content')
<form action="{{ url('/aktakelahiran/buat') }}">
    <div class="well">
        <h3>Data Kelahiran</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Bayi</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-8"><label>Nama Lengkap</label><input class="form-control" placeholder="Nama Lengkap" name="nama"></div>
                    <div class="col-xs-4">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenisKelamin">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <label>Tempat Kelahiran</label>
                        <input class="form-control" placeholder="Tempat Kelahiran" name="tempatLahir">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4"><label>Tanggal Lahir</label><input class="form-control" placeholder="Tanggal Lahir" id="tgl_lahir" name="tanggalLahir"></div>
                    <div class="col-xs-4"><label>Jam Lahir</label><input class="form-control" placeholder="Jam Lahir" name="jamLahir"></div>
                </div>
            </div>
        </div>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Orang Tua</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-6"><label>Nomor Akta Nikah</label><input class="form-control" placeholder="Nomor Akta Nikah"></div>
                </div>
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection

@section('script')
<script>
    $(document).ready(function(){
        $('#tgl_lahir').datepicker()
    });
</script>
@endsection