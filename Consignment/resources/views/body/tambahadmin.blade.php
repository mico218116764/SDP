<div class="addAdmin-form">
    <form method="POST" action="{{url('/addAdmin')}}">
        @csrf
        <div class="container" style="padding: 20px">


            <div class="form-group">
                <label>Nama Admin</label>
                <input type="text" class="form-control" name="adminName" placeholder="Masukkan Nama Admin">
            </div>
            @error('adminName')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="adminPass" placeholder="Masukkan Password">
            </div>
            @error('adminPass')
                <div style="color:red; font-weight:bold"> {{$message}}</div><br>
            @enderror

            <button type="submit" name="btntambahAdmin" class="btn btn-primary btn-flat m-b-30 m-t-30">Tambah Admin</button>

    </form>
    <br><br>
    <style>
        td {
            text-align: center;
        }
    </style>
    <form action="{{"/deleteAdmin"}}" method="post">
        @csrf
        <div class="login-form">
            <div style="padding-left: 200px;padding-right: 200px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align:center">Admin ID</th>
                            <th style="text-align:center">Email Admin</th>
                            <th style="text-align:center">Nama Admin</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>
                        @foreach ($dataAdmin as $admin)
                            <tbody>
                                <th style="text-align:center">{{$admin->ADMINP_ID}}</th>
                                <th style="text-align:center">{{$admin->NAMA_ADMINP}}</th>
                                <th style="text-align:center">{{$admin->NAMA_ADMINP}}</th>
                                <th style="text-align:center">
                                    @if ($admin->trashed())
                                        <button type="submit" name="butID" value="{{$admin->ADMINP_ID}}">Recover</button>
                                    @else
                                        <button type="submit" name="butID" value="{{$admin->ADMINP_ID}}">hapus</button>
                                    @endif
                                </th>
                            </tbody>
                        @endforeach
                </table>
            </div>
        </div>
    </form>

@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif