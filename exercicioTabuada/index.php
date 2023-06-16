<style>
body{
    display: flex;
}
tr:nth-child(even){
    background: #8AF6BA;
}
tr:nth-child(odd){
    background: #F59289;
}
td{
    padding:0.5em;
    text-align:center;
}

</style>
<body>
    <table >
    <?php
    for($i = 1; $i <=10; $i++){
        echo "<tr>";
        for($j = 1; $j <=10; $j++){
            echo "<td>";
            echo $i * $j;
            echo "</td>";
        }
        echo "</tr>";
        echo "<br>";
    }
    ?>
    </table>
</body>
