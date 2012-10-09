<html>
<head>

	<?php
	
	$ctrl->files->includeGlobalCss('bootstrap-responsive.css');
	$ctrl->files->includeGlobalCss('default.css');
	$ctrl->files->includeGlobalCss('stylo.css');
	echo '<link href="http://fonts.googleapis.com/css?family=Questrial" rel="stylesheet" type="text/css">';
	
	$ctrl->files->includeGlobalJs('jquery.js');
	$ctrl->files->includeGlobalJs('bootstrap.js');
	$ctrl->files->includeGlobalJs('utility.js');
	$ctrl->files->includeGlobalJs('jquery.history.js');
	$ctrl->files->includeGlobalJs('jquery-ui-1.8.18.custom.min.js');
	$ctrl->files->includeGlobalJs('jquery-ui-timepicker-addon.js');
	$ctrl->files->includeGlobalJs('jquery.cookie.js');
	$ctrl->files->includeGlobalJs('validation.js');
	$ctrl->files->includeLanguajes();
	
	?>
	<script>
		var lat = $.ajax({
				url: "Ajax.php?function=curl",
				async: false
			}).responseText;
	</script>
	<script> alert (lat); </script>
</head>
<body>

</body>
</html>