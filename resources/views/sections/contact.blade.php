<div class="container d-flex flex-column justify-content-center align-items-center text-center p-5"
    style="min-height: 100vh;">
    <h2 class="text-uppercase mb-5 fw-bold">
        <i class="fas fa-headset me-3"></i>Contact Me
    </h2>

    <div class="col-12 col-md-10">
        <div class="card shadow bg-light w-100">
            <div class="card-body p-4">
                <div class="row g-4">
                    <!-- Contact Image -->
                    <div class="col-lg-6 d-flex justify-content-center align-items-center">
                        <img src="{{ asset('images/contact-photo.png') }}" alt="Contact Image" class="img-fluid"
                            style="max-width: 350px;">
                    </div>

                    <!-- Contact Form -->
                    <div class="col-lg-6">
                        <form>
                            <div class="mb-3">
                                <input type="text" class="form-control form-control-lg" placeholder="Name" required>
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control form-control-lg" placeholder="Email" required>
                            </div>
                            <div class="mb-3">
                                <input type="tel" class="form-control form-control-lg" placeholder="Phone">
                            </div>
                            <div class="mb-4">
                                <textarea class="form-control form-control-lg" rows="4" placeholder="Message" required></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg w-100">
                                    <i class="fas fa-paper-plane me-2"></i>Send Message
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
