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

//Template Show Menu Custom
if(!function_exists('hk_top_menu')){
    function hk_top_menu() {?>
        <ul data-type="navbar" class="sf-menu">
            <li class="active"><a href="<?php echo bloginfo('url')?>">Trang chủ</a></li>
            <li><a href="<?php echo bloginfo('url')?>/gioithieu">Giới Thiệu</a></li>
            <li><a href="<?php bloginfo('url')?>/tintuc">Tin Tức</a></li>
            <li ><a href="<?php bloginfo('url')?>/lienhe">Liên hệ</a></li>
        </ul>
   <?php  }
}



?>