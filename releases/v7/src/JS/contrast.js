document.addEventListener('DOMContentLoaded', function() {
  const button = document.getElementById('contrastToggle');
  const body = document.body;
        
  // Ao carregar a página, verifica se o modo contraste estava ativado
  if (localStorage.getItem('highContrast') === 'true') {
    body.classList.add('high-contrast');
  }

  // Quando o usuário clica, ativa/desativa e salva o estado
  button.addEventListener('click', () => {
    body.classList.toggle('high-contrast');
    const isHighContrast = body.classList.contains('high-contrast');
    localStorage.setItem('highContrast', isHighContrast);
  });
  
});