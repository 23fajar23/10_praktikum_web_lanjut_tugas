<?php
    use Illuminate\Support\Facades\DB;
    use App\Models\Mahasiswa;

?>

@extends('mahasiswas.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('mahasiswas.create') }}"> Input Mahasiswa</a>
        </div>
        <div class="float-left my-2">

            <form action="{{ route('mahasiswas.index') }}" method="GET" role="search">
                <input type="text" class="form-control mr-2" name="keyword" placeholder="Search" id="keyword">
                
        </div>
        <div class="float-left my-2">
            <button type="submit" class="btn btn-secondary"> Search </button>
            </form>
        </div>

    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
 
<table class="table table-bordered">
    <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>No_Handphone</th>
        <th>E-Mail</th>
        <th>Tanggal Lahir</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($posts as $Mahasiswa)

    <tr>
        <td>{{ $Mahasiswa->Nim }}</td>
        <td>{{ $Mahasiswa->Nama }}</td>
        <td>{{ $Mahasiswa->Kelas->nama_kelas }}</td>
        <td>{{ $Mahasiswa->Jurusan }}</td>
        <td>{{ $Mahasiswa->No_Handphone }}</td>
        <td>{{ $Mahasiswa->E_Mail }}</td>
        <td>{{ $Mahasiswa->TglLahir }}</td>
        <td>
            <form action="{{ route('mahasiswas.destroy',$Mahasiswa->Nim) }}" method="POST">
                <a class="btn btn-info" href="{{ route('mahasiswas.show',$Mahasiswa->Nim) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('mahasiswas.edit',$Mahasiswa->Nim) }}">Edit</a>
                <a class="btn btn-primary" href="{{ route('mahasiswas.nilai',$Mahasiswa->Nim) }}">Nilai</a>
                
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $posts->links('pagination::bootstrap-4') }}

@endsection