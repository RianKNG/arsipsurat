@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title"><b font-weight: bold;><img src="{{ asset('admin/assets/img/logo-dark4.jpg') }}"width="50" height="30"alt="">CariRentanTanggal</b></h3>
                            <form  class="navbar-form navbar-left" action="/surat" method="POST">
                                @csrf
                                <input type="date" class="btn-xs"  name="from" value="{{ date('Y-m-d') }}" >&nbsp;
                                <input type="date" class="btn-xs"name="to" value="{{ date('Y-m-d') }}" >&nbsp;
                                <input type="submit" value="cari" class="btn btn-success btn-xs">
                                <a href="/layanan" class = "btn btn-danger btn-xs">refresh</a>
                            </form>
                        
                            
                            {{-- <div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary btn-sm">TambahSurat</i></button>
                            </div> --}}
                        </div>
                        {{-- Akumulasi Total Penutupan: {{ $total }} --}}
                       <!-- Button trigger modal -->
                        
  
                            <!-- Modal -->

                        <div class="panel-body">
                         
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        {{-- <th>No</th> --}}
                                        {{-- <th>Id</th> --}}
                                        <th>NoSurat</th>
                                        <th>StatusSurat</th>
                                        <th>ba_id</th>
                                        {{-- <th>Lampiran</th> --}}
                                        {{-- <th>Pengirim</th> --}}
                                        <th>Tanggal</th>
                                       
                                       
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                    
                                @endphp
                                <tbody>
                                    @foreach ($surat as $index =>$srt)
                                    <tr>
                                        {{-- <td>{{ $index + $surat->firstItem()}}</td> --}}
                
                                        <td><a href="/surat/{{ $srt->id }}/profile">{{ $srt->no_surat }}</a></td>
                                        {{-- <td>{{ $srt->id }}</td> --}}
                                        {{-- <td>{{ $srt->status_surat }}</td> --}}
                                        {{-- <td>{{ $srt->ba->id}}</td> --}}
                                        {{-- <td>{{ $srt->ba->kode}}</td> --}}
                                        {{-- <td>{{ $srt->ba->lampiran }}</td> --}}
                                        <td>{{ $srt->pengirim }}</td>
                                        <td>{{ $srt->tanggal }}</td>
                                        <td>{{ $srt->keterangan }}</td>
                                        {{-- <td>{{ $srt->foto }}</td> --}}
                                        
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $surat->links() }} --}}
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

@stop
@section('content1')

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Entry DataSurat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
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
                                    <option value="M">Masuk</option>
                                    <option value="K">Keluar</option>
                                </select>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                                    <input type="text" name="pengirim"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                                <div class="form-floating">
                                    <textarea class="form-control" name="keterangan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Keterangan</label>
                                </div> 
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Pengirim</label>
                                    <input type="file" name="foto"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
@endsection
    
    

  
