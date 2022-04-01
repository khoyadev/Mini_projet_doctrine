<?php
 namespace src\model;
 use libs\system\Model;

 class ProprietaireDb extends Model
 {
    
    public function finAll(){
       
        return $this->entityManager->createQuery("SELECT p FROM Proprietaire p")->getResult();

    }

    public function insert($proprietaire){

        
        $this->entityManager->persist($proprietaire);
        $this->entityManager->flush();
        

    }
 }
 ?>