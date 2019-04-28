<!-- Main Content -->
<body style="background-color:#f2f2f2FF;height:100%">"
	<div class="container mt-5 pt-5" >
		<div class="row mt-5 justify-content-md-center">
			<div class="col-md-6 " style="background-color:white">
				<h3 class="text-center">Daftar Theater</h3>
				<form action="" method="post">
					<div class="input-group col-md-11 ">
						<input type="text" class="form-control" placeholder="Cari data Teater... " name="keyword">
						<div class="input-group-append">
							<button class="btn btn-primary" type="submit">Cari</button>
						</div>
					</div>
				</form>
				<?php if (empty($teater)) : ?>
				<div class="alert alert-danger" role="alert">
					Data tidak ditemukan
				</div>
				<?php endif; ?>
				<table class="table mt-5">
					<tbody>
						<tr><?php foreach ($teater as $thr) : ?>
							<td class="text-center"><?= $thr['nama_teater']; ?></td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col md-6">
				
			</div>
		</div>
	</div>
</body>