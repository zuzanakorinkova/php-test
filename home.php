
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php // tweet data - iUserId - _key - message
   require_once(__DIR__.'/db.php');
   $q = $db->prepare('SELECT * FROM users'); // * = all
   $q->execute();
   $aRows = $q->fetchAll();
  foreach($aRows as $aRow){ 
  //SERVER SITE RENDERING  ?> 
      
        <div class="s2322" id="<?= $aRow[0]?>" class="user">
        <div class="s2321">@ <?= $aRow[1]?></div>
        </div>  
  <?php
  }
  ?>
    </div>

<script src="js/app.js"></script>
</body>
</html>