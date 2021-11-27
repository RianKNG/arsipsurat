@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">

                            {{-- <form action="/surat" method="POST">
                                @csrf
                                <input type="date" name="from" value="{{ date('Y-m-d') }}" >&nbsp;
                                <input type="date" name="to" value="{{ date('Y-m-d') }}" >&nbsp;
                                <input type="submit" value="View">
                                <a href="/surat">refresh</a>
                            </form> --}}
                            <h3 class="panel-title">Tabel Surat</h3>
                            <div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary btn-xs btn-xs fa fa-plus">Surat</i></button>
                            </div>
                        </div>
                        <div>
                            <nav class="navbar navbar-light bg-light">
                                <form class="form-inline" method="GET" action="/surat" enctype="multipart/form-data">
                                  <input type="text" name="cari" value="{{ $cari }}">
                                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                                </form>
                              </nav>
                        </div>
                        {{-- Akumulasi Total Penutupan: {{ $total }} --}}
                       <!-- Button trigger modal -->
                        
  
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">TambahDataSurat</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/surat/tambahsurat" method=post>
                                            @csrf
                                          
                                              <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">noSurat</label>
                                            <input type="integer" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                         
                                            <select class="form-select form-select-lg mb-3" name="status_surat" aria-label=".form-select-lg example">
                                                <option selected>statusSurat</option>
                                                <option value="Masuk">Masuk</option>
                                                <option value="Keluar">Keluar</option>
                                            </select>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">ba_id</label>
                                                    <input type="integer" name="ba_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                    </div>
                                          
                                           
                                                    <select class="form-select form-select-lg mb-3" name="pengirim" aria-label=".form-select-lg example">
                                                        <option selected>Cabang</option>
                                                        <option value="Tomo">Tomo</option>
                                                        <option value="Paseh">Paseh</option>
                                                        <option value="Cimanggung">Cimanggung</option>
                                                    </select>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-floating">
                                                <textarea class="form-control" name="keterangan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                <label for="floatingTextarea2">Keterangan</label>
                                            </div> 
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                                <input type="file" name="foto"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                           
                                    </div>
                                </div>
                                </div>
                            </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        <th>Id</th>
                                        <th >NoSurat</th>
                                        <th>StatusSurat</th>
                                        <th>ba_id</th>
                                       
                                        <th>Pengirim</th>
                                         <th>Lampiran</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                    
                                @endphp
                                <tbody>
                                    @foreach ($surat as $index =>$srt)
                                    <tr>
                                        {{-- <td>{{ $index + $surat->firstItem()}}</td> --}}
                       <td>{{ $srt->id }}</td>
                                        <td><a href="/surat/{{ $srt->id }}/profile">{{ $srt->no_surat }}</a></td>
                                 
                                        <td>{{ $srt->status_surat }}</td>
                                        {{-- <td>{{ $srt->ba->id}}</td> --}}
                                        {{-- <td>{{ $srt->ba->kode}}</td> --}}
                                        <td>{{ $srt->ba_id }}</td>
                                        <td>{{ $srt->pengirim }}</td>
                                        <td>{{ $srt->ba->lampiran }}</td>
                                        <td>{{ $srt->tanggal }}</td>
                                        <td>{{ $srt->keterangan }}</td>
                                        {{-- <td>{{ $srt->foto }}</td> --}}
                                        <td>
                                            <a href="/surat/{{ $srt->id }}/editsurat" class="btn-warning btn-xs fa fa-edit"></a>
                                            <a href="/surat/{{ $srt->id }}/hapussurat" class="btn-danger btn-xs fa fa-trash"></a>
                                        </td>
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $surat->links() }}
                        </div>
                        @include('sweetalert::alert')
                    </div>
                    <!-- END TABLE HOVER -->
                </div>
            </div>
           
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>

@endsection
    
    

  
