
        // Quand l'utilisateur scrolle à 10 px du document, le bouton apparait 
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 10 || document.documentElement.scrollTop > 10) {
                document.getElementById("myBtn").style.display = "block";
            } else {
                document.getElementById("myBtn").style.display = "none";
            }
        }

        // Quand l'utilisateru clique sur le bouton, la page est scrollée en haut
        function topFunction() {
            document.body.scrollTop = 0; // Pour Safari
            document.documentElement.scrollTop = 0; // Pour Chrome, Firefox, IE and Opera
        }