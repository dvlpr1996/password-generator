<?php

include "bootstrap/init.php";
include "src/generator.php";





?>

<form method="post" action="#">
    <span>Select languages</span><br/>
    <input type="checkbox" name='lang[php][]' value="PHP"> PHP <br/>
    <input type="checkbox" name='lang[js][]' value="JavaScript"> JavaScript <br/>
    <input type="checkbox" name='lang[jquery][]' value="jQuery"> jQuery <br/>


    <input type="submit" value="Submit" name="submit">
</form>

<?php




?>