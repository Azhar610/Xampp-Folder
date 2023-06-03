<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Demo</title>
    </head>
    <body>
        <?php
        echo 'Kode PHP di sini';
        // ...
        ?>
        <p> Dokumen HTML </p>
        <?php
        echo 'Kode PHP di sini';
        // ...
        ?>
        <p> Kode <?php echo "PHP";?> di HTML </p>

        <?php
        
        $bil = 3;
        echo $bil;
        echo "\n";
        var_dump($bil);
        echo "\n";
        print_r($bil);

        echo nl2br("\n");

        $var = "";
        var_dump($var);

        echo nl2br("\n");
        
        $var = null;
        var_dump($var);
        echo nl2br("\n");
        ?>

        <?php
        $bil = 3;
        var_dump(is_int($bil));
        echo nl2br("\n");

        $var = "";
        var_dump(is_string($var));
        echo nl2br("\n");
        
        ?>

        <?php
        $str = '123abc';
        
        $bil = (int) $str; // $bil = 123
        echo $bil;
        echo nl2br("\n");

        echo gettype($str);
        echo nl2br("\n");

        echo gettype($bil);
        
        ?>
    </body>
</html>