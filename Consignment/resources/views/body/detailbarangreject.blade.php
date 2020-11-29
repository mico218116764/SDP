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
                <img src="{{$pengajuans->FOTO_KIRI}}" width='100px' height='100px'>
                <h4>Tampak Kiri</h4>
              </div>
              <div class="col-md-1" style='margin-right: 20px;'>
                <img src="{{$pengajuans->FOTO_KANAN}}" width='100px' height='100px'>
                <h4>Tampak Kanan</h4>
              </div>
              <div class="col-md-1" style='margin-right: 20px;'>
                <img src="{{$pengajuans->FOTO_ATAS}}" width='100px' height='100px'>
                <h4>Tampak Atas</h4>
              </div>
              <div class="col-md-1" style='margin-right: 20px;'>
                <img src="{{$pengajuans->FOTO_BAWAH}}" width='100px' height='100px'>
                <h4>Tampak Bawah</h4>
              </div>
              <div class="col-md-1" style='margin-right: 20px;'>
                <img src="{{$pengajuans->FOTO_DEPAN}}" width='100px' height='100px'>
                <h4>Tampak Depan</h4>
              </div>
              <div class="col-md-1" style='margin-right: 20px;'>
                <img src="{{$pengajuans->FOTO_BELAKANG}}" width='100px' height='100px'>
                <h4>Tampak Belakang</h4>
              </div>
        </div>
      </div>
    <br><br><br>
    <h3><b>Detail Pengajuan</b></h3>
    <br>

       <form method="post" action="/doSubmit">
        @csrf
        <h4>ID Barang: </h4>
        <input type="text" class="form-control" name="ID_BARANG" value="{{$pengajuans->PENGAJUAN_ID}}"  readonly>
        <h4>Nama Barang: </h4>
        <input type="text" class="form-control" name="NAMA_BARANG" value="{{$pengajuans->NAMA_BARANG}}" >
        <h4>Deskripsi Barang: </h4>
        <input type="text" class="form-control" name="DESKRIPSI_BARANG" value="{{$pengajuans->DESKRIPSI_BARANG}}" >
        <h4>Harga Minimum: </h4>
        <input type="text" class="form-control" name="HARGA_MIN" value="{{$pengajuans->HARGA_MIN}}" >
        <h4>Harga Maksimal: </h4>
        <input type="text" class="form-control" name="HARGA_MAKS" value="{{$pengajuans->HARGA_MAX}}" >
        <h4>Harga Approve: </h4>
        <input type="hidden" name="id" value="{{$id}}">
        <div class="form-group">
            <label>Alasan:</label>
            <textarea disabled="true" id="w3review" class="form-control" name="ALASAN_TOLAK" placeholder="Alasan Penolakan Barang"
        rows="4" cols="50">{{$pengajuans->alasan}}</textarea>
        </div>
        <br><br><br>
        <input name="butApprove" style="width:100%;font-size:13pt;" class="btn btn-primary" type="submit" value="Submit">
        <br><br><br>

        </form>
    </div>
</div>
@if (session('alert'))
    <div class="alert alert-warning">
        {{ session('alert') }}
    </div>
@endif