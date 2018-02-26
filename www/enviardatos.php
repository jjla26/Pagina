<?php
session_start();

date_default_timezone_set('America/Santiago');
$current_date = date("Y-m-d");



if (isset($_SESSION['user'])){
//    $fechaGuardada = $_SESSION['ultimoAcceso'];
//
//    $ahora = date("Y-n-j H:i:s");
//    if($_SESSION['user']!=true){
//        echo '<script>window.location="admin"</script>';
//        return false;
//        
//    }else{
//$tiempo_transcurrido = (strtotime($ahora)-strtotime($fechaGuardada));
//if($tiempo_transcurrido >= 8640){ // 1 x 60 x 60 = 1 horas...
//session_destroy();
//
//echo '<script>alert("Su sesion ha caducado");window.location="admin"</script>'; // 
//
//return false;
//
//    
//}else{$_SESSION["ultimoAcceso"] = $ahora;}
//}
}else{
echo '<script>window.location="admin"</script>';
}
//
?>


<!doctype html>
<html lang="es">
	<head>
		<title> Aguacatecambios </title>
		
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
		
		<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
		<link rel="stylesheet" href="css/bootstrap.css">
		
		<link rel="stylesheet" href="css/fontello.css">
		<link rel="stylesheet" href="css/enviardatos.css">
	    
	    <script src="js/mostrarsolicitud.js"></script>
		<script src="js/mostrar.js"></script>
		<script src="js/calcular.js"></script>
		<script src="js/calcular1.js"></script>
		<script src="js/calcularofic.js"></script>
		<script src="js/cambiarcampos.js"></script>
		<script src="js/cambiarcampos2.js"></script>
		<script src="js/cambiarcampos3.js"></script>
		
	</head>
