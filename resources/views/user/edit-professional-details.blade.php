<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Edit Professional Details" mainbootstrap="true">
    <x-slot:maincontent>
        <main class="vh-100 w-100 d-flex justify-content-center align-items-center p-5">
            <div class="card w-100 shadow-sm p-4 border-0">
                <div class="card-body">
                    <h2 class="fs-3 fw-semibold text-center border py-3 text-uppercase mb-3">Professional Information</h2>
                    <form method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">Career preference</label>
                                    <textarea class="form-control shadow-none" placeholder="Your career preference here" style="height: 60px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">availability to work</label>
                                    <textarea class="form-control shadow-none" placeholder="Your work availability here" style="height: 60px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">preffered location</label>
                                    <textarea class="form-control shadow-none" placeholder="Your work availability here" style="height: 60px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">Skills</label>
                                    <textarea class="form-control shadow-none" placeholder="Your work availability here" style="height: 60px"></textarea>
                                </div>
                            </div>
                            <div class="col-md-6"></div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>