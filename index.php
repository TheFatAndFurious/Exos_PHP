<?php
    $tab = [];
    $tab2 = array();
    $tab[0] ='mathieu';
    // echo $tab[0];
    $tab2[0] ="adrar";
    // echo $tab2[0];
    //tableau associatif
    $tab3 = ["nom" => "babakar", "prenom"=>"", "age"=>""];
    $tab3["age"] = 43;
    $tab3["telephone"] = "0561480594";
    // echo $tab3["telephone"];
    // var_dump($tab3);

    foreach($tab3 as $key => $value){
        echo $key .$value;
    }

    $tab6 = [2,12,215,25,354,25,14,75,52];

    foreach($tab6 as $value){
        if($value>$max){
            $max = $value;
        }
        else{
            $max =$max;
        }
    }

    ?>