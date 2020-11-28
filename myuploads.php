<div class="container">
	<div class="row">
<div class="col-md-4">
<?php 
require_once('config.php');

$getAllimages = "SELECT * FROM certificates";
$res = mysqli_query($conn,$getAllimages);
if(mysqli_num_rows($res)>0){
	while($rs = mysqli_fetch_assoc($res)){
		?>

	<img src="<?php echo $rs['certificate']; ?>">
	<?php
	}

}

?>

</div>
</div>
</div>