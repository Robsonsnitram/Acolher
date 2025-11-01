<?php
class Endereco
{
    private string $cep;

    public function __construct(string $cep)
    {
        $this->cep = $cep;
    }

    public function validaCEP(): mixed
    {
        // Remove tudo que não for número
        $cep = preg_replace('/[^0-9]/', '', $this->cep);

        // CEP precisa ter 8 dígitos
        if (strlen($cep) !== 8) {
            return "Erro: CEP inválido (deve ter 8 dígitos).";
        }

        $url = "https://viacep.com.br/ws/{$cep}/json/";

        // Tenta buscar dados da API
        $dados_json = @file_get_contents($url);

        if ($dados_json === FALSE) {
            return "Erro: Falha ao acessar o serviço ViaCEP.";
        }

        $endereco = json_decode($dados_json, true);

        if (isset($endereco['erro']) && $endereco['erro'] === true) {
            return "Erro: CEP não encontrado na base de dados.";
        }

        return $endereco;
    }
}
?>
