<div class="container d-flex flex-column justify-content-center align-items-center p-5" style="min-height: 105vh;">
    <h2 class="text-uppercase mb-5 fw-bold text-center">
        <i class="fas fa-file-code me-3"></i>Projects Made
    </h2>

    <div class="row g-4">
        @foreach (array_slice($projects, 0, 4) as $project)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset($project['image']) }}" class="card-img-top" alt="{{ $project['title'] }}">
                    <div class="card-header">
                        <h5 class="mb-0 text-uppercase fw-bold">{{ $project['title'] }}</h5>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <p class="card-text flex-grow-1">{{ $project['description'] }}</p>
                        <div class="d-flex justify-content-between">
                            <a href="{{ $project['view_link'] }}" class="btn btn-primary me-2">
                                <i class="fas fa-eye me-2"></i>View
                            </a>
                            <a href="{{ $project['code_link'] }}" class="btn btn-primary">
                                <i class="fas fa-code me-2"></i>Code
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-5">
        <a href="#" class="btn btn-lg btn-primary px-5 py-3 fw-bold text-uppercase">
            View All <i class="fas fa-arrow-right ms-2"></i>
        </a>
    </div>
</div>
