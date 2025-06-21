<div class="container d-flex flex-column justify-content-center align-items-center p-5" style="min-height: 100vh;">
    <h2 class="text-center text-uppercase mb-5 fw-bold">
        <i class="fas fa-graduation-cap me-3"></i>Education
    </h2>

    <div class="row w-100">
        <div class="col-lg-10 mx-auto">
            @foreach ($education as $edu)
                <div class="d-flex position-relative mb-5">
                    <div class="flex-shrink-0">
                        <div class="bg-primary rounded-circle" style="width: 1rem; height: 1rem; margin-top: 0.25rem;">
                        </div>
                    </div>
                    <div class="flex-grow-1 ms-3 border-start border-primary border-4 ps-4">
                        <div class="card shadow-sm bg-body-tertiary border-0">
                            <div class="row g-0 align-items-center">
                                <div class="col-lg-3">
                                    <img src="{{ asset($edu['photo']) }}"
                                        class="img-fluid rounded-start w-100 h-100 object-fit-cover"
                                        alt="{{ $edu['school'] }}">
                                </div>
                                <div class="col-lg-9">
                                    <div class="card-body text-center text-md-start">
                                        <h4 class="card-title fw-semibold mb-2">{{ $edu['course'] }}</h4>
                                        <h6 class="mb-1">{{ $edu['school'] }}</h6>
                                        <h5 class="text-muted">{{ $edu['year'] }} | {{ $edu['status'] }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
