@extends('mahasiswas.layout')
 
@section('content')
 
<div class="container mt-5">
 
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Mahasiswa
            </div>
            <div class="card-body">
                @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
                @endif
            <form method="post" action="{{ route('mahasiswas.update', $mahasiswa->Nim) }}" id="myForm" enctype="multipart/form-data">
                
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="Nim">Nim</label> <br>
                    <input type="text" name="Nim" class="form-control" id="Nim" value="{{ $mahasiswa->Nim }}" aria-describedby="Nim" > 
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label> <br>
                    <input type="text" name="Nama" class="form-control" id="Nama" value="{{ $mahasiswa->Nama }}" aria-describedby="Nama" > 
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label> <br>
                    <select class="form-control" name="Kelas" id="Kelas" aria-describedby="Kelas">
                        @foreach($kelas as $kls)
                            <option value="{{$kls->id}}" {{$mahasiswa->kelas_id == $kls->id ? 'selected' :''}} >{{$kls->nama_kelas}}</option>
                        @endforeach
                    </select> 
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label> <br>
                    <input type="Jurusan" name="Jurusan" class="form-control" id="Jurusan" value="{{ $mahasiswa->Jurusan }}" aria-describedby="Jurusan" > 
                </div>
                <div class="form-group">
                    <label for="No_Handphone">No_Handphone</label> <br>
                    <input type="No_Handphone" name="No_Handphone" class="form-control" id="No_Handphone" value="{{ $mahasiswa->No_Handphone }}" aria-describedby="No_Handphone" > 
                </div>
                <div class="form-group">
                    <label for="E_Mail">E-Mail</label> <br>
                    <input type="E_Mail" name="E_Mail" class="form-control" id="E_Mail" value="{{ $mahasiswa->E_Mail }}" aria-describedby="E_Mail" > 
                </div>
                <div class="form-group">
                    <label for="TglLahir">Tanggal Lahir</label> <br>
                    <input type="TglLahir" name="TglLahir" class="form-control" id="TglLahir" value="{{ $mahasiswa->TglLahir }}" aria-describedby="TglLahir" > 
                </div>
                <div class="form-group">
                    <label for="Image">Foto</label> <br>
                    <input type="file" name="Image" class="form-control" required="required" id="Image" value="{{$mahasiswa->image}}">
                </div>
                <img width="100px" height="100px" src="{{asset('storage/'. $mahasiswa->image)}}"><br><br>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
