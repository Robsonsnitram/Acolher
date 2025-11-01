function testarCPF() {
    const campoCPF = document.querySelector('input[name="CPF-paciente"]');
    if (!campoCPF) {
        alert("Campo de CPF não encontrado!");
        return;
    }

    const cpf = campoCPF.value.trim();
    if (!cpf) {
        alert("Digite um CPF para testar!");
        return;
    }

    fetch("../../../tests/validaCPF.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: "cpf=" + encodeURIComponent(cpf)
    })
    .then(res => res.text())
    .then(resp => {
        alert(resp);
        console.log("Resultado do teste:", resp);
    })
    .catch(err => {
        console.error("Erro ao validar CPF:", err);
        alert("Erro ao validar CPF! Veja o console.");
    });
}
