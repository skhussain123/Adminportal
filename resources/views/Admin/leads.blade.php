@extends('Admin.master')

@section('dashboardcontent')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Leads</h1>
            </div>

            <div class="card">
                <div class="card-header pb-0">


                    <div class="card-actions float-end">
                        <input type="text" wire:model="searchTerm" class="form-control" placeholder="Search by Email"
                            aria-label="Search">
                    </div>
                </div>

                <div class="card-body">
                    <table id="datatables-leads" class="table table-responsive table-striped" width="100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Email</th>
                                <th>Paper Type</th>
                                <th>Study Level</th>
                                <th>Pages</th>
                                <th>Access</th>
                                <th>Price</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($leads as $lead)
                                <tr>
                                    <td>{{ $lead->id }}</td>
                                    <td>{{ $lead->email }}</td>
                                    <td>{{ $lead->paper_type }}</td>
                                    <td>{{ $lead->study_level }}</td>
                                    <td>{{ $lead->pages }}</td>
                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox"
                                                id="accessSwitch{{ $lead->id }}"
                                                {{ $lead->Access == '1' ? 'checked' : '' }}
                                                style="background-color: {{ $lead->Access == '0' ? 'red' : 'green' }};">
                                        </div>
                                    </td>
                                    <td>${{ $lead->price }}</td>
                                    <td>{{ $lead->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $lead->updated_at->format('Y-m-d') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
