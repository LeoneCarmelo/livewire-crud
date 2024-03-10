<div>
    <div class="row justify-content-center pt-5">
        <div class="card w-50">
            <div class="card-body">
                <form wire:submit="save">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model="name" type="text" name="name" id="name" class="form-control" placeholder="Insert your name" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Type your name address</small>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input wire:model="email" type="email" name="email" id="email" class="form-control" placeholder="Insert your email" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Type your email address</small>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input wire:model="phone" type="text" name="phone" id="phone" class="form-control" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Type your phone number</small>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </form>

            </div>
        </div>
    </div>
</div>