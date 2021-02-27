<?php
require __DIR__ .  '/vendor/autoload.php';

// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181');
MercadoPago\SDK::setIntegratorId('dev_24c65fb163bf11ea96500242ac130004');


// Crea un objeto de preferencia
$preference = new MercadoPago\Preference();
$data = MercadoPago\Payment::find_by_id($collection_id);

?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Success</title>
<script src="https://www.mercadopago.com/v2/security.js" view=""></script>
</head>
<body>
<p>PAYMENT TYPE: <?php echo isset($_GET['payment_type']) ? $_GET['payment_type'] : '';?></p>
<p>EXTERNAL REFERENCE: <?php echo isset($_GET['external_reference']) ? $_GET['external_reference'] : '';?></p>
<p>PAYMENT ID: <?php echo isset($_GET['collection_id']) ? $_GET['collection_id'] : '';?></p>
<p>SUCCESS</p>
</body>
</html>