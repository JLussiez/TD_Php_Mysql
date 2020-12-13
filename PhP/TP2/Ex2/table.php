<?php
$_SESSION['Colonne1'] = " Colonne A ";
$_SESSION['Colonne2'] = " Colonne B ";
$_SESSION['Colonne3'] = " Colonne C ";

echo('
<table>
    <tr>
        <td colspan="3">Colonnes</td>
    </tr>
    <tr>
        <td>'); echo $_SESSION['Colonne1']; echo('</td>
        <td>'); echo $_SESSION['Colonne2']; echo('</td>
        <td>'); echo $_SESSION['Colonne3']; echo('</td>
    </tr>
</table>
');

?>