<div class="modal fade" id="ModalsInputgadik" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-dark" id="exampleModalLabel">TAMBAH GADIK</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <main class="InputMapel text-dark">
                <form action=" {{ route('storeGadik') }} " method="POST" class="form-InputMapel"
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

                            <div class="form-floating mb-3">
                                <input type="text" name="Nrp" class="form-control" id="Nrp"
                                    @error('Nrp') is-invalid
                                @enderror placeholder="Nrp"
                                    value="{{ old('Nrp') }}" required>
                                <label class="small" for="Nrp">NRP</label>

                            </div>

                            <div class="form-group mb-3">
                                {{-- <input type="text" name="Pangkat" class="form-control" id="Pangkat"
                                    placeholder="Pangkat" value="{{ old('Pangkat') }}" required> --}}
                                <label class="small" for="Pangkat">Pangkat</label>
                                <select class="form-control" id="Pangkat" Name="Pangkat" required>
                                    <option value="" selected disabled>Pangkat</option>
                                    <option value="Bripda">Bripda</option>
                                    <option value="Briptu">Briptu</option>
                                    <option value="Brigpol">Brigpol</option>
                                    <option value="Bripka">Bripka</option>
                                    <option value="Aipda">Aipda</option>
                                    <option value="Aiptu">Aiptu</option>
                                    <option value="Ipda">Ipda</option>
                                    <option value="Iptu">Iptu</option>
                                    <option value="AKP">AKP</option>
                                    <option value="Kompol">Kompol</option>
                                    <option value="AKBP">AKBP</option>
                                    <option value="KOMBESPOL">Kombespol</option>

                                </select>
                                @error('Pangkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="Jabatan" class="form-control" id="Jabatan"
                                    placeholder="Jabatan" value="{{ old('Jabatan') }}" required>
                                <label class="small" for="Jabatan">Jabatan</label>
                                @error('Jabatan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" name="Tahun" class="form-control" id="Tahun"
                                    placeholder="Tahun" value="{{ old('Tahun') }}" required>
                                <label class="small" for="Tahun">Tahun</label>
                                @error('Tahun')
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
