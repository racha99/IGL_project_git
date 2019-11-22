<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no , initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ESI Manager</title>


<body>

<div>
<div class="col-md-6">
         <div class="container-fluid">
             <form method="POST" action="{{ route('studentscreate') }}" >
                 @csrf
                 <div class="row form-group">
                     <div class="col-md-12">
                         <label for="">Nom :</label>
                         <input type="text" name="Nom" class="form-control" required>
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col -md-12" >
                         <label for="">Prénom :</label>
                         <input type="text" name="Prenom" class="form-control" required>
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col-md-12">
                         <label for="">Adresse-email :</label>
                         <input type="text" name="Adresse_email" class="form-control" required>
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col -md-12">
                         <label for="">Date de naissance :</label>
                         <input type="date" name="Date_de_naissance" class="form-control" required>
                     </div>
                 </div>
                 <div class="row form-group">
                     <div class="col-md-12">
                         <button type="submit" class="btn btn-success w-50 float-left">Créer un étudiant</button>
                     </div>
                     </div>

             </form>
         </div>
         </div>


         <div class="col-md-6">
             <table class="table table-striped table-hover">
                 <tr>
                     <th>Nom</th>
                     <th>Prénom</th>
                     <th>Adresse-email</th>
                     <th>Date de naissance</th>
                 </tr>

                 @foreach($st  as $student )
                 <tr>

                     <td></td>
                     <td></td>
                     <td></td>
                     <td></td>

                 </tr>

             </table>

         </div>

     </div>
</div>

</body>
</head>

</html>
