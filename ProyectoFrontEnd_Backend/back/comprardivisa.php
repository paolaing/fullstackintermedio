<?php
    
    if (isset($_GET['comprar'])) {
        $divisacomprar = $_GET['divisacomprar'];
        $moneda_escoger = $_GET['moneda_escoger'];
        $totalpagar = $_GET['totalpagar'];
        $moneda_pagar = $_GET['moneda_pagar'];

        switch (moneda_escoge) {
	case '1':
		$total=$divisacomprar*4560;
		break;
	case '2':
		$total=$divisacomprar*4760;
		break;
	default:
	
		break;
}



        echo 
        'Total a pagar: '.$total.'Pesos colombianos'.
        
    }
      
    ?>