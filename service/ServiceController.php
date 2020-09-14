<?php

class ServiceController
{

    public function getSoldeCompteByNum($numerocompte)
    {
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        require_once 'bootstrap.php';

        $solde = $entityManager
                               ->createQuery("SELECT o.solde FROM Operations o 
                                              WHERE o.numerocompte = ".$numerocompte)
                                ->getResult();
       echo json_encode($solde);
       
    }

    //Cette function permet de lister l'enseble des operation pour un compte
    // public function getAllOperation($num_compte)
    // {
    //     // Set HTTP Response Content Type
    //     header('Content-Type: application/json');
    //     //pour indiquer qui p acceder a ces resources
    //     header('Access-Control-Allow-Origin: *');
    //    //pour se connecter a la base de donnee
    //     require_once 'bootstrap.php';

    //     $client_operation = $entityManager
    //                             ->createQuery("SELECT o.id, o.date_operation, 
    //                                                   o.montant, ty.libelle  
    //                                            FROM Compte c, Operation o, Typeoperation ty 
    //                                            WHERE c.num_compte = ".$num_compte." and o.compte_id = c.id GROUP BY o.id")
    //                             ->getResult();
    //     // Format data into a JSON response
    //     echo json_encode($client_operation);
                               
                              
       
    // }
}

?>