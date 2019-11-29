<?php
namespace Drupal\lab10\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
/**
 * Creates a 'Farshad' Block
 * @Block(
 * id = "block_farshad",
 * admin_label = @Translation("daniel ashcroft"),
 * )
 */
class lab10Block extends BlockBase {
     public function build() {
         $table_name = 'farshad1361';
          $database = \Drupal::database();
          $schema = $database->schema();  
         $text = "table";
          $res = others::table_exists($table_name); 
         if ($res == true) {
             $text = "Table already existss";
          }
          else {            
            $table_schema = [
              'fields' => [
                 'sid' => [
                'type' => 'int',
                 'not null' => TRUE,
                  ],
               'name' => [
               'type' => 'varchar',
                'not null' => TRUE,
             'length' => 25,
              ],
                 ],
          'primary key' => ['sid'],    
            ];
        $schema->createTable($table_name, $table_schema);
        $text = "New Table was added";
                          }
  return array(
                '#title' => 'Hello World!',
                '#markup' => $text,
            );         
           }
}







