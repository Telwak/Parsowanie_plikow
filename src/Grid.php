
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>TEXT</th>
            
        </tr>
    </thead>
    <tbody>
<?php
require_once 'Model/Query.php';
$query = new Select('*',true);
$query1 = $query ->Send_Select_query();
$result = $query ->Get_Select_query();


 while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
 <tr>
  
            <td><?php print_r ($row['ID']); ?></td>
            <td><?php print_r ($row['TEXT']); ?></td>

	</tr>
	
<?php
}
?>

  </tbody>
</table>