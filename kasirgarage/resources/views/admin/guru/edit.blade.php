
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

    <form action="/guru/{{ $guru->id }}/update" method="POST">
        @csrf
        <br>
        <div class="mb-2">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="nama" value="{{ $guru->nama }}">
        </div>

        <div class="form-label">
            <label for="nip" class="form-label" >Nip Guru</label>
          <input name="nip" placeholder="nip" value="{{ $guru->nip }}" type="text" class="form-control" id="exampleInputEmail1" >
        </div>

            <br>
        <button type="submit" class="btn btn-warning">Update</button>
        <hr>
      </form>
    </div>
</div>
</div>


@endsection
