<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Project Details" mainbootstrap="true" mainremixicon="true" maindashboardjs="true" onlymainjquery="true">
    <x-slot:maincontent>
        <main class="h-100 w-100 d-flex justify-content-center align-items-center p-5">
            <div class="card w-75 border-0 shadow-sm p-4">
                <div class="card-body">
                    <h2 class="text-center text-uppercase fw-semibold border py-3 mb-4">project details</h2>
                    <form>
                        <div class="mb-3 d-flex justify-content-end">
                            <button type="button" class="btn btn-dark"><i class="ri-add-line me-1 text-light add-more-projects"></i>Add more</button>
                        </div>
                        <div class="mb-3">
                            <label for="projects-name" class="form-label text-b">Project's name</label>
                            <textarea id="projects-name" name="projects-name[]" class="form-control shadow-none" placeholder="Write your project's name here" style="height: 45px"></textarea>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-md-6">
                                <label for="duration-to" class="form-label text-b">Start date</label>
                                <input type="date" class="form-control shadow-none" id="duration-to">
                            </div>
                            <div class="col-md-6">
                                <label for="duration-to" class="form-label text-b">End Date</label>
                                <input type="date" class="form-control shadow-none" id="duration-to">
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" value="working" class="form-check-input shadow-none" id="project-status">
                            <label class="form-check-label text-b" for="project-status">Currently working on this project</label>
                        </div>
                        <div class="mb-3">
                            <label for="projects-name" class="form-label text-b">Description</label>
                            <textarea id="projects-name" name="projects-name[]" class="form-control shadow-none" placeholder="Write your project's description here" style="height: 100px"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary px-4 py-2">Save</button>
                    </form>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>