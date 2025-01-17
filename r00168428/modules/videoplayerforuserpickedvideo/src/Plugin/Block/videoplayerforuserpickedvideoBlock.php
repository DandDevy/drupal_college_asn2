<?php
namespace Drupal\videoplayerforuserpickedvideo\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Render\Markup;
/**
 * Creates a 'videoplayerforuserpickedvideo' Block
 * @Block(
 * id = "block_videoplayerforuserpickedvideo",
 * admin_label = @Translation("Daniel Ashcroft"),
 * )
 */
class videoplayerforuserpickedvideoBlock extends BlockBase {

    /**
     * {@inheritdoc}
     */
     public function build() {
      
         
        $markup = Markup::create('
<!DOCTYPE html>
<html>
<body>
<form>
    Enter embedded video source link (Do not put in the full iframe tag, just src value)<br>
    <input type="text" id="userVideo" >
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
            const userchoice = document.getElementById("userVideo").value;
            const res = "<iframe width=\"400\" height=\"300\" src=\" " + userchoice + "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"

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







