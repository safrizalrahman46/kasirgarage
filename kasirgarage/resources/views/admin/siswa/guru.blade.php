@extends('layout.admin')

@section('content')
<div class="content">
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Guru</h1>
    </div>
    <div class="row">
<div class="container-fluid">


    <!-- Page Heading -->
    {{-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> --}}

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
        </div>
        <div class="card-body">

            <form action="/guru/search" class="form-inline" method="GET">
                <div class="table-responsive">
                    <div class="input-group">
                        <input name="search" type="search" class="form-control bg-light border-0 small" placeholder="Search for..." >
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

            {{-- <div class="table-responsive">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div> --}}
                <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row">
                    {{-- <div class="col-sm-12 col-md-6">
                        <div class="dataTables_length" id="dataTable_length"><label>Show <select name="dataTable_length" aria-controls="dataTable" class="custom-select custom-select-sm form-control form-control-sm">
                            <option value="10">10</option><option value="25">25</option>
                            <option value="50">50</option><option value="100">100</option>
                        </select> entries</label></div></div><div class="col-sm-12 col-md-6"> --}}
                            {{-- <div id="dataTable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable">
                            </label></div> --}}
                        </div>
                        </div>
                            <div class="row">
                                <div class="col-sm-12"><table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                    <thead>
                        <tr role="row"><th class="sorting sorting_asc" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 195.2px;">Nama</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 296.2px;">Nip</th>
                        <th class="sorting" tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 296.2px;">Murid Terdata</th>

                    </thead>
                    <tfoot>
                        {{-- <tr><th rowspan="1" colspan="1">Nama</th>
                            <th rowspan="1" colspan="1">JenisKelamin</th>
                            <th rowspan="1" colspan="1">Alamat</th>
                            <th rowspan="1" colspan="1">Nohp</th>
                            <th rowspan="1" colspan="1">Jurusan</th>
                            <th rowspan="1" colspan="1">Email</th></tr> --}}
                    </tfoot>
                    <tbody>
                        @foreach ($guru as $guru)
                        <tr>
                            <td>{{ $guru->nama }} </td>
                            <td>{{ $guru->nip }} </td>
                            <td>
                                @foreach ($guru->siswa as $siswa )
                                    {{ $siswa->nama }}.
                                @endforeach
                            </td>
                        </tr>
                            {{-- <td> <a href="/guru/{{ $guru->id }}/delete" class="btn btn-danger" onclick="return confirm('APAKAH ANDA YAKIN? {{ $guru->nama }}');">HAPUS</a>
                                <a  href="/guru/{{ $guru->id }}/edit" class="btn btn-warning">Edit</a> --}}
                        @endforeach
                   </tbody>
                {{-- </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="dataTable_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div>
                <div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="dataTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="dataTable_previous"><a href="#" aria-controls="dataTable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                    <li class="paginate_button page-item active"><a href="#" aria-controls="dataTable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                    <li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="dataTable" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                    <li class="paginate_button page-item next" id="dataTable_next"><a href="#" aria-controls="dataTable" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div>
                </div> --}}
            </div>
        </div>
    </div>

</div>
</div>
</div>

@endsection
