<style>
    td {
        text-align: center;
    }
</style>
<div class="login-form">
    <div style="padding-left: 200px;padding-right: 200px;">
        <div class='row'>
            <div class='col-md-4'>
                <div class="gambar">
                    <img src="">
                </div>
            </div>
            <div class='col-md-8'>
                <form method='post' action='bayar'>
                    @csrf
                    <br>
                    <h2>Total Pembayaran:</h2>
                        <h1 style='margin-left: 25%; color:red'><b>Rp.1,000,000</b></h1>
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
                    <input type='submit' value='Bayar' name='btnBayar' class='btn btn-primary'>
                    &nbsp;
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
