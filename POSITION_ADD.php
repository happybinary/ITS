
<html>
    
    <head>
		<title></title>
	
		<script type="text/javascript"
				src="jquery-2.1.4.min.js"> </script>
		<link rel="stylesheet" href="MAINTENANCE.css">
		<script>
			
			
		
			$(function() {
				$.post("POSITION_LIST.php",
					  
					  function(data) {
					$("#display").html(data);
				});
			});
		</script>
		
	
		
		
	</head>

<form method="post" action="POSITION_ADD_PROCESS.php">
	
	<input type="text" name="pos_id" value="POS">
	<input type="text" name="pos_name">
	

    
    
    
    
    <input type="submit" value="oo">
    <br>
    	<div id = "display"></div>
			
	
</form>

</html>

<?php





?>