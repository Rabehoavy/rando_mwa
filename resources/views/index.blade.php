@extends ('layout')

@section ('contenu')
<div class="container">
        <div class="row align-middle">
            <div class="col-md-3"></div>
            <div class="col-md-6">
               
                <button type="button" class="button btn-lg btn-block border-rounded" data-toggle="modal"
                    data-target="#mymodal">Préparer son kit de randonnée</button>


                <div class="modal fade" id="mymodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-secondary">
                                <h5 class="modal-title text-center"></h5>
                            </div>
                            <div class="modal-body">
                                <div class="offset-md-1 col-md-10">
                                    <div id="myDIV" class="header">
                                        <h5 class="text-white">Le kit personnalisé de randonnée</h5>
                                            <input type="text" id="myInput" placeholder="Barres céréales...">
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
                            <div class="modal-footer">
                                <!-- Bouton pour fermer la fenêtre modal-->
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <!--Bouton pour commencer à jouer-->
                                <button type="button" class="button btn-lg border-rounded" onclick="comparer()">S'inscrire</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
    </div>

    <script>
        $('#mymodal').on('shown.bs.modal', function () {
            $('#myInput').trigger('focus')
        })
        $('#myModal').modal('show')
    </script>

@endsection