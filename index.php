<?php 
	require_once('include.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" >
	<title>AltmerWeb</title>

	<link href="lib/bootstrap/css/flatly.min.css" rel="stylesheet"> <!--inclui o css-->
	<link href="lib/bootstrap/css/flatly.css" rel="stylesheet"> <!--inclui o css-->
	<link rel="stylesheet" type="text/css" href="lib/dataTable/css/bootstrap-data-table.css">
	<link rel="stylesheet" type="text/css" href="lib/sweetAlert/lib/sweet-alert.css">

	<script src="lib/bootstrap/js/jQuery.js"></script>
	<script src="lib/sweetAlert/lib/sweet-alert.min.js"></script>
	<script type="text/javascript" src="lib/mask/js/jquery.maskedinput.js"></script>
	
</head>
<?php //require_once('menu.php');?>
<body>
	<?php
		require_once('src/php/layout/topo.php');
	?>
	<div class="col-md-10">
		<?php 

		    $routeList = require_once 'config/routes.config.php';
    
            function verificaRota($routeList,$reqRota){
                
                $validate = false;
                
                foreach ($routeList as $rota){
                    if($rota['routename']==$reqRota){
                        $validate = true;
                        require_once $rota['file'].'.php';
                    }
                }
            
                if($validate==false){
                    require_once 'src/php/layout/404.php';
                }
            }
            
            $rota = $_SERVER['REQUEST_URI'];
            
            verificaRota($routeList, $rota);
		?>
		
	   <?php include_once ('src/php/layout/rodape.php');?>
    </div>
    
    <script src="lib/bootstrap/js/jQuery.js"></script> <!--inclui o jquery-->
	<script src="lib/dataTable/js/jquery.dataTables.min.js"></script>
	<script src="lib/mask/js/jquery.maskedinput.js"></script>
	<script src="lib/dataTable/js/dataTables.bootstrap.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script> <!--iclui o js-->
</body>    
</html>
