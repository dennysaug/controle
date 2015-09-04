/**
 * Created by dennys on 19/07/15.
 */
///////////////////////////////////////////////
//MODAL DE CONFIRMAR A EXCLUSÃO
$("a.excluir").click(function(event){
    event.preventDefault();
    var link = $(this).attr('href');
    $('#btnConfirmar').attr('data-link',link);
    $('#modalConfirma').modal('show');

});

$('#btnConfirmar').click(function(){
    var link = $(this).attr('data-link');
    if(link)
        window.location = link;
});
////////////////////////////////////////////////
////////////////////////////////////////////////
//Add mais um bloco de permissão /controle/transacao/novo ou edit
$('#btnAdicionar').click(function(){
    var formPermissao = $('#formPermissao').html();
    $('#novoForm').append(formPermissao);

});
////////////////////////////////////////////////