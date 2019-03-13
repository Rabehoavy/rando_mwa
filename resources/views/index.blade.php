@extends ('layout')

@section ('contenu')

<h3>Nos futures randonnées</h3>
<div class="card-deck col-md-12 m-3">

<?php
  class Sites  {
    public $nom;
    public $difficulte;
    public $distance;
    public $duree;
    public $denivele;
    public $type;
    public $date;

        public function __construct($nom, $difficulte, $distance, $duree, $denivele, $type, $date) {
            $this->nom = $nom;
            $this->difficulte = $difficulte;
            $this->distance = $distance;
            $this->duree = $duree;
            $this->denivel = $denivele;
            $this->type = $type;
            $this->date = $date;

        }
        
        public function getAllInfo() {
           
        echo '<div class="card justify-content-center text-center m-1">';
            echo '<div class="card align-item-center text-center">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">'.$this->nom.'</h5>';
            echo '<p class="card-text">Cette randonnée de '.$this->distance.' . Son niveau de difficulté : '.$this->difficulte.'.</p></div>';
         //   echo "<br><p class=\"card-text\">Son dénivelé est de '.$this->denivele.' . La randonnée aura lieu le '.$this->date.' en'$this->type'.</p>'";            echo '</div>';
            echo '<div class="card-footer text-muted"> Durée : '.$this->duree.'<br>'.$this->date.'</div>';
            echo '</div>';
            }
    

            
  }

  $mafate = new Sites ('Notre Dame de La Paix', 'Difficile','20 kms', '9h', '1150 m', 'boucle', '17 mars 2019');
  $mafate-> getAllInfo();
  $cilaos = new Sites ('Cirque de Cilaos', 'très difficile','21 kms', '10h30', '250 m', 'aller', '24 mars 2019');
  $cilaos-> getAllInfo();
  $tampon = new Sites ('Bassin Samuel', 'facile','6 kms', '2h', '230 m', 'boucle', '31 mars 2019');
  $tampon-> getAllInfo();
  $belair = new Sites ('Pierrefonds', 'très facile','8 kms', '2h', '60 m', 'aller', '7 avril 2019');
  $belair-> getAllInfo();

   


?>

</div>


<!--
<div class="container">
        <div class="row align-middle">
            <div class="col-md-4"></div>
            <div class="col-md-4">
               
                <button type="button" class="button btn-lg btn-block border-rounded" data-toggle="modal"
                    data-target="#mymodal" onclick="">Préparer son kit de randonnée</button>
</div>
            <div class="col-md-4"></div>
</div>
</div>-->


@endsection