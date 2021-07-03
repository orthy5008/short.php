<?php
$short = '//Enter Your Month//';
switch  ($short) {
case 'january':
case 'January':
case 'JANUARY':
    echo  ''."$short". ' Short Form is => Jan';
    break;
    
case 'February':
case 'february':
case 'FEBRUARY':
    echo ''."$short". ' Short Form is => Feb';
    break;

case 'March':
    case 'march':
        case 'MARCH':
            echo ''."$short". ' Short Form is => Mar';
            break;

case 'April':
    case 'april':
        case 'APRIL':
            echo ''."$short".' Short From is => Apr';
            break;
            
case 'May':
    case 'MAY':
        case 'may':
            echo ''."$short".' Short Form is => May';
            break;
            
case 'june':
    case 'June':
        case 'JUNE':
              echo ''."$short". ' Short Form is => Jun';
              break;
              
              default:
                  echo 'Sorry we didn'."'".'t have enough data for your answer';
             }
    ?>
