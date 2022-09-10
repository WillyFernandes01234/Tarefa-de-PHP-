<?php
extract($_POST);
if (!file_exists("Funcionarios/$id.txt")) {
    $files = fopen("Funcionarios/$id.txt",'w');
    fwrite($files, "Identificador: $ident\nNome do Funcionário: $nomefun\nOficio: $oficio\n");
    fwrite($files, "Salário: $sal\n");
    fwrite($files, "Qtd Dependentes: $qtddepend\n");
    fclose($files);  
} else {
    echo "<script>
            alert('este ID ja foi usado\ntente novamente');
          </script>";
}
$lista = scandir('Funcionarios');
array_shift($lista);
array_shift($lista);
foreach($lista as $links) {
    echo "<a href=\"AbrirLink.php?id=$links\">Arquivos: $links</a><br>";
}
?>