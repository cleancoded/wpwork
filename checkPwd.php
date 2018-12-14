<?php

$pwd_list = array('CREateSITe', 'TempPWd');

if(isset($_POST['checkPwd']) && isset($_POST['pwd']) ){
    if(in_array($_POST['pwd'], $pwd_list)){
        header('Location:https://wp.work/create?license=768f26ba54b0db375128539c572c4dd8');
    }else{
        header('Location: /wpwork/index.html?error=invalid pwd');
    }
}else{
    header('Location:  /wpwork/index.html?error=invalid info');
}