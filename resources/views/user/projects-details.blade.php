<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Project Details" mainbootstrap="true" mainremixicon="true" maindashboardjs="true" onlymainjquery="true">
    <x-slot:maincontent>
        <main class="h-100 w-100 d-flex justify-content-center align-items-center p-5">
            <div class="card w-75 border-0 shadow-sm p-4">
                <div class="card-body">
                    <h2 class="text-center text-uppercase fw-semibold border py-3 mb-4">project details</h2>
                    <form method="post" action="{{ route('user.projects-details-save') }}">
                        @csrf
                        <div class="mb-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-dark add-more-projects"><i class="ri-add-line me-1 text-light"></i>Add more</button>
                        </div>
                        <div class="project-add-area">
                            @php
                            $projectsname = old('projects-name', ['']);
                            $projectsurl = old('projects-url', ['']);
                            $startdates = old('start-date', ['']);
                            $enddates = old('end-date', ['']);
                            $projectstatus = old('project-status', []);
                            $descriptions = old('description', ['']);
                            @endphp
                            @foreach($projectsname as $i => $projectname)
                            <div class="project-field-area">
                                <div class="mb-3 d-flex justify-content-end">
                                    <button type="button" class="btn btn-dark remove-projects {{ $loop->first ? 'd-none' : '' }} me-2"><i class="ri-delete-bin-line me-1 text-light"></i>Remove</button>
                                    <button type="button" class="btn btn-dark add-more-projects {{ $loop->first ? 'd-none' : '' }}"><i class="ri-add-line me-1 text-light"></i>Add more</button>
                                </div>
                                <div class="mb-3">
                                    <label for="projects-name-{{ $i }}" class="form-label text-b">Project's name</label>
                                    <textarea id="projects-name-{{ $i }}" name="projects-name[]" class="form-control shadow-none" placeholder="Write your project's name here" style="height: 45px">{{ $projectname }}</textarea>
                                    @error("projects-name.$i")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="projects-url-{{ $i }}" class="form-label text-b">Project's URL</label>
                                    <textarea id="projects-url-{{ $i }}" name="projects-url[]" class="form-control shadow-none" placeholder="Write your project's url here" style="height: 35px">{{ $projectname }}</textarea>
                                    @error("projects-url.$i")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3 row">
                                    <div class="col-md-6">
                                        <label for="start-date-{{ $i }}" class="form-label text-b">Start date</label>
                                        <input type="date" class="form-control shadow-none" id="start-date-{{ $i }}" name="start-date[]" value="{{ $startdates[$i] ?? '' }}">
                                        @error("start-date.$i")
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="end-date" class="form-label text-b">End Date</label>
                                        <input type="date" class="form-control shadow-none" id="end-date" name="end-date[]" value="{{ $enddates[$i] ?? '' }}">
                                        @error('end-date.'.$i)
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" value="working" class="form-check-input shadow-none" id="project-status-{{ $i }}" name="project-status[]" {{ in_array('working', $projectstatus) ? 'checked' : '' }}>
                                    <label class="form-check-label text-b" for="project-status-{{ $i }}">Currently working on this project</label>
                                    @error("project-status.$i")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label text-b">Description</label>
                                    <textarea id="description" name="description[]" class="form-control shadow-none" placeholder="Write your project's description here" style="height: 100px">{{ $descriptions[$i] }}</textarea>
                                    @error("description.$i")
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <button type="submit" class="btn btn-primary px-4 py-2">Save</button>
                    </form>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>