<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>

    <body>
        <?php 
        echo'<table style=" border=1px;border-collapse: collapse;">';
           for($i=0;$i<=8;$i++){
               //print row 
              echo' <tr>';
               for($j=0;$j<=8;$j++){
                   //print cols
                   if(($i+$j)%2 == 0){
                    echo '<td style="background-color: #000; width = 120px; height = 120px;"> </td>';
                }
                   else{
                        echo'<td style="background-color:#fff;width = 120px; height = 120px;"> </td>';
                   }
               }
               echo'</tr>';
           }
           echo' </table>';
        ?>
        </table>
        <script src="" async defer>
        </script>
    </body>

</html>
