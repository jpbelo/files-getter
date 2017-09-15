<?php

$path = 'folder/';

if ($handle = opendir($path)) {

  // files to ignore
  $blacklist = array('.', '..', 'somedir', 'index.php', '.DS_Store', 'unused');

  while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $blacklist)) {
            include ($path . $file);
        }
    }
    closedir($handle);
}
