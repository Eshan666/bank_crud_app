<x-layout>


<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-center mb-4">Register</h4>

                    <form method="POST" action="{{ route('processRegistration') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter name">
                            @error('name')
                            <x-alert text="{{$message}}" detail="" class="danger" />
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Enter email">
                             @error('email')
                            <x-alert text="{{$message}}" detail="" class="danger" />
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Enter password">
                            @error('password')
                            <x-alert text="{{$message}}" detail="" class="danger" />
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password</label>
                            <input type="password"  name="password_confirmation" class="form-control" placeholder="Enter password">
                             @error('password_confirmation')
                            <x-alert text="{{$message}}" detail="" class="danger" />
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-success w-100">
                            Register
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

</x-layout>