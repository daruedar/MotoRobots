<?php
session_start();
//include("micro/MisClases/DriverBD.php");//include temporal mientras agrego produ a la BD
$t=session_id();
$carpeta='balancines/';
$titulo='BALANCINES';
$label1='REF:';
$label2='Precio Regular:';
$label3='Precio Especial';
$label4='Comprar';//boton comprar
$destinoform='micro/compras.php';//Cuando se da click en un boton comprar 
//$imagenes[] contiene la ruta dode se almacena cada imagen
$imagenes[0]='blc2521.png';
$imagenes[1]='blc2522.png';
$imagenes[2]='blc2501.png';

$imagenes[3]='blc2502.png';
$imagenes[4]='blc2503.png';
$imagenes[5]='blc2510.png';
//*********************************************************************

$nombres[0]='Balancin para moto:PULSAR-180/200/220 DISCOVER 135';
$nombres[1]='Balancin para moto modelo: CB-110';
$nombres[2]='Balancin para moto modelo: AKT-125';

$nombres[3]='Balancin para moto modelo: PULSAR UG/ PULSAR II';
$nombres[4]='Balancin para moto modelo: GN-125/ DR-200';
$nombres[5]='Balancin para moto modelo: CG-125/ AKT-125';

//********************************************************************
$referencias[0]='PLS-74';
$referencias[1]='PLS-75';
$referencias[2]='PLS-80';

$referencias[3]='PLS-81';
$referencias[4]='PLS-82';
$referencias[5]='PLS-84';
//*****************************************************
//ojo los precios  no admiten puntos decimales en la BD
$precios[0]='20.000';
$precios[1]='20.000';
$precios[2]='20.000';

$precios[3]='20.000';
$precios[4]='20.000';
$precios[5]='20.000';
//*****************************************************
$preciosb[0]='25.000';
$preciosb[1]='25.000';
$preciosb[2]='25.000';

$preciosb[3]='25.000';
$preciosb[4]='25.000';
$preciosb[5]='25.000';


//*****************************************************


$idproductos[0]='548';
$idproductos[1]='549';
$idproductos[2]='550';

$idproductos[3]='551';
$idproductos[4]='552';
$idproductos[5]='553';


//*****************************************************
$nombresaux[0]='Balancin para moto:PULSAR-180/200/220 DISCOVER 135';
$nombresaux[1]='Balancin para moto modelo: CB-110';
$nombresaux[2]='Balancin para moto modelo: AKT-125';

$nombresaux[3]='Balancin para moto modelo: PULSAR UG/ PULSAR II';
$nombresaux[4]='Balancin para moto modelo: GN-125/ DR-200';
$nombresaux[5]='Balancin para moto modelo: CG-125/ AKT-125';

$enlaces[0]='';
$enlaces[1]='';
$enlaces[2]='';

$enlaces[3]='';
$enlaces[4]='';
$enlaces[5]='';

$enlaces[6]='';
$enlaces[7]='';
$enlaces[8]='';

