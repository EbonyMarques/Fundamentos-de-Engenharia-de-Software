<?php
    require "persistencia.php";

    function retornaPraia($praia) {
        $campo = buscaPraia($praia);
        $id = $campo["id"];
        $nome = $campo["nome"];

        if ($id != null and $nome != null) {
            return array($id, $nome);
        } else {
            return null;
        }
    }

    function retornaAcontecimentos($idpraia) {
        $resultado = retornaInformacao($idpraia);

        echo "<br>";

        while ($row = mysqli_fetch_row($resultado)) {
            printf("<h3>%s</h3>", $row[2]);
        }

    }