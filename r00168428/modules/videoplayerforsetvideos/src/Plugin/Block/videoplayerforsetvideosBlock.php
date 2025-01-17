<?php
namespace Drupal\videoplayerforsetvideos\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
/**
 * Creates a 'videoplayerforsetvideos' Block
 * @Block(
 * id = "block_videoplayerforsetvideos",
 * admin_label = @Translation("Daniel Ashcroft"),
 * )
 */
class videoplayerforsetvideosBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
     public function build() {
      
         
        $markup = Markup::create('
<!DOCTYPE html>
<html>
<body>
<form>
    What video do you prefer?<br>
    <input type="radio" name="videopreference" id="hardwareVideoBtn">hardware tech video<br>
    <input type="radio" name="videopreference" id="programmingVideoBtn">freecodecamp programming tutorial<br>
</form>
<button type="button" onclick={setVideo("play")}>play</button>
<button type="button" onclick={setVideo("")}>close</button>
<section id="videoSection"></section>


<script>
    document.getElementById("hardwareVideoBtn").checked = true;
    function setVideo(value) {
        if(value === "")
            document.getElementById("videoSection").innerHTML = "";
        else{
            let res = "<iframe width=\"400\" height=\"300\" src=\"https://www.youtube.com/embed/DsZtTpBk7s0\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>";
            if(!document.getElementById("hardwareVideoBtn").checked)
                res = "<iframe width=\"400\" height=\"300\" src=\"https://www.youtube.com/embed/PkZNo7MFNFg\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"

            document.getElementById("videoSection").innerHTML = res;
        }

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







