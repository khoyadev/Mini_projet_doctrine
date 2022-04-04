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
  
   /**
 * http://localhost/PHP/Mini_projet_doctrine/Proprietaire/list
   */
   public function list(){
      
   $listes = $this->proprietairedao->finAll();
   
   return $this->view->load("Proprietaire/list",$listes);
   }
   public function ajout(){

      $proprietaire = new Proprietaire();
      $proprietaire->setNom($_POST['nom']);
      $proprietaire->setPrenom($_POST['prenom']);
      $proprietaire->setCivilite($_POST['civilite']);
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

   /**
    * http://localhost/PHP/Mini_projet_doctrine/Proprietaire/formulaire
    */
    public function formulaire(){
      return $this->view->load("Proprietaire/ajout");
    }


   /**
    * http://localhost/PHP/Mini_projet_doctrine/Proprietaire/edit/3
    */
   public function edit($id) {
      $trouver = $this->proprietairedao->editBd($id);
      
      return $this->view->load("Proprietaire/modification",$trouver);
   }

   public function details($id) {
      $trouver = $this->proprietairedao->editBd($id);
      
      return $this->view->load("Proprietaire/details",$trouver);
   }

   public function modifier($id) {
      $data = $this->proprietairedao->editBd($id);
      $data->setNom($_POST['nom']);
      $data->setPrenom($_POST['prenom']);
      $data->setCivilite($_POST['civilite']);
      $data->setDateNaissance($_POST['dateNaissance']);
      $data->setLieuNaissance($_POST['lieuNaissance']);
      $data->setCni($_POST['cni']);
      $data->setAdresse($_POST['adresse']);
      $data->setNationalite($_POST['nationalite']);
      $data->setContact($_POST['contact']);
      $data->setEmail($_POST['email']);
      $data->setPassword($_POST['password']);
      $this->proprietairedao->modifierBd();
      return $this->list();
   }
   
   public function delete($id) {
      $this->proprietairedao->deleteBd($id);
      return $this->list();
   }

}




?>