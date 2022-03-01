<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Poo_ver1.01</title>
    <link rel="stylesheet" href="stylesheet.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
</head>
<body>
    <?php
        $fp = fopen("count.dat","r");
        $count = fgets($fp);
        echo "<h1>あなたは{$count}人目だよ</h1>";
        $count += 1;
        $fp = fopen("count.dat","w");
        fwrite($fp,$count);
        fclose($fp);
    ?>
    <p id="explain">プーだよ　なでてね</p>

    <div id="img-center">
        <img src="image/PooStanding.jpg" id="standing">
        <img src="image/PooSleeping.jpg" id="sleeping">
    </div>

    <script type="text/javascript" src="jscript.js"></script>    

</body>
