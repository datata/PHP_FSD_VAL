<?php

    function sumaDados($numeroDados, $numeroCaras) 
    {
        $total = [];
        for($i = 1; $i<=$numeroDados ; $i++)
        {
            $total[] = rand(1,$numeroCaras);
        }

        $result = [
            "tirada_dados" => $total,
            "suma_de_la_tirada" => "total tirada"
        ];

        return $result;
    }

    var_dump(sumaDados(2, 6));

?>