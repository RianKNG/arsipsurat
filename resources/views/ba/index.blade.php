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
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary btn-sm fa fa-plus">Lampiran</i></button>
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
                                        <form action="/ba/tambahba" method="POST" enctype="multipart/form-data">
                                            @csrf
                                          
                                              <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">kUnik</label>
                                            <input type="integer" name="id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                            </div>
                                         
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">Kode</label>
                                                <input type="integer" name="kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Lampiran</label>
                                                    <input type="text" name="lampiran" class="form-control" >
                                                    </div>
                                            
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">pdf</label>
                                                    <input type="file" name="pdf"class="form-control"  aria-describedby="emailHelp">
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
                                        
                                        <th bgcolor='#EE6868' align='center' width="6px">kUnik</th>
                                        <th>Kode</th>
                                        
                                      
                                        <th>Lampiran</th>
                                        <th>Pdf</th>
                                      
                                        {{-- <th>Aksi</th> --}}
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                    
                                @endphp
                                <tbody>
                                    @foreach ($ba as $baa)
                                    {{-- @foreach ($ba $index =>$baa) --}}
                                    <tr>
                                        {{-- <td>{{ $index + $baa>firstItem()}}</td> --}}
                
                                        {{-- <td><a href="/surat/{{ $baa->id }}/profile">{{ $baa->no_surat }}</a></td> --}}
                                        <td>{{ $baa->id }}</td>
                                        
                                        <td>{{ $baa->kode }}</td>
                                        
                                      
                                        {{-- <td>{{ $baa->surat}}</td> --}}
                                        <td>{{ $baa->lampiran }}</td>
                                        <td>{{ $baa->pdf }}<a href="{{ asset('images/'.$baa->pdf) }}" alt=""><i class="fa fa-download"></i></a></td>
                                        <td>
                                            <a href="{{ asset('images/'.$baa->pdf) }}" alt=""></a>
                                        </td>
{{--                                       
                                        <td><img src="{{ asset('images/'.$baa->pdf) }}" alt="">
                                        </td> --}}
                                        {{-- <td>
                                            
                                            <a href="#" class="btn btn-warning btn-sm fa fa-edit"></a>
                                            <a href="#" class="btn btn-danger btn-sm fa fa-trash"></a>
                                        </td> --}}
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $ba->links() }} --}}
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
    
    

  
