<?php function my_login_logo() {  //TODO: Fill in ?>
    <style type="text/css">
        body.login {
            background-color: #333333 !important;
        }
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/br-logo-on-light.png);
        height:40px;
        width:281px;
        background-size: 281px 40px;
        background-repeat: no-repeat;
            padding-bottom: 30px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );