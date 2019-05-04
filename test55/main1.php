<?php
session_start();

setlocale(LC_ALL, 'ru_RU.utf8');
Header("Content-Type: text/html;charset=UTF-8");
$host = "localhost";
$user = "root";           
$password = "";
$database = "tester_prof";
$conn = mysqli_connect($host,$user,$password,$database);
mysqli_query ($conn,"SET NAMES utf8");
if(!isset($_SESSION['enter']) or $_SESSION['enter'] == false)
{
    header("Location:http://localhost/test55/login4.php");
}
                $query = "SELECT * FROM test_2";
                $result = mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result)) 
                {
                    $questions[] = $row;
                } 
            
?>
<!DOCTYPE html>
<html lang="ru-Ru">
<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<body>
    <form method="post" action="test2.php">
        <table class="table table-bordered table-striped">
            <thead >
                <tr>
                    <th scope="col">Вопрос</th>
                    <th scope="col">ДА</th>
                    <th scope="col">НЕТ</th>
                    <th scope="col">СОМНЕВАЮСЬ</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($questions as $key => $question) { ?>
                <tr>
                  <td scope="col"><?= $question['questions'] ?></td>
                  <th scope="col"><input  type="radio" name="<?= $question['id'] ?>" value="1"></td>
                  <th scope="col"><input required type="radio" name="<?= $question['id'] ?>" value="2"></td>
                  <th scope="col"><input type="radio" name="<?= $question['id'] ?>" value="3"></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>
        <input type="submit" name="" placeholder="Submit">
    </form>
</body>
</html>

