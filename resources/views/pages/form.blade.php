@extends('app-temp')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 mb">
		<form action="{{ url('/aktakelahiran/buat') }}" method="post">
			<div class="content-panel">
				<div id="profile-01">
					<h3>Akta Kematian</h3>
					<h6>Formulir Pembuatan</h6>
				</div>
				<div class="form-panel">
			        <div class="form-horizontal tasi-form" method="get">
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Nomor Induk Kependudukan</label>
			                <div class="col-sm-4">
			                    <input type="text" class="form-control">
			                </div>
			            </div>
			            <div class="form-group">
			                <label class="col-sm-2 control-label">Tempat Kematian</label>
			                <div class="col-sm-4">
			                    <input type="text" class="form-control">
			                </div>
			                <label class="col-sm-2 control-label">Tanggal Kematian</label>
			                <div class="col-sm-4">
			                    <input type="text" class="form-control">
			                </div>
			            </div>
			        </div>
					<button type="button" class="btn btn-theme03">Lanjut</button>
		    	</div>
			</div><!--/content-panel -->
		</form>
	</div><!--/col-md-4 -->
</div>
<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 mb">
		<div class="content-panel">
			<div id="profile-01">
				<h3>Detil Wafat</h3>
			</div>
			<div class="form-panel">
		        <div class="form-horizontal tasi-form" method="get">
		            <div class="form-group">
		                <label class="col-sm-2 control-label">Nama Lengkap</label>
		                <div class="col-sm-4">
		                    <input type="text" class="form-control">
		                </div>
		                <label class="col-sm-2 control-label">Jenis Kelamin</label>
		                <div class="col-sm-4">
		                    <input type="text" class="form-control">
		                </div>
		            </div>
		            <div class="form-group">
		                <label class="col-sm-2 control-label">Tempat Lahir</label>
		                <div class="col-sm-4">
		                    <input type="text" class="form-control">
		                </div>
		                <label class="col-sm-2 control-label">Tanggal Lahir</label>
		                <div class="col-sm-4">
		                    <input type="text" class="form-control">
		                </div>
		            </div>
		        </div>
	    	</div>
		</div><!--/content-panel -->
	</div>
</div>
@endsection