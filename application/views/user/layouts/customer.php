<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icons/icomoon/styles.css'); ?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/components.css'); ?>" >
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" >
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/select2/select2.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/validation/validate.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/notifications/sweet_alert.min.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/custom/common.js'); ?>"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <?php if (isset($stall['stall_no'])): ?>
            <a class="navbar-brand" href="<?php echo site_url('stall/'.$stall['stall_no']); ?>"><?php echo get_settings('company_name'); ?></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="navbar-item">
                        <a class="nav-link" href="<?php echo site_url('stall/'.$stall['stall_no']) ?>">Menu</a>
                    </li>
                    <li class="navbar-item">
                        <a class="nav-link" href="<?php echo site_url('customer/my-orders') ?>">My Orders</a>
                    </li>
                </ul>
            </div>
        <?php else: ?>
            <a class="navbar-brand" href="<?php echo site_url('customer'); ?>"><?php echo get_settings('company_name'); ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <?php if (!empty(get_customer())): ?>
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="navbar-item">
                            <a class="nav-link" href="<?php echo site_url('customer/my-orders') ?>">My Orders</a>
                        </li>
                        <li class="navbar-item">
                            <a class="nav-link" href="<?php echo site_url('customer/logout'); ?>">Logout</a>
                        </li>
                    </ul>
                <?php endif ?>
            </div>
        <?php endif ?>
    </nav>

    <div class="mt-md-5">
        <?php echo $content; ?>
    </div>
	<section class="p-2 footer-bottom-custom bg-light">
        <hr class="mt-0 border-0">
        <footer class="mr-5 text-right">
            <p class="mr-3">Developed By &copy; Mitesh Rathod (MRA) - <?php echo date('Y') ?> <?php echo get_settings('company_name'); ?></a></p>
        </footer>
        <script type="text/javascript">
            const BASE_URL = '<?php echo base_url(); ?>';
            $('select').select2();
        </script>
    </section>
    <?php
        if ( isset( $footer_js ) ) {
            foreach ( $footer_js as $js ) {
                ?>
                <script type="text/javascript" src="<?php echo base_url( $js ); ?>"></script>
                <?php 
            }
        }
    ?>
</body>
</html>