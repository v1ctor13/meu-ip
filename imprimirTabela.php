<?php

    function imprimirTabela($arr){

        $city = $arr['city'];
        $region = $arr['region'];
        $country = $arr['country'];
        $postal =  $arr['postal'];
        $timezone = $arr['timezone'];
        $loc = $arr['loc'];
        $org = $arr['org'];

        echo "
            <table>
                <tr>
                    <td>Cidade</td>
                    <td><p>$city</p></td>
                </tr>
                <tr>
                    <td>Região</td>
                    <td><p>$region</p></td>
                </tr>
                <tr>
                    <td>País</td>
                    <td><p>$country</p></td>
                </tr>
                <tr>
                    <td>CEP</td>
                    <td><p>$postal</p></td>
                </tr>
                <tr>
                    <td>Fuso-Horário</td>
                    <td><p>$timezone</p></td>
                </tr>
                <tr>
                    <td>Coordenadas</td>
                    <td><p>$loc</p></td>
                </tr>
                <tr>
                    <td>ASN</td>
                    <td><p>$org</p></td>
                </tr>
            </table>
        ";
    }

?>