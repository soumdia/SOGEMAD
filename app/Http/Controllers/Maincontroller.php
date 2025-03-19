<?php

namespace App\Http\Controllers;
use App\Models\Bulletin;
use App\Models\Factures;
use App\Models\Conventionmedicales;
use App\Models\Conventiongroupes;
use App\Models\emprunts;
use App\Models\Demandes;
use Illuminate\Http\Request;
use Carbon\Carbon;

class Maincontroller extends Controller
{
/* enregistrement des bulletins */
    public function Enregistrement_Bulletin(Bulletin $bulletin, Request $request ){
        $verification= $request ->validate([
            'matricule' => 'required',
           'nom' => 'required', 
            'code' => 'required', 
            'numero' => 'required',
            'date' => 'required',
            'lieu' => 'required', 
            'coderang' => 'required'   
            
       ])  ; 
       if($verification){
            
        $ligne=bulletin::create([
                'matricule_cli'=>strtoupper($request ->matricule),
                'nom_cli'=>strtoupper($request ->nom),
                'code_cli'=> strtoupper($request ->code),
                'numero_cli'=> $request ->numero,
                'date'=> $request ->date,
                'lieu'=> strtoupper($request ->lieu),
                'code_rang'=>strtoupper ($request ->coderang)
                
       ]);
      
       
        return view('viewEnregistrement');
       }else{
        return redirect() ->bach(); 
       }
     
        }

/* enregistrement des factures */
        public function Enregistrement_Factures(Factures $factures,Request $request ){
            $verification=$request ->validate([
                'numero' => 'required',
                'nom' => 'required', 
                'daterecep' => 'required', 
                'dateedi' => 'required',
                'lieu' => 'required', 
                'coderang' => 'required'   
                
           ])  ; 
           if($verification){
            
            factures::create([
                    'num_cheque'=> strtoupper($request ->numero),
                    'nom_banque'=> strtoupper($request ->nom),
                    'date_recep'=> $request ->daterecep,
                    'date_edit'=> $request ->dateedi,
                    'lieu'=> strtoupper($request ->lieu),
                    'code_rang'=> strtoupper($request ->coderang)
                    
           ]);
           
            return view('viewEnregistrement');
           }else{
            return redirect() ->bach(); 
           }
         
         
            }

/* enregistrement des conventions medicales */
            public function Enregistrement_Conventionmedicale(Conventionmedicales $conventionmedicales,Request $request ){
                $verification=$request ->validate([
                    'matricule' => 'required',
                    'date' => 'required', 
                    'ville' => 'required', 
                    'lieu' => 'required', 
                    'coderang' => 'required'   
                    
               ])  ; 
               if($verification){
                
                conventionmedicales::create([
                        'matricule_pres'=> strtoupper($request ->matricule),
                        'date_pro'=> $request ->date,
                        'provenance'=> strtoupper($request ->ville),
                        'lieu'=> strtoupper($request ->lieu),
                        'code_rang'=> strtoupper($request ->coderang)
                        
               ]);
               
                return view('welcome');
               }else{
                return redirect() ->bach(); 
               }
             
             
                }

/* enregistrement des conevenions groupes */
                public function Enregistrement_Conventiongroupe(Conventiongroupes $conventiongroupes,Request $request ){
                    $verification=$request ->validate([
                        'nom' => 'required',
                        'date' => 'required',  
                        'lieu' => 'required', 
                        'coderang' => 'required'   
                        
                   ])  ; 
                   if($verification){
                    
                    conventiongroupes::create([
                            'nom_societe'=> strtoupper($request ->nom),
                            'date_pro'=> $request ->date,
                            'lieu'=> strtoupper($request ->lieu),
                            'code_rang'=> strtoupper($request ->coderang)
                            
                   ]);
                   
                    return view('welcome');
                   }else{
                    return redirect() ->bach(); 
                   }
                 
                 
                    }


/* enregistrement des emprunts */
                    public function Enregistrement_emprunt(emprunts $emprunts, Request $request ){
                        
                        $verification=$request ->validate([
                            'nom' => 'required',
                            'ok' => 'required',  
                            'reference' => 'required', 
                            'date_emp' => 'required',
                            'delai' => 'required', 
                            'date_ret' => 'required'     
                            
                       ])  ; 
                       if($verification){
                        
                        emprunts::create([
                                'Nom'=> strtoupper($request ->nom),
                                'Type_doc'=> $request ->ok,
                                'reference'=> strtoupper($request ->reference),
                                'date_emp'=> $request ->date_emp,
                                'delai'=> $request ->delai,
                                'date_ret'=> $request ->date_ret,

                                
                       ]);
                       
                        return view('emprunts');
                       }else{
                        return redirect() ->bach(); 
                       }
                       
                       
                     
                        }

/* enregistrement des demandes */
                        public function Enregistrement_demandes(Demandes $demandes, Request $request ){
                        
                            $verification=$request ->validate([
                                'nom' => 'required',
                                'ok' => 'required',  
                                'reference' => 'required' 
                                     
                                
                           ])  ; 
                           if($verification){
                            
                            demandes::create([
                                    'Nom'=> strtoupper($request ->nom),
                                    'Type_doc'=> $request ->ok,
                                    'reference'=> strtoupper($request ->reference),        
                           ]);
                           
                            return view('FormulaireDemande');
                           }else{
                            return redirect() ->bach(); 
                           }
                            }

/* recuperer les données */
                    public function bulletinliste()
                    {
                        $Bulletin = Bulletin::all();
                        return view('BulletinListe',['Bulletin'=>$Bulletin]);
                    }

