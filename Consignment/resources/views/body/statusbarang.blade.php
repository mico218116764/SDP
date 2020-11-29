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
                            <th style="text-align:center">NAMA BARANG</th>
                            <th style="text-align:center">NO RESI</th>
                            <th style="text-align:center">STATUS BARANG</th>
                            <th style="text-align:center">Action</th>
                        </tr>
                    </thead>
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
