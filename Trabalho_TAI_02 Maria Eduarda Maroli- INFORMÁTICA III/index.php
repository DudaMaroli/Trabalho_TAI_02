<?php  
  
  $Automoveis= array(
    ['numerodoregistro' => '0',
        'modelo' => 'Uno',
        'fabricante' => 'Fiat',
        'cor' => 'Prata',
        'portas' => "4",
        'ano' => "2018",
    ],
    [
    "numerodoregistro" => "1",
      "modelo" => "Fiesta", 
      "fabricante" => "Ford", 
      "cor" => "Preto", 
      "portas" => "2",
      "ano"=>"2016",
    ],
  [
    "numerodoregistro" => "2", 
    "modelo" => "Doblo", 
    "fabricante" => "Fiat",
    "cor" => "Verde", 
    "portas" => "4", 
    "ano"=>"2013"
    ],
    [
    "numerodoregistro" => "3",
    "modelo" => "Celta",
    "fabricante" => "GM", 
    "cor" => "Preto", 
    "portas" => "2",
    "ano"=>"2012",
    ],
    [
    "numerodoregistro" => "4", 
    "modelo" => "March",
    "fabricante" => "Nissan", 
    "cor" => "Prata", 
    "portas" => "2",
    "ano"=>"2016"
    ],
    [
    "numerodoregistro" => "5",
    "modelo" => "Cobalt", 
    "fabricante" => "GM", 
    "cor" => "Branco",
    "portas" => "2", 
    "ano"=>"2012"
    ],
    [
    "numerodoregistro" => "6", 
    "modelo" => "Ranger",
    "fabricante" => "Ford", 
    "cor" => "Prata",
    "portas" => "4", 
    "ano"=>"2018"
    ],
    [
    "numerodoregistro" => "7", 
    "modelo" => "Trail Blazer",
    "fabricante" => "GM",
    "cor" => "Branco",
    "portas" => "4", 
    "ano"=>"2020"
    ],
    [
    "numerodoregistro" => "8",
    "modelo" => "Ecosport",
    "fabricante" => "Ford",
    "cor" => "Preto",
    "portas" => "4",
    "ano"=>"2018"
    ],
    [
    "numerodoregistro" => "9",
    "modelo" => "Tucson", 
    "fabricante" => "Hyundai",
    "cor" => "Vinho",
    "portas" => "4", 
    "ano"=>"2020"
    ],
  );
  
  /*Questão A*/
  echo "Questão A <br>";
  foreach($Automoveis as $carro){
    echo'a) todos os modelos e os anos dos veículos:';
    echo $carro['modelo']. ','  .$carro['ano'];
    echo"<br>";
  }
  echo"<br><br>";
  /*Questão B */
  echo "Questão B <br>";
  foreach($Automoveis as $carro){
    echo "b) todos os veículos cor prata: <br>";
    if($carro['cor'] == "Prata"){
      echo $carro['modelo']. ','  .$carro['cor']; 
      echo"<br><br>";
    }
  }
  /*Questão C*/
  echo "Questão C <br>";
  foreach($Automoveis as $carro){
    echo'c) todos os veículos, cor e quantidade de portas:';
    echo $carro['modelo']. ','  .$carro['cor']. ',' .$carro['portas'].' <br>';}
  echo "<br><br>";
  
  /*Questão D*/
  echo"Questão D <br>";
  foreach($Automoveis as $carro){
    echo " d) todos os veículos da Ford: <br><br>";
    if($carro['fabricante'] == "Ford"){
      echo  $carro['fabricante']. "<br><br>"; 
    }
  }
  
  /*Questão E*/
  echo "Questão E <br>";
  foreach($Automoveis as $carro){
    echo " todos os veículos com ano de fabricação igual ou superior a 2015: <br><br>";
    if($carro['ano'] >= "2015"){
      echo  $carro['ano']. "<br><br>"; 
    }
  }
  ?>
    <html>
    <body>
      <form method="post">
        <input type='text' name="texto" placeholder='Escreva a sua palavra!'>
        <input type="submit" value="OK" />
        </form>
      <?php 
  
      $letra = $_POST['texto'];
      $letra = str_replace('a','?',$letra);
      $letra = str_replace('e','?',$letra);
      $letra = str_replace('i','?',$letra);
      $letra = str_replace('o','?',$letra);
      $letra = str_replace('u','?',$letra);
      echo $letra;
  
    ?>
      </body>
    </html>