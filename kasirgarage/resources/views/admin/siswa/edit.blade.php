@extends('layout.admin')
@section('content')
<div class="container-fluid">
<div class="card mb-3">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Edit inputan</h6>
    </div>
    <div class="container-fluid">

        {{-- //validation --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/siswa/{{ $siswa->id }}/update" method="POST">
        @csrf
        <br>
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="nama" value="{{ $siswa->nama }}">
        </div>

        <div class="form-select mb-2">
        <label for="jenkel" class="form-label">Jenis Kelamin Siswa</label>
          <select name="jenkel" id="" class="custom-select rounded-0">
            <option selected="">Pilih Jenis Kelamin</option>
            <option value="Pria" @if($siswa->jenkel=='Pria') selected @endif>Pria</option>
            <option value="Wanita"@if($siswa->jenkel=='Wanita') selected @endif>Wanita</option>
        </select>

        </div>

        <div class="form-label">
            <label for="alamat" class="form-label" >Alamat</label>
          <input name="alamat" placeholder="alamat" value="{{ $siswa->alamat }}" type="text" class="form-control" id="exampleInputEmail1" >
        </div>

        <div class="form-group">
            <label for="nohp" class="form-label">No Hp Siswa</label>
          <input name="nohp" type="number" value="{{ $siswa->nohp }}" placeholder="+62" class="form-control" id="exampleInputEmail1" >
        </div>

        <div class="mb-2">
          <label for="email" class="form-label">Email Siswa</label>
          <input name="email" type="email" value="{{ $siswa->email }}" placeholder="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-select mb-2">
            <label for="jurusan" class="form-label">Jurusan Siswa</label>
              <select name="jurusan" id="" class="custom-select rounded-0">
                <option selected="">Pilih Jurusan</option>
                <option value="Multimedia" @if($siswa->jurusan=='Multimedia') selected @endif>Multimedia</option>
                <option value="Rpl" @if($siswa->jurusan=='Rpl') selected @endif>Rpl </option>
                <option value="Tkj" @if($siswa->jurusan=='Tkj') selected @endif>Tkj  </option>
                <option value="Listrik" @if($siswa->jurusan=='Listrik') selected @endif>Listrik</option>
            </select>
            </div>

            <br>
        <button type="submit" class="btn btn-warning">Update</button>
        <hr>
      </form>
    </div>
</div>
</div>


@endsection
