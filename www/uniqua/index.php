
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Uniqua</title>
    <style type="text/css" media="screen">
      h1, h2 {
        color: DarkBlue;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <h1>Uniqua Server Home Page</h1>
    <h2>(under construction)</h2>
    <h3><a href="http://uniqua.hollowman.net/minecraft_backups">Server Backups</a></h3>
    <p>
    <?php
    /*
    //https://stackoverflow.com/questions/34190464/php-scandir-recursively
    function recurseScanDir($target) {
      $files = glob( $target . '*', GLOB_MARK);
      foreach( $files as $file )
      {
        if($file != $target)
        {
          $file_is_dir = is_dir($file);
          $file_is_link = is_link($file);
          $file_is_file = is_file($file);
          
          if(!$file_is_dir and !$file_is_link and $file_is_file)
          {
            echo '<a href="' . substr($file, 9) . '" download>';
            echo substr($file, 9) . '<br>';
            echo '</a>';
          }
          if($file_is_dir and !$file_is_link and !$file_is_file)
          {
            echo substr($file, 9) . '<br>';
            recurseScanDir($file);
          }
        }
      }
    }
    
    $rootFolder = '/mnt/sdb1/minecraft_backups/';
    recurseScanDir($rootFolder);
    */
    ?>
    </p>
  </body>
</html>

