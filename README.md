

---


<br>

[![Typing SVG](https://readme-typing-svg.herokuapp.com/?color=DC143C&size=35&center=true&vCenter=true&width=1000&lines=HOLIDAY+PLANS+API;Gerencie+Facilmente+Seus+Planos+De+Férias!+:%29)](https://git.io/typing-svg)

## Como Rodar o Projeto

### Pré-requisitos

- ![PHP](https://img.shields.io/badge/-PHP-0D1117?style=for-the-badge&logo=php&labelColor=0D1117)&nbsp; 8.0+
- ![Composer](https://img.shields.io/badge/-Composer-0D1117?style=for-the-badge&logo=composer&labelColor=0D1117)&nbsp;
- ![MySQL](https://img.shields.io/badge/-MySQL-0D1117?style=for-the-badge&logo=mysql&labelColor=0D1117)&nbsp;
- ![Laravel](https://img.shields.io/badge/-Laravel-0D1117?style=for-the-badge&logo=laravel&labelColor=0D1117)&nbsp;
- ![Docker](https://img.shields.io/badge/-Docker-0D1117?style=for-the-badge&logo=docker&labelColor=0D1117)&nbsp; (opcional)

### Configuração

1. **Clone o Repositório:**
   ```bash
   git clone https://github.com/joaoNazareno/holiday_plans.git
   cd holiday_plans
   ```

2. **Instale as Dependências:**
   ```bash
   composer install
   ```

3. **Configure o Ambiente:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Execute as Migrações:**
   ```bash
   php artisan migrate
   ```

5. **Inicie o Servidor:**
   ```bash
   php artisan serve
   ```
   Acesse em [http://localhost:8000](http://localhost:8000).

### Usando Docker

1. **Construa as Imagens:**
   ```bash
   docker-compose build
   ```

2. **Inicie os Contêineres:**
   ```bash
   docker-compose up
   ```
   Acesse em [http://localhost](http://localhost).

### Testes

Execute os testes com PHPUnit:

```bash
php artisan test
```

## Endpoints Principais

1. **Listar Planos:** `GET /api/holiday-plans`
2. **Criar Plano:** `POST /api/holiday-plans`
3. **Detalhar Plano:** `GET /api/holiday-plans/{id}`
4. **Atualizar Plano:** `PUT /api/holiday-plans/{id}`
5. **Excluir Plano:** `DELETE /api/holiday-plans/{id}`
6. **Gerar PDF:** `POST /api/holiday-plans/{id}/generate-pdf`

## [Vídeo de Demonstração](https://drive.google.com/file/d/1bhUWxr3wFQDbS-Nama3Vtsd_TgSA0sVa/view?usp=sharing)

--- 
