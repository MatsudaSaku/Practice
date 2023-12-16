<body>
    <?php
    $airports = ['Haneda', 'Narita', 'Chubu'];
    $airports[] = 'Kansai';
    $airports[] = 'Naha';
    $airports[2] = 'Sendai'
    ?>

    
    <p><?=$airports[0]?></p>
    <p><?=$airports[1]?></p>
    <p><?=$airports[2]?></p>
    <p><?=$airports[3]?></p>
    <p><pre><?php print_r($airports);?></pre></p>
</body>