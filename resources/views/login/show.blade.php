    <x-master title="Home Page">
        <h3>Authentification:</h3>

        <form method="POST" action="{{ route('login') }}" class="p-4 border rounded shadow-sm bg-white"
            style="max-width: 400px; margin: auto;">
            @csrf
            <h4 class="text-center mb-4">Log In</h4>
            @error('login')
                <div class="text-danger text-center">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email"
                    required value="{{ old('email') }}">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    placeholder="Enter your password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>

    </x-master>
