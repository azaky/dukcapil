@extends('app')

@section('content')

    <div class="well">
        <h3>Data Kelahiran</h3>
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Data Bayi</h3></div>
            <div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="col-xs-3">No. Akta Lahir</div>
                        <div class="col-xs-9">: </div>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="col-xs-3">Nama Lengkap</div>
                        <div class="col-xs-9">: </div>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="col-xs-3">Tempat lahir</div>
                        <div class="col-xs-9">: </div>
                    </li>
                </ul>
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="col-xs-3">Waktu lahir</div>
                        <div class="col-xs-9">: </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
