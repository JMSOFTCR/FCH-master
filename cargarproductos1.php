<?php
$db=new mysqli("localhost","root","","pos");
$limite=$_POST["limite"];
$query="SELECT productid from product";
$res=$db->query($query);
$total=$res->num_rows;
/*vamos a mostrar los productos de 4 en 4*/
$paginas=ceil($total/4);
$query="SELECT productid, product_name, photo from product where categoryid = 1 limit $limite, 4";
$res=$db->query($query);
if($res->num_rows>0)
{
    while($fila=$res->fetch_array())
    {
        $id=$filas['productid'];
         $name=$filas['product_name'];
         $photo=$filas['photo'];
        $productos[$fila["productid"]]=$fila["product_name"];
    }
}
if(empty($productos))
{
    echo "No hay productos posibilidad 2";
}else{
if($limite>0)
{
    $limit=$limite-4;
    echo "<aside class=\"anterior\" onclick=\"cargarproductos(".$limit.")\">Anterior</aside>";
}else{
     echo "<aside></aside>";
}
foreach($productos as $producto)
{
    echo "<article class=\"producto\">".$producto."</article>";
}
if($limite<$total-4)
{
    $limit=$limite+4;
    echo "<aside class=\"siguiente\" onclick=\"cargarproductos(".$limit.")\">Siguiente</aside>";
}else{
     echo "<aside ></aside>";
}
}

?>
