<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="hati.gif"/>
	<meta charset='UTF-8' />
	<meta content='width=device-width, initial-scale=1, user-scalable=1, minimum-scale=1, maximum-scale=5'
	name='viewport' />
	<meta content='IE=edge' http-equiv='X-UA-Compatible' />
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery.min.js"></script>
	<script src="popper.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="jquery.cookie.min.js"></script>
	<script src="sweetalert2.all.min.js"></script>

	<title>From : Anonim</title>
</head>
<body>
<!--<script type="text/javascript">
	$(document).ready(function() {
		if (sessionStorage.getItem('#myModal') !== 'true') {
			$('#myModal').modal('show');
			sessionStorage.setItem('#myModal','true');
		}
	});

	$(document).ready(function() {
		if ($.cookie('pop')) {
			$('#myModal').modal('show');
			$.cookie('pop', '1');
		}
	});
</script>-->
<script type="text/javascript">
	$(document).ready(function() {
		$('#myModal').modal('show');
	});

	function play() {var audio = new Audio('' + 'Songs.mp3'); audio.play();}
</script>

<!-- MODAL BOOTSRAP + ANIMATE.CSS -->
<div class="modal animate__animated animate__tada" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<!-- Modal Header -->
			<div class="modal-header">
				<h4 class="modal-title" id="myModalLabel"><b>Hallo 😄</b></h4>
				<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only"></span></button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
				<font>Boleh gak kita kenalan?🙃<br>soalnya <b>kamu cantik bet💓</b>, jdi aku pngen tau <b>tentang Kmu😛</b><br>Kalau boleh klik <b>Next</b> yah, kalau gaboleh yaudah...</font>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" 
				onclick="Swal.fire({
					html: '<h3><b>Yah, jadi sedih😢</b></h3>',
					imageUrl: 'sedih.gif', imageWidth: 150, imageHeight: 150,
					timer: 3000,
					timerProgressBar: false,
					allowOutsideClick: false,
					showCancelButton: false,
					showConfirmButton: false,
				});
				">Gaboleh</button>&nbsp;&nbsp;
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal2" data-dismiss="modal" onclick="play()">Next</button>
			</div>
		</div>
	</div>
</div>
<!-- END BOOTSRAP + ANIMATE.CSS -->

	<!--<script>
		window.setTimeout(function() {
			$(".remove").fadeTo(500,0).slideUp(500, function(){
				$(this).remove();
			});
		}, 4000);
	</script>-->

	<form method="POST" action="config.php">
		<!-- MODAL BOOTSRAP + ANIMATE.CSS -->
		<div class="modal animate__animated animate__bounce" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" width="100%" data-keyboard="false" data-backdrop="static">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<!-- Modal Header -->
					<div class="modal-header">
						<center><img src="panda2.gif" width="30%" height="30%"></center>
						<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					</div>
					<!-- Modal body -->
					<div class="modal-body">
						<div class="form-group">
							<ol>
							<b><li><input required type="text" name="nama_user" class="form-control" placeholder="Nama Kamu" style="width: 90%;"></li>
							<br>
							<li><input required type="text" name="als_user" class="form-control" placeholder="Lagi ngapain ya?" style="width: 90%;"></li></b>
						</ol>
						</div>
					</div>
					<!-- Modal footer -->
					<div class="modal-footer">
						<button data-toggle="modal" type="submit" class="btn btn-primary">Next</button>
					</div>
				</div>
			</div>
		</div>
		<!-- END BOOTSRAP + ANIMATE.CSS -->
	</form>

</body>
</html>