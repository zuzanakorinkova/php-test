<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="weight_700 mt_2">
          Signup
        </div> 
        <form class="mt_1" onsubmit=" signup(); return false;">
          <input type="text" placeholder="name"
          data-type="string" data-min="2" data-max="20" name="name">
          <input type="password" placeholder="password"
          data-type ="string" data-min="2" data-max="5" name="password">
          <button>signup</button>
        </form>               
      </div>
      <script src="js/app.js"></script>
</body>
</html>