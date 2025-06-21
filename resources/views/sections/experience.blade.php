<div class="container d-flex flex-column justify-content-center align-items-center p-5" style="min-height: 105vh;">
    <h2 class="text-center text-uppercase mb-5 fw-bold">
        <i class="fas fa-briefcase me-3"></i>Experience
    </h2>

    @if (empty($experience))
        <div class="text-cente w-100">
            <div class="card bg-light text-dark border-0 shadow-sm">
                <div class="card-body py-5">
                    <i class="fas fa-user-graduate fa-3x text-primary mb-3"></i>
                    <h4 class="fw-semibold mb-3">No Professional Experience Yet</h4>
                    <p class="fs-5 text-muted">I’m excited to start my journey and apply my skills in the real
                        world.</p>
                </div>
            </div>
        </div>
    @else
        <div class="row w-100">
            <div class="col-lg-10 mx-auto">
                @foreach (array_slice($experience, 0, 2) as $exp)
                    <div class="d-flex position-relative mb-5">
                        <div class="flex-shrink-0">
                            <div class="bg-primary rounded-circle"
                                style="width: 1rem; height: 1rem; margin-top: 0.25rem;"></div>
                        </div>
                        <div class="flex-grow-1 ms-3 border-start border-primary border-4 ps-4">
                            <div class="card bg-light text-dark border-0 shadow-sm">
                                <div class="card-body">
                                    <h4 class="fw-bold mb-1">{{ $exp['role'] }}</h4>
                                    <h5 class="text-muted mb-2">{{ $exp['company'] }}</h5>
                                    <small class="text-muted fst-italic">{{ $exp['year'] }}</small>
                                    <p class="mt-3 mb-0">{{ $exp['description'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- View All Button --}}
                <div class="text-center mt-5">
                    <a href="#" class="btn btn-lg btn-primary px-5 py-3 fw-bold text-uppercase">
                        View All <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    @endif
</div>
