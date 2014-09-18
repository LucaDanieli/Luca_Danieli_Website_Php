<?php

function micropost($id_number, $mp_name, $mp_description, $mp_ref) {

echo '
<table id="micropost' . $id_number . '"  onmouseover="enlarge_post(this, ' . $id_number . ')" onmouseout="shrink_post(this, ' . $id_number . ')" border="1" bordercolor="#bbb" style="position: absolute; width: 23%; font-size: 0.9em; border-collapse: collapse; font-family: Impact, Charcoal, sans-serif; text-align: center; color: #333; font-weight: bold; background-color: #ddd;">
  <tr><td id="micropost_title' . $id_number . '" onmouseover="title_over(this, ' . $id_number . ')" style="padding: 10px; font-size: 100%;"><a href="' . $mp_ref . '" style="text-decoration: none; color: #333;"><div style="width: 100%; height: 100%"> ' . strtoupper($mp_name) . ' </div></a></td></tr>
  <tr><td id="micropost_descr' . $id_number .  '" onmouseover="descr_over(this, ' . $id_number . ')" style="padding: 10px; font-size: 80%; text-align: left;"> ' . $mp_description . ' </td></tr>
  <tr><td style="position: absolute; background-color: #ef5423; width: 98%; height: 1px; top: 99%; left: 0px;"></td></tr>
</table>
';

}
?>
