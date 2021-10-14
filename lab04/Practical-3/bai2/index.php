<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2 </title>
</head>
<body>
    <?php
    include('logger.php');
    $logger = new FileLogger('./log.txt','w');
    $logger->log('PHP interface is awsome');
    $logger = [
        new FileLogger('.log.txt'),
        new DataBaseLogger()
    ];
    foreach($logger as  $log){
        $log->log(' massage');
    }
    ?>
</body>
</html>