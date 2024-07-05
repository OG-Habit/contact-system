<div class="card offset-3 col-6">
    <div class="card-header">
        <h1 class="">Edit Contact</h1>
    </div>
    <div class="card-body">
        <form wire:submit="edit">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    wire:model="name"
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="emailHelp"
                    placeholder="Enter name"
                />
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="company">Company</label>
                <input
                    wire:model="company"
                    type="text"
                    class="form-control"
                    id="company"
                    placeholder="Company"
                />
                @error('company')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="country_code">Country Code</label>
                <input
                    wire:model="country_code"
                    type="number"
                    class="form-control"
                    id="country_code"
                    placeholder="Country Code"
                />
                @error('country_code')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input
                    wire:model="phone"
                    type="number"
                    class="form-control"
                    id="phone"
                    placeholder="Phone"
                />
                @error('phone')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input
                    wire:model="email"
                    type="email"
                    class="form-control"
                    id="email"
                    placeholder="Email"
                />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button wire:navigate href="/contacts" class="btn btn-secondary">Back</button>
            <button type="submit" class="btn btn-primary">Edit Contact</button>
        </form>
    </div>

    {{-- <x-modal>
    </x-modal> --}}
</div>
