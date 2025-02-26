# 🚀 Portfólio - PHP, Bootstrap, HTML, CSS, JavaScript e Docker

Este é um portfólio pessoal desenvolvido com PHP, Bootstrap, HTML, CSS, JavaScript e jQuery. O ambiente de desenvolvimento local é configurado utilizando Docker.

## 🛠 Tecnologias Utilizadas

- **PHP** 🐘: Linguagem principal do backend
- **Bootstrap** 🎨: Framework CSS para estilização
- **HTML** 📄: Estrutura das páginas
- **CSS** 🎭: Estilos personalizados
- **JavaScript & jQuery** ⚡: Interatividade da página
- **Docker** 🐳: Ambiente de desenvolvimento local

## 🌟 Funcionalidades

- 📌 Exibição de projetos com descrição e links
- 📝 Seção "Sobre mim"
- 📧 Formulário de contato
- 📱 Layout responsivo com Bootstrap

## ✅ Requisitos

- **Docker** 🐳 e **Docker Compose** instalados

## 🚀 Como Rodar o Projeto Localmente

1. Clone este repositório:
   ```sh
   git clone https://github.com/rdm-alexandre/portifolio.git
   cd portifolio
   ```

2. Inicie os contêineres Docker:
   ```sh
   docker-compose up -d
   ```

3. Acesse o portfólio no navegador:
   ```
   http://localhost:8080
   ```

## 📁 Estrutura do Projeto
`Usei a estrutura de pastas base de um MVC, porem este projeto foi escrito de forma procedural.`
```
portfolio/
│   ├── controller/
│   │   ├── contactValidation.php
│   │   ├── functions.php
│   ├── db/
│   │   ├── conn.php
│   ├── model/
│   │   ├── contactSave.php
│   ├── public/
│   │   ├── images/
│   │   ├── script/
│   │   ├── styles/
│── index.php
│── docker-compose.yml
│── Dockerfile
│── README.md
```

## 🎨 Personalização

- **Estilos** 🎨: Modifique os arquivos em `portfolio/public/styles/`
- **Scripts** ⚡: Edite os arquivos em `portfolio/public/script/`
- **Conteúdo** ✏️: Atualize os arquivos PHP em `portfolio/index.php`

## 🐳 Dockerfile

O projeto utiliza um contêiner Docker baseado no PHP com Apache:
```Dockerfile
FROM php:8.1-apache
COPY src/ /var/www/html/
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
```

## ⚙️ docker-compose.yml

```yml
version: '3'
services:
  web:
    build: ./docker
    ports:
      - "8080:80"
    volumes:
      - ./src:/var/www/html
```

## 🤝 Contribuição

Se quiser contribuir, faça um fork do repositório, crie uma branch com sua feature e envie um Pull Request.

## 📜 Licença

Este projeto está licenciado sob a MIT License.

