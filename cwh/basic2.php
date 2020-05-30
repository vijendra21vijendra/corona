<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tut</title>
    <style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width:80%;
        background-color:grey;
        margin:auto;
        padding:20px;
    }
    </style>
</head>
<body>
  
    <div class="container">
    <h1>let's learn about the php</h1>

    <?php
    function greet(){
        echo "hello good morning";
    }
    // $age = 34;
    // if($age > 18){
    //     echo "you can go to party";
    // }else{
    //     echo "you can't go to party";
    // }
    $language = array("c++","java","python","php","javaScript");
    // echo count($language);
    // echo sizeof($language);
    // echo $language[1];
    $i = 1;
    $n = 8;
    while($i <=10){
        echo $n." * ".$i." = ".($i*$n);
        echo "</br>";
        $i +=1;
    }
    foreach ($language as $val) {
        # code...
        echo $val."</br>";
    }
    echo "</br>";
    greet();
    $name = "vijendra singh shekhawat";
    echo strlen("banna");
    echo str_word_count($name);
    // str_replace , str_reverse any str_find so many fucntion
    ?>
    </div>
</body>
</html>