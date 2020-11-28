<style>
    td {
        text-align: center;
    }
    .login-form{
        width: 100%;
        height: 10%;
        margin-top: -5%;
        background-repeat: no-repeat;
    }
</style>
<div class="login-form" >
<img src=" {{asset('images/background.jpg')}}" alt="" >
    <div style="margin-top:-80%; padding-left: 200px;padding-right: 200px;">
        Barang yang belum di approve:
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">Nama Barang</th>
                    <th style="text-align:center">Harga Min - Harga Max</th>
                    <th style="text-align:center">Action</th>
                </tr>
            </thead>
            @foreach ($items as $item)
            @if($item->STATUS_PENGAJUAN == 0)
            <tbody>
                <tr>
                    <td>
                        {{$item->PENGAJUAN_ID}}
                    </td>
                    <td>
                        {{$item->NAMA_BARANG}}
                    </td>
                    <td>
                        {{$item->HARGA_MIN." - ".$item->HARGA_MAX}}
                    </td>

                    <td>
                        <a style="width:100%;font-size:13pt;" href="/toDetail/{{ $item->PENGAJUAN_ID }}"
                            class="btn list-group-item">
                            Detail
                        </a>
                    </td>
                </tr>
            </tbody>
            @endif
            @endforeach
        </table>

        Barang yang sudah approved:
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">Nama Barang</th>
                    <th style="text-align:center">Harga Approved</th>
                    <th style="text-align:center">Action</th>
                </tr>
            </thead>
            @foreach ($items as $item)
            @if($item->STATUS_PENGAJUAN == 1)
            <tbody>
                <tr>
                    <td>
                        {{$item->PENGAJUAN_ID}}
                    </td>
                    <td>
                        {{$item->NAMA_BARANG}}
                    </td>
                    <td>
                        {{$item->HARGA_APPROVE}}
                    </td>
                    <td>
                        <a style="width:100%;font-size:13pt;" href="/doDelete/{{ $item->PENGAJUAN_ID }}"
                            class="btn list-group-item">
                            Delete
                        </a>
                    </td>
                </tr>
            </tbody>
            @endif
            @endforeach
            </table>
    </div>
</div>
