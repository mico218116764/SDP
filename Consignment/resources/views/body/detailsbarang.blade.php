<style>
    td {
        text-align: center;
    }
</style>
<div class="login-form">
    <div style="padding-left: 200px;padding-right: 200px;">
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
                        <img style="width:120px; height:120px" src="{{$barang->FOTO_KIRI}}" alt="">
                        <img style="width:120px; height:120px" src="{{$barang->FOTO_KANAN}}" alt="">
                        <img style="width:120px; height:120px" src="{{$barang->FOTO_DEPAN}}" alt="">
                        <img style="width:120px; height:120px" src="{{$barang->FOTO_BELAKANG}}" alt="">
                        <img style="width:120px; height:120px" src="{{$barang->FOTO_ATAS}}" alt="">
                        <img style="width:120px; height:120px" src="{{$barang->FOTO_BAWAH}}" alt="">
                    </div>

                    <h4>Deskripsi: {{$barang->DESKRIPSI_BARANG}}</h4><br>
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
