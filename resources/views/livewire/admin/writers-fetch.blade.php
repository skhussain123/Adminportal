<div>
    <div class="card">
        <div class="card-header pb-0">
            <a href="#" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#addWriterModal"> Add
                Writers</a>


            <div class="card-actions float-end">


                @if (session('success'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <div class="alert-icon">
                            <i class="far fa-fw fa-bell"></i>
                        </div>
                        <div class="alert-message">
                            <strong>Alert!</strong> {{ session('success') }}
                        </div>
                    </div>
                @elseif (session('error'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        <div class="alert-icon">
                            <i class="far fa-fw fa-bell"></i>
                        </div>
                        <div class="alert-message">
                            <strong>Alert!</strong> {{ session('error') }}
                        </div>
                    </div>
                @endif



                <input type="email" wire:model.live="searchTerm" class="form-control" placeholder="Search by Email"
                    aria-label="Search">
            </div>
        </div>

        <div class="card-body">
            <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                <thead>
                    <tr>

                        <th>id</th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Orders</th>
                        <th>Access</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($writers as $writer)
                        <tr>
                            <td>{{ $writer->id }}</td>
                            <td>{{ $writer->name }}</td>
                            <td>{{ $writer->Date }}</td>
                            <td>{{ $writer->email }}</td>

                            <td>0</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="customSwitch{{ $writer->id }}"
                                        {{ $writer->status == 1 ? 'checked' : '' }}
                                        wire:change="updateAccess({{ $writer->id }}, $event.target.checked ? 1 : 0)"
                                        style="background-color: {{ $writer->status == 0 ? 'red' : 'green' }};">
                                </div>
                            </td>
                            <td><a style="border-radius: 12px" href="#" class="btn btn-success btn-sm">Chat</a>
                            </td>
                            <td>
                                <a style="border-radius: 12px" href="" class="btn btn-primary btn-sm">View</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>



        </div>





    </div>



    <!-- Add Writer Modal -->
    <div class="modal " id="addWriterModal" tabindex="-1" aria-labelledby="addWriterModalLabel" aria-hidden="true"
        data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addWriterModalLabel">Add Writer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('AddWriters') }}" method="post">
                        @csrf

                        <!-- Email Field -->
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                            <!-- Display Validation Error for Email -->
                            @error('email')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password Field -->
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <!-- Display Validation Error for Password -->
                            @error('password')
                                <span class="text-danger"> {{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
