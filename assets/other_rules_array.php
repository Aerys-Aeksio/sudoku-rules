<?php

if (!RULES) { die; };

$other_rules = array(
	'Area sum lines:' => 'If a region of cells is enclosed by an unbroken section of orange line, then the sum of digits in the area enclosed by the line is equal to the sum of the digits along the perimeter line section. Digits may repeat on area sum lines if permitted by other rules. Area sum regions cannot be contained within another. i.e. if two area sum regions are conjoined, then the larger conjoined region is not itself an area sum region.',
	'Arrows:' => 'Digits along an arrow sum to the digit shown in the circled cells.',
	'Between lines:' => 'Digits along a between line must be between the digits on the circled ends of the line.',
	'Clones:' => 'The arrangement of digits in a part of the sudoku must be the same elsewhere.',
	'Column indexers(BLUE):' => 'A marked cell in column X indicates the column where X appears in the row.',
	'Difference kropki:' => 'Cells with a white kropki between them are consecutive.',
	'Disjoint groups:' => 'Cells with the same position within the boxes cannot contain the same digit.',
	'Double arrows:' => 'The sum of the digits along a ‘double arrow’ line is equal to the sum of the digits in the circles at either end of the line.',
	'Dutch whisper lines(orange):' => 'Two cells connected by a Dutch whisper line must have a difference of at least 4.',
	'Entropic line:' => 'Every 3 consecutive cells along an entropic line must contain a low digit(1-2-3), middle digit(4-5-6) and high digit(7-8-9).',
	'Even:' => 'Cells with grey squares must contain EVEN digit.',
	'Extra region/different values:' => 'Digits cannot repeat in the marked cells.',
	'Fog of war:' => 'The grid is covered with fog. Place correct digits into the cells to get more light, it\'s OK to put a digit into a cell that is covered by fog.',
	'Friendly Cells:' => 'A cell is friendly if it contains a digit that is the same as it\'s row, column or box number.',
	'German whisper lines(GREEN):' => 'Two cells connected by a German whisper line must have a difference of at least 5.',
	'Killer cages:' => 'Digits in cages must sum to the number in the top-left corner(if given) of the cage and cannot repeat.',
	'Kropki Chains:' => 'Points separated by a white dot have adjacent values. Points separated by a black dot are in a 2:1 ratio. There is a hidden point between the pairs of dots, whose value need not be written into the grid. Example: 8-bb-2 is valid via the chain 8-b-(4)-b-2, Example: 3-bw-7 is valid via the chain 3-b-(6)-w-7',
	'Little killers:' => 'Digits along marked diagonals sum to the number indicated outside the grid.',
	'Lockout line:' => 'Digits along a lockout line must not be between the digits on the circled ends of the line, which have a difference of at least 4.',
	'Look-and-say cages:' => 'Read the clue out loud, which describes the nature of the cage. E.g. #1522 says there is “one five and two two(s)” in the cage.',
	'Maximum:' => 'Cells with this constraint are greater than all orthogonal adjacent cells without this constraint.',
	'Minimum:' => 'Cells with this constraint are smaller than all orthogonal adjacent cells without this constraint.',
	'Modulo 3 line:' => 'Every 3 consecutive cells along a 3-modular line must contain a complete set of residuals modulo 3. i.e: one from (1-4-7), one from (2-5-8) and one from (3-6-9).',
	'Modulo 4 line:' => 'Every 4 consecutive cells along a 4-modular line must contain a complete set of residuals modulo 4. i.e: one from (1-5-9), one from (2-6), one from (3-7) and one from (4-8).',
	'Nabner lines:' => 'No two digits on a nabner line can be consecutive.',
	'Numbered rooms:' => 'Clues outside the grid indicate the digit which has to be placed in the Nth cell in the corresponding direction, where N is the digit placed in the first cell in that direction.',
	'Odd:' => 'Cells with grey circles must contain ODD digit.',
	'Palindrome:' => 'Digits on a palindrome line read the same forwards and backwards.',
	'Parity lines:' => 'Digits along a parity line alternate between odd and even.',
	'Pointer Arrows:' => 'Digits along arrows sum to the value in the connected circle. Additionally, arrow tips point towards a cell containing the digit within the arrow\'s circle. The value in the arrow tip indicates the distance from the arrow tip to this cell. There may be other instances of the same digit between this cell and the arrow tip.',
	'Pointer thermos:' => 'Digits along thermometers increase in value from the bulb end. Additionally, thermometer tips point towards a cell containing the digit within the bulb. The value in the tip indicates the distance to this cell. There may be other instances of the digit between the tip and this cell. If a thermometer has more than one tip, then each tip points towards a different instance of the bulb digit.',
	'Polarity lines:' => 'Digits along a polarity line alternate between high(6-7-8-9) and low(1-2-3-4).',
	'Quadruples:' => 'Every digit in a circle has to be assigned to one of the surrounding cells.',
	'Ratio kropki:' => 'Cells with a black kropki between them are in a ratio of 1 to 2. Wich means you have the following possibilities, 1-2, 2-4, 4-8 and 3-6.',
	'Region sum lines(BLUE):' => 'For each line, digits on the line have an equal sum N within each box it passes through.',
	'Renban lines(purple):' => 'Every renban line contains a set of consecutive digits in any order, without repeats.',
	'Row indexers(RED):' => 'A marked cell in row X indicates the row where X appears in the column.',
	'Sequence line:' => 'Sequence lines contain digits in order with a constant difference. E.g. 1-2-3, 2-5-8 or even 3-3-3.',
	'Shifter dots:' => 'Digts on different sides of a shifter dot must always share either parity (even/odd) OR polarity (high/low) - never neither, never both. Shifter dots can never have 5 on it.',
	'Skyscrapers:' => 'Each digit in the grid represents the height of a building in its cell. Taller buildings obstruct the view of shorter ones behind them. Clues outside the grid give the number of buildings visible from that vantage point in the clue\'s row or column.',
	'Slow thermometers:' => 'Digits on a slow thermo increase from the bulb to the tip or stay the same but never decrease.',
	'Thermometers:' => 'Digits on a thermometer strictly increase from the bulb to the tip.',
	'X-sum:' => 'Clues outside the grid show the sum of the first X digits, where X is the first seen digit.',
	'XV-pairs:' => 'Cells joined by an X or V must sum to 10(X) or 5(V).',
	'Zipper Lines:' => 'Digits an equal distance from the (bumped/circled) center of a Zipper line sum to the same number.',
);

?>