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
                <form method='post' action='bayar'>
                    @csrf
                    <br>
                    <h3><b>Pilih Metode Pembayaran:</b></h3>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          DAFTAR NAMA BANK
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                          <button class="dropdown-item" type="button">BCA</button>
                          <button class="dropdown-item" type="button">BRI action</button>
                          <button class="dropdown-item" type="button">BNI else here</button>
                        </div>
                      </div>
                      <h3><b>Pilih Metode Pembayaran:</b></h3>
                      <input type="text" class="form-control" name="txtnomorrek" placeholder="Masukkan Nomor Rekening">
                    <div><br>
                    <input type='submit' value='Bayar' name='btnBayar' class='btn btn-primary'>
                    &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br><br>