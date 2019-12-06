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




<!--<form>-->
<!--    Enter embedded video source link (Do not put in the full iframe tag, just src value)<br>-->
<!--    <input type="text" id="userVideo" >-->
<!--</form>-->
<!--<button type="button" onclick={setVideoByUser("play")}>play</button>-->
<!--<button type="button" onclick={setVideoByUser("")}>close</button>-->
<!--<section id="videoSection2"></section>-->


<!--<script>-->
<!--    function setVideoByUser(value) {-->
<!--        if(value === "")-->
<!--            document.getElementById("videoSection").innerHTML = "";-->
<!--        else{-->
<!--            const userchoice = document.getElementById("userVideo").value;-->
<!--            let video_id = userchoice.split(\'v=\')[1];-->
<!--            let ampersandPosition = video_id.indexOf(\'&\');-->
<!--            if(ampersandPosition != -1) {-->
<!--                video_id = video_id.substring(0, ampersandPosition);-->
<!--            }-->
<!--            const videoEmbeddedLink = "https://www.youtube.com/embed/" + video_id;-->

<!--            const res = "<iframe width=\"400\" height=\"300\" src=\" " + videoEmbeddedLink + "\" frameborder=\"0\" allow=\"accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>"-->

<!--            document.getElementById("videoSection2").innerHTML = res;-->
<!--        }-->

<!--    }-->
<!--</script>-->
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







