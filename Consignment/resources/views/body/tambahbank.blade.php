<div class="addAdmin-form">
    <form method="POST" action="{{url('/doRegister')}}">
        @csrf
        <div class="container" style="padding: 20px">
            <div class="form-group">
                <label>BANK ID</label>
                <input type="text" class="form-control" name="USERPB_NAME" placeholder="Masukkan ID Admin">
            </div>
            @error('USERPB_NAME')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Nama Bank</label>
                <input type="text" class="form-control" name="USERPB_EMAIL" placeholder="Masukkan Nama Admin">
            </div>
            @error('USERPB_NAME')
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
    <div class="login-form">
        <div style="padding-left: 200px;padding-right: 200px;">
            <table class="table">
                <thead>
                    <tr>
                        <th style="text-align:center">Bank ID</th>
                        <th style="text-align:center">Nama Bank</th>
                        <th style="text-align:center">Action</th>
                    </tr>
                </thead>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
