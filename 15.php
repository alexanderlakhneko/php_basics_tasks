<?php
$operator = ['+','-','/','*'];
$a = (float)$_POST['a'];
$b = (float)$_POST['b'];
if (isset($_POST['a']) && isset($_POST['b']))
{
    if (in_array($_POST['operator'], $operator)){
        switch ($_POST['operator']){
            case '+':
                $res = $a + $b;
                break;
            case '-':
                $res = $a - $b;
                break;
            case '*':
                $res = $a * $b;
                break;
            case '/':
                if ($b == 0){
                $res = 'Делить на ноль нельзя';
                }
                else{
                    $res = $a / $b;
                }

        }
    }
    else {
        $res = 'Ошибка операции';
    }
}
?>
<!DOCTYPE html>
<html lang="EN">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор</title>
</head>
<body>
    <form action="15.php" method="post">
        <label for="first">Число 1</label>
        <input type="text" id="first" name="a" value="<?php echo $a ?>"/><br>
        <label for="second">Число 2</label>
        <input type="text" name="b" id="second" value="<?php echo $b ?>"/><br>
        <select name="operator">
            <?php foreach ($operator as $op): ?>
                <option value="<?php echo $op; ?>"><?php echo $op; ?></option>
            <?php endforeach; ?>
        </select> <br>
        <?php if (isset($res)): ?>
            <p>Результат <?php echo $res; ?></p>
        <?php endif ?>
        <input type="submit" value="посчитать">
</form>
</body>
</html>
