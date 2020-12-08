<style>
    td {
        text-align: center;
    }
    .login-form{
        width: 100%;
        height: 10%;
        margin-top: -5%;
        background-repeat: no-repeat;
    }
    .body{
        background-image: src("{{asset('images/background1.jpg')}}");
        width: 100%;
        height: 100%;
        background-repeat:no-repeat;
    }
</style>
<body>
<div class="login-form">
    <img src=" {{asset('images/background1.jpg')}}" alt="" >
    <div style="margin-top:-45%; padding-left: 200px;padding-right: 200px;">
        <div class='row'>
            <div class='col-md-4'>
                <div class="gambar">
                    <img src="">
                </div>
            </div>
            <div class='col-md-8'>
                <form method='post' action='/post_checkout/{{$barang->PENGAJUAN_ID}}'>
                    @csrf
                    <br>
                    <h3><b>{{$barang->NAMA_BARANG}}</b></h3>
                    <div class="row">
                        <img style="width:120px; height:120px" src="{{asset('images/'.$barang->FOTO_KIRI)}}" alt="">
                        <img style="width:120px; height:120px" src="{{asset('images/'.$barang->FOTO_KANAN)}}" alt="">
                        <img style="width:120px; height:120px" src="{{asset('images/'.$barang->FOTO_DEPAN)}}" alt="">
                        <img style="width:120px; height:120px" src="{{asset('images/'.$barang->FOTO_BELAKANG)}}" alt="">
                        <img style="width:120px; height:120px" src="{{asset('images/'.$barang->FOTO_ATAS)}}" alt="">
                        <img style="width:120px; height:120px" src="{{asset('images/'.$barang->FOTO_BAWAH)}}" alt="">
                    </div>
                    <h3>Deskripsi:<br></h3>
                    <h4> {{$barang->DESKRIPSI_BARANG}}</h4><br>
                    <h4>Price: {{$barang->HARGA_APPROVE}}</h4><br>
                    <div><br>
                    <input type='submit' value='Checkout' name='btncheckout' class='btn btn-primary'>
                    &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br><br>
</body>
