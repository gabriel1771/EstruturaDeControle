<form>

<input type="text" name="nome">
<input type="date" name="nacimento">
<input type="submit" value="ok" >

</form>

<?php

if (isset($_GET)) {
    foreach ($_GET as $key => $value) {
        echo "nome do campo: " .$key . "<br>";
        echo "valor do campo: " .$value;
        echo "<hr>";
    }
}



?>