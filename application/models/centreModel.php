<?php

class CentreModel extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    
    }
    
    
    
    
  //********************************************************   
 //                   Gestion des centres                  **
 //********************************************************  
    
    
    
    public function getAll()
    {
       $query= $this->db->get('centre');
       return $query->result_array();
    }
    
    public function getCentreById($id)
    {
        return $this->db->get_where('centre',array('centreID' => $id))->row();
    }


    public function delete($id)
    {
        $this->db->delete('centre', array('centreID' => $id)); 
    }
    
 
    
    
    
    
    
    
    
       
 //********************************************************   
 //                   Gestion des Lieux                  **
 //********************************************************  
    
    
    
    public function getAllLieux($id)
    {
       $query= $this->db->query("select intitule, etat, nbrBeneficiaires, ouverture, dateCreation, libelle "
               . "              from lieu l, typelieu tl where l.typeLieuID=tl.typeLieuID and l.centreID=".$id);
       return $query->result_array();
    }
    
    public function getTypeLieu($id)
    {
        $query= $this->db->get_where('typelieu', array('typelieuID' => $id));
        return $query->row_array();
    }
    
    
    
    
    
    
 //********************************************************   
 //                   Gestion des Bien                  **
 //********************************************************  
    
    
       public function getAllBiens($id)
    {
       $query= $this->db->query('select numero,B.libelle,etat,dateAquisition,bienID,TB.libelle as type,S.libelle as source '
               . '              from typebien TB,source S, bien B where TB.typeBienID=B.typeBienID and S.sourceID=B.sourceID '
               . '              and B.centreID='.$id);
       return $query->result_array();
    }
    
    
     public function getTypeBien($id)
    {
        $query= $this->db->get_where('typeBben', array('typeBienID' => $id));
        return $query->row_array();
    }


   
    
    
    
      
  //********************************************************   
 //                   Autres                 **
 //********************************************************  
    
    
    
     public function add($data)
    {
        return $this->db->insert('centre',$data);
    }

        public function getAllDelegation()
    {
         $query= $this->db->get('delegation');
       return $query->result_array();
    }
    
    public function getAllNature()
    {
         $query= $this->db->get('nature');
       return $query->result_array();
    }
    
    public function getAllStatut()
    {
         $query= $this->db->get('statut');
       return $query->result_array();
    }
    
    public function getAllTypeBien()
    {
         $query= $this->db->get('typebien');
       return $query->result();
    }
    
}
