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
                    <td>$city</td>
                </tr>
            </table>
        ";
    }

?>