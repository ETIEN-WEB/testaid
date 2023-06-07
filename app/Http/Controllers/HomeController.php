<?php

namespace App\Http\Controllers;



use App\Models\Commune;
use App\Models\Image;
use App\Models\Imageannonce;
use App\Models\Sinistre;
use App\Models\Assurance;
use App\Models\Domaine_intervention;
use App\myClass\Flasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        View::share( 'module', 'Enregistrer un sinistre' );
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function sinistreIndex(){
        $now = Carbon::now();
        $aujourdhui = Carbon::today();
        $hier = Carbon::yesterday();

        $weekStartDate = Carbon::now()->startOfWeek();
        $weekEndDate = Carbon::now()->endOfWeek();
        $monthStartDate = Carbon::now()->startOfMonth();
        $monthEndDate = Carbon::now()->endOfMonth();
        //dd($weekStartDate, $weekEndDate);

        $data['sinistres'] = Sinistre::paginate(8);
        $data['sinistretous'] = Sinistre::all()->count();
        $data['sinistreOfToday'] = Sinistre::whereDate('created_at', $aujourdhui)->count();
        $data['sinistreOfYesterday'] = Sinistre::whereDate('created_at', $hier)->count();
        $data['sinistreOfWeek'] = Sinistre::whereBetween('created_at', [$weekStartDate, $weekEndDate])->count();
        $data['sinistreOfMonth'] = Sinistre::whereBetween('created_at', [$monthStartDate, $monthEndDate])->count();

        return view('sinitres.index', $data);
    }



    public function ajouterSinistre(Request $request)
    {
        //return view('home');
        $data['current'] = "";
        $data['page_title']= 'Bienvenue sur Mon artisan';
        $data['title'] = 'Enregistrer un sinistre';
        $data['assurances'] = Assurance:: all();
        $data['domaine_interventions'] = Domaine_intervention:: all();


        return view('sinitres.create',$data);
    }

    public function sinistreStore(Request $request){
        $validator = Validator::make($request->all(), [
            'assurance'=>'required|max:20',
            'numero_police'=>'required|max:220',
            'name'=>'required|max:220',
            'Contact1'=>'required|max:20',
            'lieu'=>'required|max:250',
            //'prix'=>'required|max:50',
            'domaine_intervention'=>'required|max:20',
            'date_sinistre'=>'required|max:200',
            'details'=>'required|max:10000',

        ], [
            'assurance.required'=>'Veuillez sélectionner une assurance.',
            'numero_police.required'=>'Veuillez entrer votre numéro de police.',
            'name.required'=>'Veuillez entrer votre nom et prénoms.',
            'Contact1.required'=>'Veuillez entrer un numéro de téléphone.',
            'lieu.required'=>'Veuillez entrer le lieu du travail.',
            'domaine_intervention.required'=>'Veuillez sélectionner la nature de l\'intervention.',
            'date_sinistre.required'=>'Veuillez entrer la date du sinistre.',
            'details.required'=>'Veuillez entrer les détails.'
        ]);
        if(!$validator->passes()){
            return response()->json(['statut'=>0, 'error'=>$validator->errors()->toArray()]);
        }

        $assurance = Assurance::find($request->assurance);
        if (!$assurance){
            return response()->json(['statut' => 'registerFailed','errorMessage'=>'Cette assurance n\'existe pas.']);
        }

        $domaine_intervention = Domaine_intervention::find($request->domaine_intervention);
        if (!$domaine_intervention){
            return response()->json(['statut' => 'registerFailed','errorMessage'=>'Cet domaine n\'existe pas.']);
        }

        $sinistre = new Sinistre();
        $sinistre->numero_police = htmlspecialchars($request->numero_police);
        $sinistre->name = htmlspecialchars($request->name);
        $sinistre->email = htmlspecialchars($request->prix);
        $sinistre->contact1 = htmlspecialchars($request->Contact1);
        $sinistre->contact2 = Str::slug(htmlspecialchars($request->titre));
        $sinistre->lieu = htmlspecialchars($request->lieu);
        $sinistre->date_sinistre = htmlspecialchars($request->date_sinistre);
        $sinistre->details = htmlspecialchars($request->details);
        $sinistre->assurance_id = (htmlspecialchars($request->assurance))?:NULL;
        $sinistre->user_id = 1;
        $sinistre->domaine_intervention_id = htmlspecialchars($request->domaine_intervention);

        if ($sinistre->save() ) {
            if ( !empty($request->file('fileUpload')) ) {
                foreach ($request->file('fileUpload') as $key => $photo){
                    $photoName = time().$key.'_'.'Photo'.'.'.$photo->getClientOriginalExtension();
                    $destinationPath = 'frontend/img_sinistre/';
                    if (File::exists(public_path($destinationPath.$photoName))) {
                        $code= Str::random(5);
                        $fileName = $code.$photoName;
                    }else{
                        $fileName = $photoName;
                    }
                    $photo->move(public_path('frontend/img_annonce'), $fileName);
                    Image::create([
                        'sinistre_id'=>$sinistre->id,
                        'libelle'=>$fileName,
                    ]);
                }
            }
            /*$donne["dataHtml"] = view("chargement.view_maladie")->render();
            return response()->json($donne);*/
            Flasher::success('Sinistre enregistrer avec succès');
            return response()->json(['statut' => 'sinistreSuccess']);
        } else{
            return response()->json(['statut' => 'registerFailed','errorMessage'=>'Une erreur s\'est produite lors de l\'enregistrement.']);
        }


    }


}
