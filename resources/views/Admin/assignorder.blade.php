@extends('Admin.master')

@section('dashboardcontent')
    <div>
        <div class="card ">
            <div class="card-header pb-0 mt-3">
                <!-- Button to open the Add Writer Modal -->
                <h3>Assign Task To Writers</h3>
            </div>

            <div class="card-body">
                <!-- Table displaying the writers -->
                <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>W-ID</th>
                            <th>W-Name</th>
                            <th>W-Email</th>
                            <th>Complete Orders</th>
                            <th>Ratting</th>
                            <th>Delivery Status</th>
                            <th>Chat</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($writers as $writer)
                            <tr>
                                <td>{{ $writer->id }}</td>
                                <td>hussain khan</td>
                                <td>{{ $writer->email }}</td>
                                <td>100K</td>
                                <td>4.k</td>
                                <td>50%</td>
                                <td>
                                    <a style="border-radius: 12px" href="#" class="btn btn-success btn-sm">Chat</a>
                                </td>
                                <td>
                                    <input type="hidden" name="orderID" value="{{ $orderID }}">
                                    <input type="hidden" name="WriterID" value="{{ $writer->id }}">
                                    <input type="hidden" name="UserID" value="{{ $userID }}">


                                    <a href="#" style="border-radius: 12px" class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal" data-bs-target="#addWriterModal"
                                        data-writerid="{{ $writer->id }}" data-orderid="{{ $orderID }}"
                                        data-writerid="{{ $writer->id }}" data-userid="{{ $userID }}"
                                        data-Writeremail="{{ $writer->email }}"> Add
                                        Assign</a>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>



                </table>


                <!-- Add Writer Modal -->
                <div class="modal " id="addWriterModal" tabindex="-1" aria-labelledby="addWriterModalLabel"
                    aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title text-bold" id="addWriterModalLabel">Scedule Taks</h3>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('FinalAssignTask') }}" method="post">
                                    @csrf


                                    <input type="hidden" name="orderID" value="{{ $orderID }}">
                                    <input type="hidden" name="WriterID" value="{{ $writer->id }}">
                                    <input type="hidden" name="UserID" value="{{ $userID }}">


                                    <div class="mb-3">
                                        <label for="email" class="form-label">Writer Email</label>
                                        <input type="email" disabled value="{{ $writer->email }}" class="form-control"
                                            id="email" name="email">

                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <label for="">Open Deal</label>
                                            <input type="date" class="form-control">
                                        </div>
                                        <div class="col-6">
                                            <label for="">Close Deal</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="form-group">
                                                <input type="checkbox" id="fileAccessCheckbox" name="fullFileAccess"
                                                    value="1">
                                                <label for="fileAccessCheckbox">Do you want full file access ordre
                                                    Details?</label>
                                            </div>
                                        </div>
                                    </div>




                                    <br>
                                    <button type="Send Now" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>


    </div>
@endsection
