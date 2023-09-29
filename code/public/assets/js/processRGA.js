// // Selecionar o elemento com a classe .acceptedProcess
// let acceptedProcess = document.querySelector('#acceptedProcess');

// // Adicionar um ouvinte de evento de clique ao elemento
// elemento.addEventListener('click', function() {
//     // Exibir um alerta quando o elemento for clicado
//     alert('O elemento foi clicado!');
// });

$(document).ready(function() {
   $('#acceptedProcess').click(function() {
       var url = $(this).data('url');
      console.log(url)
       $.ajax({
           url: url,
           method: 'get',

           success: function(response) {
               // Lógica de sucesso, se necessário
               console.log(response.message)
           },
           error: function(error) {
               // Lógica de tratamento de erro, se necessário
               console.log('deu ruim')
           }
       });
   });
});
