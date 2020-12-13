<?php

$tab = array ('5', '4', '3', '2', '1');
$i = 0;

echo ("<table>");

for ($i = 0; $i < 5; $i++)
{
    echo ("
        <tr>
            <td>
                $tab[$i]
            </td>
        </tr>");
}
echo ("</table>");
highlight_file(__FILE__);