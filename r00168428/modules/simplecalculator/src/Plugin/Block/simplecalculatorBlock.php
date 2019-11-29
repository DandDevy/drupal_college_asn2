<?php
namespace Drupal\simplecalculator\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
/**
 * Creates a 'simplecalculator' Block
 * @Block(
 * id = "block_simplecalculator",
 * admin_label = @Translation("Daniel Ashcroft"),
 * )
 */
class simplecalculatorBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
     public function build() {
      
         
        $markup = Markup::create('
<!DOCTYPE html>
<html>
<body>
<input id = "t1"> 
<button type="button" onclick="myFunction()">Show My Name</button>
<p id="results"></p>
<img src="/modules/simplecalculator/images/hat.jpg" alt="Home" />
<script>
function myFunction() {
  var x = document.getElementById("t1");
    document.getElementById("results").innerHTML = "My Name is: "
    + x.value ;
}
</script>
</body>
</html>

');

    $data = [
      '#type' => 'markup',
      '#markup' => $markup,
    ];

   return $data;
    }

}







