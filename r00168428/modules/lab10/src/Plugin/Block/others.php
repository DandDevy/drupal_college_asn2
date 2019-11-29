<?php
namespace Drupal\lab10\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
class others {
function table_exists( $table)
{
 $database = \Drupal::database();
    	
    try {
        $database->query("SELECT 1 FROM {" . $table . "}");
         return true;
        } 
    catch (\Exception $e) {
         return false;
         }
   }
}







