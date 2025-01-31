@extends('Admin.master')

@section('dashboardcontent')

    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <div class="wrapper">

            <div class="main">


                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="mb-3">
                            <h1 class="h3 d-inline align-middle">Writers</h1><a class="badge bg-primary ms-2" href=""
                                target="_blank">Details <i class="fas fa-fw fa-external-link-alt"></i></a>
                        </div>

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <div class="card-actions float-end">
                                            <div class="dropdown position-relative">
                                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-0">Order Summary</h5>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-responsive table-striped" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th class="d-none d-md-table-cell">Company</th>
                                                    <th class="d-none d-md-table-cell">Email</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td><img src="img/avatars/avatar-5.jpg" width="32" height="32"
                                                            class="rounded-circle my-n1" alt="Avatar"></td>
                                                    <td>Howard Hatfield</td>
                                                    <td class="d-none d-md-table-cell">Price Savers</td>
                                                    <td class="d-none d-md-table-cell">howard@hatfield.com</td>
                                                    <td><span class="badge bg-warning">Inactive</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-actions float-end">
                                            <div class="dropdown position-relative">
                                                <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                    <i class="align-middle" data-feather="more-horizontal"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="card-title mb-0">Angelica Ramos</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">
                                                <img src="img/avatars/avatar-3.jpg" width="64" height="64"
                                                    class="rounded-circle mt-2" alt="Angelica Ramos">
                                            </div>
                                            <div class="col-sm-9 col-xl-12 col-xxl-9">
                                                <strong>{{$orders->name }}</strong>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore
                                                    magna aliqua.</p>
                                            </div>
                                        </div>

                                        <table class="table table-sm mt-2 mb-4">
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>Angelica Ramos</td>
                                                </tr>
                                                <tr>
                                                    <th>Company</th>
                                                    <td>The Wiz</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>angelica@ramos.com</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>+1234123123123</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td><span class="badge bg-success">Active</span></td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <strong>Activity</strong>

                                        <ul class="timeline mt-2 mb-0">
                                            <li class="timeline-item">
                                                <strong>Signed out</strong>
                                                <span class="float-end text-muted text-sm">30m ago</span>
                                                <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
                                            </li>
                                            <li class="timeline-item">
                                                <strong>Created invoice #1204</strong>
                                                <span class="float-end text-muted text-sm">2h ago</span>
                                                <p>Sed aliquam ultrices mauris. Integer ante arcu...</p>
                                            </li>
                                            <li class="timeline-item">
                                                <strong>Discarded invoice #1147</strong>
                                                <span class="float-end text-muted text-sm">3h ago</span>
                                                <p>Nam pretium turpis et arcu. Duis arcu tortor, suscipit...</p>
                                            </li>
                                            <li class="timeline-item">
                                                <strong>Signed in</strong>
                                                <span class="float-end text-muted text-sm">3h ago</span>
                                                <p>Curabitur ligula sapien, tincidunt non, euismod vitae...</p>
                                            </li>
                                            <li class="timeline-item">
                                                <strong>Signed up</strong>
                                                <span class="float-end text-muted text-sm">2d ago</span>
                                                <p>Sed aliquam ultrices mauris. Integer ante arcu...</p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </main>


            </div>
        </div>
    @endsection
