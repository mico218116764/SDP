<div class="addAdmin-form">
    <form method="POST" action="{{url('/addMerk')}}">
        @csrf
        <div class="container" style="padding: 20px">

            <div class="form-group">
                <label>Nama Merk</label>
                <input type="text" class="form-control" name="namaMerk" placeholder="Masukkan Nama Merk">
            </div>
            @error('namaMerk')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror
            <button type="submit" name="btnTambahMerk" class="btn btn-primary btn-flat m-b-30 m-t-30">Tambah Merk</button>

    </form>
    <br><br>
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
                        <th style="text-align:center">Merk ID</th>
                        <th style="text-align:center">Nama Merk</th>
                    </tr>
                </thead>

                    @foreach ($dataMerk as $merk)
                        <tbody>
                            <th style="text-align:center">{{$merk->MERK_ID}}</th>
                            <th style="text-align:center">{{$merk->NAMA_MERK2}}</th>
                        </tbody>
                    @endforeach
            </table>
        </div>
    </div>

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif