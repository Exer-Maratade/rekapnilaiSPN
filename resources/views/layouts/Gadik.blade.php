@extends('index')
@section('content')
    <div class="d-flex p-0 justify-content-end mt-0 mb-0">

    </div>
    <div class="d-flex justify-content-end">
        <div class="mt-4">
            @if (session()->has('berhasil', 'gagal'))
                <div class="alert alert-success alert-dismissible fade show mt-3 mb-4 ms-end" role="alert"
                    style="width: 30vw">
                    {{ session('berhasil') }}
                    {{ session('gagal') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            {{-- @if (session()->has('gagal'))
                <div class="alert alert-danger alert-dismissible fade show mt-3 mb-4 ms-end" role="alert"
                    style="width: 30vw">
                    Data gagal ditambahkan
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif --}}

        </div>
    </div>
    <div class="card p-5">

        <div class="button" class="btn" style="margin-right: 10px" data-bs-toggle="modal"
            data-bs-target="#ModalsInputgadik">
            <a class="btn btn-primary" href="#">Tambah gadik</a>
        </div>



        <table class="table table-striped table-hover mt-3" class="paginated">
            <thead class="thead table-dark">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nrp</th>
                    <th scope="col">Pangkat</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Tahun</th>
                    {{-- <th scope="col">Pelajaran</th> --}}
                </tr>
            </thead>
            <tbody class="table-body">
                @forelse ($Gadik as $item)
                    <tr>
                        <th scope="row"> {{ $loop->iteration }} </th>
                        <td> {{ $item->Name }} </td>
                        <td> {{ $item->Nrp }} </td>
                        <td> {{ $item->Pangkat }} </td>
                        <td> {{ $item->Jabatan }} </td>
                        <td> {{ $item->tahun }} </td>
                        {{-- <td> {{ $item->Mapel->Pelajaran }} </td> --}}
                    </tr>

                @empty
                    <tr class="keterangan">
                        <td colspan="10" class="text-center fw-lighter my-5 text-dark ">tidak ada data tersedia
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
        {{-- {{ $Gadik -> Links() }} --}}
    </div>

    @include('modals.ModalsInputgadik')
@endsection
