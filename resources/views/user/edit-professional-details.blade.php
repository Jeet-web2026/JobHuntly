<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Edit Professional Details" mainbootstrap="true" mainremixicon="true" maindashboardjs="true" onlymainjquery="true">
    <x-slot:maincontent>
        <main class="h-100 w-100 d-flex justify-content-center align-items-center p-5">
            <div class="card w-75 shadow-sm p-4 border-0">
                <div class="card-body">
                    <h2 class="fs-3 fw-semibold text-center border py-3 text-uppercase mb-3">Professional Information</h2>
                    <form method="POST" action="{{ route('user.saveprofessional-details') }}">
                        @csrf
                        <h4 class="h5 text-b my-5">1. Career preference<i class="ri-arrow-right-double-line ms-1 text-b"></i></h4>
                        <div class="mb-3">
                            <label for="preffered-job-type" class="form-label h6 text-capitalize text-b">preffered job type</label>
                            <textarea id="preffered-job-type" name="preffered-job-type" class="form-control shadow-none" placeholder="Your preffered job type here" style="height: 60px">{{ old('preffered-job-type') }}</textarea>
                            @error('preffered-job-type')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="availibility-to-work" class="form-label h6 text-capitalize text-b">availability to work</label>
                            <textarea id="availibility-to-work" name="availibility-to-work" class="form-control shadow-none" placeholder="Your work availability here" style="height: 60px">{{ old('availibility-to-work') }}</textarea>
                            @error('availibility-to-work')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="preffered-location" class="form-label h6 text-capitalize text-b">preffered location</label>
                            <textarea id="preffered-location" name="preffered-location" class="form-control shadow-none" placeholder="Your work availability here" style="height: 60px">{{ old('preffered-location') }}</textarea>
                            @error('preffered-location')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="skills" class="form-label h6 text-capitalize text-b">Skills</label>
                            <textarea id="skills" name="skills" class="form-control shadow-none" placeholder="Your work availability here" style="height: 60px">{{ old('skills') }}</textarea>
                            @error('skills')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="position-relative">
                            <button type="button" class="btn btn-dark py-2 shadow-none position-absolute top-0 end-0 add-more-employment">
                                <i class="ri-add-line me-1 text-light"></i>Add more
                            </button>
                            <h4 class="h5 text-b my-5">2. Employment status<i class="ri-arrow-right-double-line ms-1 text-b"></i></h4>
                            <div class="designation-area">
                                @php
                                $designations = old('designation', ['']);
                                $dateFroms = old('date-from', ['']);
                                $dateTos = old('date-to', ['']);
                                $roles = old('roles-responsibilities', ['']);
                                $workingStatus = old('working-status', []);
                                @endphp

                                @foreach($designations as $i => $designation)
                                <div class="designation-field position-relative">
                                    <div class="d-flex justify-content-end">
                                        <button type="button" class="btn btn-dark me-2 close-employement {{ $loop->first ? 'd-none' : '' }}">
                                            <i class="ri-delete-bin-line text-light me-1"></i>Remove
                                        </button>
                                        <button type="button" class="btn btn-dark py-2 shadow-none add-more-employment {{ $loop->first ? 'd-none' : '' }}">
                                            <i class="ri-add-line me-1 text-light"></i>Add more
                                        </button>
                                    </div>

                                    <div class="mb-3">
                                        <label for="designation-{{ $i }}" class="form-label h6 text-capitalize text-b">designation</label>
                                        <textarea id="designation-{{ $i }}" name="designation[]" class="form-control shadow-none" placeholder="Write your designation here" style="height: 50px">{{ $designation }}</textarea>
                                        @error("designation.$i")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-6 mb-3">
                                            <label for="date-from-{{ $i }}" class="form-label h6 text-capitalize text-b">from</label>
                                            <input name="date-from[]" id="date-from-{{ $i }}" type="date" class="form-control shadow-none" value="{{ $dateFroms[$i] ?? '' }}">
                                            @error("date-from.$i")
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-6">
                                            <label for="date-to-{{ $i }}" class="form-label h6 text-capitalize text-b">to</label>
                                            <input type="date" id="date-to-{{ $i }}" name="date-to[]" class="form-control shadow-none" value="{{ $dateTos[$i] ?? '' }}">
                                            @error("date-to.$i")
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="1" id="working-status-{{ $i }}" name="working-status[{{ $i }}]" {{ in_array($i, array_keys($workingStatus)) ? 'checked' : '' }}>
                                                <label class="form-check-label text-b" for="working-status-{{ $i }}">
                                                    Currently I'm working here
                                                </label>
                                                @error("working-status.$i")
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="roles-responsibilities-{{ $i }}" class="form-label h6 text-capitalize text-b">your roles & responsibilities</label>
                                        <textarea id="roles-responsibilities-{{ $i }}" name="roles-responsibilities[]" class="form-control shadow-none" placeholder="Write your roles & responsibility here" style="height: 60px">{{ $roles[$i] ?? '' }}</textarea>
                                        @error("roles-responsibilities.$i")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary shadow-none border-0 px-4 py-2 mt-3">Save and next</button>
                    </form>

                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>