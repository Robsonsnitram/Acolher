function testarSenhaSistema() {
    const campoSenha = document.getElementById("senha");
    if (!campoSenha) {
        alert("Campo de senha não encontrado!");
        return;
    }

    const senhaDigitada = campoSenha.value.trim();

    if (!senhaDigitada) {
        alert("Digite uma senha para testar!");
        return;
    }

    // Envia o teste para o PHP de verificação
    fetch("../../../tests/teste_senha.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "senha=" + encodeURIComponent(senhaDigitada)
    })
    .then(res => res.text())
    .then(resp => {
        alert(resp);
        console.log("Resultado do teste:", resp);
    })
    .catch(err => {
        console.error("Erro ao testar senha:", err);
        alert("Erro ao testar senha! Veja o console.");
    });
}
