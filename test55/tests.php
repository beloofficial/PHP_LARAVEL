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
           $phone = "";
            $password = "";
            if(isset($_POST["phone"])){
              $phone = $_POST["phone"];
              $password = $_POST["password"];
            }        
            elseif (isset($_SESSION['phone'])) {
                $phone = $_SESSION['phone'];
                $password =$_SESSION['password'];
            }
            $query = "SELECT * FROM users WHERE  phone = '$phone' and password = '$password'  ";
            $result = mysqli_query($conn,$query);
            while($row=mysqli_fetch_assoc($result)) 
            {
                $product_array1[] = $row;
            }   
            if (!empty($product_array1)) {
                $_SESSION['name'] = $product_array1[0]['name'];
                $_SESSION['surname'] = $product_array1[0]['surname'];
                $_SESSION['phone'] = $product_array1[0]['phone'];
                $_SESSION['password'] = $product_array1[0]['password'];
                $_SESSION['enter'] = true;
                $test_1 = $product_array1[0]['test_1'];
                $test_2_1 = $product_array1[0]['first'];
                $test_2_2 = $product_array1[0]['second'];
                $test_2_3 = $product_array1[0]['third'];
                $test_2_4 = $product_array1[0]['fourth'];
                $test_2_5 = $product_array1[0]['fivth'];
                $test_3_1 = $product_array1[0]['1'];
                $test_3_2 = $product_array1[0]['2'];
                $test_3_3 = $product_array1[0]['3'];
                $test_3_4 = $product_array1[0]['4'];
                $test_3_5 = $product_array1[0]['5'];
                $test_3_6 = $product_array1[0]['6'];
                $test_3_7 = $product_array1[0]['7'];
                $test_3_8 = $product_array1[0]['8'];
                $test_3_9 = $product_array1[0]['9'];
                $test_3_10 = $product_array1[0]['10'];
                $test_3_11 = $product_array1[0]['11'];
                $test_3_12 = $product_array1[0]['12'];
                $test_3_13 = $product_array1[0]['13'];
                $test_3_14 = $product_array1[0]['14'];
                $test_3_15 = $product_array1[0]['15'];
                $test_3_16 = $product_array1[0]['16'];
                $test_3_17 = $product_array1[0]['17'];
                $test_3_18 = $product_array1[0]['18'];
                $test_3_19 = $product_array1[0]['19'];
                $test_3_20 = $product_array1[0]['20'];
                $test_3_21 = $product_array1[0]['21'];
                $test_3_22 = $product_array1[0]['22'];
                $test_3_23 = $product_array1[0]['23'];
                $test_3_24 = $product_array1[0]['24'];
                $test_3_25 = $product_array1[0]['25'];
                $test_3_26 = $product_array1[0]['26'];
                $test_3_27 = $product_array1[0]['27'];
                $test_3_28 = $product_array1[0]['28'];
                $test_3_29 = $product_array1[0]['29'];

                $query = "SELECT * FROM test_2";
                $result = mysqli_query($conn,$query);
                while($row=mysqli_fetch_assoc($result)) 
                {
                    $questions[] = $row;
                } 
            }

