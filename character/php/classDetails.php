<?php

/*Warrior*/

function savingThrowReflex($level)
{
    $reflex = 0;

    if($level >= 1 && $level <= 3)
    {
        $reflex = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $reflex = 2;
    }

    if($level >= 7 && $level <= 9)
    {
        $reflex = 3;
    }

    if($level >= 10)
    {
        $reflex = 4;
    }

    return $reflex;

}


function savingThrowFort($level)
{
    $fort = 0;

    if($level >= 1 && $level <= 2)
    {
        $fort = 1;
    }
    
    if($level >= 3 && $level <= 4)
    {
        $fort = 2;
    }
    
    if($level == 5)
    {
        $fort = 3;
    }

    if($level >= 6 && $level <= 7)
    {
        $fort = 4;
    }

    if($level >= 8 && $level <= 9)
    {
        $fort = 5;
    }

    if($level >= 10)
    {
        $fort = 6;
    }

    return $fort;

}


function savingThrowWill($level)
{
    $will = 0;

    if($level >= 1 && $level <= 3)
    {
        $will = 1;
    }
    
    if($level >= 4 && $level <= 6)
    {
        $will = 2;
    }
    
    if($level >= 7 && $level <= 9)
    {
        $will = 3;
    }


    if($level == 10)
    {
        $will = 4;
    }

    return $will;

}

function criticalDie($level)
{
    $critical = "";

    if($level == 1)
    {
        $critical = "1d10/III";
    }

    if($level == 2)
    {
        $critical = "1d12/III";
    }

    if($level == 3)
    {
        $critical = "1d14/III";
    }

    if($level == 4)
    {
        $critical = "1d16/IV";
    }

    if($level == 5)
    {
        $critical = "1d20/IV";
    }

    if($level == 6)
    {
        $critical = "1d24/V";
    }

    if($level >= 7 && $level <= 8)
    {
        $critical = "1d30/V";
    }

    if($level >= 9)
    {
        $critical = "2d20/V";
    }

    return $critical;

}

function deedDie($level)
{
    $deedDie = "";

    switch($level)
    {
        case 1:
            $deedDie = "+d3";
        break;
        
        case 2:
            $deedDie = "+d4";
        break;
        
        case 3:
            $deedDie = "+d5";
        break;
        
        case 4:
            $deedDie = "+d6";
        break;
        
        case 5:
            $deedDie = "+d7";
        break;
        
        case 6:
            $deedDie = "+d8";
        break;
        
        case 7:
            $deedDie = "+d10+1";
        break;

        case 8:
            $deedDie = "+d10+2";
        break;
        
        case 9:
            $deedDie = "+d10+3";
        break;
        
        case 10:
            $deedDie = "+d10+4";
        break;

        default:
        $deedDie = "";
    }

    return $deedDie;
}

function actionDice($level)
{
    $actionDice = "";

    if($level <= 4)
    {
        $actionDice = "1d20";
    }

    if($level == 5)
    {
        $actionDice = "1d20+1d14";
    }

    if($level == 6)
    {
        $actionDice = "1d20+1d16";
    }

    if($level >= 7 && $level <= 9)
    {
        $actionDice = "1d20+1d20";
    }

    if($level == 10)
    {
        $actionDice = "1d20+1d20+1d14";
    }

    return $actionDice;
}



function title($level, $alignment)
{
    $title = "";

    if($alignment == "Lawful")
    {

        if($level == 1)
        {
            $title = "Agent";
        }
        else if($level == 2)
        {
            $title = "Broker";
        }
        else if($level == 3)
        {
            $title = "Delegate";
        }
        else if($level == 4)
        {
            $title = "Envoy";
        }
        else
        {
            $title = "Syndic";
        }

    }

    if($alignment == "Chaotic")
    {
        if($level == 1)
        {
            $title = "Rebel";
        }
        else if($level == 2)
        {
            $title = "Dissident";
        }
        else if($level == 3)
        {
            $title = "Exile";
        }
        else if($level == 4)
        {
            $title = "Iconoclast";
        }
        else
        {
            $title = "Renegade";
        }
    }

    if($alignment == "Neutral")
    {
        if($level == 1)
        {
            $title = "Apprentice";
        }
        else if($level == 2)
        {
            $title = "Novice";
        }
        else if($level == 3)
        {
            $title = "Journeyer";
        }
        else if($level == 4)
        {
            $title = "Crafter";
        }
        else
        {
            $title = "Thegn";
        }
    }

return $title;

}


?>