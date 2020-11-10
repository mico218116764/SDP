<style>
    td {
        text-align: center;
    }
</style>
<div class="login-form">
    <div style="padding-left: 200px;padding-right: 200px;">
    <div id="container">
        <div id="gambar1">
            <a href="{{url('/detailpeng1')}}"><img src=""></a>
        </div>
        <div id="gambar2">
            <a href="{{url('/detailpeng2')}}"><img src=""></a>
        </div>
        <div id="gambar3">
            <a href="{{url('/detailpeng3')}}"><img src=""></a>
        </div>
        <div id="gambar4">
            <a href="{{url('/detailpeng4')}}"><img src=""></a>
        </div>
    </div>
    <br><br><br>
    <h3><b>Detail Pengajuan</b></h3>
    <br>
       <h4>ID Barang: </h4>
       <h4>Nama Barang: </h4>
       <h4>Deskripsi Barang: </h4>
       <h4>Harga Minimum: </h4>
       <h4>Harga Maksimal: </h4>
       <h4>Harga Approve: </h4>
       <form method="POST" action="post_detailspeng">
        @csrf
            <input type="text" class="form-control" id="hargaapp" name="hargaApprove" placeholder='Harga Approve'>
            <br><br><br>
            <input name="butApprove" style="width:100%;font-size:13pt;" class="btn btn-primary" type="submit" value="Approve">
            <br><br><br>
        </form>
    </div>
</div>
