      
<div class="right_col" role="main">

	<div class="page-title">
		<div class="title_left">
			<h3>Transfers Out</h3>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="x_panel">
		<select onchange="go(this);" id="gameweek" class="form-control info">
			<option disabled="" selected="" >Select Gameweek</option>
			<?php for ($i=1; $i < 38 ; $i++) {  ?>
				<option value="<?= $i ?>"><?= $i ?></option>
				<?php } ?>
			</select> 
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		<div class="x_panel">
			<div id="ajaxResult"></div>
		</div>

	</div>



	<script type="text/javascript">
		function go() {
			gameweek = $('#gameweek').val();

			$.ajax({
				type: "POST",
				url: "<?php echo site_url('transfers/transfersOutResult') ?>/"+gameweek,
				cache: false,
				dataType: "html",
				beforeSend: function () {
					toastr.warning("Please wait...");
					$('#gameweek').slideUp();
					$('#ajaxResult').html('<i class="fa fa-cog fa-spin fa-3x fa-fw"></i><span>Loading...</span>');
				},
				success: function (data)
				{
					$('#ajaxResult').html(data);
					$('#gameweek').slideDown();

				}
			});
		}

	</script>
