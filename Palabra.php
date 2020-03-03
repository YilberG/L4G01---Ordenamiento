
<html>
<h4>
<body>
    
    <br>
    <?php
    $arreglo = ["baseball","cat,bas,hol,base,rar,pull,ball"];
    $salida = explode(",",$arreglo[1]);
    for($i=0; $i < count($salida);$i++)
    {
        echo $salida[$i];
        echo "<br>";
    }
    $erre="";

    for($a=0;$a<count($salida);$a++)
    {
        for($b=0;$b<count($salida);$b++)
        {
            if($a!=$b)
            {
                $erre = $salida[$a].$salida[$b];
                if($erre == $arreglo[0])
                {
                    echo "salida valor: ".$salida[$a].", ".$salida[$b];
                }
            }
        }
    }

    ?>
    <br>
   
    </h4>
</body>