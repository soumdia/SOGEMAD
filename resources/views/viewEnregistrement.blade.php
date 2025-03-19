<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer></script>
        <script src="js/jquery.js" ></script>
     

<title>formulaire d'Enregistrement</title>



<body style="background-image:url(images/arriere.jpg);" >

<header style=" height: 90px;background-color: floralwhite;margin-top:15px;width: 1250px;margin-left:150px;border-radius: 10px; ">
<img src="images/sogemad.png" alt="" style="height: 90px;">
		
		<nav style=" float: right;background-color: #ffc107;height:90px;border-radius: 10px;">
			<ul style="list-style: none;">
				<li style=" margin-top:32px;display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="/" style="color:black;">HOME</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="#" style="color:black;">TOUS LES DOCS</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="demandeliste" style="color:black;">DEMANDES</a></li>
			</ul>
		</nav>
	</header>


<div style="height:600px;width: 1100px;background-color: white;border-radius: 10px;margin-left: 225px;margin-top: 25px; text-align: center;">

<!--les Formulaires d'enregistrement -->

    <div style="height:40px;width: 1100px; text-align: center;border-style:unset;background-color: #ffc107;" >
                            <label style="font-family: fantasy; font-size: 20px;">Formulaire D'Enregistrement</label>
    </div>


<!-- Choix du type de documment -->
    <div style="height:150px;width: 1000px;border-radius: 10px;margin-left: 50px;margin-top: 10px; text-align: center;border-style: outset;" >
                               <label style="font-family: cursive; font-size: 20px;">-----  Choisissez le type de document  -----</label>
                               <div style="margin-top: 30px;">
                                             <div  style="float: left;margin-left: 50px;">
                                                <img src="images/bulletin.png"alt="" style="height:50px;width:50px">
                                                <button type="button" class="btn btn-warning" id="bt-bulletin">Bulletin d'adhésion</button>

                                             </div>

                                            <div  style="float: left;margin-left: 160px;">
                                                <img src="images/facture.png"alt="" style="height:50px;width:50px">
                                                <button type="button" class="btn btn-warning" id="bt-facture">Une Facture</button>

                                            </div>

                                            <div style="float: left;margin-left: 160px;">
                                              <img src="images/convention.png"alt="" style="height:50px;width:50px">
                                              <button type="button" class="btn btn-warning" id="bt-convention">Une Convention</button>

                                           </div>

                                </div>

    </div>


<!-- le message d'erreur -->
    @if( $errors->all())
    <div class="erreur" style="width:450px; height: 100px; border-style: outset;margin-left: 340px;margin-top: 50px;">
      <div style="height:10px;width:445px;background-color:#ffc107;"></div>
      <div style="float:left;margin-top:15px;margin-left:10px" >
      <img src="images/annuler.png"alt="" style="height:50px;width:50px">
      </div>
     <div style="float:left;margin-left:15px">
    <p style="color:black;font-family:cursive;">Echèc de l'enregistrement</p>
    <p style="color:black;font-family:cursive;"> velliez reprendre en rempliçant bien les champs</p>
    </div>
  </div>

    @endif

<!-- formulaire Bulletins -->
    <div style="height:350px;width: 1000px;border-radius: 10px;margin-left: 50px;margin-top: 25px; text-align: center;border-style: outset;" class="bulletin" >
    
                      <form action="/Enregistrement_Bulletin" method="POST">
                      @method('POST')
                      @csrf
                        
                                     <div class="mb-3 row" style="margin-top:20px;margin-left: 250px;">
                                                <label style="font-family:cursive;font-size: 20px;" class="col-sm-2 col-form-label">Matricule</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:300px" name="matricule" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 25px;">
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Nom</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:300px;" name="nom" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 150px;">
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Code</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:300px;" name="code" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 25px;">
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Numero</label>
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:300px;" name="numero" >
                                                </div>
                                      </div>


                                       <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 150px;">
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Date</label>
                                                <div class="col-sm-10">
                                                  <input type="date" class="form-control" style="width:300px;" name="date" >
                                                </div>
                                      </div>

                                       <div class="mb-3 row" style="margin-top:10px;float: left;margin-left: 120px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:200px;" placeholder="lieu rangement" name="lieu" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:10px;float: left;margin-left: 350px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:200px;"placeholder="code rangement"  name="coderang">
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:10px;float: left;margin-left: 450px;">
                                          <button type="submit" class="btn btn-success">Enregistrer</button>
                                      </div>

                        


                      </form>



    </div>



