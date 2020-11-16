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
            <img src="" width='100px' height='100px'>
            <h4>Tampak Kiri</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="" width='100px' height='100px'>
            <h4>Tampak Kanan</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="" width='100px' height='100px'>
            <h4>Tampak Atas</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="" width='100px' height='100px'>
            <h4>Tampak Bawah</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="" width='100px' height='100px'>
            <h4>Tampak Depan</h4>
          </div>
          <div class="col-md-1" style='margin-right: 20px;'>
            <img src="" width='100px' height='100px'>
            <h4>Tampak Belakang</h4>
          </div>
        </div>
      </div>
    <br><br><br>
    <h3><b>Detail Pengajuan</b></h3>
    <br>

       <form method="get" action="/doApprove">
        @csrf
            <h4>ID Barang: </h4>
            <input type="text" class="form-control" name="ID_BARANG" value="">
            <h4>Nama Barang: </h4>
            <input type="text" class="form-control" name="NAMA_BARANG" value="">
            <h4>Deskripsi Barang: </h4>
            <input type="text" class="form-control" name="DESKRIPSI_BARANG" value="">
            <h4>Harga Minimum: </h4>
            <input type="text" class="form-control" name="HARGA_MIN" value="">
            <h4>Harga Maksimal: </h4>
            <input type="text" class="form-control" name="HARGA_MAKS" value="">
            <h4>Harga Approve: </h4>
            <input type="hidden" name="id" value="">
            <input type="text" class="form-control" id="hargaapp" name="hargaApprove" placeholder='Harga Approve' readonly>
            @error('hargaApprove')
                <div style="color:red; font-weight:bold"></div><br>
            @enderror
            <br>

            <div class="form-group">
                <label>Alasan:</label>
                <textarea id="w3review" class="form-control" name="ALASAN_TOLAK" placeholder="Alasan Penolakan Barang"
                    rows="4" cols="50" readonly></textarea>
            </div>

            <br><br>
            <input name="btnupdatepeng" style="width:100%;font-size:13pt;" class="btn btn-primary" type="submit" value="UPDATE PENGAJUAN">
            <br><br><br>
        </form>

       
    </div>
</div>
@if (session('alert'))
    <div class="alert alert-warning">
        {{ session('alert') }}
    </div>
@endif
