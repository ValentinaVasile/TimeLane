
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    
</head>
<body>
<?php
    var_dump($_POST);
    require_once('./controller/memory_card_controller.php');
    $memoryController = new MemoryController;
    $memoryController->createMemoryCardFromPOST($_POST);
?>
    
</body>
</html>

