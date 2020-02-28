<html>
    <head>
        <title></title>
    </head>
    <body>

        <?php

            $tal = 15;
            $tal2 = 13;
            $tal3 = 14;

            /*
            echo $tal;
            echo "<br>";

            echo $tal2;
            echo "<br>";

            echo $tal3;
            echo "<br>";

            echo "$tal er  et tal";
            echo '$tal er et tal';
            */

            switch($tal)    {
                case 12:
                    echo "12";
                break;

                case 13:
                    echo "13";
                break;

                case 14:
                    echo "14";
                break;

                default:
                    echo "Fejl";
                break;
            }
        ?>

    </body>
</html>