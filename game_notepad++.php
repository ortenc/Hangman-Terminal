<?php


echo 'hello user guess the word'."\n";
$words = array('apple','banana','pie');
foreach($words as $word){
	echo str_replace(str_split($word),'*',$word)."\n";
	$arraySplit = str_split($word);
	for ($userHealth = 8; $userHealth > 0;){
		$userInput = readline('Enter letter: ');
		if (in_array($userInput, $arraySplit)){
			$keyInput = array_keys($arraySplit, $userInput);
			foreach($keyInput as $remove){
				unset($arraySplit[$remove]);
			}
			print_r($arraySplit);
			echo 'correct choice '.str_replace($arraySplit,'*',$word)."\n";
		} else {
			$userHealth = $userHealth - 1;
			echo 'incorrect choice now you have :'.$userHealth.' lifes left'."\n";
		}
		if(count($arraySplit) == 0){
			echo 'Thats it you found it'."\n";
			echo 'Now for the next one'."\n";
			break;
		}
	}
	if ($userHealth == 0){
		echo 'Game Over You Lose'."\n";
		exit;
	} else {
		$userHealth = 8;
	}
}
echo 'Game Over You Won'."\n";
?>