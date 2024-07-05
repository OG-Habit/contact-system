<div class="card offset-3 col-6">
    <div class="card-header">
        <h1 class="">Login</h1>
    </div>
    <div class="card-body">
        <form wire:submit="login">
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
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
    <div class="card-footer text-body-secondary">
        Don't have an account?
        <button class="btn btn-success" wire:navigate href="/register">Register</button>
    </div>
</div>
