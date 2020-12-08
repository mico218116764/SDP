<style>
    .body{
        background-image: src("{{asset('images/background1.jpg')}}");
        width: 100%;
        height: 100%;
        background-repeat:no-repeat;
    }
</style>
<body>
<div class="retur-form">
    <form method="POST" action="{{url('/doRetur')}}">
        @csrf
        <div class="container" style="padding: 20px; margin-left: 20%">
            <h1>Pengajuan Keluhan</h1>
            <h4 style="color: red">*maksimal pengembalian barang adalah 2 bulan setelah pembelian</h4>
            <br>
            <div class="form-group">
                <label>Transaksi ID - Tanggal transaksi</label>
                {{-- <input type="text" style="width:70%;" class="form-control" name="TRANSAKSI_ID" placeholder="Masukkan ID Transaksi"> --}}
                <select id="myDropDown" class="form-control" style="width:70%; font-size: 12pt;" name="transaksi_id" >
                    @foreach ($dataTransaksi as $transaksi)
                        @if ($dataTransaksi[0]->status == 1)
                            <option value="{{$transaksi->transaksi_id}}">
                                <p>{{$transaksi->transaksi_id}} || {{$transaksi->created_at}}</p>
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Nama Pembeli</label>
                <input type="text" style="width:70%;" class="form-control" name="NAMA_PEMBELI"
                placeholder="Masukkan Nama Anda" readonly="true" value="{{$userNow->USERPB_NAME}}">
            </div>

            <div class="form-group">
                <label>Pilih Barang</label>
                    <select id="myDropDown" class="form-control" style="width:70%; font-size: 12pt;" name="merkBarang" id="">
                        <option value="keyboard">Keyboard Logitech G107</option>
                        <option value="mouse">Mouse Logitech G107</option>
                    </select>
            </div><br>

            <div class="form-group">
                <label>Deskripsi Barang</label>
                <textarea id="w3review"style="width:70%;" class="form-control" name="DESKRIPSI_BARANG" placeholder="Deskripsi barang"
                    rows="4" cols="50"></textarea>
            </div>
            @error('DESKRIPSI_BARANG')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Link Video</label>
                <textarea id="w3review" style="width:70%;"class="form-control" name="LINK_VIDEO" placeholder="Masukkan Link Video"
                    rows="4" cols="50"></textarea>
            </div><br>

            @error('LINK_VIDEO')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror


            <button type="submit" style="width:70%;" name="btnRetur" class="btn btn-primary btn-flat m-b-30 m-t-30">Ajukan Keluhan</button>

        </div>

    </form>
</div>
@if (session('alert'))
    <div class="alert alert-success">
        <strong>Success!</strong> {{session('alert')}}
    </div>
@endif
</body>