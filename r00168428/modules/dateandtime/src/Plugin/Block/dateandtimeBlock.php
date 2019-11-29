<?php
namespace Drupal\dateandtime\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
/**
 * Creates a 'dateandtime' Block
 * @Block(
 * id = "block_dateandtime",
 * admin_label = @Translation("Daniel Ashcroft"),
 * )
 */
class dateandtimeBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
     public function build() {
      
         
        $markup = Markup::create('
<!DOCTYPE html>
<html>
<body>

<button type="button" onclick="dateandtime()">check date and time</button>

<p id="dateandtime">date and time</p>

<script>
    function dateandtime() {
        // while (true){
            var d = new Date();
            result =d.getHours() + ":" + d.getMinutes() + ":" +  d.getSeconds() + " " +  d.getDate() + "/" + d.getMonth() + "/" + d.getFullYear();
            console.log(result);
            document.getElementById("dateandtime").innerHTML = result;
        // }

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







