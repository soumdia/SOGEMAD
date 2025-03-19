<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer></script>
        <script src="js/jquery.js" ></script>
     

<title>formulaire d'Emprunts</title>



<body style="background-color:#232C39;" >

<header style=" height: 90px;background-color: floralwhite;margin-top:15px;width: 1250px;margin-left:150px;border-radius: 10px; ">
<img src="images/sogemad.png" alt="" style="height: 90px;">
		
		<nav style=" float: right;background-color: #ffc107;height:90px;border-radius: 10px;">
			<ul style="list-style: none;">
				<li style=" margin-top:32px;display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="/" style="color:black;">HOME</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="#" style="color:black;">TOUS LES DOCS</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="#" style="color:black;">DEMANDES</a></li>
			</ul>
		</nav>
	</header>


<div style="height:600px;width: 1100px;background-color: #F0F2F4 ;border-radius: 10px;margin-left: 225px;margin-top: 25px; text-align: center;">

                        <div style="height:40px;width: 1100px; text-align: center;border-style:unset;background-color: #ffc107;" >
                                                <label style="font-family: fantasy; font-size: 20px;">Formulaire D'Emprunt</label>
                        </div>

                        <!--le Formulaire d'emprunts -->
    <form action="/Enregistrement_emprunt" method="POST">
                      @method('POST')
                      @csrf
                <input type="text" class="form-control" style="height:50px;margin-top:50px;width:950px;margin-left:80px" name="nom" placeholder="Nom de l'Agent qui emprunte le document" value="{{$Demandes->Nom}}">



                <div style="height:150px;width: 1000px;border-radius: 10px;margin-left: 50px;margin-top: 25px;border-style: outset;background-color:white;" >
                                            <p > <label style="font-family: cursive; font-size: 20px;">----------  Document emprunté  ----------</label></p>

                                <div class="form-check" style="float:left;margin-left:70px;margin-top: 25px">
                                <input class="form-check-input" type="radio" name="ok" id="flexRadioDefault1"  value="BULLETIN">
                                <label class="form-check-label" for="flexRadioDefault1" style="color:#ffc107;font-family: cursive; font-size: 18px; ">
                                    Bulletins D'Adhésions
                                </label>
                                </div>
                                <div class="form-check" style="float:left;margin-left:70px;margin-top: 25px">
                                <input class="form-check-input" type="radio" name="ok" id="flexRadioDefault1"  value="FACTURE">
                                <label class="form-check-label" for="flexRadioDefault1" style="color:#ffc107;font-family: cursive; font-size: 18px; ">
                                    Factures
                                </label>
                                </div>
                                <div class="form-check" style="float:left;margin-left:70px;margin-top: 25px">
                                <input class="form-check-input" type="radio" name="ok" id="flexRadioDefault1" value="CONVENTION">
                                <label class="form-check-label" for="flexRadioDefault1" style="color:#ffc107;font-family: cursive; font-size: 18px; ">
                                    Conventions
                                </label>
                                </div>

                                <div style="float:left;margin-left:80px;margin-top: 20px">
                                <input type="text" class="form-control" style="width:250px" name="reference" placeholder="Référence Du Document" value="{{$Demandes->reference}}" >
                                </div>


                    </div>

                    <div style="height:150px;width: 1000px;border-radius: 10px;margin-left: 50px;;border-style: outset;background-color:white;" >
                                            <p > <label style="font-family: cursive; font-size: 20px;">----------  Renseignement des dates  ----------</label></p>



                                <div style="float:left;margin-left:15px;margin-top: 10px">
                                    <label> Date D'emprunt:</label></br>
                                <input type="date" class="form-control" style="width:250px" name="date_emp"  >
                                </div>
                                <div style="float:left;margin-left:100px;margin-top: 10px">
                                <label> Délai D'emprunt:</label></br>
                                <input type="text" class="form-control" style="width:250px" name="delai" placeholder="Nombre de Jours" >
                                </div>
                                <div style="float:left;margin-left:90px;margin-top: 10px">
                                <label> Date De Retour:</label></br>
                                <input type="date" class="form-control" style="width:250px" name="date_ret"  >
                                </div>


                    </div>


                                <div style="height:90px;width: 1000px;border-radius: 10px;margin-left: 50px;;border-style: outset;background-color:white;" >
                                                        
                                <div style="margin-top: 25px">
                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                <a href="/empruntliste"><button type="button" class="btn btn-warning" id="bt-convention" style="margin-left:25px">Liste Des Emprunts De Documents</button></a>
                                </div>


                    </div>
   </form>
</div>
</body>
</html>


