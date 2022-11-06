@extends('index')

@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card p-3">
                    <center>Pleton</center>
                    <div class="text">
                        @forelse ($pleton as $item)
                            <div class="row">
                                <b>Pleton {{ $item->pleton }}</b>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <center>Kompi</center>
                    <div class="text">
                        @forelse ($kompi as $item)
                            <div class="row">
                                <b>Kompi {{ $item->kompi }}</b>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col">
                <div class="card p-3">
                    <center>Pleton</center>
                    <div class="text">
                        @forelse ($angkatan as $item)
                            <div class="row">
                                <b>Pleton {{ $item->angkatan }}</b>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card p-3">
                    <center>Kompi</center>
                    <div class="text">
                        @forelse ($tahun as $item)
                            <div class="row">
                                <b>Tahun {{ $item->tahun }}</b>
                            </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
