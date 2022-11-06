<div class="modal fade" id="ModalsInputmapel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">TAMBAH PELAJARAN</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <main class="InputMapel text-dark">
                <form action=" /storeMapel " method="post" class="form-InputMapel"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mt-3">

                            <div class="form-floating mb-3">
                                <input type="text" name="Pelajaran" class="form-control" id="Pelajaran"
                                    placeholder="Pelajaran" value="{{ old('Pelajaran') }}" required>
                                <label class="small" for="Pelajaran">Mata Pelajaran</label>
                                @error('Pelajaran')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="date" name="Tahun" class="form-control" id="Tahun"
                                    placeholder="Tahun" value="{{ old('Tahun') }}" required>
                                <label class="small" for="Tahun">NRP</label>
                                @error('Tahun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="Angkatan" class="form-control" id="Angkatan"
                                    placeholder="Angkatan" value="{{ old('Angkatan') }}" required>
                                <label class="small" for="Angkatan">Angkatan</label>
                                @error('Angkatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </div>
                </form>
            </main>
        </div>
    </div>
</div>
