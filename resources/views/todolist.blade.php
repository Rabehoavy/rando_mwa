@extends ('layout')

@section ('contenu')
<div class="offset-md-1 col-md-10">
<div id="myDIV" class="header">
  <h2>Le kit personnalisé de randonnée</h2>
  <input type="text" id="myInput" placeholder="Titre...">
  <span onclick="newElement()" class="addBtn">Ajouter</span>
</div>

<ul id="myUL">
  <li class="checked">Un sac à dos</li>
  <li class="checked">Des baskets/chaussures adaptés</li>
  <li>Une casquette/un chapeau</li>
  <li>Des lunettes de soleil adaptés</li>
  <li>Un téléphone portable chargé et les numéros d'urgence à appeler</li>
  <li>Une gourde isotherme/une bouteille d'eau d'1L</li>
  <li>Une paire de gants et de bâtons(optionnels)</li>
  <li>De la crème solaire & de l'anti-moustique</li>
  <li>Une carte/boussole</li>
  <li>Un couteau</li>
  <li>Une couverture de survie (optionnel)</li>
  <li>Un sifflet</li>
  <li>Une trousse de premiers secours</li>

</ul> 
</div>

@endsection
