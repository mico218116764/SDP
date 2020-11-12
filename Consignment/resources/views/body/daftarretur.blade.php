<div class="addAdmin-form">
    <style>
        td {
            text-align: center;
        }
    </style>
    <div class="login-form">
        <div style="padding-left: 200px;padding-right: 200px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align:center">Retur ID</th>
                        <th style="text-align:center">Transaksi ID</th>
                        <th style="text-align:center">Tanggal Transaksi</th>
                        <th style="text-align:center">Nama Pembeli</th>
                        <th style="text-align:center">Deskripsi</th>
                        <th style="text-align:center">Link Video</th>
                        <th style="text-align:center">ACTION</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
