@extends('buahs.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 mt-3">
        <h2>Data BUAH</h2>
        <a class="btn btn-success mt-3 mb-3" href="{{ route('buah.create') }}">Buat Data BUAH</a>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Jenis</th>
        <th>Berat</th>
        <th>Harga</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($buahs as $buah)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $buah->nama }}</td>
        <td>{{ $buah->jenis }}</td>
        <td>{{ $buah->berat }}</td>
        <td>{{ $buah->harga }}</td>
        <td>
            <form action="{{ route('buah.destroy',$buah->id) }}" method="POST">
                @csrf
                <a class="btn btn-info" href="{{ route('buah.show',$buah->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('buah.edit',$buah->id) }}">Edit</a>
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@endsection