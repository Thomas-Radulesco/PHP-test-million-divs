<?php

// get the input data as an integer
$number = intval($_POST['number']);

// decompose it as tens figure ( = $first) and units figure ( = $second)
$first = 0;
$second = 0;

if ($number <= 0) {
    $first = 0;
    $second = 0;
} else if ($number >= 99) {
    $first = 9;
    $second = 9;
} else if ($number <= 9) {
    $first = 0;
    $second = $number;
} else {
    $first = intval(substr($number, 0, 1));
    $second = intval(substr($number, 1, 1));
}

// function that draws rectangles : for our digit

function drawRectangle(int $height, int $width): void
{
    $y = 1;
    while ($y <= $height) {
        echo ('<div class="grid-row">');

        for ($x = 1; $x <= $width; $x++) {

            echo ('<div class="pixel"></div>');
        };
        $y++;

        echo ('</div>');
    };
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP digital display - the display</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="row">
        <div class="col-4 my-1 d-flex justify-content-between">
            <h3 class="mt-2"><?= 'Votre nombre : ' . $number ?></h3>
            <a href="/">
                <button class="btn btn-primary p-2 px-3 m-2">
                    RETOUR
                </button>
            </a>
        </div>

        <!-- START : digit left : tens  -->
        <div class="digit-tens d-flex flex-wrap">

            <!-- START : first horizontal line = horizontal line top  -->
            <div class="digit-tens horizontal top 
            <?=
            (($first == 0) || ($first == 1) || ($first == 4)) ? ' off' : '';
            ?>">
                <?php
                drawRectangle(100, 500);
                ?>
            </div>
            <!-- END : first horizontal line = horizontal line top  -->

            <!-- START : mid row container  -->
            <div class="digit-tens mid-row d-flex flex-row flex-wrap">

                <!-- START : mid row container : first container vertical left -->
                <div class="digit-tens mid-row vertical-left d-flex flex-column">

                    <!-- START : first vertical line = vertical line left-top  -->
                    <div class="digit-tens vertical left-top 
                        <?=
                        (($first == 0) || ($first == 1) || ($first == 2) || ($first == 3) || ($first == 7)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : first vertical line = vertical line left-top  -->

                    <!-- START : second vertical line = vertical line left-bottom  -->
                    <div class="digit-tens vertical left-bottom 
                        <?=
                        (($first == 0) || ($first == 1) || ($first == 3) || ($first == 4) || ($first == 5) || ($first == 7) || ($first == 9)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : second vertical line = vertical line left-bottom  -->

                </div>
                <!-- END : mid row container : first container vertical left -->

                <!-- START : mid row container : second container vertical mid -->
                <div class="digit-tens mid-row middle d-flex flex-column flex-wrap">

                    <!-- START : mid row container : second container vertical mid : always blank top square -->
                    <div class="digit-tens horizontal mid top-square off">
                        <?php
                        drawRectangle(350, 300);
                        ?>
                    </div>
                    <!-- END : mid row container : second container vertical mid : always blank top square -->

                    <!-- START : second horizontal line = horizontal line mid  -->
                    <div class="digit-tens horizontal mid 
                        <?=
                        (($first == 0) || ($first == 1) || ($first == 7)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(100, 300);
                        ?>
                    </div>
                    <!-- END : second horizontal line = horizontal line mid  -->

                    <!-- START : mid row container : second container vertical mid : always blank bottom square -->
                    <div class="digit-tens horizontal mid bottom-square off">
                        <?php
                        drawRectangle(350, 300);
                        ?>
                    </div>
                    <!-- END : mid row container : second container vertical mid : always blank top square -->

                </div>
                <!-- END : mid row container : second container vertical mid -->

                <!-- START : mid row container : last container vertical right -->
                <div class="digit-tens mid-row vertical-right d-flex flex-column">

                    <!-- START : first vertical line = vertical line right-top  -->
                    <div class="digit-tens vertical right-top 
                        <?=
                        (($first == 0) || ($first == 5) || ($first == 6)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : first vertical line = vertical line right-top  -->

                    <!-- START : second vertical line = vertical line right-bottom  -->
                    <div class="digit-tens vertical right-bottom 
                        <?=
                        (($first == 0) || ($first == 2)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : second vertical line = vertical line right-bottom  -->

                </div>
                <!-- END : mid row container : last container vertical right -->

            </div>
            <!-- END : mid row container  -->

            <!-- START : last horizontal line = horizontal line bottom  -->
            <div class="digit-tens horizontal bottom 
                <?=
                (($first == 0) || ($first == 1) || ($first == 4) || ($first == 7)) ? ' off' : '';
                ?>">
                <?php
                drawRectangle(100, 500);
                ?>
            </div>
            <!-- END : last horizontal line = horizontal line bottom  -->

        </div>
        <!-- END : digit left : tens  -->


        <!-- START : digit right : units  -->
        <div class="digit-units d-flex flex-wrap">
            <!-- START : first horizontal line = horizontal line top  -->
            <div class="digit-units horizontal top 
            <?=
            (($second == 1) || ($second == 4)) ? ' off' : '';
            ?>">
                <?php
                drawRectangle(100, 500);
                ?>
            </div>
            <!-- END : first horizontal line = horizontal line top  -->

            <!-- START : mid row container  -->
            <div class="digit-units mid-row d-flex flex-row flex-wrap">

                <!-- START : mid row container : first container vertical left -->
                <div class="digit-units mid-row vertical-left d-flex flex-column">

                    <!-- START : first vertical line = vertical line left-top  -->
                    <div class="digit-units vertical left-top 
                        <?=
                        (($second == 1) || ($second == 2) || ($second == 3) || ($second == 7)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : first vertical line = vertical line left-top  -->

                    <!-- START : second vertical line = vertical line left-bottom  -->
                    <div class="digit-units vertical left-bottom 
                        <?=
                        (($second == 1) || ($second == 3) || ($second == 4) || ($second == 5) || ($second == 7) || ($second == 9)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : second vertical line = vertical line left-bottom  -->

                </div>
                <!-- END : mid row container : first container vertical left -->

                <!-- START : mid row container : second container vertical mid -->
                <div class="digit-units mid-row middle d-flex flex-column flex-wrap">

                    <!-- START : mid row container : second container vertical mid : always blank top square -->
                    <div class="digit-units horizontal mid top-square off">
                        <?php
                        drawRectangle(350, 300);
                        ?>
                    </div>
                    <!-- END : mid row container : second container vertical mid : always blank top square -->

                    <!-- START : second horizontal line = horizontal line mid  -->
                    <div class="digit-units horizontal mid 
                        <?=
                        (($second == 0) || ($second == 1) || ($second == 7)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(100, 300);
                        ?>
                    </div>
                    <!-- END : second horizontal line = horizontal line mid  -->

                    <!-- START : mid row container : second container vertical mid : always blank bottom square -->
                    <div class="digit-units horizontal mid bottom-square off">
                        <?php
                        drawRectangle(350, 300);
                        ?>
                    </div>
                    <!-- END : mid row container : second container vertical mid : always blank top square -->

                </div>
                <!-- END : mid row container : second container vertical mid -->

                <!-- START : mid row container : last container vertical right -->
                <div class="digit-units mid-row vertical-right d-flex flex-column">

                    <!-- START : first vertical line = vertical line right-top  -->
                    <div class="digit-units vertical right-top 
                        <?=
                        (($second == 5) || ($second == 6)) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : first vertical line = vertical line right-top  -->

                    <!-- START : second vertical line = vertical line right-bottom  -->
                    <div class="digit-units vertical right-bottom 
                        <?=
                        ($second == 2) ? ' off' : '';
                        ?>">
                        <?php
                        drawRectangle(400, 100);
                        ?>
                    </div>
                    <!-- END : second vertical line = vertical line right-bottom  -->

                </div>
                <!-- END : mid row container : last container vertical right -->

            </div>
            <!-- END : mid row container  -->

            <!-- START : last horizontal line = horizontal line bottom  -->
            <div class="digit-units horizontal bottom 
                <?=
                (($second == 1) || ($second == 4) || ($second == 7)) ? ' off' : '';
                ?>">
                <?php
                drawRectangle(100, 500);
                ?>
            </div>
            <!-- END : last horizontal line = horizontal line bottom  -->


        </div>
        <!-- END : digit right : units  -->


    </div>


</body>

</html>