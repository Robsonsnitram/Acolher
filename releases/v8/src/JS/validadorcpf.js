function validaCPF(cpf) {
  if (!cpf) return false;
  // Remove tudo que não for número
  cpf = cpf.replace(/\D/g, '');

  if (cpf.length !== 11) return false;
  if (/^(\d)\1{10}$/.test(cpf)) return false;

  for (let t = 9; t < 11; t++) {
    let d = 0;
    for (let c = 0; c < t; c++) {
      d += Number(cpf[c]) * ((t + 1) - c);
    }
    d = ((10 * d) % 11) % 10;
    if (Number(cpf[t]) !== d) return false;
  }

  return true;
}

function debounce(fn, wait) {
  let timer = null;
  return function(...args) {
    clearTimeout(timer);
    timer = setTimeout(() => fn.apply(this, args), wait);
  };
}

function atualizaStatusCPF(campo, mensagem, classe) {
  let status = campo.nextElementSibling;
  if (!status || !status.classList || !status.classList.contains('cpf-status')) {
    status = document.createElement('span');
    status.className = 'cpf-status';
    campo.parentNode.insertBefore(status, campo.nextSibling);
  }

  status.textContent = mensagem;
  status.classList.remove('valid', 'invalid', 'pending');
  if (classe) status.classList.add(classe);

  status.setAttribute('role', 'status');
  status.setAttribute('aria-live', 'polite');
}

function initCPFValidation() {
  const campo = document.querySelector('input[name="CPF-paciente"], input#cpf');
  if (!campo) return;

  let statusAtivado = false; // controla se o status já apareceu

  // Remove caracteres especiais enquanto digita
  campo.addEventListener('input', () => {
    campo.value = campo.value.replace(/\D/g, ''); // só números
  });

  const validar = () => {
    const valor = campo.value.trim();
    if (valor === '') {
      if (statusAtivado) {
        atualizaStatusCPF(campo, '', ''); // limpa status se estiver ativo
      }
      return;
    }

    statusAtivado = true; // ativou o status
    const valido = validaCPF(valor);

    if (valido) {
      atualizaStatusCPF(campo, 'CPF válido', 'valid');
    } else {
      atualizaStatusCPF(campo, 'CPF inválido', 'invalid');
    }
  };

  const validarDebounced = debounce(validar, 350);

  // Ativa validação ao digitar ou ao sair do campo
  campo.addEventListener('input', validarDebounced);
  campo.addEventListener('blur', validar);

  // Mostra status apenas quando o usuário foca no campo
  campo.addEventListener('focus', () => {
    if (!statusAtivado && campo.value.trim() !== '') {
      validar();
    }
  });
}

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initCPFValidation);
} else {
  initCPFValidation();
}