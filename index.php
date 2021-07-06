<!DOCTYPE html>

<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
        table {
            border: 5px groove #000;
            border-collapse: collapse;
            outline-offset: 7px;
            outline: 2px groove #000;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        td {
            width: 70px;
            height: 70px;


        }

        </style>
    </head>

    <body>
        <?php 
           echo'<table >';
              for($i=0;$i<8;$i++){
                  //print row 
                  echo' <tr>';
                for($j=0;$j<8;$j++){
                   //print cols
                   if(($i+$j)%2 == 0){
                    echo '<td style="background-color: #fff; "> </td>';
                }
                   else{
                        echo'<td style="background-color:#000;"> </td>';
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
