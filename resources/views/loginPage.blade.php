<x-layout>



<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">

            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="text-center mb-4">Login</h4>
                    @if(session('Reg'))
                    <x-alert text="Registration Successful" detail="You can now login form here" class="success" />
                    @endif

                    @if(session('loginFailed'))
                    <x-alert text="Login Failed" detail="Please try again" class="danger" />
                    @endif


                    <form method="POST" action="{{ route('processLogin') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email"  class="form-control" placeholder="Enter email">
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

                        <button type="submit" class="btn btn-primary w-100">
                            Login
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>




</x-layout>