<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="style.css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <!------ Include the above in your HEAD tag ---------->
   <title>Generer QRCODE</title>
</head>

<body>
   <div class="container">
      <div class="col-md-6 mx-auto text-center">
         <div class="header-title">
            <h1 class="wv-heading--title">
               Créer le Qr Code
            </h1>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4 mx-auto">
            <div class="myform form ">
               <form action="generateQrCode.php" method="post" name="login">
                  <div class="form-group">
                     <label>Vers quel url ?</label>
                     <input type="text" name="url" class="form-control my-input" id="url" placeholder="https://pap-agency.fr" required>
                  </div>
                  <div class="form-group">
                     <label>Donnez un nom au fichier</label>
                     <input type="text" name="name" class="form-control my-input" id="name" placeholder="QrCode" required>
                  </div>
                  <div class="text-center ">
                     <button type="submit" class=" btn btn-block send-button tx-tfm">Générer et télécharger le Qr Code </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</body>

</html>