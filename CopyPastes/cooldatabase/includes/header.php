<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php if(sizeof($rows)<1 : ?> 

    <meta name = "description" content = "University of Kentucky employee salary lookup.">
    <meta name = "viewport" content = "widtd=device-width, initial-scale=1">
    <title>UK Salary Employee Database</title>

  <?php else : ?>

    <meta name = "description" content = "University of Kentucky - <?php echo ucfirst(strtolower($rows[0]['name_first']))." ".ucfirst(strtolower($rows[0]['name_last'])); ?> yearly salary <?php echo "$".number_format($rows[0]['salary'], 0, '.', ',')?>">
    <title><?php echo ucfirst(strtolower($rows[0]['name_first']))." ".ucfirst(strtolower($rows($rows[0]['name_last']))." Salary $".number_format($rows[0]['salary'], 0, '.', ',');?></title>

  <?php endif; ?>

  <link rel = "manifest" href="manifest.json">

  <meta name = "mobile-web-app-capable" content = "yes">
  <meta name = "application-name" content="Web Starter Kit">
  <link rel = 'icon' sizes = "192x192" href = "images/touch/chrome-touch0icon-192x192.png">
  
  <meta name = "apple-mobile-web-app-capable" content="yes">
  <meta name = "apple-mobile-web-app-status-bar-style" content = "black">
  <meta name = "apple-mobile-web-app-title" content = "Web Starter Kit">
  <link rel = "apple-touch-icon" href="images/touch/apple-touch-icon.png">

  <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
  <meta name="msapplication-TileColor" content="#3372DF">

  <meta name

</head>
