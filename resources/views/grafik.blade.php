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
                    <h3 class="panel-title">TotalSuratMasuk</h3>
                    <p class="panel-subtitle">Period: 2021</p>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title">SuratPenutupan</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title">SuratPenutupan</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title">SuratPenutupan</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title">SuratPenutupan</span>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="metric">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                <p>
                                    <span class="number">{{ $total }}</span>
                                    <span class="title">SuratPenutupan</span>
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