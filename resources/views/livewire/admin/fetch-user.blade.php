<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="card-actions float-end">
                <div class="dropdown position-relative">
                    <!-- Search Input -->
                    <input type="{{ $searchBy === 'id' ? 'number' : 'email' }}" wire:model.live="searchTerm"
                        class="form-control" placeholder="Search by {{ $searchBy === 'id' ? 'ID' : 'Email' }}"
                        aria-label="Search">
                </div>
            </div>

            {{-- Search Criteria Selection --}}
            <span class="d-flex col-3">
                <select wire:model.live="searchBy" class="form-control">
                    <option value="id">ID</option>
                    <option value="email">Email</option>
                </select>
            </span>
        </div>

        <div class="card-body">
            <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                <thead>
                    <tr>
                        <th>#id</th>
                        <th>User Name</th>
                        <th>Date</th>
                        <th>Email</th>
                        <th>Orders</th>
                        <th>Access</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td><strong>#{{ $user->id }}</strong></td>
                            <td>{{ $user->name }}</td>
                            <td>Date here</td>
                            <td>{{ $user->email }}</td>
                            <td>0</td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="customSwitch{{ $user->id }}"
                                        {{ $user->Access == 1 ? 'checked' : '' }}
                                        wire:change="updateAccess({{ $user->id }}, $event.target.checked ? 1 : 0)"
                                        style="background-color: {{ $user->Access == 0 ? 'red' : 'green' }};padding-top:10px">
                                </div>
                            </td>
                            <td><a style="border-radius: 12px" href="#" class="btn btn-success btn-sm">Chat</a>
                            </td>
                            <td>
                                <a style="border-radius: 12px" href="#" class="btn btn-primary btn-sm">View</a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>
</div>