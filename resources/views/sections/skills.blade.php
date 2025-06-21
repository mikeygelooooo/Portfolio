<div class="container d-flex flex-column justify-content-center align-items-center text-center p-5" style="min-height: 100vh;">
    <h2 class="text-uppercase mb-5 fw-bold">
        <i class="fas fa-laptop-code me-3"></i>My Tech Stack
    </h2>

    <div class="card shadow bg-white border-0 w-100">
        <div class="card-body">
            <div class="row g-4 justify-content-center">
                <!-- Each skill -->
                @foreach ($skills as $skill)
                    <div class="col-6 col-sm-4 col-md-3 col-lg-2">
                        <div class="p-3 border rounded text-center bg-body-tertiary shadow-sm h-100">
                            <i class="devicon-{{ $skill['icon'] }}-plain fs-1"></i>
                            <div class="mt-2 fs-6">{{ $skill['label'] }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
