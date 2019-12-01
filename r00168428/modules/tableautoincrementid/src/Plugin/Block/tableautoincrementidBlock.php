<?php
namespace Drupal\tableautoincrementid\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
/**
 * Creates a 'Farshad' Block
 * @Block(
 * id = "block_tableautoincrementid",
 * admin_label = @Translation("Daniel Ashcroft"),
 * )
 */
class tableautoincrementidBlock extends BlockBase {
     public function build() {
         $table_name = 'tableautoincrementid';
          $database = \Drupal::database();
          $schema = $database->schema();  
         $text = "table";
          $res = others::table_exists($table_name); 
         if ($res == true) {
             $text = "Table already exist's";
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
			  'email' => [
               'type' => 'varchar',
                'not null' => TRUE,
				'UNIQUE' => TRUE,
             'length' => 30,
              ],
			  'age' => [
               'type' => 'int',
             'length' => 25,
              ],
			  'dob' => [
               'type' => 'DATE',
             'length' => 25,
              ],
                 ],
          'primary key' => ['sid'],
			'AUTOINCREMENT' => ['sid'],
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







