<script>
	function go()
	{
		document.getElementById('try').value='t';
	}
</script>
<form class="navbar-form navbar-right" method="post" id="out">
<div class="row"><div class="col-xs-6"><h5 style="text-aling:right;">
                            <?php echo $_SESSION['user']['nick'];?>
                        </h5>
                        <input type="text" name="try" id="try" style="visibility:hidden;" value="f"></input></div>

                        <div class="col-xs-6"><button onclick="go()" form="out" type="submit" class="btn btn-danger"><i class="fa fa-sign-out"></i> Выйти</button></div>
                        </div>
                        
</div></form>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['try']!="f" && $_POST['try']!=null)
{
	$_SESSION['user']=null;
	echo "<script>reload();</script>";
}
?>