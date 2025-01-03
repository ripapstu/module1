<?php

define("FACTOR",9/5);
define("OFFSET",32);

echo "Enter a temperature value:";
$temperature = (float)readline();

echo "Convert to (1:fahrenheit, 2: Celsius):";
$choice = (int)readline();

Switch($choice){
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo " Temperature in Fahrenheit: $result";
        break;

        
    case 1:
        $result = ($temperature - OFFSET)/ FACTOR;
        echo " Temperature in Celsius: $result";
        break;

    default:
        echo "Invalid choice";
}