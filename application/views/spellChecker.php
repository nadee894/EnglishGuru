<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 8/11/2016
 * Time: 10:40 AM
 */
$userInput=$id;

$result = shell_exec('python C:/xampp2/htdocs/EnglishGuru/PythonScripts/spellCheck.py '.$id);
?>
</br>
<div class="col-md-12 text-center">
<div class="col-md-3 text-center"></div>
<div class="col-md-6 text-center">  

<?php if($result!=''){?>
<div class="alert alert-danger">
    <strong>ERROR! </strong> Spelling Mistake Found.
</div>

</div>
    <div class="col-md-3 text-center"></div>
</div>
<div class="col-md-12 text-center">


<?php if($result!=''){?>
    <div class="alert alert-danger">
    
    </div>

    </div>
    <div class="col-md-3 text-center"></div>
    </div>
    <div class="col-md-12 text-center">

        Our Suggestions<h3><span class=""><?php
    echo "<pre>";
    print_r($result);
    echo "</pre>";?></span></h3>
    </div>
<?php }else{?>

    <div class="alert alert-success">
        <strong>CORRECT! </strong>
    </div>
<?php }}?>