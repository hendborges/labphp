<?php
 session_start();
 $_SESSION["nome"] = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_STRING);
?>
<html>
<body>
<p>Sessão iniciada.</p>
<a href="mostra_valor_sessao.php">Mostra o valor de sessao</a>
</body>
</html>
