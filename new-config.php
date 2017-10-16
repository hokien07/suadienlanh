<?php
//loai bo chức năng sửa đường dẫn trong wordpress.
define('WP_SITEURL', 'http://localhost/suamaylanh');
define('WP_HOME', 'http://localhost/suamaylanh');

//thay đổi thời gian mặc định lưu file
define('AUTOSAVE_INTERVAL', 150);

//tăng dung lượng upload file: 128M
define('WP_MEMORY_LIMIT', '128M');

//thay đổi thời gian xóa bài viets: 7 ngày
define('EMPTY_TRASH_DAYS', 7);

//loại bỏ chức năng chỉnh sửa plugin
define('DISALLOW_FILE_EDIT', true);