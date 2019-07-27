<?php

function set_up() {
    wp_enqueue_style('bootstrap-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/css/bootstrap.min.css');
    wp_enqueue_style('material-design', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css');
    wp_enqueue_style('font-awesome-animation', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.min.css');
    wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/e50b6b2fd0.js', array(),1,false);
    wp_enqueue_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(),1,1);
    wp_enqueue_script('bootstrap-tooltips', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array(),1,1);
    wp_enqueue_script('bootstrap-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js', array(),1,1);
    wp_enqueue_script('material-design', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/js/mdb.min.js', array(),1,1);
}

add_action('wp_enqueue_scripts', 'set_up');