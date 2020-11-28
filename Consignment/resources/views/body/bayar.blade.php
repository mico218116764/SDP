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
<div class="login-form">
    <img src=" {{asset('images/background.jpg')}}" alt="" >
    <div style="margin-top:-85%; padding-left: 200px;padding-right: 200px;">
        <div class='row'>
            <div class='col-md-4'>
                <div class="gambar">
                    {{-- <img src=""> --}}
                </div>
            </div>
            <div class='col-md-8'>
                <form action="/membayar" method="post">
                    @csrf
                    <input type="hidden" value="{{$barang->PENGAJUAN_ID}}" name="id">
                    <br>
                    {{-- <img src="{{ url('/images/dummy1.png') }}" style="width:100px; height:100px;"> --}}
                    <h2>Total Pembayaran:</h2>
                        <h1 style='margin-left: 25%; color:red'><b>Rp.{{number_format($barang->HARGA_APPROVE)}}</b></h1>
                        <br>
                    <h3><b>Pilih Bank:</b></h3>
                    <select id="myDropDown" class="form-control" style="width:70%; font-size: 12pt;" name="merkBarang" id="">
                        @foreach ($dataBank as $bank)
                            <option value="{{$bank->rekening}}">{{$bank->nama_bank}}</option>
                        @endforeach
                    </select>
                      <h3><b>Nomor Rekening Tujuan:</b></h3>
                      <h3 style='margin-left: 25%'><b><p id="output">5230001</p></b></h3>
                      <h3 style='margin-left: 15%'><i>A.n Michael Louis Chandra</i></h3>
                      <h3><b>Upload Bukti Transfer:</b></h3>
                        <div class="form-group">
                          <input type="file" class="form-control-file" id="BUKTI_TRANSFER" name="BUKTI_TRANSFER">
                        </div>

                    <div><br>
                    <button class='btn btn-primary' type="submit">Bayar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div><br><br><br>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
        $('#myDropDown').change(function(){
            //Selected value
            var inputValue = $(this).val();
            // alert("value in js "+inputValue);

            //Ajax for calling php function
            $.post('submit.php', { dropdownValue: inputValue }, function(data){
                alert('ajax completed. Response:  '+data);
                //do after submission operation in DOM
            });
            document.getElementById('output').innerHTML = inputValue;
            document.getElementById('output2').innerHTML = inputValue;
        });

    });
</script>