<!-- Formulaire Factures -->
    <div style="height:350px;width: 1000px;border-radius: 10px;margin-left: 50px;margin-top: 25px; text-align: center;border-style: outset;" class="facture" >
    
    <form action="/Enregistrement_Factures" method="POST">
                      @method('POST')
                      @csrf
                        
                                     

                                      <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 25px;">
                                                
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:300px;" placeholder="Numéro du Chèque" name="numero" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 300px;">
                                                
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:300px;" placeholder="Nom de la Banque" name="nom" >
                                                </div>
                                      </div>

                                      
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Date de réception </label>
                                                <div class="col-sm-10">
                                                  <input type="date" class="form-control" style="width:300px;margin-left: 350px;" name="daterecep" >
                                                </div>
                                     


                                      
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Date d'Edition </label>
                                                <div class="col-sm-10">
                                                  <input type="date" class="form-control" style="width:300px;margin-left: 350px;" name="dateedi" >
                                                </div>

                                                <div class="mb-3 row" style="margin-top:10px;float: left;margin-left: 100px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:200px;" placeholder="lieu rangement" name="lieu" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:10px;float: left;margin-left: 350px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:200px;"placeholder="code rangement" name="coderang" >
                                                </div>
                                      </div>
                                     

                                      <div class="mb-3 row" style="margin-top:10px;float: left;margin-left: 450px;">
                                          <button type="submit" class="btn btn-success">Enregistrer</button>
                                      </div>

                        


                      </form>



    </div>


<!-- formulaire des conventions -->
    <div style="height:350px;width: 1000px;border-radius: 10px;margin-left: 50px;margin-top: 25px; text-align: center;border-style: outset;" class="convention" >
    
<!-- formulaire convention medicale -->
            <div style="height:325px;width: 400px;border-radius: 10px;margin-left: 50px;margin-top: 10px; text-align: center;border-style: outset;float: left;"> 

               <div style="height:30px;width: 395px; text-align: center;border-style:unset;background-color: #ffc107;" >
                            <label style="font-family: cursive; font-size: 15px;">Convention Médicale</label>
    </div>
    <form action="/Enregistrement_Conventionmedicale" method="POST">
                      @method('POST')
                      @csrf
                
                                                <div class="col-sm-10" style="margin-top:10px">
                                                  <input type="text" class="form-control" style="width:300px; margin-left: 50px;" placeholder="Matricule du Prestataire" name="matricule">
                                                </div>
                                      
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Date </label>
                                                <div class="col-sm-10">
                                                  <input type="date" class="form-control" style="width:300px; margin-left: 50px;" name="date" >
                                                </div>

                                                <div class="col-sm-10" style="margin-top:15px">
                                                  <input type="text" class="form-control" style="width:300px; margin-left: 50px;" placeholder="La provenance(ville)" name="ville">
                                                </div>

                                                 <div class="mb-3 row" style="margin-top:15px;float: left;margin-left: 10px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:150px;" placeholder="lieu rangement" name="lieu" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:15px;float: left;margin-left: 50px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:140px;"placeholder="code rangement" name="coderang" >
                                                </div>
                                      </div>

                                                <div class="mb-3 row" style="margin-top:5px;float: left;margin-left: 150px;">
                                          <button type="submit" class="btn btn-success">Enregistrer</button>
                                      </div>

                        


                      </form>

            </div> 

<!-- formulaire convention groupe -->
             <div style="height:325px;width: 400px;border-radius: 10px;margin-left: 100px;margin-top: 10px; text-align: center;border-style: outset; float: left;"> 

               <div style="height:30px;width: 395px; text-align: center;border-style:unset;background-color: #ffc107;" >
                            <label style="font-family: cursive; font-size: 15px;">Convention Groupe</label>
    </div>
    <form action="/Enregistrement_Conventiongroupe" method="POST">
                      @method('POST')
                      @csrf
                
                                                <div class="col-sm-10" style="margin-top:35px">
                                                  <input type="text" class="form-control" style="width:300px; margin-left: 50px;" placeholder="Nom de la société" name="nom">
                                                </div>
                                      
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Date </label>
                                                <div class="col-sm-10">
                                                  <input type="date" class="form-control" style="width:300px; margin-left: 50px;" name="date" >
                                                </div>


                                                <div class="mb-3 row" style="margin-top:25px;float: left;margin-left: 10px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:150px;" placeholder="lieu rangement" name="lieu" >
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:25px;float: left;margin-left: 50px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:140px;"placeholder="code rangement" name="coderang" >
                                                </div>
                                      </div>

                                               

                                                <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 150px;">
                                          <button type="submit" class="btn btn-success">Enregistrer</button>
                                      </div>

                        


                      </form>

            </div>       
                        
                                     

                                     


    </div>



</div>


<!-- code javasrype pour les transitions entre formulaires -->

<script type="text/javascript">
    $(document).ready(function() {
      $(".bulletin,.facture,.convention").hide();  
    });
    $("#bt-bulletin").click(function(){
    $(".convention,.facture,.erreur").hide(function(){
      $(".bulletin").show();
    });
  });

    $("#bt-facture").click(function(){
    $(".bulletin,.convention,.erreur").hide(function(){
      $(".facture").show();
    });
  });

    $("#bt-convention").click(function(){
    $(".facture,.bulletin,.erreur").hide(function(){
      $(".convention").show();
    });
  });
</script>



</body>
</html>


