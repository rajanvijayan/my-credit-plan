<?php $geoplugin = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$_SERVER['REMOTE_ADDR']));

print_r( $geoplugin['geoplugin_countryCode'] );
?>