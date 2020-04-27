<!DOCTYPE html>
<html>
	<head>
		<title>l'element du canvas</title>
		<meta charset="utf-8">
		<style type="text/css">
			body{
				margin: 0px;
				padding: 0px;
			}

			#canvas1{
				background-color: orange;
			}
		</style>
	</head>
	<body>
		<canvas id='canvas1' width='250' height='100'></canvas>

		<script type="text/javascript">
			var canvas = document.getElementById('canvas1');
			var contexte = canvas.getContext('2d');
			contexte.linewidth = '5';
			contexte.strokeStyle = '#A3A';
			contexte.strokeRect(250, 125, 100); 
		</script>
	</body>