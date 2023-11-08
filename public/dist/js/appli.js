$(document).ready(function () {

    $('.delete').click(function (e) {
        e.preventDefault();
        swal({
            title: "Vous etes sure ?",
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
                    swal("Your imaginary file is safe!");
                }
            });
    });

});


