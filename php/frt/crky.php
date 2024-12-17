<?php
$player= (
1 => "Shikhar Dhawan",
2=> "M.S Dhoni",
3=>"Suresh Raina",
4=>"Rohit Sharma",
4=>"Mohit Sharma",
5=>"Vijay Shankar",
6=>"Ravindra Jadeja",
7=>"Irfan khan");
?>
<table border="2">
<?php <tr>
<th>number</th>
<th>name</th>
</tr>
<tr>
<?php 
foreach($player as play){ ?>
<tr>
<td><?=array_search($play,$player)+ 0; ?></td>
<td><?=play['name']; ?></td>
</tr>
<?php } ?>
</table>

