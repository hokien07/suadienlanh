<?php
/* Function show logo*/
if(!function_exists('hk_header')) {
    function hk_header() {
        global $hk_options;
        if($hk_options['logo-top'] == 0) {
            printf(
                '<h1><a href=\'%1$s\' title=\'%2$s\'>%3$s</a></h1>',
                get_bloginfo('url'),
                get_bloginfo('description'),
                get_bloginfo('sitename')
            );
        }else {
            echo "<img src = '". $hk_options['image-logo']['url'] ."' />";
        }
     }
}



?>