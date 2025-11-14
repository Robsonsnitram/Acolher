console.log("Arquivo capslock.js carregado com sucesso!");


  // Seleciona os elementos
  const senhaInput = document.getElementById('senha');
  const capsWarning = document.getElementById('caps-warning');
      
  // Detecta Caps Lock ao digitar
  senhaInput.addEventListener('keyup', (event) => {
    if (event.getModifierState && event.getModifierState('CapsLock')) {
      capsWarning.style.display = 'block';
    } else {
      capsWarning.style.display = 'none';
    }
  });
  
  // Detecta ao entrar no campo
  senhaInput.addEventListener('focus', (event) => {
    if (event.getModifierState && event.getModifierState('CapsLock')) {
      capsWarning.style.display = 'block';
    }
  });
  
  // Esconde ao sair do campo
  senhaInput.addEventListener('blur', () => {
    capsWarning.style.display = 'none';
  });

  // Simula um evento para verificar o estado inicial do Caps Lock
  const eventoSimulado = new KeyboardEvent('keyup', { key: 'CapsLock' });
  senhaInput.dispatchEvent(eventoSimulado);
  console.log("Script de detecção de Caps Lock executado.");