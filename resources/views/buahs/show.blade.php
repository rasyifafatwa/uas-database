@extends('buahs.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Detail Buah</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('buah.index') }}"> Kembali</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama:</strong>
            {{ $buah->nama }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis:</strong>
            {{ $buah->jenis }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Berat:</strong>
            {{ $buah->berat }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Harga:</strong>
            {{ $buah->harga }}
        </div>
    </div>
</div>

@endsection