<!DOCTYPE HTML>
<html>
<head>
</head>
<body>

<form action="test.php" method="post">
    <label>Вкажіть Ваші прізвище та ініціали <input type="text" name="username" value="<?= $_POST['username'] ?? '' ?>"></label><br><br>
<div>

    <p>1. Назвіть столицю України?</p>
    <label><input type="radio" name="q1" value="1" >Київ</label> 
    <label><input type="radio" name="q1" value="0">Львів</label> 
    <label><input type="radio" name="q1" value="0">Харків</label>
    <label><input type="radio" name="q1" value="0">Чернігів</label>
</div>
<div>
    <p>2. Назвіть столицю Франції?</p>
    <label><input type="radio" name="q2" value="0">Леон</label> 
    <label><input type="radio" name="q2" value="0">Марсель</label> 
    <label><input type="radio" name="q2" value="1">Париж</label>
    <label><input type="radio" name="q2" value="0">Ніца</label>
</div>
<div>
    <p>3. Назвіть столицю Великобританії?</p>
    <label><input type="radio" name="q3" value="0">Бірмінгем</label> 
    <label><input type="radio" name="q3" value="1">Лондон</label> 
    <label><input type="radio" name="q3" value="0">Ліверпуль</label>
    <label><input type="radio" name="q3" value="0">Манчестер</label>
</div>
<div>
    <p>4. Назвіть столицю Польщі?</p>
    <label><input type="radio" name="q4" value="0">Краків</label> 
    <label><input type="radio" name="q4" value="0">Гданськ</label> 
    <label><input type="radio" name="q4" value="0">Вроцлав</label>
    <label><input type="radio" name="q4" value="1">Варшава</label>
</div>
<div>
    <p>5. Назвіть столицю Німеччини?</p>
    <label><input type="radio" name="q5" value="1">Берлін</label> 
    <label><input type="radio" name="q5" value="0">Мюнхен</label> 
    <label><input type="radio" name="q5" value="0">Кельн</label>
    <label><input type="radio" name="q5" value="0">Бремен</label>
</div>
<button type="submit">Результат</button>
</form>
</body>
</html>