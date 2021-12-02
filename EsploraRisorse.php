
<?php
//__DIR__ contiene il path al file corrente.
$path=__DIR__;
echo "ROOT: $path</br>";
$contenuto = opendir($path);
while (($file = readdir($contenuto)) !== false) {
    echo "$file</br>";
}
closedir($contenuto);
?>














