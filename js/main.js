/*
Auteur: Alexandre Cormier;
Matricule: 748947;
Code Permanent: CORA 2902 7602
Login: cormiea
*/

$(document).ready(() => {
  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
  });
});

function envoyerFormulaire(leForm) {
  leForm.submit();
}
