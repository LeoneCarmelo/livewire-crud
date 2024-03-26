<div>
    <div class="row justify-content-center pt-5">
        <div class="card w-50">
            <div class="card-body">
                <form wire:submit="update">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input wire:model="name" type="text" name="name" id="name" class="form-control" placeholder="Insert your name" aria-describedby="helpId"/>
                        <small id="helpId" class="text-muted">Type your name address</small>
                        @error('name')
                        <div class='text-danger'>{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input wire:model="email" type="email" name="email" id="email" class="form-control" placeholder="Insert your email" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Type your email address</small>
                        @error('email')
                        <div class='invalid-feedback'>{{ $message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input wire:model="phone" type="text" name="phone" id="phone" class="form-control" aria-describedby="helpId" />
                        <small id="helpId" class="text-muted">Type your phone number</small>
                        @error('phone')
                        <div class='invalid-feedback'>{{ $message}}</div>
                        @enderror
                    </div>
                    <button wire:navigate href="/customer/index" class="btn btn-secondary">Back</button>
                    <button type="submit" class="btn btn-primary">
                        Submit
                    </button>

                </form>
                @include('partials.validation-error')
            </div>
        </div>
    </div>
</div>