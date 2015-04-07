@extends('app')

@section('content')
    <div class="well">
        <h3>Kartu Tanda Penduduk</h3>
        <div class="panel panel-primary cari-penduduk">
            <div class="panel-heading">
                <h3 class="panel-title">Masukan Nomor ID Kependudukan</h3></div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-xs-4">
                        <form id="cari-penduduk">
                            <div class="form-search search-only">
                                <i class="search-icon fa fa-search"></i>
                                <input class="form-control search-query" type="text" placeholder="Nomor Induk Kependudukan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-success data-penduduk" style="display: none">
            <div class="panel-heading">
                <h3 class="panel-title">Data Kependudukan</h3></div>
            <div class="panel-body">
                <div class="col-md-9">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">NIK</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Nama Lengkap</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Tempat dan Tanggal Lahir</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Alamat</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Kelurahan/Desa</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Kecamatan</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Kabupaten/Kota</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Agama</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Status Perkawinan</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Pekerjaan</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="col-xs-4">Kewarganegaraan</div>
                            <div class="col-xs-8">: </div>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <a href="#" class="thumbnail">
                        <img src="{{ asset('/assets/img/avatar.png') }}" class="img-responsive" alt="">
                    </a>
                </div>
            </div>
        </div>
        <div class="modal-footer data-penduduk" style="display: none">
            <button type="button" class="btn btn-success">Cetak Kartu Tanda Penduduk</button>
        </div>
    </div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        $("#cari-penduduk").submit(function() {
            $(".cari-penduduk").hide();
            $(".data-penduduk").show();
            return false;
        });
    });
</script>
@endsection