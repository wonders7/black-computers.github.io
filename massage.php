<?php

// mail($to,$subject,$massage);

$result = mail("blackcomputers@mail.ru","Թեստային նամակ","Կայքից ստացված տվյալներ՝ \r\nԱնուն - ".$_POST['name'].", \r\nԳաղտնաբառ - ".$_POST['pass'].", \r\nԱրդյո՞ք թանկ է ժամանակը Ձեզ համար - ".$_POST['time'].", \r\nՔանի՞ ժամ եք աշխատում օրվա մեջ - ".$_POST['worktime']." Ժամ, \r\nՆամակ - ".$_POST['massage']."");

if ($result) {
    echo 'Նամակը հաջողությամբ ուղարկված է';
} else {
    echo 'Նամակը չի ուղարկվել';
}

?>