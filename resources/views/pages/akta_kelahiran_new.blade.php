@extends('app-temp')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 mb">
		<form action="{{ url('/aktakelahiran/buat') }}" method="post">
			<div class="content-panel">
				<div id="profile-01">
					<h3>Data Kelahiran</h3>
					<h6>Formulir Pembuatan</h6>
				</div>
				<div class="form-panel">
					<h4 class="mb"><i class="fa fa-angle-right"></i> Data Bayi</h4>
			        <div class="form-horizontal tasi-form" method="get">
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Nama Lengkap</label>
			                <div class="col-sm-6">
			                    <input type="text" class="form-control">
			                </div>
			                <label class="col-sm-2 control-label">Jenis Kelamin</label>
			                <div class="col-sm-2">
		                        <select class="form-control" name="jenisKelamin">
		                            <option value="L">Laki-laki</option>
		                            <option value="P">Perempuan</option>
		                        </select>
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Tempat Lahir</label>
			                <div class="col-sm-4">
			                    <input class="form-control" placeholder="Tempat Kelahiran" name="tempatLahir">
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Tanggal Lahir</label>
			                <div class="col-sm-4">
			                    <input class="form-control" placeholder="Tanggal Lahir" id="tgl_lahir" name="tanggalLahir">
			                </div>
			                <label class="col-sm-2 control-label">Jam Lahir</label>
			                <div class="col-sm-4">
			                    <input class="form-control" placeholder="Jam Lahir" name="jamLahir">
			                </div>
			            </div>
			        </div>
		    	</div>
		    	<div class="form-panel">
					<h4 class="mb"><i class="fa fa-angle-right"></i> Data Orang Tua</h4>
			        <div class="form-horizontal tasi-form" method="get">
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Nomor Akta Nikah</label>
			                <div class="col-sm-2">
			                    <input class="form-control" placeholder="Nomor Akta Nikah">
			                </div>
			            </div>
			        </div>
		    	</div>
				<button type="button" class="btn btn-theme03">Lanjut</button>
			</div><!--/content-panel -->
		</form>
	</div><!--/col-md-4 -->
</div>
@endsection