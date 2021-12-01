@extends('layouts.master')
@section('content')

<!-- MAIN -->

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <!-- OVERVIEW -->
            <div class="panel panel-headline">
                <div class="panel-heading">
                    <h3 class="panel-title"><b CariRentanTanggal>TotalSuratMasuk</b></h3>
                    <p class="panel-subtitle"><b font-weight: italic;>Period: 2021</b></p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric btn-danger">
                                <span class="icon"><i class="fa fa-thumbs-up"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title fa fa-envelope">&nbsp; &nbsp; slBaru</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric btn-success">
                                <span class="icon"><i class="fa fa-link"></i></span>
                                <p>
                                    <span class="number">{{ $total1 }}</span>
                                    <span class="title fa fa-envelope" >&nbsp; slSmbg</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric btn-info">
                                <span class="icon"><i class="fa fa-users"></i></span>
                                <p>
                                    <span class="number">{{ $total2 }}</span>
                                    <span class="title fa fa-envelope"> &nbsp;  slGanti</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric btn-warning">
                                <span class="icon"><i class="fa fa-lock"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title fa fa-envelope">&nbsp; slTutup</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric btn-primary">
                                <span class="icon"><i class="fa fa-paperclip"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title fa fa-envelope">&nbsp;  slLain</span>
                                </p>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->


@endsection