<div class="card offset-3 col-6">
    <div class="card-header">
        <h1 class="">Register</h1>
    </div>
    <div class="card-body">
        <form wire:submit="register">
            <div class="form-group">
                <label for="name">Name</label>
                <input
                    wire:model="name"
                    type="text"
                    class="form-control"
                    id="name"
                    aria-describedby="name"
                    placeholder="Enter name"
                />
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input
                    wire:model="email"
                    type="email"
                    class="form-control"
                    id="email"
                    aria-describedby="emailHelp"
                    placeholder="Enter email"
                />
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input
                    wire:model="password"
                    type="password"
                    class="form-control"
                    id="password"
                    placeholder="Password"
                />
                @error('password')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input
                    wire:model="password_confirmation"
                    type="password"
                    class="form-control"
                    id="password_confirmation"
                    placeholder="Confirm Password"
                />
                @error('password_confirmation')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
    <div class="card-footer text-body-secondary">
        Already have an account?
        <button class="btn btn-success" wire:navigate href="/login">Login</button>
    </div>
</div>
