<html>
<head>
	<meta charset="utf-8">
	<title>Ejemplo Pagina 2 Librerias</title>
</head>
<body>
	<?php include("21_libreria.phtml") ?>
	<?php CabeceraPagina(); ?>
	Esta es otra página<BR><BR>
	completamente distinta<BR><BR>
	pero comparte el pie y la cabecera con la otra.<BR><BR>
	<?php PiePagina(); ?>
</body>
</html>