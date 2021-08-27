<?php if (isset($_SESSION['pedido']) && $_SESSION['pedido'] == 'complete'):?>
<h1>Tu pedido se ha confirmado</h1>

<p>Tu pedido ha sido guardado con exito, una vez completes la transferencia bancaria con el coste del pedido, será
    procesado y enviado</p>


<?php else:?>

<h1>Tu pedido no ha podido completarse</h1>

<p>Intenta nuevamente, tu pedido no se pudo completar</p>

<?php endif; ?>