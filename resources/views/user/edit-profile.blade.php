<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Edit Profile" mainbootstrap="true">
    <x-slot:maincontent>
        <main class="p-5 d-flex justify-content-center align-items-center vh-100">
            <div class="card w-75 shadow-sm p-4 border-0">
                <div class="card-body">
                    <h2 class="text-center text-b mb-5 mt-2 text-uppercase fw-semibold fs-3 border py-3 rounded">Personal Information</h2>
                    <form method="POST" action="{{ route('user.user-details-save') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <label for="full-name" class="form-label text-b h6">Full Name</label>
                                <input type="text" class="form-control shadow-none text-b" id="full-name" name="full-name" value="{{ old('full-name', $currentUserData->full_name ?? '') }}">
                                @error('full-name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="last-qualification" class="form-label text-b h6">Last qualification</label>
                                <select class="form-select shadow-none text-b" id="last-qualification" name="last-qualification">
                                    <option value="">Choose your last qualification</option>
                                    <option value="Graduate" @selected(($currentUserData->last_qualification ?? old('last-qualification')) === 'Graduate')>Graduate</option>
                                    <option value="Post graduate" @selected(($currentUserData->last_qualification ?? old('last-qualification')) === 'Post graduate')>Post graduate</option>
                                    <option value="Diploma" @selected(($currentUserData->last_qualification ?? old('last-qualification')) === 'Diploma')>Diploma</option>
                                    <option value="12th Pass" @selected(($currentUserData->last_qualification ?? old('last-qualification')) === '12th Pass')>12th Pass</option>
                                    <option value="10th Pass" @selected(($currentUserData->last_qualification ?? old('last-qualification')) === '10th Pass')>10th Pass</option>
                                </select>
                                @error('last-qualification')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="email-address" class="form-label text-b h6">Email</label>
                                <input type="email" class="form-control shadow-none text-b" id="email-address" name="email-address" value="{{ old('email-address', $currentUserData->email ?? '') }}">
                                @error('email-address')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-2">
                                <label for="tel-number" class="form-label text-b h6">Mobile number</label>
                                <input type="tel" class="form-control shadow-none text-b" id="tel-number" name="tel-number" value="{{ old('tel-number', $currentUserData->contact_no ?? '') }}">
                                @error('tel-number')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="gender" class="form-label text-b h6">Gender</label>
                                <select class="form-select shadow-none text-b" id="gender" name="gender">
                                    <option value="">Choose your gender</option>
                                    <option value="Male" @selected((old('gender') ?? $currentUserData->gender ) === 'Male')>Male</option>
                                    <option value="Female" @selected((old('gender') ?? $currentUserData->gender ) === 'Female')>Female</option>
                                    <option value="Others" @selected((old('gender') ?? $currentUserData->gender ) === 'Others')>Others</option>
                                </select>
                                @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="city" class="form-label text-b h6">city</label>
                                <input type="text" class="form-control shadow-none text-b" id="city" name="city" value="{{ old('city', $currentUserData->current_city ?? '') }}">
                                @error('city')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="dob" class="form-label text-b h6">Date of birth</label>
                                <input type="date" class="form-control shadow-none text-b" id="dob" name="dob" value="{{ old('dob', $currentUserData->birth_date ?? '') }}">
                                @error('dob')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        @if(!empty($currentUserData))
                        <a href="{{ route('user.editprofessional-details') }}" class="btn btn-primary mt-4 px-4 py-2 bg-b">Next</a>
                        @else
                        <button type="submit" class="btn btn-primary mt-4 px-4 py-2 bg-b">Save and next</button>
                        @endif
                    </form>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>