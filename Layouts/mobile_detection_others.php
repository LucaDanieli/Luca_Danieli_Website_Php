<?php
function isMobile($top_folder) {
  $mobileUA = array(
  'Android',
  'AvantGo',
  'BlackBerry',
  'DoCoMo',
  'iPod',
  'iPhone',
  'J2ME',
  'MIDP',
  'NetFront',
  'Nokia',
  'Opera Mini',
  'PalmOS',
  'PalmSource',
  'portalmmm',
  'Plucker',
  'ReqwirelessWeb',
  'SonyEricsson',
  'Symbian',
  'UP\.Browser',
  'webOS',
  'Windows CE',
  'Xiino'
  );
  if (defined('REQUEST_MOBILE_UA')) {
   $regex = '/' . REQUEST_MOBILE_UA . '/i';
  } else {
   $regex = '/' . implode('|', $mobileUA) . '/i';
  }
  if (!preg_match($regex, $_SERVER['HTTP_USER_AGENT'])) {
    include($top_folder . "Layouts/drawing.php");
  } else {
    include($top_folder . "Layouts/littleDrawing.php");
  }
  return false;
};
?>
