<style>
    .body{
        background-image: src("{{asset('images/background1.jpg')}}");
        width: 100%;
        height: 100%;
        background-repeat:no-repeat;
    }
    .card {
      box-shadow: -10px 10px 10px 10px rgba(0,0,0,0.3);
      transition: 0.3s;
      width: 95%;
      padding: 2%;
      /* border: 1px solid gray; */
      border-radius: 1%;
      margin-left: auto;
      margin-right: auto;
      margin-bottom: 2%;
    }
</style>
<body>
    <div class="retur-form">
    <div class="card">
        <form method="POST" action="{{url('/doRetur')}}">
            @csrf
            <div class="container" style="padding: 1%;">
                <h1>Pengajuan Keluhan</h1>
                <h4 style="color: red">*maksimal pengembalian barang adalah 2 bulan setelah pembelian</h4>
                <br>
                <div class="form-group">
                    <label>Transaksi ID - Tanggal transaksi - Nama Barang</label>
                    {{-- <input type="text" style="width:70%;" class="form-control" name="TRANSAKSI_ID" placeholder="Masukkan ID Transaksi"> --}}
                    <select id="myDropDown" class="form-control" style="width:70%; font-size: 12pt;" name="transaksi_id" >
                        @foreach ($dataTransaksi as $transaksi)
                            @foreach ($barang as $bar)
                                @if ($transaksi->PENGAJUAN_ID == $bar->PENGAJUAN_ID)
                                    <option value="{{$transaksi->transaksi_id}}">
                                    <p>{{$transaksi->transaksi_id}} || {{$transaksi->created_at}} || {{$bar->NAMA_BARANG}}</p>
                                    </option>
                                @endif
                            @endforeach

                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label>Nama Pembeli</label>
                    <input type="text" style="width:70%;" class="form-control" name="NAMA_PEMBELI"
                    placeholder="Masukkan Nama Anda" readonly="true" value="{{$userNow->USERPB_NAME}}">
                </div>

                <br>

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
    </div>
    @if (session('alert'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{session('alert')}}
        </div>
    @endif
</body>