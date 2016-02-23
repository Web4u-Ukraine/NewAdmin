<?
if ($login!=''){
	header("Location: /admin/home/");
}
?>
<div class="login-container">
	<div class="row">
		<div class="col-md-12">
			<div class="text-center m-b-md">
				<h3><?= $index->getWords(6) ?></h3>
			</div>
			<div class="hpanel">
				<div class="panel-body">
					<form id="loginForm">
						<div class="form-group">
							<label class="control-label" for="username"><?= $index->getWords(7) ?></label>
							<input type="text" placeholder="example@gmail.com" title="" required="" value="" name="username" id="username" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label" for="password"><?= $index->getWords(8) ?></label>
							<input type="password" title="" placeholder="******" required="" value="" name="password" id="password" class="form-control">
						</div>
						<button class="btn btn-success btn-block"><?= $index->getWords(9) ?></button>
<!--						<a class="btn btn-default btn-block" href="#">Register</a>-->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>