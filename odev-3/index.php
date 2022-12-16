<?php 
	$msg = "";
	function controls($sayi){
		if ($sayi % 3 == 0){
			$msg = [
				"alert" => "success",
				"message" => " Girilen Sayı <b>".$sayi."</b> İstenildiği Gibi <b>3</b>'e Tam Bölünüyor.",
			]; 	
		}else{
			$afterNum = $sayi;
			$afterNum++;
			while ($afterNum % 3 !== 0) {
				$afterNum++;
			}
			$msg = [
				"alert" => "warning",
				"message" => "Girilen Sayı <b>".$sayi."</b> tam bölünmüyor. bölünebilecek sayı: ${afterNum}",
			]; 			
		}
		return $msg;
	}

    if (isset($_POST["submit"])){
        $number = $_POST["number"];
        if ($number === ""){
 			$msg = [
				"alert" => "danger",
				"message" => "Lütfen boş bırakmayın!",
			]; 			
        }elseif(!is_numeric($number)){
 			$msg = [
				"alert" => "danger",
				"message" => "Lütfen Geçerli Bir Sayı Giriniz!",
			];
        }else{
			$msg = controls($number);
        }
    }
?>
<!doctype html>
<html lang="tr">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
		<title>Php 3. Ödev</title>
	</head>
	<body>
		<div class="container">     
			<div class="row">         
				<div class="card text-center">
					<div class="card-body">
						<h5 class="card-title">3'e bölünebilinen sayılar</h5>
						<?php if(isset($msg['message'])){?>
							<div class="alert alert-<?=$msg['alert']?> alert-dismissible fade show" role="alert">
								<?=$msg['message']?>
								<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
							</div>								
						<?php } ?>
						<form action="" method="post" >
							<div class="col-auto mt-3">
								<input type="text" name="number" class="form-control "  placeholder="Lütfen Sayı Girin">
							</div>
							<div class="col-auto mt-3">
								<button type="submit" name ="submit"  class="btn btn-primary mb-3">Sorgula</button>
							</div>
						</form> 	
					</div>
				</div>		
			</div>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>