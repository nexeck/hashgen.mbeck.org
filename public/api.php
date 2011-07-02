<?php
  if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
  {
    if (!empty($_GET['algoid']) AND !empty($_GET['string']))
    {
      $hash = array ( 'hash' => $_GET['string']);
      
      switch ($_GET['algoid'])
      {
        case 1:
          $hash = array ( 'hash' => hash('md2',$_GET['string']) );
          break;
        case 2:
        $hash = array ( 'hash' => hash('md4',$_GET['string']) );
          break;
        case 3:
        $hash = array ( 'hash' => hash('md5',$_GET['string']) );
          break;
          /*SHA*/
        case 4:
        $hash = array ( 'hash' => hash('sha1',$_GET['string']) );
          break;
        case 5:
        $hash = array ( 'hash' => hash('sha224',$_GET['string']) );
          break;
        case 6:
        $hash = array ( 'hash' => hash('sha256',$_GET['string']) );
          break; 
        case 7:
        $hash = array ( 'hash' => hash('sha384',$_GET['string']) );
          break;
        case 8:
        $hash = array ( 'hash' => hash('sha512',$_GET['string']) );
          break;
          /*RIPEMD*/
        case 9:
        $hash = array ( 'hash' => hash('ripemd128',$_GET['string']) );
          break; 
        case 10:
        $hash = array ( 'hash' => hash('ripemd160',$_GET['string']) );
          break;
          
        case 11:
        $hash = array ( 'hash' => hash('ripemd256',$_GET['string']) );
          break;
        case 12:
        $hash = array ( 'hash' => hash('ripemd320',$_GET['string']) );
          break;
          /*Tiger*/
        case 13:
        $hash = array ( 'hash' => hash('tiger128,3',$_GET['string']) );
          break;
        case 14:
        $hash = array ( 'hash' => hash('tiger160,3',$_GET['string']) );
          break;
        case 15:
        $hash = array ( 'hash' => hash('tiger192,3',$_GET['string']) );
          break;
        case 16:
        $hash = array ( 'hash' => hash('tiger128,4',$_GET['string']) );
          break; 
        case 17:
        $hash = array ( 'hash' => hash('tiger160,4',$_GET['string']) );
          break;
        case 18:
        $hash = array ( 'hash' => hash('tiger192,4',$_GET['string']) );
          break;
          
          /*HAVAL*/
        case 19:
        $hash = array ( 'hash' => hash('haval128,3',$_GET['string']) );
          break; 
        case 20:
        $hash = array ( 'hash' => hash('haval160,3',$_GET['string']) );
          break;
          
        case 21:
        $hash = array ( 'hash' => hash('haval192,3',$_GET['string']) );
          break;
        case 22:
        $hash = array ( 'hash' => hash('haval224,3',$_GET['string']) );
          break;
        case 23:
        $hash = array ( 'hash' => hash('haval256,3',$_GET['string']) );
          break;
        case 24:
        $hash = array ( 'hash' => hash('haval128,4',$_GET['string']) );
          break;
        case 25:
        $hash = array ( 'hash' => hash('haval160,4',$_GET['string']) );
          break;
        case 26:
        $hash = array ( 'hash' => hash('haval192,4',$_GET['string']) );
          break; 
        case 27:
        $hash = array ( 'hash' => hash('haval224,4',$_GET['string']) );
          break;
        case 28:
        $hash = array ( 'hash' => hash('haval256,4',$_GET['string']) );
          break;
        case 29:
        $hash = array ( 'hash' => hash('haval128,5',$_GET['string']) );
          break; 
        case 30:
        $hash = array ( 'hash' => hash('haval160,5',$_GET['string']) );
          break;
          
        case 31:
        $hash = array ( 'hash' => hash('haval192,5',$_GET['string']) );
          break;
        case 32:
        $hash = array ( 'hash' => hash('haval224,5',$_GET['string']) );
          break;
        case 33:
        $hash = array ( 'hash' => hash('haval256,5',$_GET['string']) );
          break;
          /*Snefru*/
        case 34:
        $hash = array ( 'hash' => hash('snefru',$_GET['string']) );
          break;
        case 35:
        $hash = array ( 'hash' => hash('snefru256',$_GET['string']) );
          break;
          /*Salsa*/
        case 36:
        $hash = array ( 'hash' => hash('salsa10',$_GET['string']) );
          break; 
        case 37:
        $hash = array ( 'hash' => hash('salsa20',$_GET['string']) );
          break;
         /*Misc*/ 
        case 38:
        $hash = array ( 'hash' => hash('gost',$_GET['string']) );
          break;
        case 39:
        $hash = array ( 'hash' => hash('adler32',$_GET['string']) );
          break; 
        case 40:
        $hash = array ( 'hash' => hash('crc32',$_GET['string']) );
          break;
        case 41:
          $hash = array ( 'hash' => hash('crc32b',$_GET['string']) );
          break;
        case 42:
          $hash = array ( 'hash' => hash('whirlpool',$_GET['string']) );
          break;
        default:
          $hash = array ( 'hash' => $_GET['string']);
          break;
      }
      die(json_encode($hash));
    }
    else
    {
    die('SELECT ALGO');
    }
  }
?>