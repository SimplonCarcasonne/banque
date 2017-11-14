<?php

class Operation
{
  private $montant;
  private $sens;
  private $commentaire;
  private $date;

  public function __construct( $montant, $commentaire)
  {
    $this->setMontant( $montant );
    $this->setCommentaire( $commentaire );
    $this->date = date('j-m-Y');
  }

  public function setMontant( $montant )
  {
    if( $montant == 0) {
      die("Erreur car montant == 0");
    } elseif( $montant > 0 ) {
      $this->setSens("Credit");
    } else {
      $this->setSens("Debit");
    }

    $this->montant = $montant;
  }
  public function getMontant()
  {
    return $this->montant;
  }

  public function setSens( $sens )
  {
    $this->sens = $sens;
  }

  public function getSens()
  {
    return $this->sens;
  }

  public function setCommentaire( $commentaire )
  {
    $this->commentaire = $commentaire;
  }

  public function getCommentaire()
  {
    return $this->commentaire;
  }
}
