<?php

class AdminManager {

    
    protected $db;

    public function __construct($db)
    {
      $this->db = $db;
    }
  
    public function connect(Admin $admin)
    {
   
      $q = $this->db->prepare('SELECT * FROM admin WHERE nom = :nom AND motdepasse = :motdepasse');
      
      $q->bindValue(':motdepasse', $admin->getPassword());
      $q->bindValue(':nom', $admin->getNom());

      
      $q->execute();
      $adminArray = $q->fetch(PDO::FETCH_ASSOC);
      
      $admin->hydrate([
        'id' => $adminArray['id']
      ]);
    }
}
