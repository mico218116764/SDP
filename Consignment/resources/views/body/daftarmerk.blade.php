<div class="addAdmin-form">
    <form method="POST" action="{{url('/addJenis')}}">
        @csrf
        <div class="container" style="padding: 20px">

            <div class="form-group">
                <label>ID Merk</label>
                <input type="text" class="form-control" name="idMerk" placeholder="Masukkan ID Merk">
                <label>Nama Merk</label>
                <input type="text" class="form-control" name="namaMerk" placeholder="Masukkan Nama Merk">
            </div>

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
            </table>
        </div>
    </div>

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
