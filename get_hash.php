<?php


echo ('
<form action="" method="post" autocomplete="off">
  <input type="text" name="search_box" style="color: #afafaf; font-size: 9px;" value="" autofocus />
  <input type="text" name="ie_bugfix" value="'.time().'" style="display: none;" />
  <input type="submit" value="HASH" name="search_button" style="font-size: 9px;" />
</form>');

if (isset($_POST) && $_POST) {
  echo '<span style="color: #cfcfcf; font-size: 9px;">'.hash('sha512', $_POST['search_box']).'</span>';
}

?>