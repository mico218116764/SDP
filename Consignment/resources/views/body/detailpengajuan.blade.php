<style>
    td {
        text-align: center;
    }
</style>
<div class="login-form">
    <div style="padding-left: 200px;padding-right: 200px;">
    <div class="container">
        <div class="col">
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="https://i.pinimg.com/originals/83/f7/3a/83f73af0de4a732853364881c6e84cf1.jpg" width='100px' height='100px'>
            <h4>Tampak Kiri</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="https://i.pinimg.com/originals/83/f7/3a/83f73af0de4a732853364881c6e84cf1.jpg" width='100px' height='100px'>
            <h4>Tampak Kanan</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="https://i.pinimg.com/originals/83/f7/3a/83f73af0de4a732853364881c6e84cf1.jpg" width='100px' height='100px'>
            <h4>Tampak Atas</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="https://i.pinimg.com/originals/83/f7/3a/83f73af0de4a732853364881c6e84cf1.jpg" width='100px' height='100px'>
            <h4>Tampak Bawah</h4>
          </div>
          <div class="col-md-1" style='mmargin-right: 20px;'>
            <img src="https://i.pinimg.com/originals/83/f7/3a/83f73af0de4a732853364881c6e84cf1.jpg" width='100px' height='100px'>
            <h4>Tampak Depan</h4>
          </div>
        </div>
      </div>
    <br><br><br>
    <h3><b>Detail Pengajuan</b></h3>
    <br>
       <h4>ID Barang: </h4>
       <input type="text" class="form-control" name="ID_BARANG" readonly>
       <h4>Nama Barang: </h4>
       <input type="text" class="form-control" name="NAMA_BARANG" readonly>
       <h4>Deskripsi Barang: </h4>
       <input type="text" class="form-control" name="DESKRIPSI_BARANG" readonly>
       <h4>Harga Minimum: </h4>
       <input type="text" class="form-control" name="HARGA_MIN" readonly>
       <h4>Harga Maksimal: </h4>
       <input type="text" class="form-control" name="HARGA_MAKS" readonly>
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
