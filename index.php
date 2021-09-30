<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $matriz  = [[]];
        $table = '';
        $table .= '<table border="1px">';
        $tamanho = rand(10,30); 
        for ($linha=0; $linha<$tamanho; $linha++) {
            $table .= '<tr>';
            for ($coluna=0; $coluna<$tamanho; $coluna++) {
                $matriz[$linha][$coluna] = rand(0,100);
              
                $table .= '<td>' . $matriz[$linha][$coluna] . '';
            }
            $table .= '</tr>';
        }
        $table .= '</table>';

        echo $table;
    ?>
</body>
</html>