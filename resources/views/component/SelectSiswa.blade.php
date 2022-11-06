@extends('index')

@section('content')
    <div class="d-flex p-5 justify-content-end mt-0 mb-0"></div>
    <div class="card p-5">
        <div class="row" style="width: auto">
            <span class="text fw-bold mt-3 mb-2 text-uppercase bolt text-success">Cari siswa dengan kategori di bawah
                ini</span>

            <div class="col">
                <select class="form-control mt-1" aria-label="Default select example" id="Angkatan" name="Angkatan">
                    <option selected disabled>Angkatan</option>
                    @foreach ($Siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->Angkatan }}</option>
                    @endforeach
                </select>
            </div>
{{-- 
            <div class="col">
                <select class="form-control mt-1" aria-label="Default select example">
                    <option selected disabled>Pleton</option>
                    @foreach ($Siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->Pleton }}</option>
                    @endforeach
                </select>
            </div>


            <div class="col">
                <select class="form-control mt-1" aria-label="Default select example">
                    <option selected disabled>Kompi</option>
                    @foreach ($Siswa as $item)
                        <option value="{{ $item->id }}">{{ $item->Kompi }}</option>
                    @endforeach
                </select>
            </div> --}}


            <div class="d-flex justify-content-end mt-3">
                <div class="footer">
                    <form action="{{route('Siswa')}}" method="GET">
                        <button type="submit" id="search" name="search" class="btn btn-primary">Cari siswa</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
