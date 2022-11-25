<h1>四則運算</h1>
<?php
    $r = $n1 = $n2 = $math = ''; 
    
    // isset() 判斷變數 是否被設置
    if(isset($_GET['n1']) && isset($_GET['n2'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        
        $math = $_GET['math'];
        if($math==1)$r=$n1+$n2;
        if($math==2)$r=$n1-$n2;
        if($math==3)$r=$n1*$n2;
        if($math==4){
            $a = floor($n1/$n2);
            $b = $n1%$n2;
            if($b==0){
                $r = "{$a}";
            }else{
                $r = "{$a}......{$b}";
            }
            
        }
    } 
?>
<form>
    <input type="text" name="n1" <?php echo "value='{$n1}'"; ?>>
    <select name="math">
        <option value="1" <?php echo ($math==1? 'selected':''); ?> >+</option>
        <option value="2" <?php echo ($math==2? 'selected':''); ?> >-</option>
        <option value="3" <?php echo ($math==3? 'selected':''); ?> >X</option>
        <option value="4" <?php echo ($math==4? 'selected':''); ?> >/</option>
    </select>
    <input type="text" name="n2" <?php echo "value='{$n2}'"; ?>>
    <input type="submit" value="=">
    <span><?php echo $r; ?></span>
</form>