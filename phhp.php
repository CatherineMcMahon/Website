	<?php
		$output = '';
		$style = '';

			 if(isset($_GET['input'])) {
			 	$userInput = $_GET['input'];

			if($selectOption = $_GET['selectOption']=='bgcolor') {
				$style = "style = 'background-color:$userInput;'";
			} else if ($_GET['selectOption']=='palindrome') {
					$array = array();
					for($i=0; $i<strlen($userInput); $i++) {
						for ($j = 0; $j < strlen($userInput); $j++) {
							$word = $substr($userInput, $i, $j);
							if (strlen($word) >= 2) {
								$reverse = strrev($word); 
								if($word == $reverse) {
									array_push($array, $word);
								}
							}
						}
					}

					$output = implode(',', $array);
			 } else if($_GET['selectOption']=='list') {
			 	// $strlen = strlen($userInput);
			 	// for( $i = 0; $i <= $strlen; $i++ ) {
	 			// 	$char = substr( $userInput, $i, 1);
	 			// }
	 			// for($i=0; $i<$strlen; $i++) {
	 			// 	if($char!=',') {
	 			// 	$count++;
	 			// } else {
	 			// }

					// removes commas, saves strings to new array		 	
					$array = str_split ($userInput);
					foreach($array as $a) {
						while($a !=',') {
							$string += str_pad($a, 1);
						}
						if($a ==',') {
							$array_push($newArray, $string);
							$array = str_replace($array, ',', '');
						}
					}
					// removes unique values, returns array with unduplicated strings
					$output = implode(',', $array);

					// $array = explode(",", $userInput);
					// $newArray = array_unique($newArray);
					// echo $newArray;				
			} elseif($_GET['selectOption']=='integer') { 
					if(is_numeric($userInput)==false) {
						echo('Error: Input an integer. (6, 10, 200...)');
					} else {
						$userInput = intval($userInput);
						$factorSum = 0;
						for($i=0; $i<$userInput; $i++) {
							$factor = $userInput % $i;
							if($factor === 0) {
								$factorSum += $i;
							}
						}

						if($userInput === $factorSum) {
							$output = "$userInput is a perfect number.";
						} else {
							$output = "$userInput is not a perfect number.";
						}
					}				
				}

			}
		?>



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

	<div class="content" <?php echo $style ?>>
		<h1>PHP</h1>
		<a href="html.html">HTML</a>
		<a href="phhp.php">PHP</a>
		<a href="js.html">JS</a>

		

		<form action="phhp.php" method="GET">
			<p>
				Algorithms to Implement:
				<select name="selectOption">
				  <option value="integer">Integer</option>
				  <option value="palindrome">Palindrome</option>
				  <option value="list">List</option>
				  <option value="bgcolor">BGColor</option>
				</select>
			</p>
			Information Collector: <input type="text" name="input"><br>
			<input type="submit">
		</form>

		<p>
	
		<?php
			print("OUTPUT: $output");
		?>
		</p>
	
	</div>

	<div class="footer">
		<p>I'm Catherine, the creator of this aesthetically pleasing and slick website. Enjoy</p>
		<a href="mailto:cmcmahon@headroyce.org">Email</a>
	</div>
</body>
</html>









































