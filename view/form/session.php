<?php
$dice  = $_SESSION["dice"]  ?? null;
$sum   = $_SESSION["sum"]   ?? null;
$rolls = $_SESSION["rolls"] ?? null;
$dice12 = "";
$dice2 = "";
$dice3 = "";
$dice4 = "";
$dice5 = "";
$dice6 = "";

switch ($dice) {
    case 1:{
        $dice12 .= "*";
        break;
    }
    case 2:{
        $dice2 .= "*";
        break;
    }
    case 3:{
        $dice3 .= "*";
        break;
    }
    case 4:{
        $dice4 .= "*";

        break;
    }
    case 5:{
        $dice5 .= "*";

        break;
    }
    case 6:{
        $dice6 .= "*";

        break;
    }

    default:
        # code...
        break;
}
$diceClass = "dice-$dice";
$average = $rolls ? round($sum / $rolls, 2) : 0;

?><h1>Throw a dice, and remember it</h1>

<form method="post" action="session-process.php">
    <fieldset>
        <legend>Throw the dice</legend>

        <p>
            <input type="submit" name="doit" value="Roll the dice">
            <input type="submit" name="reset" value="Restart">
            <input type="submit" name="kill" value="Kill session">
        </p>  

        <?php if ($dice) : ?>
            <output>
                <p class="dice <?= $diceClass ?>"></p>
                <p>The sum of all thrown dices are: <?= $sum ?></p>
                <p>The average is: <?= $average ?></p>
            </output>
        <?php endif; ?>

    </fieldset>
</form>

<hr>

<h2>DEBUG IT</h2>

<p>The array $_SESSION contains the following.</p>

<pre>
<?= print_r($_SESSION, true) ?>
</pre>
<hr>
<h3>Histogram Data </h3>

<?php
echo
"<ul>
    <li>Dice Number 1 : " . $dice12 . "</li>" . 
    "<li>Dice Number 2 : " . $dice2 . "</li>" . 
    "<li>Dice Number 3 : " . $dice3 . "</li>" . 
    "<li>Dice Number 4 : " . $dice4 . "</li>" . 
    "<li>Dice Number 5 : " . $dice5 . "</li>" . 
    "<li>Dice Number 6 : " . $dice6 . "</li>
</ul>";

