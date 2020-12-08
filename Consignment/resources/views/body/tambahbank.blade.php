<style>
    .body{
        background-image: src("{{asset('images/background1.jpg')}}");
        width: 100%;
        height: 100%;
        background-repeat:no-repeat;
    }
</style>
<body>
<div class="addAdmin-form">
    <form method="POST" action="{{url('/addBank')}}">
        @csrf
        <div class="container" style="padding: 20px">
            <div class="form-group">
                <label>Nama Bank</label>
                <input type="text" class="form-control" name="namaBank" placeholder="Masukkan Nama Bank">
            </div>
            @error('namaBank')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Nama Pemilik Rekening</label>
                <input type="text" class="form-control" name="namaPemilik" placeholder="Masukkan Nama Pemilik Rekening">
            </div>
            @error('namaPemilik')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Nomor Rekening</label>
                <input type="text" class="form-control" name="nomorRekening" placeholder="Masukkan Nomor Rekening">
            </div>
            @error('nomorRekening')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <button type="submit" name="btnTambahBank" class="btn btn-primary btn-flat m-b-30 m-t-30">Tambah Bank</button>

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
                            <th style="text-align:center">Bank ID</th>
                            <th style="text-align:center">Nama Bank</th>
                            <th style="text-align:center">Nama Pemilik</th>
                            <th style="text-align:center">Nomor Rekening</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>

                        @foreach ($dataBank as $bank)
                            <tbody>
                                <th style="text-align:center">{{$bank->bank_id}}</th>
                                <th style="text-align:center">{{$bank->nama_bank}}</th>
                                <th style="text-align:center">{{$bank->pemilik}}</th>
                                <th style="text-align:center">{{$bank->rekening}}</th>
                                <th style="text-align:center">
                                    @if ($bank->trashed())
                                        <button type="submit" name="butID" value="{{$bank->bank_id}}">Recover</button>
                                    @else
                                        <button type="submit" name="butID" value="{{$bank->bank_id}}">hapus</button>
                                    @endif
                                </th>
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
</body>
