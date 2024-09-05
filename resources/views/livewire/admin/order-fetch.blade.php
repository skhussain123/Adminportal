<div>
    <div class="card">
        <div class="card-header pb-0">
            <div class="card-actions float-end">
                <div class="dropdown position-relative">
                    <!-- Search Input -->
                    <input type="{{ $searchBy === 'id' ? 'number' : 'text' }}" wire:model.live="searchTerm"
                        class="form-control" placeholder="Search by {{ $searchBy === 'id' ? 'ID' : 'Email' }}"
                        aria-label="Search">
                </div>
            </div>

            {{-- Search Criteria Selection --}}
            <span class="d-flex col-3 mt-2">
                <select wire:model.live="searchBy" class="form-control">
                    <option value="id">Order ID</option>
                    <option value="email">Client Email</option>
                </select>

                <!-- Status Filter -->
                <select wire:model.live="status" class="form-control ms-2">
                    <option value="">All Statuses</option>
                    <option value="2">Active</option>
                    <option value="1">Pending</option>
                    <option value="0">Cancelled</option>
                </select>
            </span>
        </div>

        <div class="card-body">
            @if ($orders->count())
                <table id="datatables-orders" class="table table-responsive table-striped" width="100%">
                    <thead>
                        <tr>
                            <th>#ID</th>
                            <th>Email</th>
                            <th>Date</th>
                            <th>Deadline</th>
                            <th>Status</th>
                            <th>Actions</th>
                            <th>Details</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($orders as $order)
                            <tr>
                                <td><strong>#{{ $order->id }}</strong></td>
                                <td>
                                    @if ($order->user_id)
                                        {{ !empty($order->email) ? $order->email : 'NULL' }} <!-- Active order email -->
                                    @else
                                        {{ !empty($order->order_email) ? $order->order_email : 'NULL' }}
                                        <!-- Draft order email -->
                                    @endif
                                </td>
                                <td>{{ $order->Date ?? 'NULL' }}</td>
                                <td>{{ $order->deadline ?? 'NULL' }}</td>
                                <td>
                                    @if ($order->order_status == 2)
                                        <a style="border-radius: 12px" href="#"
                                            class="btn btn-success btn-sm">Active</a>
                                    @elseif($order->order_status == 1)
                                        <a style="border-radius: 12px" href="#"
                                            class="btn btn-warning btn-sm">Draft</a>
                                    @else
                                        <span style="border-radius: 12px" class="btn btn-danger btn-sm">Cancelled</span>
                                    @endif
                                </td>
                                <td>
                                    <span style="border-radius: 12px" class="btn btn-success btn-sm">Chat</span>
                                </td>

                                <form action="{{ route('orderdetailpage') }}" method="post">
                                    @csrf
                                    <input type="text" name="orderid" value="{{ $order->order_id }}" id="">
                                    <input type="text" name="user_id" value="{{ $order->clientauth_id }}"
                                        id="">

                                    <td>
                                        <input value="view" style="border-radius: 12px" class="btn btn-primary btn-sm"
                                            type="submit" value="">
                                    </td>
                                </form>
                            </tr>
                        @endforeach



                    </tbody>
                </table>

                <!-- Pagination -->
                {{ $orders->links() }}
            @else
                <p class="text-center">No orders found.</p>
            @endif
        </div>
    </div>
</div>
