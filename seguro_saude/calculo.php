<?php

  // obtem dados do formulário html
  $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
  $codFaixaEtaria = filter_input(INPUT_POST, "faixaEtaria", FILTER_SANITIZE_NUMBER_INT);
  $doencaPrevia = filter_input( INPUT_POST, "doencaPrevia") === "S" ? true : false;
  
  function calculaPremio( $codFaixaEtaria, $doencaPrevia) {
	  
    $valorFaixaPuro = 200 * pow( 1.5, $codFaixaEtaria);
    if( $doencaPrevia ) {
		
      $valorFinal = $valorFaixaPuro * 1.3;
    } else {
		
      $valorFinal = $valorFaixaPuro; 
    }
    return $valorFinal;
  }

  $premio = calculaPremio( $codFaixaEtaria, $doencaPrevia);
  $fmt = new NumberFormatter( 'pt_BR', NumberFormatter::CURRENCY );
?>
<!DOCTYPE html>
<html>
  <?php include_one("head.html"); ?>
  <body>

    <div class="container">

      <h2>Confira a cotação do seu seguro</h2>

      <p>Sr(a).<?= htmlentities($nome); ?> seu seguro está cotado em <?= $fmt->formatCurrency( $premio, 'BRL') ?></p>

    </div>
  </body>
</html>
