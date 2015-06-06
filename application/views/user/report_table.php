<?php
	/*if(isset($_POST["btnReport"])){
		echo "<h2 style='color:white'>Danh sách tài xế vùng ".$_POST["txtRegion"]."</h2>";*/
		//$dri = $driver;
		//print_r($driver);
		
?>
	<table class="table table-hover" style="background-color: white">
	  <thead>
	  	<th>STT</th>
	  	<th>Họ và tên</th>
	  	<th>Điện thoại</th>
	  	<th>Email</th>
	  	<th>Dịch vụ</th>
	  	<th>Vùng</th>
	  	<th>Trạng thái</th>
	  </thead>
	  <tbody>
      <tr>
          <td>
              1
          </td>
          <td>
              Du Tuan Nguyen
          </td>
          <td>
              0123456789
          </td>
          <td>
              nguyen@mail.com
          </td>
          <td>
              Uber X
          </td>
          <td>
              Ho CHi Minh
          </td>
          <td>
              Hoat dong
          </td>
      </tr>
	  <?php
	  	for($i=0;$i<count($driver);$i++){
	  		?>
	  		<tr>
	  			<td><?php echo ($i + 1)?></td>
	  			<td><?php echo ($driver[$i]->FIRSTNAME.' '.$driver[$i]->LASTNAME)?></td>
	  			<td><?php echo ($driver[$i]->PHONE) ?></td>
	  			<td><?php echo ($driver[$i]->EMAIL) ?></td>
	  			<td><?php echo ($driver[$i]->SER_NAME) ?></td>
	  			<td><?php echo ($driver[$i]->DIS_NAME) ?></td>
	  			<td><?php echo ($driver[$i]->ENABLE ? "hoạt động":"không hoạt động") ?></td>
	  		</tr>
	  		<?php
	  	}
	  ?>
	  </tbody>
	</table>
<?php
	/*}*/
?>