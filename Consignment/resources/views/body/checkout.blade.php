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
                    <h3><b>NAMA BARANG</b></h3>
                    <h3>Price: <b>1000000</b></h3>
                    <h3>Jumlah: <b>1</b></h3>
                    <h3>Address:</h3>
                       <h4 style='margin-left: 20px'><b>JL. Ngagel Jaya Tengah ...</b></h4>
                    <div><br>
                    <input type='submit' value='Bayar' name='btnBayar' class='btn btn-primary'>
                    &nbsp;
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br><br>