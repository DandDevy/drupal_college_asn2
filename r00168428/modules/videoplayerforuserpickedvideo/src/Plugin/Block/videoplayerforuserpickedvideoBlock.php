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
    Enter youtube video link :<br>
    <input type="text" id="userVideo" >
</form>
<button type="button" onclick={setVideoByUser("play")}>play</button>
<button type="button" onclick={setVideoByUser("")}>close</button>
<section id="videoSection2"></section>


<script>
    function setVideoByUser(value) {
        if(value === "")
            document.getElementById("videoSection").innerHTML = "";
        else{
            const userchoice = document.getElementById("userVideo").value;
            let video_id = userchoice.split(\'v=\')[1];
            let ampersandPosition = video_id.indexOf(\'&\');
            if(ampersandPosition != -1) {
                video_id = video_id.substring(0, ampersandPosition);
            }
            const videoEmbeddedLink = "https://www.youtube.com/embed/" + video_id;

            const res = "<iframe width=\"400\" height=\"300\" src=\" " + videoEmbeddedLink + "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"

            document.getElementById("videoSection2").innerHTML = res;
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







