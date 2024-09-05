@extends('Admin.master')

@section('dashboardcontent')

    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <div class="wrapper">

            <div class="main">


                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="row mb-3 d-flex align-items-center">
                            <h1 class="h3 d-inline align-middle mb-0">Orders</h1>

                        </div>


                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header pb-0">

                                        <span>
                                            <h5 class="card-title mb-0">Order Summary</h5>
                                        </span>


                                    </div>
                                    <div class="card-body orderdetails">
                                        <table class="table table-bordered">
                                            <tr>
                                                <th>Order ID</th>
                                                <td>{{ $order->id ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>User ID</th>
                                                <td>{{ $order->user_id ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>order Email</th>
                                                <td>{{ $order->email ?? 'NULL' }}</td>
                                            </tr>

                                            <tr>
                                                <th>Academic Level</th>
                                                <td>{{ $order->academic_level ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Type of Service</th>
                                                <td>{{ $order->typeofService ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Pages</th>
                                                <td>{{ $order->pages ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Words</th>
                                                <td>{{ $order->words ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Paper Type</th>
                                                <td>{{ $order->paper_type ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Deadline</th>
                                                <td>{{ $order->deadline ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Spacing</th>
                                                <td>{{ $order->Spacing ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Country Code</th>
                                                <td>{{ $order->CountryCode ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Order Date</th>
                                                <td>{{ $order->Date ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Order Time</th>
                                                <td>{{ $order->ordertime ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Order Status</th>
                                                <td>

                                                    @if ($order->order_status == 2)
                                                        <span class="badge bg-success">Complete</span>
                                                    @else
                                                        <span class="badge bg-warning">Draft</span>
                                                    @endif


                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Total Amount</th>
                                                <td>{{ $order->total_amount ?? 'NULL' }}</td>
                                            </tr>

                                            <!-- Additional columns -->
                                            <tr>
                                                <th>Subject Area</th>
                                                <td>{{ $order->subject_area ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Topic</th>
                                                <td>{{ $order->topic ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Paper Instructions</th>
                                                <td>{{ $order->PaperInstructions ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Paper Instructions Files</th>
                                                <td>{{ $order->PaperInstructionsFiles ?? 'NULL' }}</td>
                                            </tr>
                                            <tr>
                                                <th>Paper Format</th>
                                                <td>{{ $order->PaperFormat ?? 'NULL' }}</td>
                                            </tr>

                                            <tr>
                                                <th>Sources</th>
                                                <td class="d-flex justify-content-between">
                                                    @if ($order->Sources)
                                                        @php
                                                            $source = json_decode($order->Sources, true);
                                                        @endphp
                                                        @if (json_last_error() === JSON_ERROR_NONE && is_array($source))
                                                            <span>{{ $source['key'] }}</span>
                                                            <span style="font-weight: bold">${{ $source['value'] }}</span>
                                                        @else
                                                            <span>Invalid JSON format</span>
                                                        @endif
                                                    @else
                                                        <span>NULL</span>
                                                    @endif
                                                </td>
                                            </tr>



                                            <tr>
                                                <th>PowerPoint</th>
                                                <td class="d-flex justify-content-between">
                                                    @if ($order->Powerpoint)
                                                        @php
                                                            $powerpoint = json_decode($order->Powerpoint, true);
                                                        @endphp
                                                        @if (json_last_error() === JSON_ERROR_NONE && is_array($powerpoint))
                                                            <span>{{ $powerpoint['key'] }}</span>
                                                            <span style="font-weight: bold">
                                                                ${{ $powerpoint['value'] }}</span>
                                                        @else
                                                            <span>Invalid JSON format</span>
                                                        @endif
                                                    @else
                                                        <span>NULL</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Charts & Graphs</th>
                                                <td class="d-flex justify-content-between">
                                                    @if ($order->ChartsGraph)
                                                        @php
                                                            $chartsGraph = json_decode($order->ChartsGraph, true);
                                                        @endphp
                                                        @if (json_last_error() === JSON_ERROR_NONE && is_array($chartsGraph))
                                                            <span>{{ $chartsGraph['key'] }}</span>
                                                            <span style="font-weight: bold">
                                                                ${{ $chartsGraph['value'] }}</span>
                                                        @else
                                                            <span>Invalid JSON format</span>
                                                        @endif
                                                    @else
                                                        <span>NULL</span>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Helpful Extras</th>
                                                <td class="d-flex justify-content-between">
                                                    @if ($order->helpfulextras)
                                                        @php
                                                            $helpfulExtras = json_decode($order->helpfulextras, true);
                                                        @endphp
                                                        @if (json_last_error() === JSON_ERROR_NONE && is_array($helpfulExtras))
                                                            <span>{{ $helpfulExtras['key'] }}</span>
                                                            <span style="font-weight: bold">
                                                                ${{ $helpfulExtras['value'] }}</span>
                                                        @else
                                                            <span>Invalid JSON format</span>
                                                        @endif
                                                    @else
                                                        <span>NULL</span>
                                                    @endif
                                                </td>
                                            </tr>

                                            <!-- New Row for Attachments -->
                                            <tr>
                                                <th>Attachments</th>
                                                <td>
                                                    @if ($order->attachments)
                                                        @php
                                                            $attachments = json_decode($order->attachments, true);
                                                        @endphp
                                                        @if (json_last_error() === JSON_ERROR_NONE && is_array($attachments))
                                                            <ul>
                                                                @foreach ($attachments as $attachment)
                                                                    <li>
                                                                        <a href="{{ asset('path/to/attachments/' . $attachment['filename']) }}"
                                                                            target="_blank">
                                                                            {{ $attachment['filename'] }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @else
                                                            <span>Invalid JSON format</span>
                                                        @endif
                                                    @else
                                                        <span>NULL</span>
                                                    @endif
                                                </td>





                                        </table>
                                    </div>

                                </div>
                            </div>

                            <div class="col-xl-4">
                                <div class="card">

                                    <div class="card-header d-flex">

                                        <h5 class="card-title mb-0">Client Details</h5>

                                        <span style="margin-left: auto">

                                            <form action="{{ route('assignorder') }}" method="post">

                                                @csrf

                                                <h5 class="card-title mb-0">
                                                    <span class="badge bg-success badge-large">
                                                       
                                                        <input type="hidden" name="orderID" value="{{ $order->id }}"
                                                            id="">

                                                            <input type="hidden" name="userID" value="{{ $order->user_id }}"
                                                            id="">
                                                        
                                                        <input style="font-size: 0.9rem; padding: 0.6em 0.6em;"
                                                            type="submit" value="Assign to" name="">

                                                    </span>
                                                </h5>

                                            </form>



                                        </span>
                                    </div>

                                    <div class="card-body">
                                        <div class="row g-0">
                                            <div class="col-sm-3 col-xl-12 col-xxl-3 text-center">

                                                @if ($order->profile == '')
                                                    <img src="{{ asset('userimage/blank-profile.webp') }}" width="64"
                                                        height="64" class="rounded-circle mt-2" alt="Profile Image">
                                                @else
                                                    <img src="{{ asset('userimage/' . $order->profile) }}" width="64"
                                                        height="64" class="rounded-circle mt-2" alt="Profile Image">
                                                @endif



                                            </div>
                                            <div class="col-sm-9 col-xl-12 col-xxl-9">
                                                <strong>About user</strong>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore
                                                    magna aliqua.</p>
                                            </div>
                                        </div>

                                        <table class="table table-sm mt-2 mb-4">
                                            <tbody>
                                                <tr>
                                                    <th>Name</th>
                                                    <td>{{ $order->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Counter</th>
                                                    <td>{{ $order->country_code }}</td>
                                                </tr>

                                                <tr>
                                                    <th>State</th>
                                                    <td>{{ $order->state }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{ $order->email }}</td> <!-- Updated to use dynamic email -->
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{ $order->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>
                                                        @if ($order->Access == 1)
                                                            <!-- Fixed condition syntax -->
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-danger">Blocked</span>
                                                            <!-- Updated text from "block" to "Blocked" for clarity -->
                                                        @endif
                                                    </td>
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
