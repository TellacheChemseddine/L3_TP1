
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
    <?php
    $x=0;
    $E=0.01;
    while($x<=1){
        if(abs(p($x))<=0) {
            echo $x;
        }
    }
function p ($y){
    return pow($y,2)- (9/20)* $y + 1/20 ;
}
    ?>
    </body>
    </html>
