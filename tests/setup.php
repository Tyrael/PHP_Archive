<?php
require_once dirname(__FILE__) . DIRECTORY_SEPARATOR . 'phpt_test.php.inc';
if (in_array('phar', stream_get_wrappers())) {
    //unregister native phar wrapper
    stream_wrapper_unregister('phar');
}
?>
