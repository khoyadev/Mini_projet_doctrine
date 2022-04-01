<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\ProprietaireDb;

class ProprietaireController extends Controller
{
   private $proprietairedao;
   public function __construct() {
       parent::__construct();
       $this->proprietairedao = new ProprietaireDb();
   }
  
   public function ajout(){
      //extract($_POST);
   //    $datenaissance = DateTime::createFromFormat("Y-m-d",$_POST['dateNaissance']);
   //    $datenaissance = $datenaissance->format('Y-m-d');

   //   // $dateFormat = date("Y-m-d",$datenaissanc);
   //    var_dump($datenaissance);
   //    dd();
      $proprietaire = new Proprietaire();
      $proprietaire->setNom($_POST['nom']);
      $proprietaire->setPrenom($_POST['prenom']);
      $proprietaire->setCivilite($_POST['civilite']);

      //$datenaissance = strtotime($_POST['dateNaissance']);
      //$dateFormat = ("Y-m-d",$datenaissance);
      // $datenaissance = DateTime::createFromFormat("Y-m-d",$_POST['dateNaissance']);
      // $datenaissance = $datenaissance->format('Y-m-d');

      // $proprietaire->setDateNaissance($datenaissance);
      $proprietaire->setDateNaissance($_POST['dateNaissance']);
      $proprietaire->setLieuNaissance($_POST['lieuNaissance']);
      $proprietaire->setCni($_POST['cni']);
      $proprietaire->setAdresse($_POST['adresse']);
      $proprietaire->setNationalite($_POST['nationalite']);
      $proprietaire->setContact($_POST['contact']);
      $proprietaire->setEmail($_POST['email']);
      $proprietaire->setPassword($_POST['password']);
      
      $this->proprietairedao->insert($proprietaire);
      return $this->list();
    }

    public function formulaire(){
      return $this->view->load("Proprietaire/ajout");
    }

    public function list(){
        
        $listes = $this->proprietairedao->finAll();
        
        return $this->view->load("Proprietaire/list",$listes);
        }
   /**
    * http://localhost:8081/projects/lpgl/tpmvc/tpORM/Roles/edit/12
    */
   public function edit($id) {

      echo $id;
   }
  
}




?>