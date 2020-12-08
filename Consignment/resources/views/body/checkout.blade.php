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
<body>
<div class="login-form">
    <img src=" {{asset('images/background1.jpg')}}" alt="" >
    <div style="margin-top:-50%; padding-left: 200px;padding-right: 200px;">
        <div class='row'>
            <div class='col-md-4'>
                <div class="gambar">
                    <img src="">
                </div>
            </div>
            <div class='col-md-8'>
                <form method='post' action='/bayar'>
                    @csrf
                    <input type="hidden" name="id" value="{{$barang->PENGAJUAN_ID}}">
                    <br>
                    <h2><b>{{$barang->NAMA_BARANG}}</b></h2>
                    <h4>Deskripsi: {{$barang->DESKRIPSI_BARANG}}</h4><br>
                    <h4>Price: {{$barang->HARGA_APPROVE}}</h4><br>
                    <img style="width:120px; height:120px" src="{{asset('images/'.$barang->FOTO_DEPAN)}}" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h1>Cek Ongkir</h1>
                                    </div>
                                    <div class="card-body">
                                        <form role="form" class="form-horizontal" action="/testing" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group-sm">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="">Provinsi Asal</label>
                                                        <select name="province_origin" class="form-control">
                                                            <option value="">--Provinsi--</option>
                                                            @foreach ($provinces as $province => $value)
                                                                <option value="{{$province}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kota Asal</label>
                                                        <select name="city_origin" class="form-control">
                                                            <option value="">--Kota--</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Provinsi Tujuan</label>
                                                        <select name="province_destination" class="form-control">
                                                            <option value="">--Provinsi--</option>
                                                            @foreach ($provinces as $province => $value)
                                                                <option value="{{$province}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kota Tujuan</label>
                                                        <select name="city_destination" class="form-control">
                                                            <option value="">--Kota--</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Kurir</label>
                                                        <select name="courier" class="form-control">
                                                            <option value="">--Kurir--</option>
                                                            @foreach ($couriers as $courier => $value)
                                                                <option value="{{$courier}}">{{$value}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Berat (g)</label>
                                                        <input type="number" name="weight" class="form-control" id="" value="1000">
                                                    </div>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <input type='submit' value='Bayar' name='btnBayar' class='btn btn-primary'> --}}
                    &nbsp;
                    </div>
                </form>

            </div>
        </div>
    </div>
</div><br><br><br>
</body>
<script>
    $(document).ready(function(){
        $('select[name="province_origin"]').on('change',function(){
            let provinceId = $(this).val();
            if(provinceId){
                jQuery.ajax({
                    url:'/province/'+provinceId+'/cities',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="city_origin"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="city_origin"]').append('<option value="'+key+'">'+value+'</option>')
                        });
                    },
                });
            }else{
                $('select[name="city_origin"]').empty();
            }
        });
        $('select[name="province_destination"]').on('change',function(){
            let provinceId = $(this).val();
            if(provinceId){
                jQuery.ajax({
                    url:'/province/'+provinceId+'/cities',
                    type:"GET",
                    dataType:"json",
                    success:function(data){
                        $('select[name="city_destination"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="city_destination"]').append('<option value="'+key+'">'+value+'</option>')
                        });
                    },
                });
            }else{
                $('select[name="city_destination"]').empty();
            }
        });
    });


</script>
