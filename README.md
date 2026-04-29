# 🐘 Processamento de Dados com PHP Modularizado

Este projeto demonstra a implementação de um fluxo completo de requisição e resposta (Request-Response) utilizando PHP, focado em boas práticas de Back-end como modularização e tratamento de variáveis globais.

---

## 🛠️ Tecnologias e Conceitos

* **PHP 8.x:** Lógica de processamento no lado do servidor.
* **Modularização:** Uso de `include` para reaproveitamento de componentes (Cabeçalho).
* **Bootstrap 5:** Interface moderna e totalmente responsiva.
* **Tratamento de Dados:** Manipulação de array superglobal `$_POST` e funções de verificação como `isset()`.

---

## 📂 Estrutura do Projeto

* `cabecalho.php`: Componente reutilizável que gerencia metadados e fuso horário.
* `dados.php`: Interface de entrada com validações nativas do HTML5.
* `resposta.php`: Motor de processamento que recebe, trata e exibe os dados enviados.

---

## 🚀 Como Executar Localmente

Como este é um projeto Back-end, ele requer um ambiente de servidor:
1. Instale o **XAMPP** ou **Laragon**.
2. Clone este repositório na pasta `htdocs`.
3. Certifique-se de que o módulo **Apache** está ativo.
4. Acesse no navegador: `localhost/NOME_DA_PASTA/dados.php`.
