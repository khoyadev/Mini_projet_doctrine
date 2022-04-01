<?php
//namespace src\controller;
use libs\system\Controller;
use src\model\ProprietaireDb;

class ProprietaireController extends Controller
{
   //Roles/add
   // public function add(){
   //    $roles_dao=new RolesDb();
   //    $data = $roles_dao->findAll();
   //    //print_r($data);
   //    foreach($data as $roles)
   //    {
   //       echo $roles->getId() . "   " . $roles->getNom() . "<br/>";
   //    }
   //    return $this->view->load("roles/ajout");
       
   // }
   public function add(){
    return $this->view->load("Proprietaire/ajout");
    }

    public function list(){
        
        $roles_dao = new ProprietaireDb();
        $listes = $roles_dao->finAll();
        //$listes = array("awa","emma");
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