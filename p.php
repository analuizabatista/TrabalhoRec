<?php
    $host="localhost";
    $usuario="administrador";
    $senha="1234";
    $banco="world.sql";
    $c= mysqli_connect($host,$user,$senha,$banco);
    $query="select Name from Country join CountryLanguage on Country.Code=CountryLanguage.CountryCode where Language='Portuguese'";
    $result= mysqli_query($c,$query);
    echo '<table> $result </table>';
    $query="select Name, Population from City where CountryCode='BRA'";
    $result= mysqli_query($c,$query);
    echo '<table> $result </table>';
    $query="select Name, Population, LifeExpectancy, GNP from country order by LifeExpectancy desc ";
    $result= mysqli_query($c,$query);
    echo '<table> $result </table';
    $query="select Name, Population, LifeExpectancy, GNP from country where Continent='Africa' order by GNP desc";
    $result= mysqli_query($c,$query);
    echo '<table> $result </table';

?>