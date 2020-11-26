<div class="addAdmin-form">
    <style>
        td {
            text-align: center;
        }
    </style>
    <form action="{{url('/doDeleteRetur')}}" method="post">
        @csrf
        <div class="login-form">
            <div style="padding-left: 200px;padding-right: 200px;">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="text-align:center">Retur ID</th>
                            <th style="text-align:center">Transaksi ID</th>
                            <th style="text-align:center">Tanggal Transaksi</th>
                            <th style="text-align:center">Nama Pembeli</th>
                            <th style="text-align:center">Deskripsi</th>
                            <th style="text-align:center">Link Video</th>
                            <th style="text-align:center">ACTION</th>
                        </tr>
                    </thead>
                    @foreach ($dataRetur as $retur)
                        <tbody>
                            <th style="text-align:center">{{$retur->retur_id}}</th>
                            <th style="text-align:center">{{$retur->transaksi_id}}</th>
                            @foreach ($dataTransaksi as $trans)
                                @if ($trans->transaksi_id == $retur->transaksi_id)
                                    <th style="text-align:center">{{$trans->created_at}}</th>
                                @endif
                            @endforeach
                            @foreach ($dataUser as $user)
                                @if ($user->USERPB_ID == $retur->USERPB_ID)
                                    <th style="text-align:center">{{$user->USERPB_NAME}}</th>
                                @endif
                            @endforeach
                            <th style="text-align:center">{{$retur->deskripsi}}</th>
                            <th style="text-align:center"><a href="{{$retur->link_video}}">{{$retur->link_video}}</a></th>
                            <th style="text-align:center"><button type="submit" name="butDel" value="{{$retur->retur_id}}">tolak</button> </th>
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
