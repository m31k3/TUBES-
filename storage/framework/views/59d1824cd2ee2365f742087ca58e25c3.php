

<?php $__env->startSection('content'); ?>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-light border-right" id="sidebar-wrapper" style="z-index: 1;">
        <div class="list-group list-group-flush">
            <a href="/home" class="list-group-item list-group-item-action bg-light"><i class="fas fa-home"></i> Home</a>
            <a href="data" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pendataan Magang</a>
            <a href="idcard" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Pengajuan ID Card</a>
            <a href="placement" class="list-group-item list-group-item-action bg-light"><i class="fas fa-clipboard-list"></i> Penempatan Divisi</a>
            <a href="about" class="list-group-item list-group-item-action bg-light active"><i class="fas fa-info-circle"></i> About</a>
        </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid my-4 content-container">
        <div id="page-indicator" class="mt-2 mb-3">You are on the about page</div>
                <div class="banner">
                    <img src="/images/ena1.jpg" alt="Banner" class="img-fluid banner-img">
                </div>
                <div class="about-text mb-4">
                    <h2>About Witel</h2>
                    <p>e-Detik is a modern and interactive platform designed to bring together ocean enthusiasts. Our mission is to promote marine conservation and provide a space for people to share knowledge, learn about the ocean, and engage in meaningful discussions. We offer various features such as interactive forums, educational content, and engaging activities to support our community's passion for the ocean.</p>
                </div>
                <div class="photo-gallery mt-4">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="/images/ena2.jpg" alt="Photo 1" class="img-fluid mb-4">
                        </div>
                        <div class="col-md-6">
                            <img src="/images/ena3.jpg" alt="Photo 2" class="img-fluid mb-4">
                        </div>
                    </div>
                </div>
                <div class="faq">
                    <h2 class="text-center mb-4">Frequently Asked Questions</h2>
                    <div class="accordion" id="faqAccordion">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" style="color: black; font-size: 18px;" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        What is e-Detik?
                                    </button>
                                </h5>
                            </div>

                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#faqAccordion">
                                <div class="card-body" style="color: black; font-size: 18px;">
                                    e-Detik is a platform for ocean enthusiasts to share knowledge, learn about the ocean, and engage in discussions on marine conservation.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" style="color: black; font-size: 18px;" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        How can I join e-Detik?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faqAccordion">
                                <div class="card-body" style="color: black; font-size: 18px;">
                                    You can join e-Detik by registering on our platform and becoming part of our community of ocean enthusiasts.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" style="color: black; font-size: 18px;" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What features does e-Detik offer?
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faqAccordion">
                                <div class="card-body" style="color: black; font-size: 18px;">
                                    e-Detik offers interactive forums, educational content, and engaging activities to promote marine conservation and provide a space for ocean enthusiasts to connect.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
</div>
<!-- /#wrapper -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel11_auth\resources\views/about.blade.php ENDPATH**/ ?>