<div class="container d-flex flex-column justify-content-center p-5" style="min-height: 100vh;">
    <h2 class="text-center text-uppercase fw-bold mb-5">
        <i class="fas fa-trophy me-2"></i>Awards & Competitions
    </h2>

    <div class="row justify-content-center g-4 col-lg-10 mx-auto">
        @foreach ($awards as $award)
            <div class="col-lg-6 d-flex justify-content-center">
                <div class="card bg-light border-0 shadow">
                    <div class="card-body">
                        <div class="d-flex align-items-start mb-3">
                            <div
                                class="bg-primary text-white rounded-circle d-flex justify-content-center align-items-center p-3">
                                <i class="fas fa-award fs-4"></i>
                            </div>
                            <div class="ms-3">
                                <p class="mb-0 fw-bold text-primary">{{ $award['title'] }}</p>
                                <h5 class="card-title mb-3">{{ $award['award'] }}</h5>
                                <h6 class="card-subtitle text-muted small">{{ $award['organizer'] }} •
                                    {{ $award['date'] }}</h6>
                            </div>
                        </div>
                        <p class="card-text">{{ $award['description'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
