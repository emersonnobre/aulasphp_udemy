<?php

//Trabalhando com funções anônimas
function test ($callback) {

    //Processo lento

    $callback();
}

test(function(){
    echo "Terminou!!";
});

?>