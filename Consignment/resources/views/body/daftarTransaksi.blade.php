<style>
    td {
        text-align: center;
    }
    body{
        /* background-image: url("{{asset('images/background1.jpg')}}"); */
        width: 100%;
        height: 100%;
        background-repeat:no-repeat;
        background-size: cover;
    }
    .login-form{
        margin-top: -50%;
    }
    .card {
      box-shadow: -10px 10px 10px 10px rgba(0,0,0,0.3);
      transition: 0.3s;
      width: 95%;
      padding: 2%;
      /* border: 1px solid gray; */
      border-radius: 1%;
      margin-left: auto;
      margin-right: auto;
      background-color: white;
      margin-bottom: 5%;
    }
</style>
<body>
    {{-- <div class="addAdmin-form">
    <div class="card">
        <h1></h1> --}}
    {{--<img src=" {{asset('images/background1.jpg')}}" alt="" style="margin-top: -5%">--}}
        {{-- <br><br>
        <style>
            td {
                text-align: center;
            }
        </style>​

    </div>
    </div> --}}
    {{-- <div class="login-form">
        <h1>Test</h1>
        <div style="padding-left: 200px;padding-right: 200px;">

        </div>
    </div> --}}
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
</body>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
