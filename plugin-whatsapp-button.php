<?php
    /*
        Plugin Name: Whatsapp Contact Button
        Plugin URI:        https://github.com/catoszyrko/wordpress-whatsapp-plugin
        Description:       Add whatsapp button to your website
        Version:           1.0
        Author:            Cato Szyrko
        Author URI:        https://github.com/catoszyrko/
    */
    
    add_action('wp_head','plugin_ws');

    function plugin_ws (){
       
        $styles = "
            position: fixed; 
            bottom: 4em;
            right: 1em; 
            z-index: 100;
            background-color: rgb(26, 210, 109);
            padding:10px;
            font-weight:bold;
            text-decoration:none;
            color:white;
            box-shadow:1px 1px 1px #333333;
        ";


        $phone =  empty($phone) ? $phone = "5491164230533" : $phone = "asd";
        
        $plugin = '<a href="https://api.whatsapp.com/send?phone='.$phone.'" class="btn btn-success btn-circle btn-lg " target="_blank" id="whatsapp-button" style="'.$styles.'">
        Whatsapp
        <!--<i class="fab fa-whatsapp" style="font-size:1.8em;"></i>-->
        </a>';
        echo $plugin;

    }




?>
