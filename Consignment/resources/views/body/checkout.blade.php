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
                <form method='post' action='/bayar'>
                    @csrf
                    <br>
                    <h3><b>{{$barang->NAMA_BARANG}}</b></h3>
                    <h4>Deskripsi: {{$barang->DESKRIPSI_BARANG}}</h4><br>
                    <h4>Price: {{$barang->HARGA_APPROVE}}</h4><br>
                    <img style="width:120px; height:120px" src="{{$barang->FOTO_DEPAN}}" alt="">
                    <h3>Address:</h3>
                       <h4 style='margin-left: 20px'><b>{{$userData->USERPB_ADDRESS}}</b></h4>
                    <div><br>
                    <input type='submit' value='Bayar' name='btnBayar' class='btn btn-primary'>
                    &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br><br>
