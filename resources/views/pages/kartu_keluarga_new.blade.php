@extends('app-temp')

@section('stylesheet')
    <style>
        #templatePanelAnggota {
            display:none;
        }
    </style>
@endsection

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 mb">
		<form method="post" action="{{url('kartukeluarga/create')}}" id="kkForm"><input type="hidden" name="_token" value="{{ csrf_token()}}">
			<div class="content-panel">
				<div id="profile-01">
					<h3>Kartu Tanda Penduduk</h3>
					<h6>Formulir Pembuatan</h6>
				</div>
				<div class="form-panel">
					<h4 class="mb"><i class="fa fa-angle-right"></i> Detil</h4>
			        <div class="form-horizontal tasi-form" method="get">
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Nomor Induk Kependudukan Kepala Keluarga</label>
			                <div class="col-sm-6">
			                    <input type="text" class="form-control">
			                </div>
			                <label class="col-sm-2 control-label">Jumlah Anggota Keluarga</label>
			                <div class="col-sm-2">
			                    <input min="0" type="number" class="form-control">
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Alamat</label>
			                <div class="col-sm-6">
			                    <input type="text" class="form-control">
			                </div>
			                <label class="col-sm-2 control-label">Kodepos </label>
			                <div class="col-sm-2">
			                    <input type="text" class="form-control">
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Kode-Nama Provinsi</label>
			                <div class="col-sm-4">
			                    <input type="text" class="form-control">
			                </div>
			                <label class="col-sm-2 control-label">Kode-Nama Kabupatan/Kota</label>
			                <div class="col-sm-4">
			                    <input type="text" class="form-control">
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Kode-Nama Kecamatan</label>
			                <div class="col-sm-4">
			                    <input type="text" class="form-control">
			                </div>
			                <label class="col-sm-2 control-label">Kode-Nama Kelurahan</label>
			                <div class="col-sm-4">
			                    <input type="text" class="form-control">
			                </div>
			            </div>
			        </div>
			        <button type="button" class="btn btn-theme03">Lanjut</button>
		    	</div>
			</div><!--/content-panel -->
			<div class="content-panel">
				<div id="profile-01">
					<h3>Anggota Penduduk</h3>
				</div>
				<div class="form-panel">
					<h4 class="mb"><i class="fa fa-angle-right"></i> Anggota 1</h4>
					<hr>
					<h4 class="mb"><i class="fa fa-angle-right"></i> Detil</h4>
					<div class="form-horizontal tasi-form" method="get">
						<div class="form-group">
							<label class="col-sm-2 control-label">Nama Lengkap</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
							<label class="col-sm-1 control-label">Jenis Kelamin</label>
							<div class="col-sm-2">
								<select class="form-control" name="jenisKelamin[]">
                                    <option value="L">Laki-laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
							</div>
							<label class="col-sm-1 control-label">Golongan Darah</label>
							<div class="col-sm-2">
								<select class="form-control" name="golonganDarah[]">
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Tempat Lahir</label>
							<div class="col-sm-2">
								<input type="text" class="form-control">
							</div>
							<label class="col-sm-2 control-label">Tanggal Lahir</label>
							<div class="col-sm-2">
								<input type="text" class="form-control">
							</div>
							<label class="col-sm-2 control-label">Akta Lahir</label>
							<div class="col-sm-2">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Nomor Induk Kependudukan Ayah</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
							<label class="col-sm-2 control-label">Nomor Induk Kependudukan Ibu  </label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Kelainan Fisik</label>
							<div class="col-sm-10">
								<input type="text" class="form-control">
							</div>
						</div>
					</div>

					<hr>
					<h4 class="mb"><i class="fa fa-angle-right"></i> Status</h4>
					<div class="form-horizontal tasi-form" method="get">
						<div class="form-group">
							<label class="col-sm-2 control-label">Pendidikan Terakhir</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Pekerjaan</label>
							<div class="col-sm-4">
								<input type="text" class="form-control">
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-1 control-label">Status Perkawinan</label>
							<div class="col-sm-3">
								<select class="form-control" name="statusPernikahan[]">
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin">Kawin</option>
                                    <option value="Cerai">Cerai</option>
                                </select>
							</div>
							<label class="col-sm-1 control-label">Akta Perkawinan</label>
							<div class="col-sm-3">
								<input type="text" class="form-control">
							</div>
							<label class="col-sm-1 control-label">Akta Penceraian</label>
							<div class="col-sm-3">
								<input type="text" class="form-control">
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