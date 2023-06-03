<!DOCTYPE html>
<html>
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

            echo '<br />';

            $var = "";
            var_dump($var);

            echo '<br />';
            
            $var = null;
            var_dump($var);
            echo '<br />';
        ?>

        <?php
            $bil = 3;
            var_dump(is_int($bil));
            echo '<br />';

            $var = "";
            var_dump(is_string($var));
            echo '<br />';
        
        ?>

        <?php
            $str = '123abc';
            
            $bil = (int) $str; // $bil = 123
            echo $bil;
            echo '<br />';

            echo gettype($str);
            echo '<br />';

            echo gettype($bil);
            echo '<br />';
        
        ?>

        <?php
            $a = 10;
            $b = 5;

            if ($a > $b) {
                echo 'a lebih besar dari b';
            } elseif ($a == $b) {
                echo 'a sama dengan b';
            } else {
                echo 'a kurang dari b';
            }
            
            echo '<br />';
        ?>
        <?php
            $i = 0;
            if ($i == 0) {
                echo "i equals 0";
            } elseif ($i == 1) {
                echo "i equals 1";
            } elseif ($i == 2) {
                echo "i equals 2";
            }
            echo '<br />';

            switch ($i) {
                case 0:
                    echo "i equals 0";
                    break;
                case 1:
                    echo "i equals 1";
                    break;
                case 2:
                    echo "i equals 2";
                    break;
            }
            echo '<br />';
        ?>

        <?php
            $i = 0;
            while ($i < 10) {
                echo $i;
                $i++;
            }
            echo '<br />';

            $i = 0;
            do {
                echo $i;
                $i++;
            } while ($i < 10);
            echo '<br />';

            for ($i = 0; $i < 10; $i++) {
                echo $i;
            }
            echo '<br />';
        ?>

        <?php
            $arr = array(1, 2, 3, 4);

            foreach ($arr as $value) {
                echo $value;
            }
            echo '<br />';
        ?>
        <?php
        // Contoh prosedur
            function do_print() {
            
            echo time();
            }
            
            do_print();
            echo '<br />';
            
            function jumlah($a, $b) {
            return ($a + $b);
            }
            echo jumlah(2, 3);
            echo '<br />';
            
        ?>
        <?php
            /**
            * Mencetak string
            * $teks nilai string
            * $bold adalah argumen opsional
            */
            function print_teks($teks, $bold = true) {
                echo $bold ? '<b>' .$teks. '</b>' : $teks;
            }
            print_teks('Indonesiaku');
            echo '<br />';

            print_teks('Indonesiaku', false);
            // Mencetak dengan huruf reguler
        ?>
    </body>
</html>