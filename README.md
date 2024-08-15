# Holiday Plan API Documentation

## Base URL

http://localhost:8000
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
### 2. Create a New Holiday Plan

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
### 3. Get a Specific Holiday Plan

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
### 4. Update a Holiday Plan

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
### 5. Delete a Holiday Plan

Method: DELETE
URL: /holiday-plans/{id}
Description: Exclui um plano de férias existente.
Request:
bash
DELETE /api/holiday-plans/{id}
Response:
bash
HTTP 204 No Content
### 6. Generate PDF for a Holiday Plan

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

### Exemplos de Respostas

201 Created: Quando um novo plano de férias é criado com sucesso.
200 OK: Quando um plano de férias é retornado ou atualizado com sucesso.
204 No Content: Quando um plano de férias é excluído com sucesso.
404 Not Found: Quando o plano de férias solicitado não é encontrado.
