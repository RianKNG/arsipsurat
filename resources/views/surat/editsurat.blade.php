@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">EditDataSurat</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/surat/{{ $surat->id }}/updatesurat" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <label for="exampleInputEmail1" class="form-label">noSurat</label>
                                  <input type="integer" name="no_surat" value="{{ $surat->no_surat }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <select class="form-select form-select-lg mb-3" name="status_surat" aria-label=".form-select-lg example">
                                    <option selected>statusSurat</option>
                                    <option value="Masuk" @if($surat->status_surat == "Masuk") selected @endif>Masuk</option>
                                    <option value="Keluar" @if($surat->status_surat == "Keluar") selected @endif>Keluar</option>
                                  </select>
                                  <select class="form-select form-select-lg mb-3" name="pengirim" aria-label=".form-select-lg example">
                                    <option selected>Cabang</option>
                                    <option value="Tomo" @if($surat->pengirim == "Tomo") selected @endif>Tomo</option>
                                    <option value="Paseh" @if($surat->pengirim == "Paseh") selected @endif>Paseh</option>
                                    <option value="Cimanggung" @if($surat->pengirim == "Cimanggung") selected @endif>Cimanggung</option>
                                  </select>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" value="{{ $surat-> tanggal}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                                  <div class="form-floating">
                                    <textarea class="form-control" name="keterangan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" >{{ $surat->keterangan}}</textarea>
                                    <label for="floatingTextarea2">Keterangan</label>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">foto</label>
                                    <input type="file" name="foto" value="{{ $surat->foto }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div> 
                                  <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pdf</label>
                                    <input type="file" name="pdf" value="{{ $surat->foto }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div> 
                        </div>
                        <div>
                          <div class="modal-footer">
                        <a href="/surat" class="btn btn-warning btn-sm">Kembali</a>
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>







@stop
@section('content1')
         
         <h1>EditDataSurat</h1>
          @if (session('sukses'))
          <div class="alert alert-success" role="alert">
            {{ session('sukses') }}
          </div>
          @endif
        
          <div class="rows">
              <div class="col-12">
              
                  <form action="/surat/{{ $surat->id }}/updatesurat" method="POST">
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">noSurat</label>
                      <input type="integer" name="no_surat" value="{{ $surat->no_surat }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <select class="form-select form-select-lg mb-3" name="status_surat" aria-label=".form-select-lg example">
                        <option selected>statusSurat</option>
                        <option value="M" @if($surat->status_surat == "M") selected @endif>Masuk</option>
                        <option value="K" @if($surat->status_surat == "K") selected @endif>Keluar</option>
                      </select>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                        <input type="text" name="pengirim" value="{{ $surat->pengirim }}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                        <input type="date" name="tanggal" value="{{ $surat-> tanggal}}"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="form-floating">
                        <textarea class="form-control" name="keterangan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" >{{ $surat->keterangan}}</textarea>
                        <label for="floatingTextarea2">Keterangan</label>
                      </div> 
            </div>
            <div>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
              </div>
          </div>
      </div>
     
@endsection
