# JJ Burger — Site em PHP

## Estrutura
- `index.php` — landing page
- `cardapio.php` — cardápio completo com modal de pedido e sacola
- `checkout.php` — finalização do pedido
- `includes/config.php` — constantes (`AI_BOT_LINK`, `WHATSAPP_NUMBER`, etc.)
- `includes/header.php` — `<head>` compartilhado + navbar (desative com `$showNavbar = false`)
- `includes/footer.php` — rodapé compartilhado (desative com `$showFooter = false`)

Todos os botões de WhatsApp apontam para o robô de IA definido em `AI_BOT_LINK`.
No checkout, ao clicar em "Enviar pedido", o resumo do pedido é copiado para a área de transferência e o robô abre em nova aba (o cliente pode colar o pedido no chat).

## Como hospedar
Requisito: PHP 7.4+ (nenhum banco de dados necessário).

**Hospedagem compartilhada (cPanel/Hostinger etc.):** envie todos os arquivos para `public_html/` mantendo a pasta `includes/`.

**Apache:** copie para `/var/www/html/jjburger` — `index.php` é carregado automaticamente.

**Nginx + PHP-FPM:**
```nginx
server {
  listen 80; server_name seudominio.com.br;
  root /var/www/jjburger; index index.php;
  location / { try_files $uri $uri/ =404; }
  location ~ \.php$ { include snippets/fastcgi-php.conf; fastcgi_pass unix:/run/php/php-fpm.sock; }
  location ^~ /includes/ { deny all; }
}
```

**Teste local:** `php -S localhost:8000` dentro da pasta e acesse http://localhost:8000

## Trocar o link do robô
Edite apenas `includes/config.php` → `define('AI_BOT_LINK', '...');`
