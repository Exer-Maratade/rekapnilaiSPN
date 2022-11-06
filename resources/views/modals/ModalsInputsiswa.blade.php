<div class="modal fade" id="ModalsInputsiswa" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">TAMBAH SISWA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <main class="InputMapel text-dark">
                <form action=" {{ route('Storesiswa') }} " method="POST" class="form-InputSiswa"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group mt-3">

                            <div class="form-floating mb-3">
                                <input type="text" name="Name" class="form-control" id="Name"
                                    placeholder="Name" value="{{ old('Name') }}" required>
                                <label class="small" for="Name"> Nama</label>
                                @error('Name')
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
