<div class="login-form">
    <form method="POST" action="{{url('/doApply')}}">
        @csrf
        <div class="container" style="margin-left: 20%">
            <h1>Pengajuan</h1>
            <br>
            <div class="form-group">
                <label>Nama Barang</label>
                <input type="text" style="width:70%;" class="form-control" name="NAMA_BARANG" placeholder="Masukkan Nama Barang">
            </div>
            @error('NAMA_BARANG')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Jenis Barang</label><BR>
                <select class="form-control" style=" width:70%; font-size: 12pt;" name="jenisBarang" id="">
                    @foreach ($daftarJenis as $jenis)
                    <option value="{{$jenis->JENIS_ID}}">{{$jenis->NAMA_JENIS}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Merk Barang</label><BR>
                <select class="form-control" style="width:70%; font-size: 12pt;" name="merkBarang" id="">
                    @foreach ($daftarMerk as $merk)
                    <option value="{{$merk->MERK_ID}}">{{$merk->NAMA_MERK2}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Fungsionalitas</label>
                <input type="text" style="width:70%;" class="form-control" name="FUNGSIONALITAS"
                    placeholder="Masukkan Fungsi barang apakah berfungsi dengan baik atau tidak">
            </div>
            @error('FUNGSIONALITAS')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Deskripsi Barang</label>
                <textarea id="w3review" style="width:70%;" class="form-control" name="DESKRIPSI_BARANG" placeholder="Deskripsi barang"
                    rows="4" cols="50"></textarea>
            </div>
            @error('DESKRIPSI_BARANG')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Harga minimum</label>
                <input type="text" style="width:70%;" class="form-control" name="HARGA_MIN" placeholder="Masukkan Harga Min">
            </div>
            @error('HARGA_MIN')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Harga Maximum</label>
                <input type="text" style="width:70%;" class="form-control" name="HARGA_MAX" placeholder="Masukkan Harga Max">
            </div>
            @error('HARGA_MAX')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Foto Kiri</label>
                <input type="text" style="width:70%;" class="form-control" name="FOTO_KIRI" >
            </div>
            @error('FOTO_KIRI')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Foto Kanan</label>
                <input type="text" style="width:70%;" class="form-control" name="FOTO_KANAN">
            </div>
            @error('FOTO_KANAN')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Foto Atas</label>
                <input type="text" style="width:70%;" class="form-control" name="FOTO_ATAS">
            </div>
            @error('FOTO_ATAS')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Foto Bawah</label>
                <input type="text" style="width:70%;" class="form-control" name="FOTO_BAWAH">
            </div>
            @error('FOTO_BAWAH')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Foto Depan</label>
                <input type="text" style="width:70%;" class="form-control" name="FOTO_DEPAN">
            </div>
            @error('FOTO_DEPAN')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label for="exampleFormControlFile1">Foto Belakang</label>
                <input type="text" style="width:70%;" class="form-control" name="FOTO_BELAKANG">
            </div>
            @error('FOTO_BELAKANG')
            <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror
            <br>
            @if ($dataUser->NIK == null)
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Anda belum melengkapi profile
                </div>
                <button type="submit"  style="width:70%;font-size:13pt;" name="btnRegis" class="btn btn-primary btn-flat m-b-30 m-t-30" disabled="true">Ajukan</button>
            @else

            <button type="submit"  style="width:70%;font-size:13pt;" name="btnRegis" class="btn btn-primary btn-flat m-b-30 m-t-30">Ajukan</button>
            @endif

            <br>
            <br>
            <br>
        </div>
    </form>

</div>




