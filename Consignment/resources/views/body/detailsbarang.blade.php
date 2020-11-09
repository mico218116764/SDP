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
                <form method='post' action='post_checkout'>
                    @csrf
                    <br>
                    <h3><b>NAMA BARANG</b></h3>
                    <h4>Price: </h4><br>
                    <h3>Jumlah:</h3>
                    <input type='submit' value='-' name='btncheckout' class='btn btn-primary'>
                    <input type="number" name="txtjumlah" value='1' style="">
                    <input type='submit' value='+' name='btncheckout' class='btn btn-primary'>
                    <div><br>
                    <input type='submit' value='Checkout' name='btncheckout' class='btn btn-primary'>
                    &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br><br>