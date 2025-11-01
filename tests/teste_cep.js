function testarBuscaCEP() {
    const cepInput = document.getElementById("cep");
    const rua = document.getElementById("rua");
    const bairro = document.getElementById("bairro");
    const cidade = document.getElementById("cidade");
    const uf = document.getElementById("uf");

    if (!cepInput) {
        alert("Campo de CEP não encontrado na página!");
        return;
    }

    const cep = "01001001"; // CEP de teste válido (Praça da Sé - SP)
    cepInput.value = cep;

    if (typeof pesquisacep === "function") {
        pesquisacep(cep);
    } else {
        alert("Função pesquisacep() não encontrada na página!");
        return;
    }

    // Aguarda a API preencher os campos
    setTimeout(() => {
        const dados = {
            cep: cepInput.value || "",
            rua: rua.value || "",
            bairro: bairro.value || "",
            cidade: cidade.value || "",
            uf: uf.value || ""
        };

        let resultado = "";
        if (
            dados.rua &&
            dados.bairro &&
            dados.cidade &&
            dados.uf &&
            dados.rua !== "..." &&
            dados.cidade !== "..."
        ) {
            resultado = "✅ Teste de CEP bem-sucedido!";
            console.log(resultado);
        } else {
            resultado = "❌ Falha ao buscar CEP!";
            console.log(resultado);
        }

        // Envia log completo ao servidor
        const logData = new URLSearchParams();
        logData.append("resultado", resultado);
        logData.append("cep", dados.cep);
        logData.append("rua", dados.rua);
        logData.append("bairro", dados.bairro);
        logData.append("cidade", dados.cidade);
        logData.append("uf", dados.uf);

        fetch("../../../tests/teste_cep.php", {
            method: "POST",
            headers: { "Content-Type": "application/x-www-form-urlencoded" },
            body: logData.toString()
        })
        .then(r => r.text())
        .then(t => console.log("Log salvo:", t))
        .catch(err => console.error("Erro ao enviar log:", err));

        alert(resultado);
    }, 2500);
}
