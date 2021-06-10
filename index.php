<!DOCTYPE html>
<html lang='fr'>
	<head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>PHP ex 4.5 fonction</title>
    </head>
    <body >
        <p>
            <?php
            function functionConcatNumberString( $input1, $input2)
            {
                return $input1.$input2;
            }
            echo functionConcatNumberString(3," petits cochons");
            ?>
       </p>
    </body>
</html>