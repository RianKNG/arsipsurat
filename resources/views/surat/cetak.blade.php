@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-heading">
                                <h3 class="panel-title"><b  font-weight: bold;><img src="{{ asset('admin/assets/img/logo-dark4.jpg') }}"width="70" height="50"alt="">CetakPerTanggal</b></h3>
                            </div>
                            <div class="car-body">
                                <div class="mb-12">
                                    <label for="label">TanggalAwal</label>
                                    <input type="date" name="tglawal" id="tglawal" class="form-control"/>
                                </div>
                                <div class="mb-12">
                                    <label for="label">TanggalAhkir</label>
                                    <input type="date" name="tglakhir" id="tglakhir" class="form-control"/>
                                </div>
                                <br>
                                
                                    <a href="" onclick="this.href='/surat/cetakpertanggal/'+document.getElementById('tglawal').value +
                                    '/'+ getElementById('tglakhir').value" target="_blank" class="btn-primary col-md-12"><center><i class="fa fa-print text-white">&nbsp; &nbsp; &nbsp;sebelumCetakKopiDuluuBoskuh</i></center> </a>
                                   
                                    {{-- <div class="input-group mb-3">
                                        <button type="submit"><i class="btn-primary btn-xs">Cetak</i></button>
                                    </div> --}}
                                
                               
                            </div>
                         
                                
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
</div>



@endsection
    
    

  
