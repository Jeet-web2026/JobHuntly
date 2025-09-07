<x-MainComponent maintitle="{{ Auth::user('web')->name }} | Edit Professional Details" mainbootstrap="true" mainremixicon="true" maindashboardjs="true" onlymainjquery="true">
    <x-slot:maincontent>
        <main class="h-100 w-100 d-flex justify-content-center align-items-center p-5">
            <div class="card w-75 shadow-sm p-4 border-0">
                <div class="card-body">
                    <h2 class="fs-3 fw-semibold text-center border py-3 text-uppercase mb-3">Professional Information</h2>
                    <form method="POST">
                        <h4 class="h5 text-b my-5">1. Career preference<i class="ri-arrow-right-double-line ms-1 text-b"></i></h4>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">preffered job type</label>
                            <textarea class="form-control shadow-none" placeholder="Your preffered job type here" style="height: 60px"></textarea>
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
                        <div class="position-relative">
                            <button type="button" class="btn btn-dark px-4 py-2 shadow-none position-absolute top-0 end-0 add-more-employment"><i class="ri-add-line me-1 text-light "></i>Add more</button>
                            <h4 class="h5 text-b my-5">2. Employment status<i class="ri-arrow-right-double-line ms-1 text-b"></i></h4>
                            <div class="designation-area">
                                <div class="designation-field">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">designation</label>
                                        <textarea class="form-control shadow-none" placeholder="Write your designation here" style="height: 50px"></textarea>
                                    </div>
                                    <div class="mb-3 row">
                                        <div class="col-md-6 mb-3">
                                            <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">from</label>
                                            <input type="date" class="form-control shadow-none" />
                                        </div>
                                        <div class="col-md-6">
                                            <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">to</label>
                                            <input type="date" class="form-control shadow-none" />
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-check">
                                                <input class="form-check-input" style="cursor: pointer !important;" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label text-b" style="cursor: pointer !important;" for="flexCheckDefault">
                                                    Currently I'm working here
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label h6 text-capitalize text-b">your roles & responsibilities</label>
                                        <textarea class="form-control shadow-none" placeholder="Write your roles & responsibility here" style="height: 60px"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary shadow-none border-0 px-4 py-2 mt-3">Save and next</button>
                    </form>
                </div>
            </div>
        </main>
    </x-slot:maincontent>
</x-MainComponent>