<div class="login-form">
    <form method="POST" action="{{url('/doApply')}}">
        @csrf
        <div class="container" style="padding: 20px">
            <h1 style="text-align: center">Pengajuan</h1>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" class="form-control" name="NAMA_BARANG" placeholder="Masukkan Nama Barang">
            </div>
            @error('NAMA_BARANG')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Jenis Barang</label><BR>
                <select class="form-control" style="font-size: 12pt;" name="jenisBarang" id="">
                    @foreach ($daftarJenis as $jenis)
                        <option value="{{$jenis->JENIS_ID}}">{{$jenis->NAMA_JENIS}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Merk Barang</label><BR>
                <select class="form-control" style="font-size: 12pt;" name="jenisBarang" id="">
                    @foreach ($daftarMerk as $merk)
                        <option value="{{$merk->MERK_ID}}">{{$merk->NAMA_MERK2}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Fungsionalitas</label>
                <input type="text" class="form-control" name="FUNGSIONALITAS" placeholder="Masukkan Fungsi barang apakah berfungsi dengan baik atau tidak">
            </div>
            @error('FUNGSIONALITAS')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Deskripsi Barang</label>
                <textarea id="w3review" class="form-control" name="DESKRIPSI_BARANG" placeholder="Deskripsi barang" rows="4" cols="50"></textarea>
            </div>
            @error('DESKRIPSI_BARANG')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Harga minimum</label>
                <input type="text" class="form-control" name="HARGA_MIN" placeholder="Masukkan Harga Min">
            </div>
            @error('HARGA_MIN')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Harga Maximum</label>
                <input type="text" class="form-control" name="HARGA_MAX" placeholder="Masukkan Harga Max">
            </div>
            @error('HARGA_MAX')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Foto Kiri</label>
                <input type="text" class="form-control" name="FOTO_KIRI" placeholder="URL foto kiri">
            </div>
            @error('FOTO_KIRI')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror
            <div class="form-group">
                <label>Foto Kanan</label>
                <input type="text" class="form-control" name="FOTO_KANAN" placeholder="URL foto kanan">
            </div>
            @error('FOTO_KANAN')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Foto Atas</label>
                <input type="text" class="form-control" name="FOTO_ATAS" placeholder="URL foto atas">
            </div>
            @error('FOTO_ATAS')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror
            <div class="form-group">
                <label>Foto Bawah</label>
                <input type="text" class="form-control" name="FOTO_BAWAH" placeholder="URL foto bawah">
            </div>
            @error('FOTO_BAWAH')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Foto Depan</label>
                <input type="text" class="form-control" name="FOTO_DEPAN" placeholder="URL foto depan">
            </div>
            @error('FOTO_DEPAN')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror
            <div class="form-group">
                <label>Foto Belakang</label>
                <input type="text" class="form-control" name="FOTO_BELAKANG" placeholder="URL foto belakang">
            </div>
            @error('FOTO_BELAKANG')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror
            <div class="form-group">
                <label>Warna Barang</label>
                <input type="color" class="form-control" name="WARNA_BARANGP" >
            </div>
            @error('WARNA_BARANGP')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <button type="submit" name="btnRegis" class="btn btn-primary btn-flat m-b-30 m-t-30">Ajukan</button>

        </div>

    </form>
</div>
