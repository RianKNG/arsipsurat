@extends('layouts.master')

@section('content')
<!-- MAIN -->
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="panel panel-profile">
                <div class="clearfix">
                    <!-- LEFT COLUMN -->
                    <div class="profile-left">
                        <!-- PROFILE HEADER -->
                        <div class="profile-header">
                            <div class="overlay"></div>
                            <div class="">

                                <img src="{{ asset('images/'.$surat->foto) }}" alt="" width="320px" height="400px">
                                {{-- <span class="online-status status-available">Available</span> --}}
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-12 stat-item">
                                        
                                        No_Surat <span>{{ $surat->no_surat}} </span>
                                        Memiliki <span>{{ $surat->ba->lampiran}} lampiran</span>
                                    </div>
                                    {{-- <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">StatusSurat</h4>
                                <ul class="list-unstyled list-justify">

                                </ul>
                            </div>
                            <div class="text-center"><a href="/surat/{{ $surat->id }}/editsurat" class="btn btn-primary">EditFoto</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                       
                        <!-- TABBED CONTENT -->
                        <div class="custom-tabs-line tabs-line-bottom left-aligned">
                            <ul class="nav" role="tablist">
                                <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
                                <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projects <span class="badge">7</span></a></li>
                            </ul>
                        </div>
                       <!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Bordered Table</h3>
								</div>
								<div class="panel-body">
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>No</th>
												<th>Judul Surat</th>
												<th>Total Lampiran</th>
												<th>Pengirim</th>
                                              
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Steve</td>
												<td>Jobs</td>
												<td>@steve</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Simon</td>
												<td>Philips</td>
												<td>@simon</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Jane</td>
												<td>Doe</td>
												<td>@jane</td>
											</tr>
                                           
										</tbody>
									</table>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
                            <div class="tab-pane fade" id="tab-bottom-left2">
                                <div class="table-responsive">
                                    <table class="table project-table">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Progress</th>
                                                <th>Leader</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><a href="#">Spot Media</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                                            <span>60% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                                <td><span class="label label-success">ACTIVE</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">E-Commerce Site</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;">
                                                            <span>33% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                <td><span class="label label-warning">PENDING</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Project 123GO</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;">
                                                            <span>68% Complete</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle"> <a href="#">Antonius</a></td>
                                                <td><span class="label label-success">ACTIVE</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Wordpress Theme</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                                                            <span>75%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user2.png" alt="Avatar" class="avatar img-circle"> <a href="#">Michael</a></td>
                                                <td><span class="label label-success">ACTIVE</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Project 123GO</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            <span>100%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user1.png" alt="Avatar" class="avatar img-circle" /> <a href="#">Antonius</a></td>
                                                <td><span class="label label-default">CLOSED</span></td>
                                            </tr>
                                            <tr>
                                                <td><a href="#">Redesign Landing Page</a></td>
                                                <td>
                                                    <div class="progress">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">
                                                            <span>100%</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td><img src="assets/img/user5.png" alt="Avatar" class="avatar img-circle" /> <a href="#">Jason</a></td>
                                                <td><span class="label label-default">CLOSED</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- END TABBED CONTENT -->
                    </div>
                    <!-- END RIGHT COLUMN -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT -->
</div>
<!-- END MAIN -->
<div class="clearfix"></div>
@endsection
