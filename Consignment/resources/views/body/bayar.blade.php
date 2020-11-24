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
                    <h2>Total Pembayaran:</h2>
                        <h1 style='margin-left: 25%; color:red'><b>Rp.1,000,000</b></h1>
                        <br>
                    <h3><b>Pilih Metode Pembayaran:</b></h3>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          DAFTAR NAMA BANK
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <option value="1">BCA</option>
                            <option value="2">BRI</option>
                            <option value="3">BNI</option>
                            <option value="4">OCBC NISP</option>
                        <br>
                        </div>
                      </div>
                      <h3><b>Nomor Rekening Tujuan:</b></h3>
                        <h3 style='margin-left: 25%'><b>0123456789</b></h3>
                        <h3 style='margin-left: 15%'><i>A.n Reteem Consigment</i></h3>
                      <h3><b>Upload Bukti Transfer:</b></h3>
                        <div class="form-group">
                          <input type="file" class="form-control-file" id="BUKTI_TRANSFER" name="BUKTI_TRANSFER">
                        </div>
                    <div><br>
                    <input type='submit' value='Bayar' name='btnBayar' class='btn btn-primary'>
                    &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br><br>