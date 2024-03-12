<div>
    <div class="container p-5">
        <h1 class="py-3">Customers</h1>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                        <tr class="">
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        @empty
                        <p>There are no customers yet!</p>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>