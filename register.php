<?php include('includes/header.php') ?>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-lg border-0 rounded-4">

                <div class="card-header bg-secondary text-white rounded-top-4 py-3">
                    <div class="d-flex justify-content-between align-items-center">

                        <h3 class="mb-0 fw-bold">
                            Register Now
                        </h3>

                        <a href="index.php" class="btn btn-light fw-semibold">
                            Back
                        </a>

                    </div>
                </div>

                <div class="card-body p-4">

                    <form action="code.php" method="POST">
                        <div class="row">

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    First Name
                                </label>
                                <input type="text" name="first_name" class="form-control border-secondary" placeholder="Enter first name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Last Name
                                </label>
                                <input type="text" name="last_name" class="form-control border-secondary" placeholder="Enter last name">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Contact
                                </label>
                                <input type="text" name="contact" class="form-control border-secondary" placeholder="Enter contact number">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label fw-semibold">
                                    Email
                                </label>
                                <input type="email" name="email" class="form-control border-secondary" placeholder="Enter email address">
                            </div>

                            <div class="col-12 mb-4">
                                <label class="form-label fw-semibold">
                                    Password
                                </label>
                                <input type="password" name="password" class="form-control border-secondary" placeholder="Enter password">
                            </div>

                        </div>

                        <div class="d-flex justify-content-end gap-2">

                            <button type="submit" name="register_btn" class="btn btn-success px-4 fw-semibold">
                                Register
                            </button>

                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php') ?>