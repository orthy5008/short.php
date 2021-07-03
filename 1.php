<?php
$short = '//Enter Any Month Name Here//';
switch  ($short) {
case 'january':
    echo 'Short Form of january is : jan';
    break;
    case 'January':
    echo 'Short Form of January is : Jan';
    break;
    case 'JANUARY':
    echo 'Short From of JANUARY is : JAN';
    break;
case 'february':
    echo 'Short Form of february is : feb';
        break;
    case 'February':
        echo 'Short Form of February is : Feb ';
            break;
    case 'FEBRUARY':
        echo 'Short From of FEBRUARY is : FEB';
            break;
        
    case 'march':
        echo 'Short From of march is : mar';
        break;
    case 'March':
        echo 'Short Form of march is : Mar';
        break;
    case 'MARCH':
        echo 'Short Form of MARCH is : MAR';
        break;
            
            default:
                  echo 'This is not a month name or you have spelling mistake';

}

