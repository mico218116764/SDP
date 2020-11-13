<div class="login-form">
    <form method="POST" action="{{url('/doApply')}}">
        @csrf
        <div class="container" style="padding: 20px">
            <h1 style="text-align: center">Barang Reject</h1> <br>
            <table class="table" style="">
                <thead>
                    <tr>
                        <th style="text-align:center">ID</th>
                        <th style="text-align:center">Nama Barang</th>
                        <th style="text-align:center">Harga Approved</th>
                        <th style="text-align:center">Deskripsi Reject</th>
                        <th style="text-align:center">ACTION</th>
                    </tr>
                </thead>
            </table>
        </div>
    </form>
</div>

