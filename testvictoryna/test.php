<?php
$servername = "localhost";
$username = "root";
$passwordDb = "";
$dbname = "joomla1";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $passwordDb);
$conn->exec("SET NAMES UTF8");
$error = array();
	
	if (empty($_POST['username'])) {
            $error[] = 'Введіть прізвище та ініціали!';
        } else {
        	$username = $_POST['username'];
    }

    if(!empty($_POST)){
        $q1 = $_POST['q1'];
        $q2 = $_POST['q2'];
        $q3 = $_POST['q3'];
        $q4 = $_POST['q4'];
        $q5 = $_POST['q5'];
    }

    if($q1=='' or $q2=='' or $q3=='' or $q4=='' or $q5==''){
        $error[] = '<p>Ви дали відповідь не на всі запитання.</p>';
    }

    
	if (!empty($error)){
        echo '<div style="color:red;">'. array_shift($error) . '</div>';
    } else {
    	$sql = $conn->prepare("INSERT INTO `test_results` (`username`, `q1`, `q2`, `q3`, `q4`, `q5`) VALUES (:username, :q1, :q2, :q3, :q4, :q5)");
    	$sql->bindValue('username', $username);
    	$sql->bindValue('q1',  $q1);
    	$sql->bindValue('q2',  $q2);
    	$sql->bindValue('q3',  $q3);
        $sql->bindValue('q4',  $q4);
        $sql->bindValue('q5',  $q5);
    	$sql->execute();
       
        $right_answer = 0;
        $wrong_answers = array();
        if ($q1 == 1) {
            $right_answer++;
        } else {$wrong_answers[] = '<p>1. Назвіть столицю України? Правильна відповідь Київ</p>';}

        if ($q2 == 1) {
            $right_answer++;
        } else {$wrong_answers[] = '<p>2. Назвіть столицю Франції? Правильна відповідь Париж</p>';}

        if ($q3 == 1) {
            $right_answer++;
        } else {$wrong_answers[] = '<p>3. Назвіть столицю Великобританії? Правильна відповідь Лондон</p>';}
    
        if ($q4 == 1) {
            $right_answer++;
        } else {$wrong_answers[] = '<p>4. Назвіть столицю Польщі? Правильна відповідь Варшава</p>';}
    
        if ($q5 == 1) {
            $right_answer++;
        } else {$wrong_answers[] = '<p>5. Назвіть столицю Німеччини? Правильна відповідь Берлін</p>';}


        echo  'Кількість правильних відповідей: ' . $right_answer . '<br><br>';

        if (!empty($wrong_answers)) {
        echo "Питання на які надано неправильну відповідь:";
        foreach ($wrong_answers as $wrong_answer) {
        echo $wrong_answer;
        } 
        }
    }
    echo '<p><a href="index.php">Ще раз!</a></p>';
        


    