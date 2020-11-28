<style>
    .login-form{
        width: 100%;
        height: 10%;
        margin-top: -5%;
        background-repeat: no-repeat;
    }
</style>

<div class="login-form">
    <img src=" {{asset('images/background.jpg')}}" alt="" >
    <div style=" margin-top:-80%; padding-left: 200px;padding-right: 200px;">
        <h2>Barang yang belum di approve:</h2>
        <table class="table">
            <thead>
                <tr>
                    <th style="text-align:center">ID</th>
                    <th style="text-align:center">Nama Barang</th>
                    <th style="text-align:center">Harga Min - Harga Max</th>
                    <th style="text-align:center">Action</th>
                </tr>
            </thead>
            @if ($items != null)
            @foreach ($items as $item)
            @if($item->STATUS_PENGAJUAN == 0)
            <tbody>
                <tr>
                    <td style="text-align:center">
                        {{$item->PENGAJUAN_ID}}
                    </td>
                    <td style="text-align:center">
                        {{$item->NAMA_BARANG}}
                    </td>
                    <td style="text-align:center">
                        {{$item->HARGA_MIN." - ".$item->HARGA_MAX}}
                    </td>

                    <td style="text-align:center">
                        <a style="width:100%;font-size:13pt;" href="/detailbarangreject/{{ $item->PENGAJUAN_ID }}"
                            class="btn list-group-item">
                            Detail
                        </a>
                    </td>
                </tr>
            </tbody>
            @endif
            @endforeach
            @endif
        </table>
    </div>
</div>

