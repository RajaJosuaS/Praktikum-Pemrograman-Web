
<?php

// M=1000 D=500 C=100 L=50 X=10 V=5 I=1

function converIntToRoman($number)
{
	// Convert the number into an number (just to make sure)
	$number = intval($number);
	$result = '';

	// Mendifine array dengan nama variabel .
	$lookup = array('M' => 1000, 'CM' => 900,'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);

	foreach ($lookup as $roman => $value) {
		// Determine the number of matches
		$matches = intval($number / $value);

		// Add the same number of characters to the string
		$result .= str_repeat($roman, $matches);

		// Set the number to be the remainder of the number and the value
		$number = $number % $value;
	}

	// The Roman numeral should be built, return it
	return $result;
}

echo converIntToRoman(1830);

?>
