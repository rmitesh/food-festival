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
    <nav class="navbar navbar-light bg-white navbar-expand-lg fixed-top border-bottom border-primary shadow-sm">
        <a class="navbar-brand d-flex flex-column" href="<?php echo site_url(); ?>">
            <img style="width: 40%!important;" src="<?php echo base_url('assets/img/narola-infotech.png') ?>" alt="<?php echo APP_NAME; ?>" />
            <h6 class="text-primary mt-2" style="margin-left: 2.2rem;">
                <?php echo APP_NAME; ?>
            </h6>
        </a>
        <?php if (!empty(get_customer())): ?>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="navbar-nav ml-auto"> 
                    
                </ul>
            </div>
        <?php endif ?>
    </nav>

    <div class="mt-lg-5 pt-lg-4">
        <?php echo $content; ?>
    </div>

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