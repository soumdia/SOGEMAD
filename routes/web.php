<?php
use App\Http\Controllers\Maincontroller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


/* Home */
Route::get('/', function () {
    return view('welcome');
       
});

/* formulaire */
Route::get('/Enregistrement', function () {
    return view('viewEnregistrement');
});

/* enregistrement des documents */
Route::Post('/Enregistrement_Bulletin',[Maincontroller::class,'Enregistrement_Bulletin']);
Route::Post('/Enregistrement_Factures',[Maincontroller::class,'Enregistrement_Factures']);
Route::Post('/Enregistrement_Conventionmedicale',[Maincontroller::class,'Enregistrement_Conventionmedicale']);
Route::Post('/Enregistrement_Conventiongroupe',[Maincontroller::class,'Enregistrement_Conventiongroupe']);
Route::Post('/Enregistrement_emprunt',[Maincontroller::class,'Enregistrement_emprunt']);
Route::Post('/Enregistrement_demandes',[Maincontroller::class,'Enregistrement_demandes']);

/* affichage des listes de document */
Route::get('/bulletin',[Maincontroller::class,'bulletinliste']);
Route::get('/factures',[Maincontroller::class,'facturesliste']);
Route::get('/empruntliste',[Maincontroller::class,'empruntliste']);
Route::get('/conventionmedicales',[Maincontroller::class,'conventionmedicalesliste']);
Route::get('/conventiongroupes',[Maincontroller::class,'conventiongroupesliste']);
Route::get('/demandeliste',[Maincontroller::class,'demandeliste']);

/* Supprimer un élement */
Route::get('/Bulletin/{Bulletin}/BulletinDelete', [Maincontroller::class, 'BulletinDelete']);
Route::get('/Factures/{Factures}/FacturesDelete', [Maincontroller::class, 'FacturesDelete']);
Route::get('/Conventiongroupes/{Conventiongroupes}/ConventiongroupesDelete', [Maincontroller::class, 'ConventiongroupesDelete']);
Route::get('/Conventionmedicales/{Conventionmedicales}/ConventionmedicalesDelete', [Maincontroller::class, 'ConventionmedicalesDelete']);
Route::get('/emprunts/{emprunts}/empruntsDelete', [Maincontroller::class, 'empruntsDelete']);
Route::get('/Demandes/{Demandes}/DemandesDelete', [Maincontroller::class, 'DemandeDelete']);

/* Recuperer une donnée a modifier */
Route::get('/Bulletin/{Bulletin}/modifierbulletins',[Maincontroller::class,'modifierbulletins']);
Route::get('/Factures/{Factures}/modifierfactures',[Maincontroller::class,'modifierfactures']);
Route::get('/Conventionmedicales/{Conventionmedicales}/modifierconventionmedicales',[Maincontroller::class,'modifierconventionmedicales']);
Route::get('/Conventiongroupes/{Conventiongroupes}/modifierconventiongroupes',[Maincontroller::class,'modifierconventiongroupes']);
Route::get('/Demandes/{Demandes}/validerDemandes',[Maincontroller::class,'validerDemandes']);

/* Modifier une donnée */
Route::put('/Bulletin/{Bulletin}/update',[Maincontroller::class,'updatebulletin']);
Route::put('/Factures/{Factures}/update',[Maincontroller::class,'updatefactures']);
Route::put('/Conventionmedicales/{Conventionmedicales}/update',[Maincontroller::class,'updateconventionmedicales']);
Route::put('/Conventiongroupes/{Conventiongroupes}/update',[Maincontroller::class,'updateconventiongroupes']);



Route::get('/emprunt', function () {
    return view('emprunts');
});
Route::get('/',[Maincontroller::class,'verificateur']);
Route::get('/demande', function () {
    return view('FormulaireDemande');
});
