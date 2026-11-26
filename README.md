# 🍔 JJ Burger — Site PHP com Atendimento por IA

> Projeto de aprendizagem: site de uma hamburgueria artesanal da Restinga (Porto Alegre/RS), convertido de HTML estático para PHP e integrado a um chatbot de Inteligência Artificial para atendimento e pedidos.

![PHP](https://img.shields.io/badge/PHP-8.x-777BB4?logo=php&logoColor=white)
![Tailwind CSS](https://img.shields.io/badge/Tailwind_CSS-CDN-38B2AC?logo=tailwind-css&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-Vanilla-F7DF1E?logo=javascript&logoColor=black)
![Apache](https://img.shields.io/badge/Apache-.htaccess-D22128?logo=apache&logoColor=white)

---

## 🎯 Objetivo do projeto

Praticar na prática conceitos de desenvolvimento web:

- Converter páginas HTML estáticas em um site **PHP modular** (header/footer/config reutilizáveis)
- Centralizar configurações em um único arquivo (`includes/config.php`)
- Montar **cardápio interativo** com sacola de compras em JavaScript puro
- Criar um **checkout** que gera o resumo do pedido automaticamente
- Integrar um **chatbot de IA** (Abacus.AI) como atendente virtual, com fluxo de pedido e transferência para atendente humano
- Configurar servidor Apache com `.htaccess` (HTTPS, URLs amigáveis, página 404, cache)

## ✨ Funcionalidades

| Página | O que faz |
|---|---|
| `index.php` | Página inicial: destaques, horários, história da casa |
| `cardapio.php` | Cardápio completo com filtros por categoria, personalização do lanche (pão, ponto da carne, adicionais) e sacola |
| `checkout.php` | Formulário de dados, entrega e pagamento, com prévia da mensagem do pedido |
| `404.php` | Página de erro personalizada no visual da marca |

**Atendimento por IA:** o robô "JJ" responde sobre cardápio, horários, localização e formas de pagamento, monta o pedido passo a passo e, no final, encaminha para um atendente humano fechar a venda. O widget aparece flutuando em todas as páginas.

## 🗂️ Estrutura

```
jjburger_php/
├── index.php
├── cardapio.php
├── checkout.php
├── 404.php
├── robots.txt
├── .htaccess
└── includes/
    ├── config.php    # links, telefone e ID do chatbot
    ├── header.php    # <head> e menu
    └── footer.php    # rodapé + script do widget de IA
```

## 🚀 Como rodar localmente

Requisito: PHP 8 instalado.

```bash
git clone https://github.com/trassantevictor-prog/jjburger-php.git
cd jjburger-php
php -S localhost:8080
```

Abra `http://localhost:8080` no navegador.

> O `.htaccess` só funciona no Apache. No servidor embutido do PHP use os endereços com `.php` (ex.: `/cardapio.php`).

## ⚙️ Configuração

Edite `includes/config.php` para trocar o link do chatbot, o número de WhatsApp ou o ID do widget.

## 📚 O que aprendi

- Organização de um site em partes reutilizáveis com `require_once`
- Uso de constantes PHP para não repetir configurações
- Manipulação do DOM e estado da sacola com JavaScript
- Integração de um chatbot de IA em um site real
- Regras de reescrita no Apache (`mod_rewrite`) e boas práticas de publicação

## 👤 Autor

**Sergio Rodrigo Da Silva Trassante** — Porto Alegre/RS

Projeto desenvolvido para fins de estudo. Marca e conteúdo da JJ Burger usados com fins demonstrativos.
