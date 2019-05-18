
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="baitap.php" metohd="GET">
            <div>
                Number A: <input type="number" placeholder="Enter number A" name="numA">
            </div>
            <div>
                Number B: <input type="number" placeholder="Enter number B" name="numB">
            </div>
            <div>
                Calculation:
                <select name="calc">
                    <option value="add">Addition</option>
                    <option value="sub">Subtraction</option>
                    <option value="mul">Multiplication</option>
                    <option value="div">Division</option>
                </select>
            </div>
            <div><input name="submit" type="submit" value="Calc" > </div>
        </form>
             <?php
            if(isset($_GET["submit"])){   
                $snumA = $_GET['numA'];
                $snumB = $_GET['numB'];      
                
            }       
            if(isset($_GET["submit"])){
                $cOption = $_GET["calc"];
                switch ($cOption) {
                    case "add":
                        echo "$snumA + $snumB = ".($snumA+$snumB);
                        break;
                    case "sub":
                        echo "$snumA - $snumB = ".($snumA-$snumB);
                        break;
                    case "mul":
                        echo "$snumA x $snumB = ".($snumA*$snumB);
                        break;
                    case "div":
                        echo "$snumA / $snumB = ".($snumA/$snumB);
                        break;                      
                   default: 
                       break;            
            }
               }
               ?>
            
         
    </body>
</html>
