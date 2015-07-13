
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'> -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
      <!-- les donnes des clients -->
        <div class="col-md-3 donnee">
          <p class="bg-success text-center head"><strong>Les donnees Des Clients :</strong></p>
        <form action="index.php" method="get">
           <div class="form-group has-success">
           <label class="control-label" for="prenom">Nom et Prenom :</label>
           <input type="text" name="prenom" class="form-control" id="prenom">
           </div>

           <div class="form-group has-success">
           <label class="control-label" for="numero">Numéro :</label>
           <input type="text" name="numero" class="form-control" id="numero">
           </div>

           <div class="form-group has-success">
           <label class="control-label" for="Montant">Montant :</label>
           <input type="text" name="montant" class="form-control" id="Montant">
           </div>

           <div class="form-group has-success">
             <label class="control-label">Mois :</label>
             <select class="form-control" name="mois">
               <option value="Janvier">Janvier</option>
               <option value="Février">Février</option>
               <option value="Mars">Mars</option>
               <option value="Avril">Avril</option>
               <option value="Mais">Mais</option>
               <option value="Juin">Juin</option>
               <option value="Aout">Aout</option>
               <option value="September">September</option>
               <option value="October">October</option>
               <option value="November">November</option>
               <option value="Décembre">Décembre</option>
               <option value="Janvier">Janvier</option>
             </select>
           </div>
           <div class="form-group has-success">
           <label class="control-label" for="inputWarning1">ID Transaction :</label>
           <input type="text" name="transaction" class="form-control" id="inputWarning1">
           </div>
           <button type="submit" class="btn btn-primary">Verifier</button><hr>
           </form>
        </div>
        <!-- liste de client -->
        <div class="col-md-6 col-md-offset-3">
        <p class="bg-success text-center head"><strong>Liste Des Clients :</strong></p>
          <table class="table table-hover text-left">
             <tr>
                 <th>ID</th>
                 <th>Nom et prenom</th>
                 <th>Montant</th>
                 <th>Mois</th>
                 <th>ID Transaction</th>
                 <th>Date</th>
             </tr>
             <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
                <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
              <tr>
                   <td><a href="#">2</a></td>
                   <td>brahim elmouden</td>
                   <td>940.765DH</td>
                   <td>Janvier</td>
                   <td>123456789009876</td>
                   <td>12/07/2015</td>
              </tr>
          </table>
        </div>
        <!-- recherche -->
        <div class="col-md-3 col-md-offset-9 recherche">
            <p class="bg-success text-center head"><strong>Recherche :</strong></p>
             <form class="form-inline" role="search">
             <div class="form-group">
             <input type="text" class="form-control" placeholder="Search">
             </div>
             <button type="submit" class="btn btn-default search"><span class="glyphicon glyphicon-search"></span></button><hr>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, voluptate reiciendis deleniti ipsa alias eveniet incidunt tenetur, tempora magnam voluptatum mollitia recusandae rerum hic quia. Id blanditiis nobis quis eligendi!</p>
             </form>
        </div>
      </div>


    </div>
     <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    // <script src="js/bootstrap.min.js"></script> -->
  </body>
</html>