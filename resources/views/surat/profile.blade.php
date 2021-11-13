@extends('layouts.master')

@section('content')
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
                            <div class=""></div>
                            <div class="">
                                <img src="{{ asset('images/'.$surat->foto) }}" class="" width="200px" height="200px" alt="Foto">
                                <h3 class="name">{{ $surat->foto }}</h3>
                                {{-- <span class="online-status status-available">Available</span> --}}
                            </div>
                            <div class="profile-stat">
                                <div class="row">
                                    <div class="col-md-4 stat-item">
                                        45 <span>Projects</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        15 <span>Awards</span>
                                    </div>
                                    <div class="col-md-4 stat-item">
                                        2174 <span>Points</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END PROFILE HEADER -->
                        <!-- PROFILE DETAIL -->
                        <div class="profile-detail">
                            <div class="profile-info">
                                <h4 class="heading">Basic Info</h4>
                                <ul class="list-unstyled list-justify">
                                    <li>Birthdate <span>{{ $surat->no_surat }}</span></li>
                                    <li>Mobile <span>{{ $surat->keterangan }}</span></li>
                                    <li>Email <span>{{ $surat->pengirim }}</span></li>
                                   
                                   <a href="{{ asset('images/'.$surat->foto) }}"class="btn-sm"  download="">pdf</a>
                                </ul>
                            </div>
                           
                            <div class="text-center"><a href="/surat/{{ $surat->id }}/editsurat" class="btn btn-primary">Edit Profile</a></div>
                        </div>
                        <!-- END PROFILE DETAIL -->
                    </div>
                    <!-- END LEFT COLUMN -->
                    <!-- RIGHT COLUMN -->
                    <div class="profile-right">
                  
                        <!-- TABBED CONTENT -->
                        <div class="profile-stat">
                            <div class="row">
                            <ul class="nav" role="tablist">
                               
                                {{-- <li class="active"><a href="#tab-bottom-left1" role="tab" data-toggle="tab">Recent Activity</a></li>
                                <li><a href="#tab-bottom-left2" role="tab" data-toggle="tab">Projects <span class="badge">7</span></a></li> --}}
                            </ul>
                            <div>
                        </div>
                        <div class="tab-content">
                            <div class="tab-pane fade in active" id="tab-bottom-left1">
                                <ul class="list-unstyled activity-timeline">
                                    <table class="table table-striped">
										<thead>
											<tr>
												
												<th>First Name</th>
												<th>Last Name</th>
												<th>Username</th>
                                                <th>Download</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												
												<td>{{ $surat->no_surat }}</td>
												<td>{{ $surat->keterangan }}</td>
												<td>{{ $surat->pengirim }}</td>
                                                <td><a href="{{ asset('images/'.$surat->foto) }}"class="btn-sm"  download="">pdf</a></td>
											</tr>
											
										</tbody>
									</table>
                                </ul>
                                {{-- <div class="margin-top-30 text-center"><a href="#" class="btn btn-default">See all activity</a></div> --}}
                            </div>
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
@endsection
