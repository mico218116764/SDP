<div class="retur-form">
    <form method="POST" action="{{url('/doApply')}}">
        @csrf
        <div class="container" style="padding: 20px">
            <h1 style="text-align: center">Pengajuan Keluhan</h1>
            <div class="form-group">
                <label>Transaksi ID</label>
                <input type="text" class="form-control" name="TRANSAKSI_ID" placeholder="Masukkan ID Transaksi">
            </div>

            <div class="form-group">
                <label>Tanggal Transaksi</label><BR>
                    <input type="datetime-local"  name="tgl_trans">
                </select>

            </div>
            
            <div class="form-group">
                <label>Nama Pembeli</label>
                <input type="text" class="form-control" name="NAMA_PEMBELI" placeholder="Masukkan Nama Anda">
            </div>

            <div class="form-group">
                <label>Deskripsi Barang</label>
                <textarea id="w3review" class="form-control" name="DESKRIPSI_BARANG" placeholder="Deskripsi barang"
                    rows="4" cols="50"></textarea>
            </div>

            <div class="form-group">
                <label>Link Video</label>
                <textarea id="w3review" class="form-control" name="LINK_VIDEO" placeholder="Masukkan Link Video"
                    rows="4" cols="50"></textarea>
            </div>
           

            <button type="submit" name="btnRetur" class="btn btn-primary btn-flat m-b-30 m-t-30">Ajukan Keluhan</button>

        </div>

    </form>
</div>
