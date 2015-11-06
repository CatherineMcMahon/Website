<html>
<head>

	<title>PHP</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<div class="header">
		<h1 >Catherine McMahon</h1>
	</div>
	
	<div class="navigation">
	<ul>
		<li><a class = "HTML" href="html.html">html</a></li>
		<li><a id = "PHP" href="phhp.php">php</a></li>
		<li><a id = "JS" href="js.html">js</a></li>
	</ul>
	</div>

	<div class="content" <?php print($style)?>>
		<h1>PHP</h1>

		<p>
			Algorithms to Implement:
			<select name="selectOption">
			  <option value="integer">Integer</option>
			  <option value="palindrome">Palindrome</option>
			  <option value="list">List</option>
			  <option value="bgcolor">BGColor</option>
			</select>
		</p>

		<form action="phhp.php" method="GET">
			Info Collector?: <input type="text" name="input"><br>
			<input type="submit">
		</form>

		<?php
			if(isset($_GET['input'])) {
			$userInput = $_GET['input'];
		   	print('This is user input: ' + "$userInput");

		   	if($selectOption = $_GET['taskOption']=='bgcolor'){
			function changeBGColor( $userInput ) { 
				$style = '';
				if(strlen($userInput)!=6) {
					print('Error: input a string of hexadecimal digits. (6 digits)');
				} else {
					$style = "style = 'background-color: $userInput';";
				}
			}

		} elseif($selectOption = $_GET['taskOption']=='palindrome') {
			function Palindrome( $userInput ) { 
				$array = array();
				$reverse = strrev($userInput);
				$arrIndex = 0;
				$word = string;
				for($i=0; $i<(strlen($userInput)); $i++) {
					$word = $userInput(string $string, int $i, int($i+2));
					$reverse = strrev($word);
					if($word == $reverse) {
						$array[] = $word;
					}
				}
				return $array;
			}

		} elseif($selectOption = $_GET['taskOption']=='list'){
			function List( $userInput ) { 
				$array = str_split ( $userInput );
				for($i=0; $i<count($array); $i++) {
					// if()
				}
			}

		} elseif($selectOption = $_GET['taskOption']=='integer'){ 
			function Integer( $userInput ) { 
				if(is_int($userInput)==true) {
					print('Error: Input an integer. (6, 10, 200...)');
				} else {
					$sum = 0;
					for($i=0; $i<$userInput; $i++) {
						$factor = $userInput/$i;
						if(is_int($factor) == true) {
							$sum = $factor + $sum;
						} else {
							// do nothing
						}
				}

				if($userInput > $sum) {
					print("$userInput" + ' is a perfect number.');
				} else {
					print("$userInput" + ' is not a perfect number.');
				}
			}
		}
	}
	?>
	
	</div>

	<div class="footer">
		<p>I'm Catherine, the creator of this aesthetically pleasing and slick website. Enjoy</p>
		<a href="mailto:cmcmahon@headroyce.org">Email</a>
	</div>
</body>
</html>









