//*****************************************************
/*Solo para inserciones
$temporal= new DriverBD();
$enlace=mysqli_connect($temporal->gserv(),$temporal->guser(), $temporal->gpass(),$temporal->gnbd());
if(!$enlace){echo mysqli_connect_error();echo("error en shikamaru.addvisi");}
for($i=0;$i<6;$i++){
    $cadena1="INSERT INTO productos (nombre,imagen,precio) VALUES ('";
    $cadena2=$nombres[$i]."','".$imagenes[$i]."',".$precios[$i].")";
    $consulta=$cadena1.$cadena2;
    $resultado= mysqli_query($enlace,$consulta);
  }
  mysqli_close($enlace);
*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" style="height: 100%;" lang="en">
<head>
    <!--**********************EDITAR METADATOS Y PALABRAS CLAVES-->
    
<link href="autenticos/css.css" rel="stylesheet" type="text/css">
<link href="autenticos/translateelement.css"type="text/css" rel="stylesheet" charset="UTF-8" >
<link href="autenticos/buttons.css"rel="stylesheet" type="text/css" >
<link href="autenticos/cd3d4ebe845a93a761b3a60a6ae34052.css"rel="stylesheet" type="text/css"  media="all">
<link href="autenticos/a8d7bbe2916ed0f52877eaeee2bd058b.css"rel="stylesheet" type="text/css"  media="print">
<link rel="stylesheet" type="text/css" href="autenticos/flexslider.css" media="all">
<link rel="stylesheet" type="text/css" href="autenticos/font/css/font-awesome.min.css" media="all">

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">


<script src="autenticos/bat.js" async=""></script>
<script async="" src="autenticos/analytics.js"></script>
<script type="text/javascript" async="" src="autenticos/ga_002.js"></script>
<script type="text/javascript" async="" src="autenticos/114771.js"></script>
<script type="text/javascript" async="" src="autenticos/gate.js"></script>
<script type="text/javascript" src="autenticos/jquery-1.js"></script>
<script type="text/javascript" src="autenticos/superfish.js"></script>
<script type="text/javascript" src="autenticos/scripts.js"></script>

<script type="text/javascript" src="autenticos/prototype.js"></script>
<script type="text/javascript" src="autenticos/ccard.js"></script>
<script type="text/javascript" src="autenticos/validation.js"></script>
<script type="text/javascript" src="autenticos/builder.js"></script>
<script type="text/javascript" src="autenticos/effects.js"></script>
<script type="text/javascript" src="autenticos/dragdrop.js"></script>
<script type="text/javascript" src="autenticos/controls.js"></script>
<script type="text/javascript" src="autenticos/slider.js"></script>
<script type="text/javascript" src="autenticos/js.js"></script>
<script type="text/javascript" src="autenticos/form.js"></script>
<script type="text/javascript" src="autenticos/translate.js"></script>
<script type="text/javascript" src="autenticos/cookies.js"></script>
<script type="text/javascript" src="autenticos/cloud-zoom.js"></script>
<script type="text/javascript" src="autenticos/ga.js"></script>
<script type="text/javascript" src="autenticos/lightbox.js"></script>
<script type="text/javascript" src="autenticos/jquery_002.js"></script>
<script type="text/javascript" src="autenticos/jquery_004.js"></script>
<script type="text/javascript" src="autenticos/jquery_003.js"></script>
<script type="text/javascript" src="autenticos/bootstrap.js"></script>
<script type="text/javascript" src="autenticos/jquery_005.js"></script>
<script type="text/javascript" src="autenticos/jquery.js"></script>
<script type="text/javascript" src="autenticos/jquery_006.js"></script>
<script type="text/javascript" src="autenticos/catalogevent.js"></script>
<script type="text/javascript" src="autenticos/wishlist.js"></script>
<script type="text/javascript" src="autenticos/easytabs.js"></script>
<script type="text/javascript" src="autenticos/carousel.js"></script>
<script src="autenticos/integration-vendors.js"></script>
<script type="text/javascript" src="autenticos/deployment.js"></script>
<script type="text/javascript" charset="UTF-8" src="autenticos/main_es.js"></script>
<script type="text/javascript" charset="UTF-8" src="autenticos/element_main.js"></script>
<script type="text/javascript" src="autenticos/integration.js"></script>
<script type="text/javascript" src="autenticos/conversion.js"></script>
<script type="text/javascript" src="autenticos/element.js"></script>
<script src="autenticos/jquery_002.js"></script>
</head>
<body class="ps-static  cms-index-index cms-home" style="position: relative; min-height: 100%; top: 0px;">   
 <div class="wrapper ps-static en-lang-class">
   <noscript>
    <div class="global-site-notice noscript">
        <div class="notice-inner">
         <p><strong>JavaScript seems to be disabled in your browser.</strong><br />
            You must have JavaScript enabled in your browser to utilize the functionality of this website. </p>
        </div>
    </div>
   </noscript>
   <div class="page">
	<div class="shadow"></div>
	<div class="swipe-left"></div>
	<?php include "micro/motopartes/menusuperiormovil.php" ?>
	<div class="header-container">
	 <?php include "micro/motopartes/encabezado.php" ?>
	 <?php include "micro/motopartes/menumovil.php" ?>
	 <script type="text/javascript"><!--1.2.7-->
		jQuery(document).ready(function() {
		var $ = jQuery;var currentUrl = "";
				    if ((navigator.userAgent.match(/iPad/i))) {
				        $('li.level-top a').click(function(){
                     if($(this).parent().hasClass("level1")) return true;if(currentUrl != $(this).attr('href')){currentUrl = $(this).attr('href');return false;}});
				    }});
	 </script>
	 <div class="main-container col2-left-layout">
	  <div class="container">
	   <div class="row">
		<div class="col-xs-12">
		 <div class="main">
		  <div class="row">
		   <div class="col-main col-xs-12 col-sm-9">
			<div class="padding-s">
			 <div class="page-title category-title"><h1><?php echo($titulo); ?></h1></div>
			  <div class="category-products">
               <ul class="products-grid row first odd">
	            <li class="item first col-xs-12 col-sm-4">
	             <div class="wrapper-hover">
		          <a href="<?php echo($enlaces[0]); ?>" title="<?php echo($nombreaux[0]); ?>" class="product-image">
			       <img src="<?php echo($imagenes[0]); ?>" alt="<?php echo($nombreaux[0]); ?>">
				  </a>
		          <div class="product-shop">
			       <h2 class="product-name"><a href="<?php echo($enlaces[0]); ?>" title="<?php echo($nombreaux[0]); ?>">
					<?php echo($nombres[0]); ?></a></h2>									    
				   <h3 class="product-sku"><?php echo($label1);?> <span><?php echo($referencias[0]); ?></span></h3>
				   <div class="price-box">
					<p class="old-price">
					 <span class="price-label"><?php echo($label2);?></span>
	                 <span class="price" id="old-price-1802">$
				      <?php echo($preciosb[0]); ?></span>
					</p>
			        <p class="special-price">
					 <span class="price-label"><?php echo($label3);?></span>
				     <span class="price" id="product-price-1802">$<?php echo($precios[0]); ?></span>
					</p>
				   </div>				
			       <div class="actions">                  
				    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
		             <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[0]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">
					 <span><span><?php echo($label4); ?></span></span></button>
					 <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
			        </form>
				   </div>
				  </div>
				  <div class="label-product"> </div><div class="clear"></div>												
		         </div>
				</li>
	            <li class="item first col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
			      <a href="<?php echo($enlaces[1]); ?>" title="<?php echo($nombreaux[1]);?>" class="product-image">
			       <img src="<?php echo($imagenes[1]); ?>" alt="<?php echo($nombreaux[1]);?>">
				  </a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[1]); ?>" title="<?php echo($nombreaux[1]);?>">
			       <?php echo($nombres[1]); ?></a></h2>
					<h3 class="product-sku"><?php echo($label1);?> <span><?php echo($referencias[1]); ?></span></h3>
					<div class="price-box">
					 <p class="old-price"><span class="price-label"><?php echo($label2);?> </span>
					  <span class="price" id="old-price-1802">$
					  <?php echo($preciosb[1]); ?></span>
				     </p>
                     <p class="special-price">
					  <span class="price-label"><?php echo($label3);?> </span>
					  <span class="price" id="product-price-1802">$<?php echo($precios[1]); ?></span>
			         </p>
			        </div>				
					<div class="actions">
					 <form class="form7" method="post" action="<?php echo($destinoform); ?>">
					  <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[1]); ?>">
				      <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
				      <button type="submit" title="Agregar al carro" class="button btn-cart">
					   <span><span><?php echo($label4);?></span></span></button>
					  <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
				     </form>
					</div>
				  </div>
				  <div class="label-product"> </div><div class="clear"></div>												
				 </div>
				</li>
	            <li class="item last col-xs-12 col-sm-4">
                 <div class="wrapper-hover">
                  <a href="<?php echo($enlaces[2]); ?>" title="<?php echo($nombreaux[2]);?>" class="product-image">
                   <img src="<?php echo($imagenes[2]); ?>" alt="<?php echo($nombreaux[2]);?>"></a>
                  <div class="product-shop">
                   <h2 class="product-name"><a href="<?php echo($enlaces[2]); ?>" title="<?php echo($nombreaux[2]);?>">
                    <?php echo($nombres[2]); ?></a></h2>
                   <h3 class="product-sku"><?php echo($label1);?><span><?php echo($referencias[2]); ?></span></h3>
                   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2);?></span><span class="price" id="old-price-3030">$
                    <?php echo($preciosb[2]); ?></span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3);?></span>
                    <span class="price" id="product-price-3030">$<?php echo($precios[2]); ?></span></p>
                   </div>
                   <div class="actions">
                    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
				     <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[2]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
				     <button type="submit" title="Agregar al carro" class="button btn-cart">
                     <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
                  </div>
                  <div class="label-product"></div>
                  <div class="clear"></div>
                 </div>
			    </li>
			   </ul>
			   <ul class="products-grid row even">
			    <li class="item first col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[3]); ?>" title="<?php echo($nombreaux[3]);?>" class="product-image">
					<img src="<?php echo($imagenes[3]); ?>" alt="<?php echo($nombreaux[3]);?>"></a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[2]); ?>" title="<?php echo($nombreaux[3]);?>">
					<?php echo($nombres[3]); ?></a></h2>
				   <h3 class="product-sku"><?php echo($label1); ?> <span><?php echo($referencias[3]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[3]); ?></span></p>
                     <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[3]); ?></span></p>
                   </div>
                   <div class="actions">
                    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
					 <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[3]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">                      
                      <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
				  </div>
			      <div class="label-product"></div>
			      <div class="clear"></div>
				 </div>
			    </li>
				<li class="item col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
			      <a href="<?php echo($enlaces[4]); ?>" title="<?php echo($nombreaux[4]);?>" class="product-image">
				  <img src="<?phpecho($imagenes[4]); ?>" alt="<?php echo($nombreaux[4]);?>"></a>
    			  <div class="product-shop">
    			  <h2 class="product-name"><a href="<?php echo($enlaces[3]); ?>" title="<?php echo($nombreaux[4]);?>">
    		       <?php echo($nombres[4]); ?></a></h2>
    			  <h3 class="product-sku"><?php echo($label1); ?><span><?php echo($referencias[4]); ?></span></h3>
    	          <div class="price-box">
                   <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                    <span class="price" id="old-price-3030">$
                    <?php echo($preciosb[4]); ?></span></p>
                   <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                    <span class="price" id="product-price-3030">$
                    <?php echo($precios[4]); ?></span></p>
                  </div>
                  <div class="actions">                          	
                   <form class="form7" method="post" action="<?php echo($destinoform); ?>">
					<input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[4]); ?>">
					<input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					<button type="submit" title="Agregar al carro" class="button btn-cart">
                     <span><span><?php echo($label4); ?></span></span></button>
                    <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                   </form>
                  </div>
    			  </div>
    			  <div class="label-product"></div>             
    			  <div class="clear"></div>
			     </div>
				</li>
			    <li class="item last col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[5]); ?>" title="<?php echo($nombreaux[5]);?>" class="product-image">
				   <img src="<?php echo($imagenes[5]); ?>" alt="<?php echo($nombreaux[5]);?>"></a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[5]); ?>" title="<?php echo($nombreaux[5]);?>">
				   <?php echo($nombres[5]); ?></a></h2>
		           <h3 class="product-sku"><?php echo($label1); ?> <span><?php echo($referencias[5]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[5]); ?> </span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[5]); ?></span></p>
                   </div>
                   <div class="actions">
                    <form class="form7" method="post" action="<?php echo($destinoform); ?>">
				     <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[5]); ?>">
				     <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">         
                      <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
				  </div>
			      <div class="label-product"></div>            
				  <div class="clear"></div>
				 </div>
			    </li>
			   </ul>
			   <ul class="products-grid row odd">
				<li class="item first col-xs-12 col-sm-4">
			     <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[6]); ?>" title="<?php echo($nombreaux[6]);?>" class="product-image">
					<img src="<?php echo($imagenes[6]); ?>" alt="<?php echo($nombreaux[6]);?>"></a>
				  <div class="product-shop">
				   <h2 class="product-name"><a href="<?php echo($enlaces[6]); ?>" title="<?php echo($nombreaux[6]);?>">
		            <?php echo($nombres[6]); ?></a></h2>
				   <h3 class="product-sku"><?php echo($label1);?><span><?php echo($referencias[6]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2);?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[6]); ?> </span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3);?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[6]); ?></span></p>
                   </div>
                   <div class="actions">                                          								
                    <form class="form7" method="post" action="<?php echo($destinoform);?>">
					 <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[6]); ?>">
		             <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
			         <button type="submit" title="Agregar al carro" class="button btn-cart">
                      <span><span><?php echo($label4); ?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
		          </div>
				  <div class="label-product"> </div><div class="clear"></div>
				 </div>
			    </li>
				<li class="item col-xs-12 col-sm-4">
				 <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[7]); ?>" title="<?php echo($nombreaux[7]);?>" class="product-image">
			       <img src="<?php echo($imagenes[7]); ?>" alt="<?php echo($nombreaux[7]);?>"></a>
    			  <div class="product-shop">
    	           <h2 class="product-name"><a href="" title="<?php echo($nombreaux[7]);?>">
    			    <?php echo($nombres[7]); ?></a></h2>
    			   <h3 class="product-sku"><?php echo($label1); ?> <span><?php echo($referencias[7]); ?></span></h3>
					<div class="price-box">
                     <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                      <span class="price" id="old-price-3030">$
                      <?php echo($preciosb[7]); ?> </span></p>
                     <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                      <span class="price" id="product-price-3030">$
                      <?php echo($precios[7]); ?></span></p>
                    </div>
                    <div class="actions">
                     <form class="form7" method="post" action="<?php echo($destinoform);?>">
					  <input class="total" type="hidden" name="motorepuesto" value="7">
					  <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					  <button type="submit" title="Agregar al carro" class="button btn-cart">                               					
                      <span><span><?php echo($label4);?></span></span></button>
                      <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                     </form>
                    </div>
    			  </div>
    			  <div class="label-product"></div><div class="clear"></div>
				 </div>
			    </li>
	            <li class="item last col-xs-12 col-sm-4">
			     <div class="wrapper-hover">
				  <a href="<?php echo($enlaces[8]); ?>" title="<?php echo($nombreaux[8]);?>" class="product-image">
				   <img src="<?php  echo($imagenes[8]); ?>" alt="<?php echo($nombreaux[8]);?>"></a>
				  <div class="product-shop">
			       <h2 class="product-name"><a href="" title="<?php echo($nombreaux[8]);?>">
					<?php echo($nombres[8]); ?></a></h2>
				   <h3 class="product-sku"><?php echo($label1); ?><span><?php echo($referencias[8]); ?></span></h3>
				   <div class="price-box">
                    <p class="old-price"><span class="price-label"><?php echo($label2); ?></span>
                     <span class="price" id="old-price-3030">$
                     <?php echo($preciosb[8]); ?> </span></p>
                    <p class="special-price"><span class="price-label"><?php echo($label3); ?></span>
                     <span class="price" id="product-price-3030">$
                     <?php echo($precios[8]); ?></span></p>
                   </div>
                   <div class="actions">                          							
                    <form class="form7" method="post" action="<?php echo($destinoform);?>">
					 <input class="total" type="hidden" name="motorepuesto" value="<?php echo($idproductos[8]); ?>">
					 <input class="total" type="hidden" name="repuestodemoto" value="<?php echo($t); ?>">
					 <button type="submit" title="Agregar al carro" class="button btn-cart">
                     <span><span><?php echo($label4);?></span></span></button>
                     <button type="button" title="Details" class="button btn-details" onclick="setLocation('')"><span><span>Details</span></span></button>
                    </form>
                   </div>
                  </div>
				  <div class="label-product"> 	</div>            
				  <div class="clear"></div>
			     </div>
			    </li>		                                    
			   </ul>			   
			   <script type="text/javascript">decorateGeneric($$('ul.products-grid'), ['odd','even','first','last'])</script>			                        
			  </div>											
		      <div class="std"><p></p>
               <div class="magestore-bannerslider">
		        <div class="magestore-bannerslider-standard">
                 <script src="micro/js/jquery_002.js"></script>
	             <link rel="stylesheet" type="text/css" href="micro/css/flexslider.css" media="all">
	             <script type="text/javascript">   
		            var j7 = jQuery.noConflict();
		            j7(window).load(function() {j7('.flexslider-7-1').flexslider({animation: "fade",slideshowSpeed: 4500}); });           
	             </script>         
                </div>    
               </div><p></p>
               <div style="line-height: 8px;">&nbsp;</div>          
                <script type="text/javascript">
                    var google_tag_params = {
        	                                                ecomm_prodid: '',
        	                                                ecomm_pagetype: 'home',
        	                                                ecomm_totalvalue: ''
                                                            };
                                                            jQuery(document).ready(function(e){
        	                                            var $ = jQuery;
                                                    	
                                                    	$('.bannerslider-image-text').each(function(index, element){
                                                            var p = $(this).parent();
                                                    		if( $(p).find('a').length == 1 ){
                                                    			var a = $(p).find('a').first();
                                                    			var link = $(a).attr('href');
                                                    			$(this).css('cursor', 'pointer');
                                                    			$(this).click(function(e) {
                                                    				window.location.href = link;
                                                    			});
                                                    		}
                                                        });
                                                    	
                                                    	$('.bannerslider-image-text *').each(function(index, element){
                                                            $(this).attr('fontsize', $(this).css('font-size'));
                                                        });
                                                    	
                                                    	$('.bannerslider-image-text h1').css({'margin':'0px','padding':'0px'});
                                                    	$('.bannerslider-image-text h3').css({'margin':'0px','padding':'0px'});
                                                    	$('.bannerslider-image-text li').css({'margin':'0px','padding':'0px'});
                                                    	
                                                    	function banner_limit_size(maxSize, minSize){
                                                    		var result = ( ($('.bannerslider-image-text').width()/973) * maxSize < minSize) ? minSize : parseInt(($('.bannerslider-image-text').width()/973) * maxSize);
                                                    		return result;
                                                    	}
                                                    	function banner_text_resize(){
                                                    		var banner_text_mode = ( $('.bannerslider-image-text').width() >= 600 ) ? 'block' : 'none';
                                                    		$('.bannerslider-image-text ul, .bannerslider-image-text li, .bannerslider-image-text p').css('display', banner_text_mode);
                                                    		
                                                    		var scale = $('.bannerslider-image-text').width()/973;
                                                    		$('.bannerslider-image-text *').each(function(index, element){
                                                    			$(this).css('font-size', parseInt($(this).attr('fontsize'))*scale+"px");
                                                    		});
                                                    		
                                                    	}
                                                    	$(window).resize(function(e) {
                                                            banner_text_resize();
                                                        });
                                                    	$(window).load(function(e) {
                                                            banner_text_resize();
                                                        });
                                                    });
                                                    // ]]>
                </script>
               </div>
               <script type="text/javascript">
	                                            var jnew = jQuery.noConflict();
		                                        jnew(window).load(function(){	var width = jnew(window).width();
										        if(width <= 767){itemWidth = null;}else{itemWidth = 290;}
									        	jnew('.product-new-list').flexslider({animation: "slide",animationLoop: true,move:1,itemWidth: itemWidth,});});
               </script>                                
	           <script type="text/javascript">
		                                        var jbest = jQuery.noConflict();
		                                        jbest(window).load(function(){
									        	var width = jnew(window).width();
										        if(width <= 767){itemWidth = null;}else{itemWidth = 290;}
										        jbest('.product-bestseller-list').flexslider({animation: "slide",animationLoop: true,move:1,itemWidth: itemWidth,});});
	           </script>									
            </div><!--Fin de la Clase padding-s-->
           </div>
		   <?php include "micro/motopartes/menuizq2.php" ?>
		  </div><!--Fin de clase row-->
	     </div><!--Fin de clase main-->
	    </div><!--Fin de clase col-xs-12-->
	   </div><!--Fin de clase row-->
      </div><!--Fin de clase container-->
     </div><!--main-container   El mas denso-->
	 <?php include "micro/motopartes/foter.php" ?>
	</div><!--Fin del Page-->
	</div>
    <?php include "micro/motopartes/ventas.php" ?>
</body>
</html>