if(!isset($_SESSION['enter']) or $_SESSION['enter'] == false)
{
    header("Location:http://localhost/test55/login4.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ТЕСТ</title>
    <link rel="stylesheet" href="css/myStyle.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="css/myStyle.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="shape-cont" style="margin: 0 auto;">
                <img src="images/logo.jpg" alt="" width="75px" height="auto">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="data">
                    <h5><?= $_SESSION['name'] ?> <?= $_SESSION['surname'] ?></h5>
                    <h6><?= $product_array1[0]['class'] ?> Класс</h6>
                    <h6><?= $_SESSION['phone'] ?></h6>
                    <a href="login4.php"><h6><button>Выйти</button></h6></a>
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-sm-4">
                <div class="data">
                    <h5>Тест 1</h5>
                    <?php if($test_1 == "") { ?>
                    <h6>Не пройден</h6>
                    <?php } else{  ?>
                    <h6>Пройден</h6>
                        <?php } ?>
                    <a href="#myModal" data-toggle="modal"><h6>Просмотреть результат</h6></a>
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            Результат
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>

                          <div >
                            
                            <?= $test_1 ?>
                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="data">
                    <h5>Тест 2</h5>
                    <?php if($test_2_1 == 0 and $test_2_2 == 0 and $test_2_3 == 0 and $test_2_4 == 0 and $test_2_5 == 0) { ?>
                    <h6>Не пройден</h6>
                    <?php } else{  ?>
                    <h6>Пройден</h6>
                        <?php } ?>
                    <a href="#myModal2" data-toggle="modal"><h6>Просмотреть результат</h6></a>
                    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div >
                            
                            <p title="Представителей этих профессий объединяет одно очень важное качество — любовь к природе. Но любовь не созерцательная. Которой обладают практически все люди, считая природу наиболее благоприятной средой для отдыха, а деятельная связанная с познанием ее законов и применением их. Одно дело — любить животных и растения, играть с ними, радоваться им. И совсем другое — регулярно, день за днем ухаживать за ними, наблюдать, лечить, выгуливать, не считаясь с личным временем и планами. Специалист должен не просто все знать о живых организмах, но и прогнозировать возможные изменения в них и принимать меры. От человека требуется инициатива и самостоятельность в решении конкретных задач, заботливость, терпение и дальновидность. Человек, работающий в сфере «человек-природа», должен быть спокойным и уравновешенным; ">«Человек-природа» - <?= $test_2_1 ?> из 8</p>
                            <p title="Особенность технических объектов в том, что они, как правило, могут быть точно измерены по многим признакам. При их обработке, преобразовании, перемещении или оценке от работника требуется точность, определенность действий. Техника как предмет руда представляет широкие возможности для новаторства, выдумки. творчества, поэтому важное значение приобретает такое качество, как практическое мышление. Техническая фантазия, способность мысленно соединять и разъединять технические объекты и их части — важные условия для успеха в данной области.">«Человек-техника» - <?= $test_2_2 ?> из 8</p>
                            <p title="Мы встречаемся со знаками значительно чаще, чем обычно представляем себе. Это цифры. Коды, условные знаки, естественные или искусственные языки, чертежи, таблицы формулы. В любом случае человек воспринимает знак как символ реального объекта или явления. Поэтому специалисту, который работает со знаками, важно уметь с одной стороны, абстрагироваться от реальных физических, химически, механических свойств предметов, а с другой — представлять и воспринимать характеристики реальных явлений или объектов, стоящих за знаками. Чтобы успешно работать в какой-нибудь профессии данного типа, необходимо уметь мысленно погружаться в мир, казалось бы, сухих обозначений и сосредотачиваться на сведениях, которые они несут в себе. Особые требования профессии этого типа предъявляют к вниманию.">«Человек-знаковая система» - <?= $test_2_3 ?> из 8</p>
                            <p title="Важнейшие требования, которые предъявляют профессии, связанные с изобразительной, музыкальной, литературно-художественной, актерско-сценической деятельностью человека — наличие способности к искусствам, творческое воображение, образное мышление, талант, трудолюбие.">«Человек-искусство» - <?= $test_2_4 ?> из 8</p>
                            <p title="Даже выбирая профессию, не связанную непосредственно с общением, вы поступите правильно, если обратите внимание на общительность и контактность. Подумайте, куда вы обращены- к людям или к себе? С кем бы вы хотели общаться — с собой или с другими? Главное содержание труда в профессиях типа «человек-человек» сводится к взаимодействию между людьми. Если не наладится это взаимодействие, значит, не наладится и работа. Качества, необходимые для работы с людьми: устойчивое, хорошее настроение в процессе работы с людьми, потребность в общении, способность мысленно ставить себя на место другого человека, быстро понимать намерения, помыслы, настроение людей, умение разбираться в человеческих взаимоотношениях, хорошая память (умение держать в уме имена и особенности многих людей), умение находить общий язык с различными людьми, терпение ... ">«Человек-человек» - <?= $test_2_5 ?> из 8</p>
                            
                          </div>
                          <div class="modal-footer">
                            <p style="font-size: 14px">Подведите мышку на нужную критерию, чтобы узнать больше о нем</p>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
                </div>
            
            <div class="col-sm-4">
                <div class="data">
                    <h5>Тест 3</h5>
                    <?php if($test_3_1 == 0 and $test_3_1 == 0 and $test_3_1 == 0 and $test_3_1 == 0 and $test_3_1 == 0 and $test_3_29 == 0 and $test_3_28 == 0 and $test_3_27 == 0) { ?>
                    <h6>Не пройден</h6>
                    <?php } else{  ?>
                    <h6>Пройден</h6>
                        <?php } ?>
                    <a href="#myModal3" data-toggle="modal"><h6>Просмотреть результат</h6></a>
                    <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            Предметы
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                          <div >
                            
                            <p>Биология - <?= $test_3_1 ?> из 12</p>
                            <p>География - <?= $test_3_2 ?> из 12</p>
                            <p>Геология - <?= $test_3_3 ?> из 12</p>
                            <p>Медицина - <?= $test_3_4 ?> из 12</p>
                            <p>Легкая и пищевая промышленность - <?= $test_3_5 ?> из 12</p>
                            <p>Физика - <?= $test_3_6 ?> из 12</p>
                            <p>Химия - <?= $test_3_7 ?> из 12</p>
                            <p>Техника - <?= $test_3_8 ?> из 12</p>
                            <p>Электро – и  радиотехника - <?= $test_3_9 ?> из 12</p>
                            <p>Металлообработка - <?= $test_3_10 ?> из 12</p>
                            <p>Деревообработка - <?= $test_3_11 ?> из 12</p>
                            <p>Строительство - <?= $test_3_12 ?> из 12</p>
                            <p>Транспорт - <?= $test_3_13 ?> из 12</p>
                            <p>Авиация, морское дело - <?= $test_3_14 ?> из 12</p>
                            <p>Военные специальности - <?= $test_3_15 ?> из 12</p>
                            <p>История - <?= $test_3_16 ?> из 12</p>
                            <p>Литература - <?= $test_3_17 ?> из 12</p>
                            <p>Журналистика - <?= $test_3_18 ?> из 12</p>
                            <p>Общественная деятельность - <?= $test_3_19 ?> из 12</p>
                            <p>Педагогика - <?= $test_3_20 ?> из 12</p>
                            <p>Право, юриспруденция - <?= $test_3_21 ?> из 12</p>
                            <p>Сфера обслуживания, торговля - <?= $test_3_22 ?> из 12</p>
                            <p>Математика - <?= $test_3_23 ?> из 12</p>
                            <p>Экономика - <?= $test_3_24 ?> из 12</p>
                            <p>Иностранные языки - <?= $test_3_25 ?> из 12</p>
                            <p>Изобразительное искусство - <?= $test_3_26 ?> из 12</p>
                            <p>Сценическое искусство - <?= $test_3_27 ?> из 12</p>
                            <p>Музыка - <?= $test_3_28 ?> из 12</p>
                            <p>Физкультура и спорт - <?= $test_3_29 ?> из 12</p>

                            
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>      
        </div>    
        </div>
        <div class="form-content">
            <div class="test-types text-center">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 style="text-center">Начните тест по следующим блокам:</h1>
                    </div>
                </div>
                <div class="blocks-centerized">
                    <div class="row"> 
                        <div class="col-md-4 col-sm-12 justify-content-center">
                            <div class="shape">
                                <div class="shape-cont">
                                    <p>Тест 1</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, architecto</p>
                                    <a href="test1/index.php"><button class="btn-success">Начать</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <div class="shape">
                                <div class="shape-cont">
                                    <p>Тест 2</p>
                                    <p>Методика основана на классификации профессиональных интересов. Позволяет установить в какой области старшекласснику лучше всего выбрать специальность, по которой он будет проходить профессиональное обучение после школы.</p>
                                    <a href="main1.php"><button class="btn-success">Начать</button></a>
                                </div>
                            </div>
                        </div>
                   
                   
                        <div class="col-md-4 col-sm-12">
                            <div class="shape">
                                <div class="shape-cont">
                                    <p>Тест 3</p>
                                    <p>Изучение интересов, способностей учащихся может осуществляться различными способами – от простого наблюдения за их успехами в освоении учебных дисциплин до использования различных анкет, опросников. </p>
                                    <a href="main2.php"><button class="btn-success">Начать</button></a>
                                </div>
                            </div>
                        </div>
                        
                     </div>

                </div>
            </div> 
        </div>
    </div>
    <div class="container-fluid foot" style="background-color: rgba(0,0,0);">
        <div class="row text-center">
            <div class="col-sm-12">
                <h6>Авторские права УПЦ Маман-Специалист 2019</h6>        
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>