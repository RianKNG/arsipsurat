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
                            <h3 class="panel-title"><b  font-weight: bold;><img src="{{ asset('admin/assets/img/logo-dark4.jpg') }}"width="50" height="30"alt="">TabelSurat</b></h3>
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

                        <form class="navbar-form navbar-left" method="GET" action="/surat">
                            <div class="input-group">
                                <input type="text" name="cari" value="{{ $cari }}" class="form-control btn-xs" placeholder="SiahkanKetikanRefCari...">
                                <span class="input-group-btn"><button type="submit" class="btn btn-success"><i class="fa fa-search">CariBoskuh</i></button></span>
                            </div>
                        </form>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        {{-- @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif --}}
                                    <h5 class="modal-title" id="exampleModalLabel">TambahDataSurat</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="/surat/tambahsurat" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">UniqId</label>
                                                <input type="integer" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                @if ($errors->has('no_surat'))
                                                <span class="help-block">{{ $errors->first('no_surat') }}</span>
                                                    
                                                @endif
                                            </div>
                                              <div class="mb-3 form-group{{ $errors->has('no_surat') ?'has-error':'' }}"> 
                                            <label for="exampleInputEmail1" class="form-label mb-3">NoSurat</label>
                                            <input type="text" name="no_surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div>
                                            <select class="col-mb-12" name="status_surat" aria-label=".form-select-lg example">
                                                <label for="exampleInputEmail1" class="form-label">JumlahSL</label>
                                                <option selected>statusSurat
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                   
                                                   
                                                </option>
                                                <option value="Masuk">Masuk</option>
                                                <option value="Keluar">Keluar</option>
                                            </select>
                                        </div><br>
                                        <div>           
                                        <select class="form-select form-select-lg mb-3" name="pengirim" aria-label=".form-select-lg example">
                                                        <option selected>PengirimCab
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                            &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                            &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp;
                                                        </option>
                                                        <option value="Tomo">Tomo</option>
                                                        <option value="Cimanggung">Cimanggung</option>
                                                        <option value="Paseh">Paseh</option>
                                                        <option value="Cimalaka">Cimalaka</option>
                                                        <option value="Tanjungkerta">Tanjungkerta</option>
                                                        <option value="Situraja">Situraja</option>
                                                        <option value="Wado">Wado</option>
                                                        <option value="Sumedang Selatan">Sumedang Selatan</option>
                                                        <option value="Jatinangor">Jatinangor</option>
                                        </select>
                                    </div><br>
                                        <select class="col-mb-12" name="label" aria-label=".form-select-lg example">
                                            <option selected >SatusSL
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
                                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;   
                                                &nbsp; &nbsp; &nbsp; &nbsp;
                                                
                                          
                                            </option>
                                            <option value="Baru">Baru</option>
                                            <option value="Tutup">Tutup</option>
                                            <option value="Ganti">Ganti</option>
                                            <option value="Sambung">Sambung</option>
                                            <option value="Mundur">Mundur</option>
                                        </select><br>
                                        
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">JumlahSL</label>
                                            <input type="integer" name="jumlah" class="form-control"  aria-describedby="emailHelp">
                                        </div>
                                        
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Tanggal</label>
                                                <input type="date" name="tanggal" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="form-floating">
                                                <label for="floatingTextarea2">Keterangan</label>
                                                <textarea class="form-control" name="keterangan" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                               
                                            </div> 
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                                <input type="file" name="foto"class="form-control"  aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Pdf</label>
                                                <input type="file" name="pdf"class="form-control"  aria-describedby="emailHelp">
                                            </div>
                                            
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" data-dismiss="modal">Kembali</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </form>
                           
                                    </div>
                                </div>
                                </div>
                            </div>
                        <div class="panel-body">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th  bgcolor='	danger' align='center' width="6px">unikId</th>
                                        <th width="200px" >NoSurat</th>
                                        <th>Cabang</th>
                                        <th>St(SL)</th>
                                        <th>JML</th>
                                    
                                        {{-- <th>Label</th> --}}
                                        {{-- // umpetin --}}
                                         {{-- <th>Jml</th> --}}
                                         <th>Foto</th>
                                         {{-- <th>Tanggal</th>
                                        <th>Ket</th> --}}
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                              
                                @endphp
                                <tbody>
                                    @foreach ($surat as $index =>$srt)
                                    <tr>
                                        <td>{{ $index + $surat->firstItem()}}</td>
                                        {{-- <td>{{ $srt->id }}</td> --}}
                                        <td><a href="/surat/{{ $srt->id }}/profile">{{ $srt->id }}</a></td>
                                        <td><a href="/surat/{{ $srt->id }}/profile">{{ $srt->no_surat }}</a></td>
                                        <td>{{ $srt->status_surat }}</td>

                                        <td>{{ $srt->pengirim }}</td>
                                        <td>{{ $srt->label }}</td>
                                        <td>{{ $srt->jumlah }}</td>
                                       
                                        {{-- <td>{{ $srt->label }}</td> --}}
                                        {{-- <td>{{ $srt->jumlah}}</td> --}}
                                        <td>{{ $srt->foto }}<a href="{{ asset('images/'.$srt->foto) }}" alt="">&nbsp; &nbsp;<i class="fa fa-eye"></i></a></td>
                                        {{-- <td>{{ $srt->tanggal }}</td>
                                       
                                        <td>{{ $srt->keterangan }}</td> --}}
                                        <td>{{ $srt->pdf }}</td>
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

@endsection
    
    

  