<body>
          <div>
        
            <h4>Bienvenidos <?php echo $_SESSION['user']; ?></h4>
            
          
         </div>
   
        <div id="enviarp">
            <h4><a href="destroyofic.php">Cerrar Sesion</a></h4> 
        </div>

        <div id="login" >
            <div id="logo">
            <a href="transaccionesofic.php"><img src="img/logo.png"></a>
            </div>
        </div>
        
        <?php
        $ids = $_POST['ids'];
        $cliente = $_POST['cliente1'];
        $rut= $_POST['rut1'];
        $nombre= $_POST['nombre1'];
        $nacionalidad= $_POST['nacionalidad1'];
        $cedula= $_POST['cedula1'];
        $bancodest= $_POST['cuentadest1'];
        $numcuenta= $_POST['numdest1'];
        $email= $_POST['email1'];
        $telefono= $_POST['telefono1'];
        
        include 'conexion.php';
        $actualizar = "UPDATE transacciones1 SET rut='$rut', email='$email', telefono='$telefono' WHERE ID='$ids'";
        mysqli_query($conexion, $actualizar)
        
        ?>

        <div id="form" class=" col-xs-4 col-xs-offset-1">
            <h1>Ingrese Datos del cliente</h1>
            
                <form name="formul0" method="POST" action="guardarDatosOfic.php">
                
                     <div id="campos" class="">
                            <label>TASA</label> 
				    	    <input type="text" class="form-control" name="tasa" value="<?php
                                include 'conexion.php';
                                $tasa = "SELECT Tasa FROM Tasa2";
                                $tasa = mysqli_query($conexion,$tasa);
                                $tasa = mysqli_fetch_array($tasa);
                                $tasa= $tasa['Tasa'];
                                
                                echo $tasa;
                                
                                ?>" readonly>
                     </div>
                    
                     <div id="campos" class="">
                        <label>TASA ESPECIAL</label> 
				    	
				    	<input type="text" class="form-control" name="tasaesp" value="<?php
                                include 'conexion.php';
                                $tasa1 = "SELECT Tasa FROM Tasa3";
                                $tasa1 = mysqli_query($conexion,$tasa1);
                                $tasa1 = mysqli_fetch_array($tasa1);
                                $tasa1 = $tasa1['Tasa'];
                                
                                echo $tasa1;
                                
                                ?>" readonly>
                    </div>    
                  <div id="campos" class="">
				        <label>Transferencia</label>
			   	       <select id="Transferencia" name="transf"  class="form-control" onchange ="cambiarcampos2(this)" >
				           <option value="No Verificado">No verificado</option>
				            <option value="Pendiente">Pendiente</option>
					   </select>
          	        </div>
                    
                    <div id="" class="">
		    		   <label>Forma de pago</label> 
                       <select id="FormaPago" name="formaPago" class="form-control" onchange="cambiarcampos11(this)" required>
				           <option  value="">Seleccionar</option>
					       <option  value="Efectivo">Efectivo</option>
                           <option  value="DepositoRut">Deposito a Cuenta Rut</option>
                           <option  value="DepositoVista">Deposito a Cuenta Vista</option>
                           <option  value="DepositoAhorro">Deposito a Cuenta Ahorro</option>
                        </select>
				    </div>
                    
                    
                    
                    <div id="campos" class="">
                        <label>Cliente</label> 
				    	<input type="text" class="form-control" name="cliente" value= "<?php echo $cliente; ?>" readonly required>
                    </div>
                    
                    <div id="campos" class="">
                        <label>RUT, Pasaporte o Cedula</label> 
				    	<input type="text" class="form-control" name="rut" value= "<?php echo $rut; ?>" readonly required>
                    </div>
                    
                    <div id="comprobante1" class="">
                        <label>Numero de Comprobante</label> 
				    	<input type="text" class="form-control" name="comprobante" required >
                    </div>
                        
                    <div id="campos" class="">
                        <label>Nombre y Apellido o Razón Social</label> 
				    	<input type="text" class="form-control" name="nombre" value= "<?php echo $nombre; ?>" readonly required>
                    </div>
                    <div id="campos" class="">
				        <label>Cedula de Identidad</label>
			   	       <input id="nacionalidad" name="tipodoc" class="form-control" value= "<?php echo $nacionalidad; ?>" readonly required>
				            
          	          <input id="cedula" type="text" class="form-control" name="iddoc" value= "<?php echo $cedula; ?>" readonly required>
				    </div>
				    
				    
                    <div id="BancoBeneficiario" class="">
		    		   <label>Banco del Beneficiario</label> 
                       <input type="text" class="form-control" name="banco" value= "<?php echo $bancodest; ?>" readonly required>
			        </div>
                    <div id="CuentaBeneficiario" class="">
				        <label>Numero de Cuenta Bancaria</label>
				    	<input type="text" class="form-control" name="cuenta" value= "<?php echo $numcuenta; ?>" readonly required>
				    </div>
				   
				   
				    
				    <div id="campos" class="" >
    				    <label>Total de pesos depositados</label>
		    			<input type="number" class="form-control" name="totalpesos" onchange="calcularofic()" >
	    			</div>
				   
				    <div id="campos" class="" >
    				    <label>Cantidad de Pesos a Enviar</label>
		    			<input type="number" class="form-control" name="pesos2" onchange="calcularofic()" >
	    			</div>
                    
                    <div id="campos" class="" >
    				    <label>Cantidad de Bs. a Recibir</label>
		    			<input type="number"  class="form-control" name="bolivares2" readonly>
	    			</div>
				   
				    
                    <div id="campos" class="">
				        <label>Email de Quien Envía</label>
    					<input type="Email" class="form-control" value= "<?php echo $email; ?>" name="email" readonly>
    				</div>
                    <div id="campos" class="">
				        <label>Teléfono de Quien Envía</label>
    					<input type="text" class="form-control" value= "<?php echo $telefono; ?>" name="telefono" readonly >
    				</div>
    				
                    <div id="enviarp" method="post" >
    			    	<button id="botones" class="form-control" >Enviar Datos</button> 
                    </div>
                    
                </form>
                
                <h2>Revisa los Datos Antes de Enviar</h2>

        </div>
        
        
       
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    
   
</body>


</html>