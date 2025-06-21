<div class="container d-flex flex-column justify-content-center align-items-center text-center p-5" style="min-height: 105vh;">
    <h2 class="text-uppercase mb-5 fw-bold">
        <i class="fas fa-headset me-3"></i>Contact Me
    </h2>

    <div class="card shadow bg-light col-12">
        <div class="card-body p-4">
            <div class="row">
                <div class="col-md-6 d-flex justify-content-center align-items-center mb-4" style="min-height: 100%;">
                    <img src="{{ asset('images/contact-photo.png') }}" alt="Home Photo" class="img-fluid" style="max-width: 350px; height: auto;">
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center align-items-center" style="min-height: 100%;">
                    <div class="w-100">
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control form-control-lg" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control form-control-lg" placeholder="Phone">
                        </div>
                        <div class="mb-4">
                            <textarea class="form-control form-control-lg" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-lg w-100">
                                <i class="fas fa-paper-plane me-2"></i>Send Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>