<?php
namespace Drupal\simplecalculatorascontroller\Controller;

class simplecalculatorascontrollerController {

     public function hello() {
      
         
        $markup = Markup::create('
<!DOCTYPE html>
<html>
<body>

<button type="button" onclick="concatenate(1)">1</button>
<button type="button" onclick="concatenate(2)">2</button>
<button type="button" onclick="concatenate(3)">3</button>
<button type="button" onclick="concatenate(4)">4</button>
<button type="button" onclick="concatenate(5)">5</button>
<button type="button" onclick="concatenate(6)">6</button>
<button type="button" onclick="concatenate(7)">7</button>
<button type="button" onclick="concatenate(8)">8</button>
<button type="button" onclick="concatenate(9)">9</button>
<button type="button" onclick="concatenate(0)">0</button>
<button type="button" onclick={concatenate("*")}>*</button>
<button type="button" onclick={concatenate("+")}>+</button>
<button type="button" onclick="execute()">=</button>

<p id="results">results</p>

<script>

var calculation = ""
function concatenate(i){
        calculation += i;
        document.getElementById("results").innerHTML = calculation;
		}

function execute() {
        const res = eval(calculation);
        calculation = "";
        document.getElementById("results").innerHTML = res;
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







