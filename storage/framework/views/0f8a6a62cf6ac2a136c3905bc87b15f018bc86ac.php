<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
    <div class="container px-4">
        <a class="navbar-brand font-weight-900 text-white" style="font-size: 20pt" href="<?php echo e(route('home')); ?>">
            AKUNTANSI
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
            <!-- Collapse header -->
            <div class="navbar-collapse-header d-md-none">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="<?php echo e(route('home')); ?>">
                            <img src="<?php echo e(asset('argon')); ?>/img/brand/blue.png">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>
            <!-- Navbar items -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link nav-link-icon" href="<?php echo e(route('login')); ?>">
                        <i class="ni ni-key-25"></i>
                        <span class="nav-link-inner--text"><?php echo e(__('Login')); ?></span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<?php /**PATH E:\KELANA PUTRA FIRLY AKT\akuntansi\resources\views/layouts/navbars/navs/guest.blade.php ENDPATH**/ ?>