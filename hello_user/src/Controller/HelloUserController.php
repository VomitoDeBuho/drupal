<?php
namespace Drupal\hello_user\Controller;
use Drupal\Core\Controller\ControllerBase;
class HelloUserController extends ControllerBase {
    public function helloUser($name) {
      #Obrim la taula
          $taula = "<table style='width: 200px; height: 50px; border: 10px solid black'>";
      #Fem el for per posar tantes taules com l'usuari ha printat
          for ($j = 1; $j < $name+1; $j++){
            $taula .="<tr style='border: 10px solid black'><td/>$j</tr>";
          }
      #Tanquem la taula i l'imprimim per pantalla
          $taula .= "</table>";
           return ['#type' => 'inline_template','#template' => $taula];
    }
}
?>