                    public function facturesliste()
                    {
                        $Factures = Factures::all();
                        return view('FactureListe',['Factures'=>$Factures]);
                    }

                    public function conventionmedicalesliste()
                    {
                        $Conventionmedicales = Conventionmedicales::all();
                        return view('ConventionMedicaleListe',['Conventionmedicales'=>$Conventionmedicales]);
                    }


                    public function conventiongroupesliste()
                    {
                        $Conventiongroupes = Conventiongroupes::all();
                        return view('ConventionGroupeListe',['Conventiongroupes'=>$Conventiongroupes]);
                    }

                    public function empruntliste()
                    {
                        $emprunts = emprunts::all();
                        return view('empruntsliste',['emprunts'=>$emprunts]);
                    }
                    public function demandeliste()
                    {
                        $now = Carbon::now();
                        $dateLimite = Carbon::now()->subHours(24);
                        $count = demandes::where('created_at', '>', $dateLimite)->count();
                        $demandes =demandes::latest()->take($count)->get();
                        return view('DemandeListe',['demandes'=>$demandes]);
                    }


/* supprimer bulletin */
                    public function BulletinDelete($id)
                    {
                        $Bulletin = Bulletin::findOrFail($id);
                
                       
                        $Bulletin->delete();
                       
                         return redirect('bulletin');
                
                    }

/* supprimer facture */
                    public function FacturesDelete($id)
                    {
                        $Factures = Factures::findOrFail($id);
                
                       
                        $Factures->delete();
                       
                         return redirect('factures');
                
                    }


/* supprimer convention groupe */
                    public function ConventiongroupesDelete($id)
                    {
                        $Conventiongroupes = Conventiongroupes::findOrFail($id);
                
                       
                        $Conventiongroupes->delete();
                       
                         return redirect('conventiongroupes');
                
                    }



/* supprimer convention medicale */
                    public function ConventionmedicalesDelete($id)
                    {
                        $Conventionmedicales = Conventionmedicales::findOrFail($id);
                
                       
                        $Conventionmedicales->delete();
                       
                         return redirect('conventionmedicales');
                
                    }



/* supprimer emprunt */
                    public function empruntsDelete($id)
                    {
                        $emprunts = emprunts::findOrFail($id);
                
                       
                        $emprunts->delete();
                       
                         return redirect('empruntliste');
                
                    }


/* supprimer demandes */
                    public function DemandeDelete($id)
                    {
                        $Demandes = Demandes::findOrFail($id);
                
                       
                        $Demandes->delete();
                       
                         return redirect('DemandeListe');
                
                    }



/* Modifier une donnée */
                    public function modifierbulletins(Bulletin  $Bulletin)
                    {
                        return view('ModifierBulletins', [
                                'Bulletin'=> $Bulletin 
                        ]);
                    }

