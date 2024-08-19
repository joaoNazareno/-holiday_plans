# Holiday Plan API Documentation

## Como Rodar o Projeto

#### Pré-requisitos

Certifique-se de ter os seguintes itens instalados no seu sistema:

PHP (versão 8.0 ou superior)
Composer
MySQL
Laravel (instalado via Composer)
Docker (opcional, para usar com Docker)
Passos para Configuração
Clone o Repositório

Clone este repositório para o seu ambiente local:

bash
git clone https://github.com/joaoNazareno/-holiday_plans.git
cd nome-do-repositorio
Instale as Dependências

Use o Composer para instalar as dependências do projeto:

bash
composer install
Configure o Ambiente

Copie o arquivo .env.example para .env e configure as variáveis de ambiente, como banco de dados e chave de aplicativo:

bash

cp .env.example .env
Abra o arquivo .env e ajuste as configurações conforme necessário, por exemplo, para conexão com o banco de dados.

Gere a Chave de Aplicativo

Gere a chave de aplicação Laravel:

bash
php artisan key:generate
Execute as Migrações

Execute as migrações para criar as tabelas necessárias no banco de dados:

bash
php artisan migrate
Inicie o Servidor de Desenvolvimento

Inicie o servidor de desenvolvimento do Laravel:

bash
php artisan serve
A aplicação estará disponível em http://localhost:8000.

Usando Docker
Se você estiver usando Docker, siga estes passos:

Construa as Imagens Docker

bash
docker-compose build
Inicie os Contêineres

bash
docker-compose up
O projeto estará disponível em http://localhost.

Testes
Para rodar os testes do projeto, use o PHPUnit:

bash
php artisan test



## URL DA API FUNCIONANDO(VÍDEO)

https://drive.google.com/file/d/1bhUWxr3wFQDbS-Nama3Vtsd_TgSA0sVa/view?usp=sharing

## Endpoints
### 1. List All Holiday Plans

- **Method:** GET
- **URL:** `/holiday-plans`
- **Description:** Retorna uma lista com todos os planos de férias cadastrados.

#### Request:
```bash
GET /api/holiday-plans
Response:
json
[
    {
        "id": 1,
        "title": "Férias",
        "description": "Uma viagem agradável para a praia.",
        "date": "2024-08-01",
        "location": "Hawaii",
        "participants": "John, Mary"
    },
    {
        "id": 2,
        "title": "Férias na montanha",
        "description": "Relaxando nas montanhas.",
        "date": "2024-09-15",
        "location": "Alpes",
        "participants": "Alice, Bob"
    }
]
 2. Create a New Holiday Plan

Method: POST
URL: /holiday-plans
Description: Cria um novo plano de férias.
Request:
bash
POST /api/holiday-plans
Request Body:
json
{
    "title": "Férias",
    "description": "Uma viagem agradável para a praia.",
    "date": "2024-08-01",
    "location": "Hawaii",
    "participants": "John, Mary"
}
Response:
json
{
    "id": 3,
    "title": "Férias",
    "description": "Uma viagem agradável para a praia.",
    "date": "2024-08-01",
    "location": "Hawaii",
    "participants": "John, Mary"
}
 3. Get a Specific Holiday Plan

Method: GET
URL: /holiday-plans/{id}
Description: Retorna os detalhes de um plano de férias específico.
Request:
bash
GET /api/holiday-plans/{id}
Response:
json
{
    "id": 1,
    "title": "Férias",
    "description": "Uma viagem agradável para a praia.",
    "date": "2024-08-01",
    "location": "Hawaii",
    "participants": "John, Mary"
}
4. Update a Holiday Plan

Method: PUT
URL: /holiday-plans/{id}
Description: Atualiza os detalhes de um plano de férias existente.
Request:
bash
PUT /api/holiday-plans/{id}
Request Body:
json
{
    "title": "Férias Atualizadas",
    "description": "Uma viagem agradável para a praia com amigos.",
    "date": "2024-08-02",
    "location": "Hawaii",
    "participants": "John, Mary, Alice"
}
Response:
json
{
    "id": 1,
    "title": "Férias Atualizadas",
    "description": "Uma viagem agradável para a praia com amigos.",
    "date": "2024-08-02",
    "location": "Hawaii",
    "participants": "John, Mary, Alice"
}
5. Delete a Holiday Plan

Method: DELETE
URL: /holiday-plans/{id}
Description: Exclui um plano de férias existente.
Request:
bash
DELETE /api/holiday-plans/{id}
Response:
bash
HTTP 204 No Content
6. Generate PDF for a Holiday Plan

Method: POST
URL: /holiday-plans/{id}/generate-pdf
Description: Gera um PDF para um plano de férias específico.
Request:
bash
POST /api/holiday-plans/{id}/generate-pdf
Response:
Tipo de mídia: application/pdf
Descrição: O PDF é baixado automaticamente.
Parâmetros de Solicitação
title: (string, obrigatório) O título do plano de férias.
description: (string, obrigatório) A descrição do plano.
date: (string, obrigatório) A data do plano no formato YYYY-MM-DD.
location: (string, obrigatório) O local do plano de férias.
participants: (string, opcional) Os participantes do plano.

 Exemplos de Respostas

201 Created: Quando um novo plano de férias é criado com sucesso.
200 OK: Quando um plano de férias é retornado ou atualizado com sucesso.
204 No Content: Quando um plano de férias é excluído com sucesso.
404 Not Found: Quando o plano de férias solicitado não é encontrado.
