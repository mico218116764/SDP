<div class="addAdmin-form">
    <form method="POST" action="{{url('/addBank')}}">
        @csrf
        <div class="container" style="padding: 20px">
            <div class="form-group">

    </form>
    <br><br>
    <style>
        td {
            text-align: center;
        }
    </style>
    <form action="{{"/deleteBank"}}" method="post">
        @csrf
        <div class="login-form">
            <div style="padding-left: 200px;padding-right: 200px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align:center">Transaksi ID</th>
                            <th style="text-align:center">Nama Barang</th>
                            <th style="text-align:center">Status Barang</th>
                            <th style="text-align:center">Alasan</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>
                    @foreach ($daftarTransaksi as $transaksi)
                        <tbody>
                            <th style="text-align:center">{{$transaksi->transaksi_id}}</th>
                            @foreach ($daftarPengajuan as $pengajuan)
                                @if ($transaksi->PENGAJUAN_ID == $pengajuan->PENGAJUAN_ID)
                                    <th style="text-align:center">{{$pengajuan->NAMA_BARANG}}</th>
                                @endif
                            @endforeach
                            @if($transaksi->status == 0)
                                <th style="text-align:center">Barang masih di proses</th>
                            @elseif ($transaksi->status == 1)
                                <th style="text-align:center">Menunggu seller mengirim resi</th>
                            @elseif($transaksi->status == 2)
                                <th style="text-align:center">Rejected</th>
                            @else
                                <th style="text-align:center">Out Of Time</th>
                            @endif

                            @if ($transaksi->alasan != null)
                                <th style="text-align:center">{{$transaksi->alasan}}</th>
                            @else
                                <th style="text-align:center">-</th>
                            @endif
                            @if ($transaksi->status == 1)
                                <th style="text-align:center"><a href="{{url('detailTransaksi/'.$transaksi->transaksi_id)}}"><button type="submit">Check Status</button></a></th>
                            @elseif ($transaksi->status == 0)
                                <th style="text-align:center">-</th>
                            @else
                                <th style="text-align:center">Please Apply again</th>
                            @endif

                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </form>
</div>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
