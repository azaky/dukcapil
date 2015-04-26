@extends('app')

@section('content')
<form action="{{ url('/aktanikah/buat') }}" method="POST">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="well">
        <h3>Akta Pernikahan</h3>
        <div class="row">
            <div class="col-xs-6"><label>Tanggal Pernikahan</label><input name="tanggal" type="date" class="form-control" placeholder="Tanggal Pernikahan"></div>
            <div class="col-xs-4"><label>Tempat Pernikahan</label><input name="tempat" class="form-control" placeholder="Tempat Pernikahan"></div>
        </div>
        <div class="row">
            <div class="col-xs-6"><label>Nomor Induk Kependudukan Laki-laki</label><input name="nik-pria" class="form-control" placeholder="Nomor Induk Kependudukan Laki-laki">
                <hr>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detil Mempelai Pria</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8"><label>Nama Lengkap</label><input name="nama_lengkap_pria" class="form-control" placeholder="Nama Lengkap" disabled></div>
                            <div class="col-xs-4"><label>Jenis Kelamin</label><select class="form-control" disabled><option>Laki-laki</option></select></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>Tempat Lahir</label><input name="tempat_lahir_pria" class="form-control" placeholder="Tempat Lahir" disabled></div>
                            <div class="col-xs-4"><label>Tanggal Lahir</label><input name="tanggal_lahir_pria" class="form-control" placeholder="01-01-2000" disabled></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
                <label>Nomor Induk Kependudukan Perempuan</label>
                <input name="nik-wanita" class="form-control" placeholder="Nomor Induk Kependudukan Perempuan">
                <hr>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title">Detil Mempelai Perempuan</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-8"><label>Nama Lengkap</label><input name="nama_lengkap_wanita" class="form-control" placeholder="Nama Lengkap" disabled></div>
                            <div class="col-xs-4"><label>Jenis Kelamin</label><select class="form-control" disabled><option>Perempuan</option></select></div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4"><label>Tempat Lahir</label><input name="tempat_lahir_wanita" class="form-control" placeholder="Tempat Lahir" disabled></div>
                            <div class="col-xs-4"><label>Tanggal Lahir</label><input name="tanggal_lahir_wanita" class="form-control" placeholder="01-01-2000" disabled></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
           <button name="detail" type="button" class="btn btn-success">Validasi NIK</button>
           <button id="submit_button" type="submit" class="btn" disabled>Submit</button>
        </div>
    </div>
</form>
@endsection

@section('script')
    <script src="{{ asset('javascript/ajax.js') }}"></script>
@endsection
