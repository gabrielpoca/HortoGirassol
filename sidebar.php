
<h3>Contactos</h3>
<p>Tlm.:918 718 469</p>


<h3>Informações</h3>
<p> Para mais informações sobre como contanctar com os responsáveis visite a secção de contactos. </p>

<?
$dir = opendir("./images/fotos/thumb");

$i = 0;
while ($imgfile = readdir($dir)) {
    if ($imgfile != "." && $imgfile != "..") {
        $imgarray[$i] = $imgfile;
        $i++;
    }
}

closedir($dir);

$rand = rand(0, count($imgarray) - 1);

if ($rand >= 0) {
    echo '<img src="./images/fotos/thumb/' . $imgarray[$rand] . '" >';
}
?> 



