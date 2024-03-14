<div>
    <div class="container p-5 position-relative">
        @include('partials.session-message')
        <h1 class="py-3 text-light">Customers
        </h1>

        <div class="row">
            <div class="table-responsive">
                <table class="table table-dark table-striped table-hover table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                        <tr class="">
                            <td>{{ $customer->name }}</td>
                            <td>{{ $customer->email }}</td>
                            <td>
                                <div class="d-flex align-items-center justify-content-between h-100">
                                    <a href="">
                                        <i class="fa-solid fa-eye text-primary" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa-solid fa-pencil text-warning" aria-hidden="true"></i>
                                    </a>
                                    <a type="button" class="" data-bs-toggle="modal" data-bs-target="#modalId-{{$customer->id}}">
                                        <i class="fa-solid fa-trash-can text-danger"></i>
                                    </a>


                                    <!-- Modal -->
                                    <div class="modal fade" id="modalId-{{$customer->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
                                        <div class="modal-dialog" role="dialog">
                                            <div class="modal-content">
                                                <div class="modal-header justify-content-end">
                                                    <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-dark text-center py-3">
                                                    Sei sicuro di eliminare {{$customer->name . ' ' . $customer->email}}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Chiudi</button>
                                                    <button wire:click="deleteCustomer({{ $customer->id }})" class="btn btn-outline-success" type="submit">Conferma</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
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