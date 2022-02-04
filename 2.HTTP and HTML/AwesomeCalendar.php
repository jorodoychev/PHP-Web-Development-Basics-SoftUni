<!DOCTYPE html>
<html>
    <head>
        <title>Awesome Calendar</title>
        <style type="text/css">
            header {
                text-align: center;
            }
            body > header, body > section {
                margin: 5px auto;
                width: 70%;
            }
            body > header {
                font-size: 1.5em;
                border-bottom: 2px solid gray;
            }
            h1 {
                margin: 0;
                font-family: Arial, sans-serif;
            }
            section {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                align-content: flex-start;
            }
            div {
                margin: 10px;
            }
            div > header {
                border-bottom: 1px solid gray;
            }
            th {
                border-bottom: 1px solid gray;
            }
            th:last-child {
                color: red;
            }
            td {
                text-align: right;
                font-size: 1.1em;
            }
        </style>
    </head>
    <body>
        <header>
            <h1><?= date('Y'); ?></h1>
</header>
<section>
    <?php
    date_default_timezone_set('Europe/Sofia');

    $theRequiredYear = date('Y');
    $yearBegin = new DateTime($theRequiredYear . '-01-01');
    $yearEnd = clone $yearBegin;
    $yearEnd->add(DateInterval::createFromDateString('1 year'));

    $months = new DatePeriod($yearBegin, DateInterval::createFromDateString('1 month'), $yearEnd);
    //var_dump($months);
    $indexMonths = -1;
    $prev = null;
    foreach ($months as $month) {
        $indexMonths++;
        if ($indexMonths === 0) {
            $prev = $month;
            continue;
        }
        $output = '';
        $daysInMonth = new DatePeriod($prev, DateInterval::createFromDateString('1 day'), $month);
        $indexDays = 0;
        $numberOfWeeks = 0;
        $output .= '<div><header>';
        $output .= $prev->format('F');
        $output .= '</header><table><thead><tr>';
        $output .= '<th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th>';
        $output .= '</tr></thead><tbody><tr>';
        foreach ($daysInMonth as $day) {
            //echo $day->format('d M l') . PHP_EOL;
            $weekDay = $day->format('N');
            if ($indexDays === 0) {
                $output .= '<td colspan="' . $weekDay . '">';
            }
            else {
                $output .= '<td>';
            }
            $output .= $day->format('j') . '</td>';
            if ($weekDay == 7) {
                $output .= '</tr><tr>';
            }
            $indexDays++;
        }
        $output .= '</tr></tbody></table></div>';
        echo $output;
        $prev = $month;
    }
    $output = '';
    $daysInMonth = new DatePeriod($prev, DateInterval::createFromDateString('1 day'), $yearEnd);
    $indexDays = 0;
    $numberOfWeeks = 0;
    $output .= '<div><header>';
    $output .= $prev->format('F');
    $output .= '</header><table><thead><tr>';
    $output .= '<th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th><th>Su</th>';
    $output .= '</tr></thead><tbody><tr>';
    foreach ($daysInMonth as $day) {
        //echo $day->format('d M l') . PHP_EOL;
        $weekDay = $day->format('N');
        if ($indexDays === 0) {
            $output .= '<td colspan="' . $weekDay . '">';
        }
        else {
            $output .= '<td>';
        }
        $output .= $day->format('j') . '</td>';
        if ($weekDay == 7) {
            $output .= '</tr><tr>';
        }
        $indexDays++;
    }
    $output .= '</tr></tbody></table></div>';
    echo $output;
    ?>
</section>
</body>
</html>