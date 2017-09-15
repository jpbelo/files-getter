<?php

if ($handle = opendir('classes/')) {

  // files to ignore
  $blacklist = array('.', '..', 'somedir', 'index.php', '.DS_Store', 'unused');

  while (false !== ($file = readdir($handle))) {
        if (!in_array($file, $blacklist)) {
            include ("classes/" . $file);
        }
    }
    closedir($handle);
}
