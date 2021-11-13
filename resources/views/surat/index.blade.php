@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Tabel Surat</h3>
                            <div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr-plus-circle">TambahSurat</i></button>
                            </div>
                        </div>
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
                                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                                <input type="file" name="foto"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Foto</label>
                                                <input type="file" name="pdf"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
                                        <th>NoSurat</th>
                                        <th>StatusSurat</th>
                                        <th>Pengirim</th>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($surat as $srt)
                                    <tr>
                                        
                                        <td><a href="/surat/{{ $srt->id }}/profile">{{ $srt->no_surat }}</a></td>
                                        <td>{{ $srt->status_surat }}</td>
                                        <td>{{ $srt->pengirim }}</td>
                                        <td>{{ $srt->tanggal }}</td>
                                        <td>{{ $srt->keterangan }}</td>
                                        <td>
                                            <a href="/surat/{{ $srt->id }}/editsurat" class="btn btn-warning btn-sm">Edit</a>
                                            <a href="/surat/{{ $srt->id }}/hapussurat" class="btn btn-danger btn-sm">Hapus</a>
                                        </td>
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $surat->links() }}
                        </div>
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
    
    

  
