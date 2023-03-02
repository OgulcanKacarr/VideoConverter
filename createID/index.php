<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Turkish ID Card Maker</title>
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.min.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.png" type="image/png">
<script type="text/javascript">
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "js/tag.js", "ym");
</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow py-3">
<div class="container">
<a class="navbar-brand mx-auto" href="https://breached.vc/">Turkish Identity Card Maker by adderall</a>
</div>
</nav>
<div class="container">
<div class="card text-white bg-primary rounded shadow mt-4">
<div class="card-body">
<form action="" class="row" id="form">
<div class="col-lg-6">
<div>Name:</div>
<input class="form-control d-block mt-2 shadow" name="name" placeholder="Enter the name to be written on the ID." required>
</div>
<div class="col-lg-6 mt-3 mt-lg-0">
<div>Surname:</div>
<input class="form-control d-block mt-2 shadow" name="surname" placeholder="Enter the last name to be written on the ID." required>
</div>
<div class="col-lg-6 mt-3">
<div>Date of birth:</div>
<input class="form-control d-block mt-2 shadow" name="birth_date" type="date" required>
</div>
<div class="col-lg-6 mt-3">
<div>Gender:</div>
<select name="gender" class="form-control d-block mt-2 shadow">
<option value="E / M" option>Male</option>
<option value="K / F">Female</option>
</select>
</div>
<div class="col-lg-6 mt-3">
<div>T.C. ID Number:</div>
<input class="form-control d-block mt-2 shadow" name="tckn" placeholder="Enter the T.C. ID number that will be written on the ID. (Ex: 52831396760)" required>
</div>
<div class="col-lg-6 mt-3">
<div>Serial Number:</div>
<input class="form-control d-block mt-2 shadow" name="document_number" placeholder="Enter the serial number to be written on the ID. (Ex: A12L34567)" required>
</div>
<div class="col-lg-6 mt-3">
<div>Expiry Date:</div>
<input class="form-control d-block mt-2 shadow" name="valid_until" type="date" required>
</div>
<div class="col-lg-6 mt-3">
<div>Nationality:</div>
<input class="form-control d-block mt-2 shadow" value="T.C./TUR" readonly>
</div>
<div class="col-lg-6 mt-3">
<div>Mother Name:</div>
<input class="form-control d-block mt-2 shadow" name="mother_name" placeholder="Enter the mother's name to be written on the ID." required>
</div>
<div class="col-lg-6 mt-3">
<div>Father Name:</div>
<input class="form-control d-block mt-2 shadow" name="father_name" placeholder="Enter the father's name to be written on the ID." required>
</div>
<div class="col-lg-12 mt-3">
<div>ID Photo:</div>
<input class="form-control d-block mt-2 shadow" type="file" name="image" accept="image/*" required>
</div>
<div class="col-lg-12 mt-4 d-flex">
<div class="flex-grow-1">
<button type="submit" class="btn btn-primary shadow">Create Identity</button>
</div>
</div>
</form>
</div>
</div>
<div class="card text-white bg-primary rounded shadow my-4">
<div class="card-body">
<div class="row">
<div class="h4 mb-2">Created ID Images</div>
<div class="text-one">When you create an ID via the form above, it will appear here.
</div>
<div class="text-two d-none">The generated ID images are shown below. By clicking the button
you can download it to your device.</div>
<div class="col-lg-6 mt-3">
<img src="img/front-empty.png" class="front-image mw-100">
<button class="btn btn-primary shadow mt-3" id="download-front" disabled>Download Image</button>
</div>
<div class="col-lg-6 mt-3">
<img src="img/back-empty.png" class="back-image mw-100">
<button class="btn btn-primary shadow mt-3" id="download-back" disabled>Download Image</button>
</div>
</div>
</div>
</div>
</div>
<div class="side-container">
<div class="front">
<img src="" class="face">
<img src="" class="face-right">
<div class="tckn"></div>
<div class="name"></div>
<div class="surname"></div>
<div class="birth_date"></div>
<div class="gender"></div>
<div class="document_number"></div>
<div class="valid_until"></div>
</div>
<div class="back">
<div class="mother_name"></div>
<div class="father_name"></div>
<div class="mrz"></div>
</div>
</div>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/domtoimage.min.js"></script>
<script src="js/script.min.js"></script>
</body>
</html>