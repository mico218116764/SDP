<style>
    .desc {
        width: 300px;
        height: 100px;
        overflow: hidden;
        display: inline-block;

    }
    .container{
        width: 100%;
        height: 10%;
        margin-top: -5%;
        background-repeat: no-repeat;
    }
    .body{
        background-image: src("{{asset('images/background1.jpg')}}");
        width: 100%;
        height: 100%;
        background-repeat:no-repeat;
    }
</style>
<body>
<div class="container">
    <img src=" {{asset('images/background1.jpg')}}" alt="" style="margin-left: -2%">
    <div style="margin-top:-45%; padding-left: 200px;padding-right: 200px;">
    @foreach ($daftarKatalog as $item)
    @if ($item->STATUS_BARANG == 0)
        <div class="row">
            <div class="col-sm-4">
                <a href="{{url('/detailsbarang/'.$item->PENGAJUAN_ID)}}">
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{$item->NAMA_BARANG}}</div>
                        <div class="panel-body" style="width: 100%; height: 50%;">
                            <img src="{{asset('images/'.$item->FOTO_KIRI)}}" class="img-responsive"alt="Image">
                        </div>
                        <div class="panel-footer desc" style="width: 100%; height: 50%;">
                            <?php
                                echo substr($item->DESKRIPSI_BARANG, 0, 100) . (strlen($item->DESKRIPSI_BARANG) > 100 ? "..." : '');
                            ?>
                        </div>
                    </div>
                </a>
        </div>
    @endif

    @endforeach

    </div><br><br>
    @if (session('gagal'))
        <div class="alert alert-Warning">
            {{ session('gagal') }}
        </div>
    @endif
    @if (session('gagal'))
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                alert("Anda belum memasukan bukti transfer");
            });
        </script>
    @endif
    @if (session('berhasil'))
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                alert("Anda telah berhasil membeli barang");
            });
        </script>
    @endif
    </div>
</body>
