@extends('Admin.master')

@section('dashboardcontent')
    <div>
        <div class="card ">
            <div class="card-header pb-0 mt-3">
                <!-- Button to open the Add Writer Modal -->
                <h3>Working orders</h3>
            </div>

            <div class="card-body">
                <!-- Table displaying the writers -->
                <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>OR-ID</th>
                            <th>OR-Email</th>
                            <th>Amound</th>
                            <th>WR-ID</th>
                            <th>Open Time</th>
                            <th>Close Time</th>
                            <th>Chat</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>3</td>
                            <td>hussain123@gmail.com</td>
                            <td>$100</td>
                            <td>23023</td>
                            <td>
                                24-sep-2020
                            </td>

                            <td>
                                24-sep-2020
                            </td>
                            <td>
                                <a style="border-radius: 12px" href="#" class="btn btn-success btn-sm">Chat</a>
                            </td>
                            <td>
                                <a style="border-radius: 12px" href="" class="btn btn-primary btn-sm">View</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>


    </div>
@endsection
