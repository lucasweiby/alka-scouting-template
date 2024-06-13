// window.onload = function() {
//   var modal = document.getElementById('alka-security-modal');

//   function showModal() {
//       if(modal) {
//           modal.showModal();
//       }
//   }

//   setTimeout(showModal, 2200);
// }

window.onload = function() {
    var modal = document.getElementById('alka-security-modal');
    var closeModal = document.getElementById('closeModal');
    var cursor = document.querySelector('.alka-circularcursor');
  
    function showModal() {
      if (modal) {
        modal.showModal();
      }
    }
  
    if (closeModal) {
      closeModal.addEventListener('click', function() {
        modal.close();
      });
    }
  
    // Chama a função showModal uma única vez após 5 segundos (5000 milissegundos)
    setTimeout(showModal, 2200);

    // Adiciona event listener para prevenir o fechamento do modal ao pressionar ESC
    modal.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
        e.preventDefault(); // Previne o comportamento padrão (fechar o modal)
        }
    });

  
    // Adiciona o event listener para mover o cursor personalizado
    document.addEventListener('mousemove', function(e) {
      if (cursor) {
        cursor.style.left = e.pageX + 'px';
        cursor.style.top = e.pageY + 'px';
      }
    });

    // Adiciona o event listener para detectar quando o mouse está sobre o modal
    modal.addEventListener('mouseenter', function() {
        cursor.style.opacity = '0'; // Esconde o cursor personalizado
        document.body.style.cursor = 'default'; // Define o cursor padrão
    });

    modal.addEventListener('mouseleave', function() {
        cursor.style.opacity = '1'; // Mostra o cursor personalizado
        document.body.style.cursor = 'none'; // Esconde o cursor padrão
    });

    // Inicialmente, esconde o cursor padrão
    document.body.style.cursor = 'none';
}