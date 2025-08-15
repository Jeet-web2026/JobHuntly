@props(['logintitle' => '', 'logindes' => ''])
<x-MainComponent maintitle="{{ $logintitle }}" mainbootstrap="true">
    <x-slot:maincontent>
        <main class="d-flex justify-content-center align-items-center vh-100 p-5">
            <div class="card border-0 p-4 shadow-sm" style="width: 45%;">
                <h2 class="text-uppercase fw-bold h4 mb-4 text-primary text-center border p-2">{{ $logindes }}</h2>
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('auth.provider', 'google') }}" class="fs-4 text-decoration-none"><i class="ri-google-fill text-danger"></i></a>
                    <span class="mx-3 text-black">|</span>
                    <a href="{{ route('auth.provider', 'github') }}" class="fs-4 text-decoration-none"><i class="ri-github-fill text-dark"></i></a>
                </div>
                @if(request()->is('*user-login'))
                <form class="mt-2">
                    <div class="mb-3">
                        <label for="user_email" class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" placeholder="e.g. example@gmail.com" id="user_email" name="user_email" value="{{ old('user_email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" id="user_password" name="user_password" value="{{ old('user_password') }}">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 mt-3">
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary px-3 py-1 rounded-1"><i class="ri-home-9-line text-black"></i></a>
                        <button type="submit" class="btn btn-primary px-4 py-2 rounded-1 w-100">Submit</button>
                    </div>
                </form>
                @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
                @endif
                @else
                <form class="mt-2">
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="user_first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control shadow-none" placeholder="John" id="user_first_name" name="user_first_name" value="{{ old('user_first_name') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="user_lastt_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control shadow-none" placeholder="Doe" id="user_lastt_name" name="user_lastt_name" value="{{ old('user_lastt_name') }}">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="user_email" class="form-label">Email address</label>
                        <input type="email" class="form-control shadow-none" placeholder="e.g. example@gmail.com" id="user_email" name="user_email" value="{{ old('user_email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="user_password" class="form-label">Password</label>
                        <input type="password" class="form-control shadow-none" id="user_password" name="user_password" value="{{ old('user_password') }}">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input shadow-none" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Remember me</label>
                    </div>
                    <div class="d-flex align-items-center gap-2 mt-3">
                        <a href="{{ route('home') }}" class="btn btn-outline-secondary px-3 py-1 rounded-1"><i class="ri-home-9-line text-black"></i></a>
                        <button type="submit" class="btn btn-primary px-4 py-2 rounded-1 w-100">Submit</button>
                    </div>
                </form>
                @endif

            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>