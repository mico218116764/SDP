    <style>
        .card {
        box-shadow: -10px 10px 10px 10px rgba(0,0,0,0.3);
        transition: 0.3s;
        width: 40%;
        padding: 20px;
        /* border: 1px solid gray; */
        border-radius: 15px;
        margin-left: auto;
        margin-right: auto;
        background-color: white;
        margin-bottom: 5%;
        }


        .container {
        padding: 2px 16px;

        margin-left: auto;
        margin-right: auto;
        }
        .containerS{
            margin: 1%;
        }
        .centered{
            margin-left: auto;
            margin-right: auto;
        }
        body{
            background-image: url("{{asset('images/background1.jpg')}}");
            width: 100%;
            height: 100%;
            background-size: cover;
        }
    </style>
<body>
<div class="login-form containerS" style="height: 100px">
    {{-- if($transaksi[0]->status == 0){
            dd("belum disetujui");
        }else{
            dd("disetujui");
        } --}}
    @if(count($transaksi) == 0)
        <div class="card">
        <img src="{{asset('images/sand-clock.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container" >
            <h1><b>Barang anda masih menunggu</b></h1>
            <h2><p>harap menunggu</p></h2>
            <a href="{{url('/back')}}"><button class="btn btn-primary" type="submit">back</button></a>
        </div>
        </div>
    @elseif ($transaksi[0]->status == 1)
    <div class="card">
        <form action="{{url('/sendResi')}}" method="post">
            @csrf
            <input type="hidden" name="transaksie" value="{{$transaksi[0]->transaksi_id}}">
            <img src="{{asset('images/verify.png')}}" alt="Avatar" style="width:100%">
            <div class="container" >
                <h1><b>Telah disetujui admin</b></h1>
                <h3><p>Courier : {{$nama_courier}}</p></h3>
                <br>
                <div class="form-group centered">
                    <label>Input Nomor Resi</label>
                    <input type="text" class="form-control" style="width: auto" name="resi" placeholder="Masukkan No Resi">
                </div>
                @error('resi')
                    <div style="color:red; font-weight:bold"> {{$message}}</div><br>
                @enderror
                <button class="btn btn-primary" type="submit">Kirim</button>
            </div>
        </form>

    </div>
    @elseif($transaksi[0]->status == 6)
        <div class="card">
            <form action="{{url('/batalTransaksi')}}" method="get">
                @csrf
                <input type="hidden" name="transaksi" value="{{$transaksi[0]->transaksi_id}}">
                <img src="{{asset('images/verify.png')}}" alt="Avatar" style="width:100%">
                <div class="container" >
                    <h1><b>Barang dalam pengembalian</b></h1>
                    <h3><p>Courier : {{$nama_courier}}</p></h3>
                    <br>
                    <div class="form-group centered">
                        <label>Nomor Resi</label>
                        <input type="text" class="form-control" style="width: auto" name="resi" placeholder="No Resi" readonly="true" value="{{$resi}}">
                    </div>
                    <button class="btn btn-primary" type="submit">Konfirmasi</button>
                    <h6 style="color: red">*tekan konfirmasi bila barang anda sudah sampai</h6>
                </div>
            </form>
        </div>
    @else
        <div class="card">
            <img src="{{asset('images/sand-clock.jpg')}}" alt="Avatar" style="width:100%">
            <div class="container" >
                <h1><b>Menunggu Pengiriman Dana</b></h1>
                <h3><p>harap menunggu</p></h3>
                <a href="{{url('/back')}}"><button class="btn btn-primary" type="submit">back</button></a>
            </div>
        </div>
    @endif
</div>
</body>




