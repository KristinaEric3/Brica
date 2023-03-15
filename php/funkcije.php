<?php
function selectUsluge(){
    for($i=5;$i<180;$i+=5)
    {
        echo '<option value="'.$i.'">'.$i.' min</option>';
    }
}
?>