                    public function modifierfactures(Factures  $Factures)
                    {
                        return view('ModifierFactures', [
                                'Factures'=> $Factures 
                        ]);
                    }

                    public function modifierconventionmedicales(Conventionmedicales  $Conventionmedicales)
                    {
                        return view('ModifierConventionMedicale', [
                                'Conventionmedicales'=> $Conventionmedicales 
                        ]);
                    }

                    public function modifierconventiongroupes(Conventiongroupes  $Conventiongroupes)
                    {
                        return view('ModifierConventionGroupe', [
                                'Conventiongroupes'=> $Conventiongroupes 
                        ]);
                    }

                    public function validerDemandes(Demandes  $Demandes)
                    {
                        return view('ValiderDemande', [
                                'Demandes'=> $Demandes 
                        ]);
                    }



/* Modifier bulletin */
                    public function updatebulletin(Bulletin $Bulletin, Request  $request)
                    {
                        $Bulletin->matricule_cli =strtoupper($request->matricule);
                        $Bulletin->nom_cli = strtoupper($request ->nom);
                        $Bulletin->code_cli = strtoupper($request->code);
                        $Bulletin->numero_cli =strtoupper($request->numero);
                        $Bulletin->date = $request->date;
                        $Bulletin->lieu =strtoupper($request->lieu);
                        $Bulletin->code_rang = strtoupper($request->coderang);
                        
                        $Bulletin->save();
                        
                        return redirect('/bulletin');
                    }


/* Modifier factures */
                    public function updatefactures(Factures $Factures, Request  $request)
                    {
                        $Factures->num_cheque =strtoupper($request->numero);
                        $Factures->nom_banque = strtoupper($request ->nom);
                        $Factures->date_recep =$request->daterecep;
                        $Factures->date_edit =$request->dateedi;
                        $Factures->lieu =strtoupper($request->lieu);
                        $Factures->code_rang = strtoupper($request->coderang);
                        
                        $Factures->save();
                        
                        return redirect('/factures');
                    }


/* Modifier convention medicale */
                    public function updateconventionmedicales(Conventionmedicales $Conventionmedicales, Request  $request)
                    {
                        $Conventionmedicales->matricule_pres =strtoupper($request->matricule); 
                        $Conventionmedicales->date_pro =$request->date;
                        $Conventionmedicales->provenance = strtoupper($request ->ville);
                        $Conventionmedicales->lieu =strtoupper($request->lieu);
                        $Conventionmedicales->code_rang = strtoupper($request->coderang);
                        
                        $Conventionmedicales->save();
                        
                        return redirect('/conventionmedicales');
                    }


/* Modifier convention groupe */
                    public function updateconventiongroupes(Conventiongroupes $Conventiongroupes, Request  $request)
                    {
                        $Conventiongroupes->nom_societe =strtoupper($request->nom); 
                        $Conventiongroupes->date_pro =$request->date;
                        $Conventiongroupes->lieu =strtoupper($request->lieu);
                        $Conventiongroupes->code_rang = strtoupper($request->coderang);
                        
                        $Conventiongroupes->save();
                        
                        return redirect('/conventiongroupes');
                    }

/* verification d'une nouvelle demande */
                    public function verificateur (Demandes $demandes)
                    {
                        $now = Carbon::now();
                        $dateLimite = Carbon::now()->subHours(24);

                        // Compter les enregistrements créés après la date limite
                        $count = demandes::where('created_at', '>', $dateLimite)->count();
                        
                        return view('welcome',['count'=>$count]);
                    }
}
