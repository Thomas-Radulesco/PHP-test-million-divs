<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP digital display - enter number</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <div class="container my-4">
        <h1>Entrez un nombre entre 0 et 99</h1>
        <form action="/display" class="login-form d-flex align-items-center" role="form" method="post">
			<div class="form-group">
				<label for="number" class="control-label">Nombre entre 0 et 99</label>
				<input type="text" name="number" id="inputNumber" class="col-4" placeholder="votre nombre">	
                <button class="btn btn-primary p-2 px-3 m-2" type="submit">
                    OK
                </button>
			</div>
		</form>
    </div>
</body>
</html>