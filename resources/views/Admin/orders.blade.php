@extends('Admin.master')

@section('dashboardcontent')
    <main class="content">
        <div class="container-fluid p-0">

            <div class="mb-3">
                <h1 class="h3 d-inline align-middle">OverAll Orders</h1>
            </div>

            <livewire:admin.order-fetch />

        </div>
    </main>
@endsection
