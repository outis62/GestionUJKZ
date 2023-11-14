$(document).ready(function () {

    $('.delete').click(function (e) {
        e.preventDefault();
        swal({
            title: "Etes-vous sure de vouloir supprimer ce utilisateur ?",
            text: "Pas de retour en arriere possible.",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Utilisateur supprimer avec succes !", {
                        icon: "success",
                    });
                } else {
                    swal("Voulez-vous abadonner ?");
                }
            });
    });

});


