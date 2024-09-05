@extends('Admin.master')

@section('dashboardcontent')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">Users</h1>
            </div>

            {{-- @livewire('admin.fetch-user') --}}
            <livewire:admin.fetch-user />

        </div>
    </main>
@endsection
