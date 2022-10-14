@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            {{-- <h3 class="panel-title"><b font-weight: bold;><img src="{{ asset('admin/assets/img/logo-dark4.jpg') }}"width="50" height="30"alt="">TabelLampirant</b></h3> --}}
                            {{-- <div class="right">
										<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="btn btn-primary btn-sm fa fa-plus">Lampiran</i></button>
                            </div> --}}
                            
                               
                         
                        </div>
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
                                        <form action="/ba/tambahba" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleInputEmail1" class="form-label">SuratId</label>
                                                <input type="integer" name="surat_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="IdHarusSamaDenganIdSurat">
                                                </div>
                                         
                                           
                                                <div class="mb-3">
                                                    <label for="exampleInputEmail1" class="form-label">Lampiran</label>
                                                    <input type="text" name="lampiran" class="form-control" >
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
                                        
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        {{-- <td>
                                            <th>Aksi</th>
                                        </td> --}}
                                        
                                    </tr>
                                </thead>
                                @php
                                $no=1;
                                    
                                @endphp
                                <tbody>
                                    @foreach ($users as $us)
                                  
                                    <tr>
                                        <td>{{ $us->id }}</td>
                                        <td>{{ $us->name }}</td>
                                        <td>{{ $us->email }}</td>
                                        {{-- <td>
                                            <td>{{ $baa->pdf }}<a href="{{ asset('images/'.$baa->surat->pdf) }}" alt="">&nbsp; &nbsp;<i class="fa fa-download btn btn-primary" ></i>
                                            <a href="/ba/{{ $baa->id }}/hapusba" class="btn btn-danger btn-sm fa fa-trash"></a>
                                        </td> --}}
                                    </tr>  
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- {{ $users->links() }} --}}
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
    
    

  