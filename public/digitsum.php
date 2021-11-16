<!DOCTYPE html>
<html lang="en">
<head>
  <title>Result Digit of Sum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Result</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
        </div>

        <?php

		$hasil = $_POST['number'];

		$sum = 0; $rem = 0;

		for ($i = 0; $i<=strlen($hasil); $i++)
		{
		$rem = $hasil % 10;
		$sum = $sum + $rem;
		$hasil = $hasil/10;
		}
		echo "Sum of digits is $sum";

       	?>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">OK</button>
        </div>

      </div>
    </div>

</body>
</html>
