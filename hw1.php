<h1>四則運算</h1>
<?php
    $r = ''; //'' => undefined
    // 輸入框有定義才執行運算 => isset() 判斷是否被定義
    if(isset($_GET['n1']) && isset($_GET['n2'])){
        $n1 = $_GET['n1'];
        $n2 = $_GET['n2'];
        
        $name = $_GET['math'];
        if($name==1)$r=$n1+$n2;
        if($name==2)$r=$n1-$n2;
        if($name==3)$r=$n1*$n2;
        if($name==4){
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
        <option value="1" <?php echo ($name==1? 'selected':''); ?> >+</option>
        <option value="2" <?php echo ($name==2? 'selected':''); ?> >-</option>
        <option value="3" <?php echo ($name==3? 'selected':''); ?> >X</option>
        <option value="4" <?php echo ($name==4? 'selected':''); ?> >/</option>
    </select>
    <input type="text" name="n2" <?php echo "value='{$n2}'"; ?>>
    <input type="submit" value="=">
    <span><?php echo $r; ?></span>
</form>