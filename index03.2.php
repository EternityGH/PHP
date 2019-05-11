<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ban co vua</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banco">
        <?php
                    
            for($i = 0; $i < 40 ; $i++){
                if($i<8){
                    if($i%2 == 0){
                        echo '<div class="oco trang"></div>';
                    }else{
                        echo '<div class="oco den"></div>';
                    }
                }elseif($i<16){
                    if($i%2 == 0){
                        echo '<div class="oco den"></div>';
                    }else{
                        echo '<div class="oco trang"></div>';
                    }   
                }elseif($i<24){
                    if($i%2 == 0){
                        echo '<div class="oco trang"></div>';
                    }else{
                        echo '<div class="oco den"></div>';
                    }
                }elseif($i<32){
                    if($i%2 == 0){
                        echo '<div class="oco den"></div>';
                    }else{
                        echo '<div class="oco trang"></div>';
                    }
                }elseif($i<40){
                    if($i%2 == 0){
                        echo '<div class="oco trang"></div>';
                    }else{
                        echo '<div class="oco den"></div>';
                    }
                }elseif($i<48){
                    if($i%2 == 0){
                        echo '<div class="oco den"></div>';
                    }else{
                        echo '<div class="oco trang"></div>';
                    }
                }
            }
        ?>
        
        
    </div>
</body>
</html>