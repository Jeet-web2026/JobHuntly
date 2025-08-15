<x-MainComponent maintitle="Sign Up" mainbootstrap="true">
    <x-slot:maincontent>
        <main class="d-flex justify-content-center align-items-center vh-100 p-5">
            <div class="card border-0 p-4 shadow-sm" style="width: 45%;">
                <h2 class="text-uppercase fw-bold h4 mb-4 text-primary text-center border p-2">Signup</h2>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('auth.provider', 'google') }}" class="fs-4 text-decoration-none"><i class="ri-google-fill text-danger"></i></a>
                    <span class="mx-3 text-black">|</span>
                    <a href="{{ route('auth.provider', 'github') }}" class="fs-4 text-decoration-none"><i class="ri-github-fill text-dark"></i></a>
                </div>
                <form class="mt-2">
                    <div class="mb-3">
                        <label for="user_email" class="form-label fs-5">Email address</label>
                        <input type="email" class="form-control shadow-none" placeholder="e.g. example@gmail.com" id="user_email" name="user_email" value="{{ old('user_email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="user_password" class="form-label fs-5">Password</label>
                        <input type="password" class="form-control shadow-none" id="user_password" name="user_password" value="{{ old('user_password') }}">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary px-4 py-2 rounded-1 mt-3 w-100">Submit</button>
                </form>
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif

            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>