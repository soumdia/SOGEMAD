<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer></script>
        <script src="js/jquery.js" ></script>

<title>BulletinListe</title>



<body style="background-image:url(images/arriere.jpg);" >

<header style=" height: 90px;background-color: floralwhite;margin-top:15px;width: 1250px;margin-left:150px;border-radius: 10px; ">
<img src="images/sogemad.png" alt="" style="height: 90px;">
		
		<nav style=" float: right;background-color: #ffc107;height:90px;border-radius: 10px;">
			<ul style="list-style: none;">
				<li style=" margin-top:32px;display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="/" style="color:black;">HOME</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="/emprunt" style="color:black;">EMPRUNTS</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="#" style="color:black;">DEMANDES</a></li>
			</ul>
		</nav>
	</header>


<div style="height:600px;width: 1300px;background-color: white;border-radius: 10px;margin-left: 120px;margin-top: 25px; text-align: center;">
 <div style="height:40px;width: 1300px; text-align: center;border-style:unset;background-color: #ffc107;" >
                            <label style="font-family: fantasy; font-size: 20px;">Liste des Emprunts</label>
    </div>
    <!-- la listes des emprunts -->
    <table class="table table-striped table-hover">
 <thead>
    <tr>
      
      <th scope="col">Nom de l'agent</th>
      <th scope="col">Type du Doc</th>
      <th scope="col">référence du Doc</th>
      <th scope="col">Date d'emprunt</th>
      <th scope="col">delai en Jours</th>
      <th scope="col">date de retoure</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
            foreach($emprunts as $emprunts)
            echo"
                <tr>
                  
                    <td>$emprunts->Nom</td>
                    <td>$emprunts->Type_doc</td>
                    <td>$emprunts->reference</td>
                    <td >$emprunts->date_emp</td>
                    <td>$emprunts->delai</td>
                     <td>$emprunts->date_ret</td>
                    <td><img src='images/supprimer.png' style='height:25px;width:25px' onclick='showConfirmation()'></td>
                   
            </tr>
             <script>
function showConfirmation() {
  var confirmation = confirm('Voulez-vous Supprimer ?');
  if (confirmation) {
    window.location.href = '/emprunts/$emprunts->id/empruntsDelete'; 
  } else {
    alert('Vous avez cliqué sur annulé !');
  }
}
</script>
            "

?>
  </tbody>
</table>
    </div>

    </body>
</html>