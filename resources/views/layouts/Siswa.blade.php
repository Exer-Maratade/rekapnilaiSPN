@extends('index')

@section('content')
    <div class="card p-5">
        <div class="d-flex justify-content-end mt-1 p-1">
            <div class="row">
                <div class="col">
                    <form action=" {{ route('Siswa') }} " method="GET">
                        @csrf
                        <div class="input-group" style="width: 53vw">
                            <input type="text" class="form-control" name="search" placeholder="Cari Nama siswa"
                                value="{{ $request->search }}">
                            <div class="button">
                                <button type="submit" class="btn btn-danger" style="width: 5vw">cari</button>
                            </div>
                        </div>
                </div>
                <div class="col">
                    <div class="button" class="btn" style="margin-right: 10px" data-bs-toggle="modal"
                        data-bs-target="#ModalsInputsiswa">
                        <a class="btn btn-primary" href="#">Tambah Siswa</a>
                    </div>
                </div>
            </div>
        </div>


        </form>

        <div class="table-responsive mt-3">
            <table class="table table-responsive py-2 table-striped table-hover">
                <thead class="thead table-dark">

                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nosis</th>
                        <th scope="col">Pleton</th>
                        <th scope="col">Kompi</th>
                        <th scope="col">Angkatan</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Nilai</th>
                    </tr>
                </thead>
                <tbody class="table-body">
                    @forelse ($Siswa as $item)
                        <tr>
                            <th scope="col"> {{ $loop->iteration }} </th>
                            <td> {{ $item->Name }} </td>
                            <td> {{ $item->Nosis }} </td>
                            <td> {{ $item->pleton->pleton }} </td>
                            <td> {{ $item->kompi->kompi }} </td>
                            <td> {{ $item->angkatan->angkatan }} </td>
                            <td> {{ $item->tahun->tahun }} </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#ModalsNilai">
                                    Lihat Nilai
                                </button>
                            </td>

                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center fw-lighter fst-italic my-5">data tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $Siswa->links() }}
        </div>

    </div>
    @include('modals.ModalsInputsiswa')
@endsection
