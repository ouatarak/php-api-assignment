<?php
  
  $networksJSONString = file_get_contents( 'http://api.citybik.es/v2/networks' );
  
  $networksObject = json_decode( $networksJSONString );
 
  $networks = $networksObject->networks[0];
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>External API PHP Test</title>
</head>
<body>
  <h1>External API PHP Test</h1>
  
  <h2>CFL API Documentation</h2>
  <dl>
    <dt>Id</dt>
    <dd><?php echo $networks->id; ?></dd>
    
    <dt>Location</dt>
    <dd>
      <?php echo $networks->location->city; ?>
      <?php echo $networks->location->latitude; ?>
      <?php echo $networks->location->longitude; ?>
    </dd>
    
    <dt>Country</dt>
    <dd><?php echo $networks->location->country; ?></dd>
   
  </dl>
</body>
</html>
