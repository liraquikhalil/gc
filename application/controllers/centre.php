<?php

class Centre extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('centreModel');
        $this->load->driver('session');
        $this->load->library('session');
    }
    
    public function index()
    {
        $head['title']="login";
        
        $this->loadView("login",$head,null);
    }


    
      
 //********************************************************   
 //                   Gestion des Centres                  **
 //********************************************************  
    
     
    
    
    
    public function lister() 
    {

        $data['centres'] = $this->centreModel->getAll();
        $head['title'] = 'Listes des centres';

        $this->loadView("listeCentres",$head, $data);
               
    }
    
     public function accueilCentre($id) {

        $data['lieux'] = $this->centreModel->getAllLieux($id);
        $data['biens'] = $this->centreModel->getAllBiens($id);
        $head['title'] = 'Accueil Centre';
   
        $this->session->set_userdata(array('centreID' =>$id ));
        $this->loadView("listeLieuxBiens",$head,$data);
        
        
    }
    
    
    public function delete($id)
    {
        $this->centreModel->delete($id);
       redirect('centre/lister');    
    }


    
    public function Ajout() {

        $head['title'] = 'ajouter un centre';
        $data['delegations'] = $this->centreModel->getAllDelegation();
        $data['statuts'] = $this->centreModel->getAllstatut();
        $data['natures'] = $this->centreModel->getAllnature();


        $this->loadView("ajoutCentre",$head, $data);
       
    }
    
    
    public function postAjout()
    {
        $data= array(
            'nom' =>  $this->input->post('nom'),
            'tel' =>  $this->input->post('tel'),
            'natureID' =>  $this->input->post('nature'),
            'delegationID' =>  $this->input->post('delegation'),
            'statutID' =>  $this->input->post('statut'),
            'sexe' =>  $this->input->post('sexe'),
            'adresse' =>  $this->input->post('adresse'),
            'dateCreation' =>  $this->input->post('dateCreation'),
            'superficie' =>  $this->input->post('superficie'),
            'capacitee' =>  $this->input->post('capacitee'),
            );
        
       $this->centreModel->add($data);
       redirect('centre/lister');
      
        
    }
    
    
    
    public function update($id)
    {
        $head['title']="modifier Centre";
        $data['centre']=$this->centreModel->getCentreById($id);
        $data['delegations'] = $this->centreModel->getAllDelegation();
        $data['statuts'] = $this->centreModel->getAllstatut();
        $data['natures'] = $this->centreModel->getAllnature();
        
        $this->loadView("modifierCentre", $head, $data);
    }
    
    
    
    public function postUpdate()
    {
       $this->db->update('centre',$_POST,"centreID =".$_POST['centreID']);
       redirect('centre/lister');
    }
    
    
     
    
    
    
    
 //********************************************************   
 //                   Gestion des Biens                  **
 //********************************************************  
    
    
    
    public function ajoutBien() {

        $head['title'] = 'ajouter un bien';
        $data['typeBiens'] = $this->centreModel->getAllTypeBien();
        


        $this->loadView("ajoutBien",$head,$data);
        
    }
    
     public function postAjoutBien() 
     {
     $_POST['centreID']=$this->session->userdata('centreID');
       
        
       $this->centreModel->addBien($_POST);
         redirect('centre/accueilCentre/'.$this->session->userdata('centreID'));
     }
     
      public function updateBien($id)
    {
        $head['title'] = 'modifier Bien';
        $data['typeBiens'] = $this->centreModel->getAllTypeBien();
        $data['bien'] = $this->centreModel->getBienById($id);
        


        $this->loadView("modifierBien",$head,$data);
    }
    
     public function postUpdateBien()
    {
         
       $this->db->update('bien',$_POST,"bienID =".$_POST['bienID']);
       redirect('centre/accueilCentre/'.$this->session->userdata('centreID'));
    
    }
     
     public function deleteBien($id)
    {
        $this->centreModel->deleteBien($id);
       redirect('centre/accueilCentre/'.$this->session->userdata('centreID'));    
    }
     
     
     
     
     
 //********************************************************   
 //                   Gestion des Lieux                  **
 //********************************************************  
     
     
    public function ajoutLieu()
    {
        $head['title'] = 'ajouter un lieu';
        $data['typeLieux'] = $this->centreModel->getAllTypeLieu();
        


        $this->loadView("ajoutLieu",$head,$data);
    }

    public function postAjoutLieu()
    {
        $_POST['centreID']=$this->session->userdata('centreID');
       
        
       $this->centreModel->addLieu($_POST);
         redirect('centre/accueilCentre/'.$this->session->userdata('centreID'));
    }
    
    public function updateLieu($id)
    {
        $head['title'] = 'modifier lieu';
        $data['typeLieux'] = $this->centreModel->getAllTypeLieu();
        $data['lieu'] = $this->centreModel->getLieuById($id);
        


        $this->loadView("modifierLieu",$head,$data);
    }
    
     public function postUpdateLieu()
    {
         
       $this->db->update('lieu',$_POST,"lieuID =".$_POST['lieuID']);
       redirect('centre/accueilCentre/'.$this->session->userdata('centreID'));
    
    }

    
      public function deleteLieu($id)
    {
        $this->centreModel->deleteLieu($id);
       redirect('centre/accueilCentre/'.$this->session->userdata('centreID'));    
    }
    
    
    
    
    
    
 //********************************************************   
 //                   Gestion des Lieux                  **
 //********************************************************  
    
    
    public function gestionReferentiel()
    {
        $data['villes']= $this->db->get('ville')->result_array();
        $data['delegations']= $this->db->get('delegation')->result_array();
        $data['natures']= $this->db->get('nature')->result_array();
        $data['typeLieux']= $this->db->get('typeLieu')->result_array();
        $data['typeBiens']= $this->db->get('typeBien')->result_array();
          
        $this->loadView("referentiel",$head['title']='Referentiel',$data);
    }









    public function loadView($nom,$head,$data)
     {
        $this->load->view('centre/head',$head);
        $this->load->view('centre/'.$nom,$data);
        $this->load->view('centre/footer.html');
     }
     
   

}
