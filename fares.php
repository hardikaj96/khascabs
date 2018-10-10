<?php
include 'connect.php';
include 'header.php';

echo '
<table>
<tr>
<th>Category</th>
<th>Base Fare(Rs.)</th>
<th>Distance Fare(Rs/km)</th>
</tr>
<tr>
<td>Micro</td>
<td>55</td>
<td>6</td>
</tr>
<tr>
<td>Prime SUV</td>
<td>150</td>
<td>17</td>
</tr>
<tr>
<td>Sedan</td>
<td>100	</td>
<td>13</td>
</tr>
<tr>
<td>Share</td>
<td>50</td>
<td>5</td>
</tr>
</table>
';

include 'footer.php';
?>