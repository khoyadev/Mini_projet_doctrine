<?php

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="proprietaire")
 */
    class Proprietaire
    {
           /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
        private $id_proprietaire;
         /**
     * @ORM\Column(type="string")
     */
        private $prenom;
        
         /**
     * @ORM\Column(type="string")
     */
        private $nom;
        
         /**
     * @ORM\Column(type="string")
     */
        private $civilite;
                
         /**
     * @ORM\Column(type="string")
     */
        private $dateNaissance;
                
         /**
     * @ORM\Column(type="string")
     */
        private $lieuNaissance;
                
         /**
     * @ORM\Column(type="integer")
     */
        private $cni;
                
         /**
     * @ORM\Column(type="string")
     */
        private $adresse;
                
         /**
     * @ORM\Column(type="string")
     */
        private $nationalite;
                
         /**
     * @ORM\Column(type="string")
     */
        private $contact;
        
     /**
     * @ORM\Column(type="string")
     */
        private $email;
      /**
     * @ORM\Column(type="string")
     */
        private $password;
        
         
        public function __construct(){

        }

        
        
        public  function getId_proprietaire(){
            return $this->id_proprietaire;
        }
        public  function setId_proprietaire($id_proprietaire){
            $this->id_proprietaire=$id_proprietaire;
        }

        public  function getPrenom(){
            return $this->prenom;
        }
        public  function setPrenom($prenom){
            $this->prenom=$prenom;
        }

        public  function getNom(){
            return $this->nom;
        }
        public  function setNom($nom){
            $this->nom=$nom;
        }

        public  function getCivilite(){
            return $this->civilite;
        }
        public  function setCivilite($civilite){
            $this->civilite=$civilite;
        }

        public  function getDateNaissance(){
            return $this->dateNaissance;
        }
        public  function setDateNaissance($dateNaissance){
            $this->dateNaissance=$dateNaissance;
        }

        public  function getLieuNaissance(){
            return $this->lieuNaissance;
        }
        public  function setLieuNaissance($lieuNaissance){
            $this->lieuNaissance=$lieuNaissance;
        }

        public  function getCni(){
            return $this->cni;
        }
        public  function setCni($cni){
            $this->cni=$cni;
        }

        public  function getAdresse(){
            return $this->adresse;
        }
        public  function setAdresse($adresse){
            $this->adresse=$adresse;
        }

        public  function getNationalite(){
            return $this->nationalite;
        }
        public  function setNationalite($nationalite){
            $this->nationalite=$nationalite;
        }

        public  function getContact(){
            return $this->contact;
        }
        public  function setContact($contact){
            $this->contact=$contact;
        }

        public  function getEmail(){
            return $this->email;
        }
        public  function setEmail($email){
            $this->email=$email;
        }

        public  function getPassword(){
            return $this->password;
        }
        public  function setPassword($password){
            $this->password=$password;
        }

    }
    

?>