<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous" defer></script>
        <script src="js/jquery.js" ></script>
     

<title>formulaire d'Enregistrement</title>



<body style="background-color:#232C39;" >

<header style=" height: 90px;background-color: floralwhite;margin-top:25px;width: 1250px;margin-left:150px;border-radius: 10px; ">
<img src="images/sogemad.png" alt="" style="height: 90px;">
		
		<nav style=" float: right;background-color: #ffc107;height:90px;border-radius: 10px;">
			<ul style="list-style: none;">
				<li style=" margin-top:32px;display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="/" style="color:black;">HOME</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="#" style="color:black;">CONVENTIONS GROUPES</a></li>
				<li style="display: inline-block; font-weight: bold;margin-right: 20px;font-family:sans-serif;"><a href="#" style="color:black;">DEMANDES</a></li>
			</ul>
		</nav>
	</header>


<div style="height:450px;width: 1100px;background-color: white;border-radius: 10px;margin-left: 225px;margin-top: 100px; text-align: center;">

    <div style="height:40px;width: 1100px; text-align: center;border-style:unset;background-color: #ffc107;" >
                            <label style="font-family: fantasy; font-size: 20px;">Formulaire De Modification D'une Convention Groupe</label>
    </div>

   


   

    <div style="height:350px;width: 1000px;border-radius: 10px;margin-left: 50px;margin-top: 25px; text-align: center;border-style: outset;" class="convention" >
    

           

              


             <div style="height:325px;width: 400px;border-radius: 10px;margin-left: 300px;margin-top: 10px; text-align: center;border-style: outset; float: left;"> 

               <div style="height:30px;width: 395px; text-align: center;border-style:unset;background-color: #ffc107;" >
                            <label style="font-family: cursive; font-size: 15px;">Convention Groupe</label>
    </div>
    <form action="/Conventiongroupes/{{$Conventiongroupes->id}}/update" method="post">
@csrf
@method('PUT')
                
                                                <div class="col-sm-10" style="margin-top:35px">
                                                  <input type="text" class="form-control" style="width:300px; margin-left: 50px;" placeholder="Nom de la société" name="nom" value="{{$Conventiongroupes->nom_societe}}">
                                                </div>
                                      
                                                <label style="font-family:cursive;" class="col-sm-2 col-form-label">Date </label>
                                                <div class="col-sm-10">
                                                  <input type="date" class="form-control" style="width:300px; margin-left: 50px;" name="date" value="{{$Conventiongroupes->date_pro}}" >
                                                </div>


                                                <div class="mb-3 row" style="margin-top:25px;float: left;margin-left: 10px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:150px;" placeholder="lieu rangement" name="lieu" value="{{$Conventiongroupes->lieu}}">
                                                </div>
                                      </div>

                                      <div class="mb-3 row" style="margin-top:25px;float: left;margin-left: 50px;">
                                               
                                                <div class="col-sm-10">
                                                  <input type="text" class="form-control" style="width:140px;"placeholder="code rangement" name="coderang"  value="{{$Conventiongroupes->code_rang}}" >
                                                </div>
                                      </div>

                                               

                                                <div class="mb-3 row" style="margin-top:20px;float: left;margin-left: 160px;">
                                          <button type="submit" class="btn btn-success">Modifier</button>
                                      </div>

                        


                      </form>

            </div>       
                        
                                     

                                     


    </div>



</div>








</body>
</html>


