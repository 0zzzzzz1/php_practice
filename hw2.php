<h1>判斷閏年</h1>
<hr />
<?php
    $y = rand(1,3000);
    // echo "{$y}年";

    if($y%4==0){
        if($y%100==0){
            if($y%400==00){
                echo "{$y}年,是閏年";
            }else{
                echo "{$y}年,是平年";
            }
        }else{
            echo "{$y}年,是閏年";
        }
    }else{
        echo "{$y}年,是平年";
    }

?>