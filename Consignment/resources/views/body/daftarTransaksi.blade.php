<style>
    td {
        text-align: center;
    }
    .body{
        background-image: src("{{asset('images/background1.jpg')}}");
        width: 100%;
        height: 100%;
        background-repeat:no-repeat;
    }
</style>
<body>
<div class="addAdmin-form">
    {{-- <img src=" {{asset('images/background1.jpg')}}" alt="" > --}}
    <div>
        <br><br>
        <style>
            td {
                text-align: center;
            }
        </style>​
        <div class="login-form">
            <div style="padding-left: 200px;padding-right: 200px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align:center">Transaksi ID</th>
                            <th style="text-align:center">Pengajuan ID</th>
                            <th style="text-align:center">User Pengaju</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>

                        @foreach ($daftarTransaksi as $transaksi)
                            <tbody>
                                <th style="text-align:center">{{$transaksi->transaksi_id}}</th>
                                <th style="text-align:center">{{$transaksi->PENGAJUAN_ID}}</th>
                                <th style="text-align:center">{{$transaksi->email_pembeli}}</th>
                                <th style="text-align:center"><a href="{{url('detailTransaksi/'.$transaksi->transaksi_id)}}"><button type="submit">Check</button></a></th>
                            </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
</body>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
