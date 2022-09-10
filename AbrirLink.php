<?php
$arq = $_GET['id'];
$ler = file('Funcionarios/'.$arq);
foreach ($ler as $linha){
    echo $linha.'<br>';
}