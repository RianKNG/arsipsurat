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
                                <input type="submit" value="cari">
                                <a href="/surat">refresh</a>
                            </form> --}}
                            <h3 class="panel-title"><b  font-weight: bold;>TabelSurat</b></h3>
                            <div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary btn-xs btn-xs fa fa-plus">Surat</i></button>
                            </div>
                        </div>
                        
                            {{-- <nav class="navbar navbar-light bg-light ">
                                <form class="form-inline" method="GET" action="/surat" enctype="multipart/form-data">
                                  <input type="text" name="cari" value="{{ $cari }}">
                                  <button type="submit" ><i class="btn btn-success btn-xs btn-xs fa fa-search">Cari</i></button>
                                  
                                </form>
                              </nav> --}}
                             
                           
                            
                        <form class="navbar-form navbar-left" method="GET" action="/surat" enctype="multipart/form-data">
                            <div class="input-group">
                                <input type="text" name="cari" value="{{ $cari }}" class="form-control btn-xs" placeholder="SiahkanKetikanRefCari...">
                                <span class="input-group-btn"><button type="submit" class="btn btn-success"><i class="fa fa-search">CariBoskuh</i></button></span>
                            </div>
                        </form>
                        
                        
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
                                                <input type="integer" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                              <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">noSurat</label>
                                            <input type="integer" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                         
                                            <select class="form-select form-select-lg mb-3" name="status_surat" aria-label=".form-select-lg example">
                                                <option selected>statusSurat</option>
                                                <option value="Masuk">Masuk</option>
                                                <option value="Keluar">Keluar</option>
                                            </select>
                                            {{-- <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                                                <input type="text" name="pengirim" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div> --}}
                                          
                                           
                                                    <select class="form-select form-select-lg mb-3" name="pengirim" aria-label=".form-select-lg example">
                                                        <option selected>PengirimCab</option>
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
                                                <input type="file" name="foto"class="form-control"  aria-describedby="emailHelp">
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
                                        {{-- <th>ba_id</th>
                                        --}}
                                        <th>Pengirim</th>
                                         {{-- <th>Lampiran</th> --}}
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                    
                                @endphp
                                <tbody>
                                    @foreach ($surat as $index =>$srt)
                                    {{-- @php $path = Storage::url('images/'.$srt->foto); @endphp --}}
                                    <tr>
                                        <td>{{ $index + $surat->firstItem()}}</td>
                                        <td>{{ $srt->id }}</td>
                                        <td><a href="/surat/{{ $srt->id }}/profile">{{ $srt->no_surat }}</a></td>
                                 
                                        <td>{{ $srt->status_surat }}</td>
                                        {{-- <td>{{ $srt->ba->id}}</td> --}}
                                        {{-- <td>{{ $srt->ba->kode}}</td> --}}
                                        {{-- <td>{{ $srt->ba_id }}</td> --}}
                                        <td>{{ $srt->pengirim }}</td>
                                        <td>{{ $srt->foto }}<a href="{{ asset('images/'.$srt->foto) }}" alt="">&nbsp; &nbsp;<i class="fa fa-eye"></i></a></td>
                                        <td>
                                            <a href="{{ asset('images/'.$srt->foto) }}" alt=""></a>
                                        </td>
{{--                                       
                                        {{-- <td>{{ $srt->ba->lampiran }}</td> --}}
                                        <td>{{ $srt->tanggal }}</td>
                                        <td>{{ $srt->keterangan }}</td>
                                        {{-- <td>{{ $srt->foto }}</td> --}}

                                        {{-- <td><img src="/surat/{{ $srt->id }}/downloadjpg" width="100px" height="100px"></td>
                      <td>{{ $path }}</td>
                      <td><a href="{{ url($path) }}">Download</a></td> --}}
                                        <td>
                                            <a href="/surat/{{ $srt->id }}/editsurat" class="btn-warning btn-xs fa fa-edit"></a>
                                            <a href="/surat/{{ $srt->id }}/hapussurat" class="btn-danger btn-xs fa fa-trash"></a>
                                            <a href="{{ asset('images/'.$srt->foto) }}" class="btn-info btn-xs fa fa-download" download=""></a>
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
    
    

  
