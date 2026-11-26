<?php
$pageTitle = 'JJ Burger | Street Food Artesanal - Restinga ZS';
$bodyClass = 'bg-surface font-body-md text-on-surface antialiased selection:bg-primary-container selection:text-on-primary-container';
$showNavbar = false; // cardápio usa navbar própria (abaixo)
$showFooter = false;
require_once __DIR__ . '/includes/header.php';
?><header class="fixed top-0 left-0 right-0 w-full z-50 bg-surface/90 backdrop-blur-xl shadow-[0_4px_20px_rgba(0,0,0,0.5)]"><div class="h-20 max-w-[1200px] mx-auto px-margin flex items-center justify-between gap-space-md"><div class="flex items-center gap-space-md"><a class="flex items-center gap-space-sm" data-path="cardapio-digital" href="cardapio.php"><img alt="JJ Burger Logo" class="h-8 w-auto object-contain" src="https://lh3.googleusercontent.com/aida/ALJJyrCuErJ_cKsuqD3iRc8EQGobrZyYPW9mfAZfkAij8qXitAzyWifiuSvHXym5gizRqkUoRzRXynG-iVPXguRwJi3sq_Z-h7QJ1ZDy2n8Y2TmQjCwfXL3nVecFOu5-6_FWwABOpbsDbNw0m0kBj2ruTbywdakT6OaHhcXns9a979seNO1TwsNEHYWV4kQPvVsa6wh4sN_s4IMTW3-T79IRT4levRHmdxpFEvMd18sllCnX"><span class="font-headline-md text-headline-md tracking-wider uppercase text-primary">JJ Burger</span></a><div class="hidden sm:flex items-center gap-2 px-3 py-1 rounded-full bg-surface-container-high"><span class="relative flex h-2 w-2"><span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-tertiary-container opacity-75"></span><span class="relative inline-flex rounded-full h-2 w-2 bg-tertiary-fixed-dim"></span></span><span class="font-label-md text-label-md text-tertiary uppercase tracking-wider">Aberto agora • Delivery</span></div></div><nav class="hidden lg:flex items-center gap-space-lg" data-active-classes="text-primary-container font-bold"><a class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors uppercase tracking-wider" data-path="cardapio-digital" href="cardapio.php">Cardápio</a><a class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors uppercase tracking-wider" data-path="sobre-nos" href="#">Sobre nós</a><a class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors uppercase tracking-wider" data-path="contato-e-horarios" href="#">Contato / Horários</a><a class="font-label-lg text-label-lg text-on-surface-variant hover:text-on-surface transition-colors uppercase tracking-wider" data-path="rastreamento-de-pedido" href="#">Status do Pedido</a></nav><div class="flex items-center gap-space-md"><button aria-label="Abrir sacola de compras" class="group relative flex items-center gap-space-sm bg-surface-container-high hover:bg-surface-container-highest px-3 py-2 rounded-lg transition-colors" type="button"><div class="relative flex items-center justify-center"><span class="material-symbols-outlined text-primary-container text-[24px]">R$ 0,00</span><span class="absolute -top-1.5 -right-2 bg-secondary-container text-on-secondary-container font-label-md text-[10px] leading-tight px-1.5 py-0.5 rounded-full font-bold">0</span></div><div class="hidden sm:flex flex-col text-left"><span class="font-label-md text-label-md text-on-surface-variant uppercase leading-none">Sacola</span><span class="font-label-lg text-label-lg text-primary-container leading-tight">R$ 0,00</span></div></button><div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span class="material-symbols-outlined text-on-primary text-[18px]">person</span></div></div></div></header><main class="w-full pt-20 bg-surface min-h-[calc(100vh-80px)]"><div class="flex flex-col w-full">
<!-- Section 1: Hero Section (Streetwear & Raw Craft Flavor) -->
<section class="relative w-full overflow-hidden bg-surface-container-lowest">
<!-- Hazard diagonal accent stripe top -->
<div class="w-full h-2 bg-[repeating-linear-gradient(45deg,#ffd200,#ffd200_15px,#0e0e11_15px,#0e0e11_30px)]"></div>
<div class="max-w-[1200px] mx-auto px-margin pt-space-lg pb-space-xl lg:py-space-xl">
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-xl items-center">
<!-- Left Hero Content -->
<div class="lg:col-span-7 flex flex-col gap-space-md z-10">
<!-- Streetwear Tag Badge -->
<div class="flex flex-wrap items-center gap-space-xs">
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-secondary-container text-on-secondary-container font-label-md text-label-md uppercase tracking-widest font-black shadow-sm">
<span class="material-symbols-outlined text-[16px]">local_fire_department</span>
              Restinga ZS • Autêntico Smash
            </span>
<span class="inline-flex items-center gap-1.5 px-3 py-1 rounded bg-surface-container-high text-primary-container font-label-md text-label-md uppercase tracking-wider">
<span class="material-symbols-outlined text-[16px]">star</span>
              100% Pão Brioche &amp; Blends Autorais
            </span>
</div>
<!-- Official JJ Burger Logo -->
<div class="max-w-[340px] sm:max-w-[420px] py-space-xs">
<img alt="JJ Burger Logo" class="w-full h-auto object-contain filter drop-shadow-[0_10px_20px_rgba(255,210,0,0.15)]" src="https://lh3.googleusercontent.com/aida/ALJJyrCuErJ_cKsuqD3iRc8EQGobrZyYPW9mfAZfkAij8qXitAzyWifiuSvHXym5gizRqkUoRzRXynG-iVPXguRwJi3sq_Z-h7QJ1ZDy2n8Y2TmQjCwfXL3nVecFOu5-6_FWwABOpbsDbNw0m0kBj2ruTbywdakT6OaHhcXns9a979seNO1TwsNEHYWV4kQPvVsa6wh4sN_s4IMTW3-T79IRT4levRHmdxpFEvMd18sllCnX">
</div>
<!-- Hero Headline & Subtitle -->
<div class="flex flex-col gap-space-xs">
<h1 class="font-headline-lg text-headline-lg lg:font-display-lg lg:text-display-lg text-primary uppercase tracking-tight leading-none">
              HAMBÚRGUERES ARTESANAIS
            </h1>
<!-- Lambe-lambe graffiti banner -->
<div class="inline-block transform -rotate-1 self-start mt-2">
<span class="font-headline-md text-headline-md bg-primary-container text-on-primary-container px-3 py-1.5 uppercase font-black tracking-wide inline-block shadow-[4px_4px_0px_#000000]">
                "O sabor da rua na sua casa!"
              </span>
</div>
</div>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
            Sabor prensado na chapa quente, crostinha perfeita, fatias generosas de cheddar derretido e molhos autorais. O verdadeiro street food da Zona Sul de Porto Alegre.
          </p>
<!-- Action Buttons -->
<div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-space-md pt-space-xs">
<a class="min-h-[52px] px-6 rounded-lg bg-primary-container hover:bg-primary-fixed text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 shadow-[2px_2px_0px_#000000] hover:translate-y-0.5 active:translate-y-1 transition-all" href="#cardapio">
<span class="material-symbols-outlined text-[24px]">restaurant_menu</span>
              Ver Cardápio
            </a>
<a class="min-h-[52px] px-6 rounded-lg bg-tertiary-container hover:bg-tertiary-fixed text-on-tertiary font-title-lg text-title-lg tracking-wide flex items-center justify-center gap-2 shadow-[2px_2px_0px_#000000] hover:translate-y-0.5 active:translate-y-1 transition-all" href="<?= AI_BOT_LINK ?>" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-[24px]">chat</span>
              Pedir pelo WhatsApp
            </a>
</div>
<!-- Secondary Link iFood -->
<div class="flex items-center gap-3 pt-1">
<span class="font-label-md text-label-md text-outline uppercase tracking-wider">Também disponível em:</span>
<a class="inline-flex items-center gap-2 px-3 py-1.5 rounded-md bg-surface-container-high hover:bg-surface-container-highest text-secondary font-label-lg text-label-lg transition-colors group" href="https://www.ifood.com.br" rel="noopener noreferrer" target="_blank">
<span class="material-symbols-outlined text-secondary-container group-hover:scale-110 transition-transform">moped</span>
<span>Peça pelo iFood</span>
<span class="material-symbols-outlined text-[16px]">arrow_forward</span>
</a>
</div>
</div>
<!-- Right Hero Visual Collage -->
<div class="lg:col-span-5 relative mt-space-md lg:mt-0">
<div class="relative mx-auto max-w-[460px] aspect-[4/5] rounded-xl overflow-hidden bg-surface-container-high shadow-2xl">
<img class="w-full h-full object-cover" data-alt="Close-up mouthwatering artisan double smash burger on toasted brioche bun with glistening melted cheddar cheese cascading over crunchy bacon strips, grilled juicy beef patty, smoky barbecue drippings, dark urban street food photography, warm amber lighting with yellow accents, high contrast studio food photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB_SCXqOqd2kQJMPgf0MWdr1QODDHcuVQ5gipxlV_3ueuUeNgTINFfyAxLOq5EiWohbrtJpAykfGJQ13-QLNlg2R93nKIsXK3cBzh_oYkpXxFkySGiX3FwStnZew7z61-mPklI_HuTZxIdSzgtLYeTd9GtgOtcq2MbZ1HG3gL33A0oaCbZrZLMoQTmrKN-MPmfCRvwseQmUx_h2Egmp72-Wy6L7sQjjappZ4fDkBn4">
<!-- Dark Gradient Scrim -->
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest via-transparent to-transparent opacity-80"></div>
<!-- Floating Badge Top Right -->
<div class="absolute top-4 right-4 bg-secondary-container text-on-secondary-container px-3 py-2 rounded-lg font-headline-md text-headline-md uppercase shadow-[3px_3px_0px_#000000] rotate-3 flex items-center gap-1.5">
<span class="material-symbols-outlined text-[20px]">whatshot</span>
              Blend 100% Puro
            </div>
<!-- Bottom Stamp in Card -->
<div class="absolute bottom-4 left-4 right-4 p-4 rounded-lg bg-surface-container-low/90 backdrop-blur-md">
<div class="flex items-center justify-between">
<div>
<span class="font-label-md text-label-md uppercase tracking-wider text-primary-container">Especialidade da Casa</span>
<h3 class="font-headline-md text-headline-md text-on-surface uppercase">Smash Trap Bacon</h3>
</div>
<span class="font-price-tag text-price-tag text-primary-container">R$ 34,00</span>
</div>
</div>
</div>
<!-- Street tape decorative sticker -->
<div class="absolute -bottom-3 -left-4 hidden sm:block bg-primary-container text-on-primary-container font-headline-md text-headline-md uppercase px-4 py-1.5 shadow-[3px_3px_0px_#000000] -rotate-6">
            ★ ZONA SUL ORIGINAL ★
          </div>
</div>
</div>
</div>
<!-- Urban Signage Ticker / Banner Strip -->
<div class="w-full bg-primary-container text-on-primary-container py-2.5 overflow-x-auto whitespace-nowrap shadow-inner">
<div class="max-w-[1200px] mx-auto px-margin flex items-center justify-between gap-6 font-label-lg text-label-lg uppercase tracking-wider font-extrabold text-[13px]">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">calendar_today</span>
<span>Terça a Domingo</span>
</div>
<span class="text-on-primary-container opacity-40">|</span>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">storefront</span>
<span>Delivery &amp; Atendimento no Local</span>
</div>
<span class="text-on-primary-container opacity-40">|</span>
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]">pin_drop</span>
<span>Restinga – Zona Sul, Porto Alegre</span>
</div>
<span class="text-on-primary-container opacity-40">|</span>
<div class="flex items-center gap-2 bg-on-primary-container text-primary-container px-2 py-0.5 rounded">
<span class="w-2 h-2 rounded-full bg-tertiary-container animate-pulse"></span>
<span>Status: Aberto Hoje às 18h / Delivery Ativo</span>
</div>
</div>
</div>
</section>
<!-- Section 2: Sobre Nós (#sobre) -->
<section class="w-full bg-surface py-space-xl relative" id="sobre">
<div class="max-w-[1200px] mx-auto px-margin flex flex-col gap-space-xl">
<!-- Stencil / Urban Section Header -->
<div class="flex flex-col gap-space-xs max-w-2xl">
<div class="flex items-center gap-2">
<span class="w-8 h-1 bg-primary-container"></span>
<span class="font-label-lg text-label-lg text-primary-container uppercase tracking-widest">Nossa Raiz &amp; Trajetória</span>
</div>
<h2 class="font-display-lg text-display-lg text-on-surface uppercase tracking-tight flex items-baseline gap-3">
<span>SOBRE NÓS</span>
<span class="text-outline text-headline-lg opacity-40">#01</span>
</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
          A JJ Burger nasceu na Restinga com uma ideia simples: trazer hambúrgueres artesanais com identidade urbana, atitude de rua e muito sabor. Mais que um hambúrguer, é um estilo de vida.
        </p>
</div>
<!-- Street Values & Manifest Badges -->
<div class="flex flex-wrap gap-space-sm items-center">
<div class="px-4 py-2 rounded-lg bg-surface-container-high text-primary font-headline-md text-headline-md tracking-wider uppercase flex items-center gap-2 shadow-[2px_2px_0px_#000000]">
<span class="material-symbols-outlined text-primary-container">bolt</span>
          Sonho, trabalho, resultado
        </div>
<div class="px-4 py-2 rounded-lg bg-surface-container-high text-primary-container font-headline-md text-headline-md tracking-wider uppercase flex items-center gap-2 shadow-[2px_2px_0px_#000000]">
<span class="material-symbols-outlined text-secondary-container">favorite</span>
          Respeito é tudo!
        </div>
<div class="px-4 py-2 rounded-lg bg-surface-container-high text-on-surface-variant font-label-lg text-label-lg uppercase tracking-wider">
          Orgulho do Extremo Sul de Porto Alegre
        </div>
</div>
<!-- 3 Pillar Street Cards -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-space-lg">
<!-- Pillar 1 -->
<div class="flex flex-col p-space-lg rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors shadow-md relative overflow-hidden group">
<div class="w-12 h-12 rounded-lg bg-primary-container text-on-primary-container flex items-center justify-center mb-space-md shadow-[2px_2px_0px_#000000]">
<span class="material-symbols-outlined text-[28px]">lunch_dining</span>
</div>
<span class="font-label-md text-label-md uppercase tracking-wider text-outline mb-1">01. Autenticidade</span>
<h3 class="font-headline-md text-headline-md text-primary uppercase mb-2">Hambúrgueres Artesanais</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
            Blends frescos moídos na casa diariamente, técnica de prensagem agressiva na chapa ultracozida, queijo derretido de verdade e pão brioche dourado na manteiga de garrafa.
          </p>
<div class="mt-4 pt-4 flex items-center gap-2 text-primary-container font-label-md text-label-md uppercase tracking-wider">
<span>Sabor Incomparável</span>
<span class="material-symbols-outlined text-[16px]">done</span>
</div>
</div>
<!-- Pillar 2 -->
<div class="flex flex-col p-space-lg rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors shadow-md relative overflow-hidden group">
<div class="w-12 h-12 rounded-lg bg-secondary-container text-on-secondary-container flex items-center justify-center mb-space-md shadow-[2px_2px_0px_#000000]">
<span class="material-symbols-outlined text-[28px]">electric_bolt</span>
</div>
<span class="font-label-md text-label-md uppercase tracking-wider text-outline mb-1">02. Agilidade</span>
<h3 class="font-headline-md text-headline-md text-primary uppercase mb-2">Entrega Rápida</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
            Motoboy na pista sem enrolação. Embalagens térmicas especiais vedadas para que o lanche e a batata cheguem quentinhos, crocantes e suculentos na sua mesa na Restinga e ZS.
          </p>
<div class="mt-4 pt-4 flex items-center gap-2 text-tertiary-fixed-dim font-label-md text-label-md uppercase tracking-wider">
<span>Zona Sul Coberta</span>
<span class="material-symbols-outlined text-[16px]">moped</span>
</div>
</div>
<!-- Pillar 3 -->
<div class="flex flex-col p-space-lg rounded-xl bg-surface-container hover:bg-surface-container-high transition-colors shadow-md relative overflow-hidden group">
<div class="w-12 h-12 rounded-lg bg-tertiary-container text-on-tertiary flex items-center justify-center mb-space-md shadow-[2px_2px_0px_#000000]">
<span class="material-symbols-outlined text-[28px]">workspace_premium</span>
</div>
<span class="font-label-md text-label-md uppercase tracking-wider text-outline mb-1">03. Criação Própria</span>
<h3 class="font-headline-md text-headline-md text-primary uppercase mb-2">O Melhor Sabor da Região</h3>
<p class="font-body-md text-body-md text-on-surface-variant">
            Receitas autorais como a famosa maionese verde de alho artesanal, cebola roxa marinada no ponto e molho barbecue defumado feito sob encomenda para o padrão JJ Burger.
          </p>
<div class="mt-4 pt-4 flex items-center gap-2 text-primary-container font-label-md text-label-md uppercase tracking-wider">
<span>Receita Secreta JJ</span>
<span class="material-symbols-outlined text-[16px]">verified</span>
</div>
</div>
</div>
<!-- Experience & Hours Split Block -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-space-lg">
<!-- Venha nos visitar highlight -->
<div class="lg:col-span-7 p-space-xl rounded-xl bg-surface-container-high flex flex-col justify-between relative overflow-hidden shadow-lg">
<div class="flex flex-col gap-space-sm z-10">
<span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary-container text-on-primary-container font-label-md text-label-md uppercase tracking-wider font-bold w-fit">
<span class="material-symbols-outlined text-[18px]">deck</span>
              Experiência no Ponto Físico
            </span>
<h3 class="font-headline-lg text-headline-lg text-primary uppercase">
              Venha Nos Visitar na Restinga!
            </h3>
<p class="font-body-lg text-body-lg text-on-surface-variant">
              À noite nossa casa física fica aberta para você sentar, relaxar, curtir uma cerveja estupidamente gelada, escutar um som de peso e trocar aquela ideia com os parceiros e a família no coração da Restinga.
            </p>
<div class="flex flex-wrap items-center gap-4 mt-2">
<div class="flex items-center gap-2 text-on-surface font-title-md text-title-md">
<span class="material-symbols-outlined text-primary-container">sports_bar</span>
                Cervejas Selecionadas
              </div>
<div class="flex items-center gap-2 text-on-surface font-title-md text-title-md">
<span class="material-symbols-outlined text-primary-container">volume_up</span>
                Vibe Street &amp; Hip-Hop
              </div>
<div class="flex items-center gap-2 text-on-surface font-title-md text-title-md">
<span class="material-symbols-outlined text-primary-container">groups</span>
                Mesas para a Galera
              </div>
</div>
</div>
<div class="mt-6 pt-4 flex items-center justify-between z-10">
<span class="font-label-md text-label-md text-outline">Restinga - Porto Alegre, RS</span>
<a class="inline-flex items-center gap-2 text-primary-container hover:text-primary font-title-md text-title-md transition-colors" href="<?= AI_BOT_LINK ?>" rel="noopener noreferrer" target="_blank">
<span>Ver no mapa / Como chegar</span>
<span class="material-symbols-outlined text-[18px]">navigation</span>
</a>
</div>
</div>
<!-- Operating Hours Schedule Box -->
<div class="lg:col-span-5 p-space-xl rounded-xl bg-surface-container flex flex-col justify-between shadow-lg">
<div>
<div class="flex items-center justify-between mb-space-md">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Horários de Atendimento</h3>
<span class="material-symbols-outlined text-primary-container text-[28px]">schedule</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant mb-space-md">
              Organizamos nossa operação em dois turnos estratégicos para te servir sempre no ponto perfeito:
            </p>
<div class="flex flex-col gap-space-md">
<!-- Lunch Shift -->
<div class="p-space-md rounded-lg bg-surface-container-high flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-title-md text-title-md text-on-surface">Almoço Express</span>
<span class="font-label-md text-label-md px-2 py-0.5 rounded bg-secondary-container text-on-secondary-container font-bold uppercase">Exclusivo iFood</span>
</div>
<span class="font-headline-md text-headline-md text-primary-container">11h às 15h</span>
<span class="font-body-md text-body-md text-outline">Somente delivery pela plataforma do iFood.</span>
</div>
<!-- Night Shift -->
<div class="p-space-md rounded-lg bg-surface-container-high flex flex-col gap-1">
<div class="flex items-center justify-between">
<span class="font-title-md text-title-md text-on-surface">Noite JJ Burger</span>
<span class="font-label-md text-label-md px-2 py-0.5 rounded bg-tertiary-container text-on-tertiary font-bold uppercase">Salão &amp; Delivery</span>
</div>
<span class="font-headline-md text-headline-md text-primary-container">18h à meia-noite</span>
<span class="font-body-md text-body-md text-outline">Casa aberta para comer no local, retirada balcão e delivery direto no WhatsApp.</span>
</div>
</div>
</div>
<div class="mt-space-md pt-3 flex items-center justify-between text-outline font-label-md text-label-md">
<span>Terça a Domingo</span>
<span class="text-error font-bold uppercase">Segundas: Fechado</span>
</div>
</div>
</div>
</div>
</section>
<!-- Section 3: Nosso Cardápio Completo (#cardapio) -->
<section class="w-full bg-surface-container-lowest py-space-xl relative" id="cardapio">
<div class="max-w-[1200px] mx-auto px-margin flex flex-col gap-space-lg">
<!-- Section Header -->
<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-space-md">
<div class="flex flex-col gap-space-xs">
<div class="flex items-center gap-2">
<span class="w-8 h-1 bg-primary-container"></span>
<span class="font-label-lg text-label-lg text-primary-container uppercase tracking-widest">Feito na Chapa Quente</span>
</div>
<h2 class="font-display-lg text-display-lg text-on-surface uppercase tracking-tight">
            NOSSO CARDÁPIO
          </h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">
            Escolha os clássicos da rua e monte sua sacola.
          </p>
</div>
<!-- Quick Cart Trigger button for mobile/desktop -->
<button class="flex items-center gap-2 px-5 py-3 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-primary-container transition-colors shadow-sm self-start sm:self-auto" id="btn-open-cart-banner" type="button">
<span class="material-symbols-outlined">shopping_basket</span>
<span class="font-title-md text-title-md">Ver Sacola (<span id="cart-counter-btn">0</span>)</span>
</button>
</div>
<!-- Category Filter Tabs -->
<div class="w-full overflow-x-auto pb-2 scrollbar-none">
<div class="flex items-center gap-2 min-w-max" id="category-filters">
<button class="cat-filter-btn px-5 py-2.5 rounded-lg bg-primary-container text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider shadow-[2px_2px_0px_#000000] transition-all" data-category="all" type="button">
            🔥 Todos
          </button>
<button class="cat-filter-btn px-5 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-md text-headline-md uppercase tracking-wider transition-all" data-category="burgers" type="button">
            🍔 Hambúrgueres
          </button>
<button class="cat-filter-btn px-5 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-md text-headline-md uppercase tracking-wider transition-all" data-category="combos" type="button">
            📦 Combos
          </button>
<button class="cat-filter-btn px-5 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-md text-headline-md uppercase tracking-wider transition-all" data-category="sides" type="button">
            🍟 Porções
          </button>
<button class="cat-filter-btn px-5 py-2.5 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-on-surface font-headline-md text-headline-md uppercase tracking-wider transition-all" data-category="drinks" type="button">
            🥤 Bebidas
          </button>
</div>
</div>
<!-- Menu Items Grid (Responsive, 3 cols desktop, 16px rounded) -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-space-lg pt-space-xs" id="menu-grid">
<!-- Item 1: OG Street -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="burgers">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Juicy OG Street smash burger with melted american cheese dripping over single beef patty, freshly grilled brioche bun, classic yellow mustard and ketchup sauce drops, dark street style food photography with warm contrast" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCQrxaHO3YgtRnwV2sSgYPFdrjumREB2tbvEDHVHFt90_pS5xgVsZ3Lrzgz1jsDb3KoCzhn8ILUSgvQYHSUyV_zsrj5fsLP5A726IoQSfQaKWgWtnbrYbQ59NX88eZ_s2wgCOHQ4Bpr8LbHOxXWB_CxQUdZRJ0A-4k12Rm7n_2lA_lfa7_waLh_3s4lbsjsl9Fb93HvhpEb9yJX7Us4Y8jMCZuF6Q0LIN2vgghq9O4">
<span class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur-sm text-primary-container px-2.5 py-1 rounded font-label-md text-label-md uppercase font-bold tracking-wider">
              Clássico
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">OG Street</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 20,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Blend artesanal, queijo derretido, ketchup e mostarda no brioche tostado na chapa.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Hambúrguer" data-desc="Blend artesanal, queijo derretido, ketchup e mostarda no brioche tostado na chapa." data-id="og-street" data-name="OG Street" data-price="20.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 2: Trap Bacon (Mais Vendido) -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1 relative" data-category="burgers">
<div class="w-full h-2 bg-secondary-container"></div>
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Trap Bacon artisan burger loaded with crispy smoked bacon strips, warm creamy yellow cheddar sauce flowing generously, golden toasted brioche bun, green garlic mayonnaise dollop, dark urban backdrop" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmgilkUV95SUeRlxXXMnEHzfsoPlTdB34TIoPVcwSnxhfTzIq9eaButZX8G9S_BLl-qHk9KNojc4Z6EoHLh6-RLNsL-dBrO83WJhjE41h4krT-Sefx2dt7-uoQRAUSs4yaknec53kxzZuVQktZDxq2NNeIoOdAy-tZW9KbPqDa0Bj82Sa66Y8K5hOYEL7TxvywlTVA4LurBqBkXIMMo5prNb8NcRCs0nBGPtLQEpw">
<span class="absolute top-3 left-3 bg-secondary-container text-on-secondary-container px-3 py-1 rounded font-headline-md text-headline-md uppercase tracking-wider shadow-[2px_2px_0px_#000000]">
              🔥 Mais Vendido
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Trap Bacon</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 34,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Blend artesanal, generoso bacon crocante, queijo, cheddar cremoso e maionese artesanal de alho verde.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-primary-container hover:bg-primary-fixed text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 shadow-[2px_2px_0px_#000000] transition-colors" data-category="Hambúrguer" data-desc="Blend artesanal, generoso bacon crocante, queijo, cheddar cremoso e maionese artesanal de alho verde." data-id="trap-bacon" data-name="Trap Bacon" data-price="34.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 3: Graffiti Smash -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="burgers">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Graffiti Smash burger with double crispy seared smash patties, double yellow cheese, pickled marinated red onions rings, special pink house sauce dripping, brioche bun, street style food shot with graphite tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaIlpYk29Y_4k7csOhdllJF6N2xtQC48fdrNNSFGV8SC0sHaVn5dxg1udkWDDwMMjmhZ-MjIYURE0RgF5Ft8ayFe1ArYe9dXwAph-61WpZcC91TEwBgtMJLmGR0jmG-ESkQ3H068tk_tON7e67evKUPcHmdULl64OJgcDZvMho_A4FZVcuVxsX4e_fh0sC0eJwoHcmHH9FIseIyBJdLo7tiwOAWnNXZKn3dqdpd38">
<span class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur-sm text-primary-container px-2.5 py-1 rounded font-label-md text-label-md uppercase font-bold tracking-wider">
              Smash Duplo
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Graffiti Smash</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 30,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Burger smash suculento, queijo duplo, cebola roxa marinada e molho especial da casa.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Hambúrguer" data-desc="Burger smash suculento, queijo duplo, cebola roxa marinada e molho especial da casa." data-id="graffiti-smash" data-name="Graffiti Smash" data-price="30.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 4: Street King (Destaque da Casa) -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="burgers">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Towering Street King craft burger with two thick grilled beef patties, double melting cheddar, crunchy cucumber pickles slices, glistening dark barbecue sauce drip, brioche bun, street lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAei-TQ1V1t2q03AurKL6lh1R355itJMcdwiR_hVCacgTL5e1U8FA-w_fdvOgW9v6QotS16QH010iJBFgq8b5GZaAAk2CqSyOOWK9ebs_a2qssCRozSjljSqY_ytVKZfUix45NHjYUG18Jc-el2QgDvZC3jycERzR9xKRIN-D3oCwevMkidOzodNVwAZB7FIQMm80JFR3_JmZYElVzkEEyV0LybWpEo-UbnP_LBPy4">
<span class="absolute top-3 left-3 bg-primary-container text-on-primary-container px-3 py-1 rounded font-headline-md text-headline-md uppercase tracking-wider shadow-[2px_2px_0px_#000000]">
              👑 Destaque da Casa
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Street King</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 38,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                2 carnes artesanais, cheddar duplo, picles crocantes e barbecue artesanal defumado.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Hambúrguer" data-desc="2 carnes artesanais, cheddar duplo, picles crocantes e barbecue artesanal defumado." data-id="street-king" data-name="Street King" data-price="38.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 5: JJ Boombox (Combo Especial / Mais Pedido) -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1 relative" data-category="combos">
<div class="w-full h-2 bg-[repeating-linear-gradient(45deg,#ffd200,#ffd200_10px,#ce0217_10px,#ce0217_20px)]"></div>
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden">
<img class="w-full h-full object-cover" data-alt="JJ Boombox combo served in customized street graphic pizza style box containing two juicy smash burgers, massive mountain of rustic french fries showered with molten cheddar cheese and crispy chopped bacon bits, dramatic angle" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAWq8MimlYMu0E_IuiXLo_OVQsTOnjEY6GTEQ1C89-ZhK6xuL6ddtL1dGOWooobHAtQ5ACDsdple_yRKSidB5s3es1dH3pgJbqpLUPiKPrj-WM0qdpClAasyuQoWMlJdYj9qOGIqNhns_OrI2N9-1ndPzOu1m0NlAd5fQhEmPEPCpc5e8MzymsIkNrl3apLC3ooEPf-LQZObeGVdczY2oeN_TS_8jLFhoLDpZxEtoU">
<span class="absolute top-3 left-3 bg-secondary-container text-on-secondary-container px-3 py-1 rounded font-headline-md text-headline-md uppercase tracking-wider shadow-[2px_2px_0px_#000000]">
              🔥 Mais Pedido
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">JJ Boombox</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 75,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                2 smash burgers caprichados + mega batata rústica com cheddar e bacon, na box estilo pizza personalizada.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-primary-container hover:bg-primary-fixed text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 shadow-[2px_2px_0px_#000000] transition-colors" data-category="Combo" data-desc="2 smash burgers caprichados + mega batata rústica com cheddar e bacon, servido na box estilo pizza personalizada." data-id="jj-boombox" data-name="JJ Boombox" data-price="75.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 6: Big Boss 300 (Combo / Lançamento) -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="combos">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Big Boss 300 meal combo featuring a heavy double 300g artisan burger stacked with melting cheddar cheese next to golden crisp french fries and an ice cold canned soda with water condensation droplets, dark moody culinary photography" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAo2hcIuydoWhghVBdyjo5yMzYOrMRwK2usVyH_gyDsjg_pYXs8WYNpuz3qyGHnbt1zPr-1OIz6JAP_tOIYIAng8d0c0E0Z3iTQu8kVG7PMNUqESFM9kf11p0GKSvrXV7HUJORJB4KjaRr9c-__KZBUspnKHn2gUls6VlpDbZYYulSDKjlsl4Rl9bMiFR7lAm8sGb0zrfARoaA-pFuCVRHXkZdKPdrjRmeFRmAOkoY">
<span class="absolute top-3 left-3 bg-secondary-container text-on-secondary-container px-3 py-1 rounded font-headline-md text-headline-md uppercase tracking-wider shadow-[2px_2px_0px_#000000]">
              ✨ Lançamento
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Big Boss 300</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 40,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Combo burger duplo 300g, batata frita sequinha e refrigerante lata gelado.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Combo" data-desc="Combo burger duplo 300g, batata frita sequinha e refrigerante lata gelado." data-id="big-boss-300" data-name="Big Boss 300" data-price="40.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 7: Porção de Fritas Crocantes -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="sides">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden">
<img class="w-full h-full object-cover" data-alt="Crispy golden french fries portion tossed with coarse salt and fine lemon pepper herb seasoning, served in dark paper street packaging with house dip side bowl, overhead angled street food photo" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCI_yZK4ZK645FzsA-7-VQjD4L-qcT2BqKwQTFEV1b76CbFwwfGXRZOiPWmX2X3wzA4xpVL0zLegnP1Fpdnf7iv-gyXyMH11-zGHoWX-v9jLmPkfNYgVqpt_X08Ez5WScvmDJC6THQOIdqHAeTm8V0CTQ6lzkhsb4Y-SeRjppR_vlzIi1LwhorZ3bKMACYutwJjSF0K00bReud6pxYGeciA5dpHECsQx2He6RBbJEw">
<span class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur-sm text-primary-container px-2.5 py-1 rounded font-label-md text-label-md uppercase font-bold tracking-wider">
              Porção
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Fritas Crocantes</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 25,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Batatas selecionadas, sequinhas e crocantes com tempero especial lemon pepper e sal.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Porção" data-desc="Batatas selecionadas, tempero especial lemon pepper e sal." data-id="fritas-crocantes" data-name="Porção de Fritas Crocantes" data-price="25.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 8: Coca-Cola Lata 350ml -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="drinks">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden flex items-center justify-center">
<img class="w-full h-full object-cover" data-alt="Coca-Cola 350ml cold aluminum can covered in chilled water droplets against dark textured slate background with subtle golden reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBCeqQK8KAce8D7bSgpqnWjx7T6XW4KXoKmrYgLK1yj-w5GfQXyF24Wom66zYTPAeD9_SI2q1wShQnSuk3mknIxyqyn26_SJBUB4035n36DS9ONrAlFnmWPVi5UJ13qYSQ0PfZ2bgJ_SHeUFPSocjRd0MxCnsGSLSR4d346rFD-a_ZjNkfAGLUMrTlOkqnenLqsOO7VkH-tlZhsp2Kbi8b7hGBlwp64a8U1yny2k80">
<span class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur-sm text-primary-container px-2.5 py-1 rounded font-label-md text-label-md uppercase font-bold tracking-wider">
              Gelada
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Coca-Cola Lata</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 6,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Lata 350ml estupidamente gelada para acompanhar seu smash burger.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Bebida" data-desc="Lata 350ml estupidamente gelada." data-id="coca-cola" data-name="Coca-Cola Lata 350ml" data-price="6.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 9: Fruki Guaraná Lata (Clássico RS) -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="drinks">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden flex items-center justify-center">
<img class="w-full h-full object-cover" data-alt="Fruki Guarana chilled aluminum beverage can frosted with water beads on dark urban background, authentic Rio Grande do Sul regional soft drink aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuArSbiDNtLQqlhrPAkVwkVK6BXxy7bDyWfCfqvwKWmOESNT9VsyCKWi9zr_-kpd3awbwcSCrxlViukP8EdkRRSN-KEbLX9fDC_pzwCnGVgcCU_cVCvKay72vThg8KJEYONTcg0zHoZJ1DCXskuWyopMv8RVBxKir5pq23d0Ffp66RVd1GxXL7ufMqHo6bYmIoZjxfbHLk3vN9jA49PvIuJBS4pl9ql7Jf8r84gnuFA">
<span class="absolute top-3 left-3 bg-tertiary-container text-on-tertiary px-2.5 py-1 rounded font-label-md text-label-md uppercase font-bold tracking-wider">
              Clássico RS
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Fruki Guaraná</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 6,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Clássico tradicional do Rio Grande do Sul, lata 350ml servida bem gelada.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Bebida" data-desc="Clássico do RS bem gelado, lata 350ml." data-id="fruki-guarana" data-name="Fruki Guaraná Lata" data-price="6.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 10: Guaraná Antarctica Lata -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="drinks">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden flex items-center justify-center">
<img class="w-full h-full object-cover" data-alt="Guarana Antarctica cold canned drink with glistening condensation droplets resting on a dark slate surface with subtle amber reflections" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBrG4xiHOv986Zz3hMNeAK6dEVLU2UmqcNlj-sGOOl6TwUMqTP-zRm_rvoS8UkRlNvSBRfTK0gSWP50v3NCPrKceWwMjEpWHt3QNvr2wdNAfR230wKgkpll4VVGQ6Hpd6JjY8UhkbxrY5siyaLRNbf03eWWWpHcP686A9PMnE82GzPDw-0q4pXvWsEjzJj7Ml-y_ueTapiejisl4KmKOhqJUCujJKvhyokpMPfq0Wo">
<span class="absolute top-3 left-3 bg-surface-container-lowest/80 backdrop-blur-sm text-primary-container px-2.5 py-1 rounded font-label-md text-label-md uppercase font-bold tracking-wider">
              Gelada
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Guaraná Antarctica</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 6,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Guaraná Antarctica em lata 350ml gelada na medida.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Bebida" data-desc="Lata 350ml gelada." data-id="guarana-antarctica" data-name="Guaraná Antarctica Lata" data-price="6.00" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
<!-- Item 11: Cervejas em Lata (Polar, Original, Brahma) -->
<article class="menu-card flex flex-col rounded-2xl bg-surface-container overflow-hidden shadow-lg transition-transform hover:-translate-y-1" data-category="drinks">
<div class="relative w-full aspect-[16/10] bg-surface-container-high overflow-hidden flex items-center justify-center">
<img class="w-full h-full object-cover" data-alt="Assortment of ice cold canned craft and regional beers like Polar with frosty dew drops and ice cubes around on dark metal bar surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBbkmyDvdbWy_rnkjd9ik7JIw0a5cgGi0vbZI1dtq7ixbGfasPAPZAAU4upR1K965E_u7UpTH2tOHxaYR0HKoUiFT9WjJUwy4k6V4HF2BUdz3iVaIeyddOAP-CLB23F5yoQxgTXRoZegzLhLdSdS_5G9UlLsAg4eadt4HkkQiu4HwH31bcQgBzgQHeNLDscyKhumXvNleTykBN5tZyFEFl_Ak3t2weBjhd7RO3At0g">
<span class="absolute top-3 left-3 bg-secondary-container text-on-secondary-container px-2.5 py-1 rounded font-label-md text-label-md uppercase font-bold tracking-wider">
              +18 Apenas
            </span>
</div>
<div class="flex flex-col flex-1 p-space-md justify-between gap-space-md">
<div class="flex flex-col gap-1">
<div class="flex items-center justify-between">
<h3 class="font-headline-md text-headline-md text-primary uppercase">Cervejas em Lata</h3>
<span class="font-price-tag text-price-tag text-primary-container">R$ 6,50</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant line-clamp-2">
                Polar gaúcha, Original ou Brahma. Informe a sua preferência na observação.
              </p>
</div>
<button class="btn-add-item min-h-[48px] w-full rounded-lg bg-surface-container-high hover:bg-primary-container text-on-surface hover:text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2 transition-colors" data-category="Bebida" data-desc="Lata trincando de gelada. Escolha nas observações." data-id="cerveja-lata" data-name="Cerveja em Lata (Polar, Original, Brahma)" data-price="6.50" type="button">
<span class="material-symbols-outlined text-[20px]">add</span>
              + Adicionar
            </button>
</div>
</article>
</div>
</div>
</section>
<!-- Interactive Modal: Item Detail & Customization -->
<div class="fixed inset-0 z-50 bg-black/80 backdrop-blur-md flex items-center justify-center p-3 sm:p-4 overflow-y-auto" id="modal-item-detail">
<div class="relative w-full max-w-xl rounded-2xl bg-surface-container-low border border-outline-variant/40 overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.9)] flex flex-col my-auto max-h-[92vh]">
<!-- Top Hazard Tag Strip -->
<div class="w-full h-1.5 bg-[repeating-linear-gradient(45deg,#ffd200,#ffd200_10px,#ce0217_10px,#ce0217_20px)]"></div>

<!-- Header Image & Close Button -->
<div class="relative w-full h-48 sm:h-56 bg-surface-container-lowest overflow-hidden flex-shrink-0">
<img alt="Smash Trap Bacon artesanal com cheddar e bacon crocante" class="w-full h-full object-cover filter drop-shadow-md" id="customizer-img" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmgilkUV95SUeRlxXXMnEHzfsoPlTdB34TIoPVcwSnxhfTzIq9eaButZX8G9S_BLl-qHk9KNojc4Z6EoHLh6-RLNsL-dBrO83WJhjE41h4krT-Sefx2dt7-uoQRAUSs4yaknec53kxzZuVQktZDxq2NNeIoOdAy-tZW9KbPqDa0Bj82Sa66Y8K5hOYEL7TxvywlTVA4LurBqBkXIMMo5prNb8NcRCs0nBGPtLQEpw">
<div class="absolute inset-0 bg-gradient-to-t from-surface-container-low via-surface-container-low/40 to-transparent"></div>
<!-- Close button -->
<button aria-label="Fechar customização" class="absolute top-3 right-3 z-10 w-9 h-9 rounded-full bg-surface-container-lowest/80 text-on-surface hover:text-primary hover:bg-surface-container-high transition-colors flex items-center justify-center shadow-md" id="customizer-close-btn" type="button">
<span class="material-symbols-outlined text-[20px]">close</span>
</button>
<!-- Tags overlay -->
<div class="absolute bottom-3 left-4 right-4 flex items-end justify-between gap-2">
<div class="flex flex-wrap gap-1.5">
<span class="bg-secondary-container text-on-secondary-container px-2.5 py-0.5 rounded font-headline-md text-[12px] uppercase tracking-wider font-bold shadow-sm">🔥 Especialidade da Casa</span>
<span class="bg-surface-container-highest text-primary-container px-2 py-0.5 rounded font-label-md text-[11px] uppercase tracking-wide">Blend 100% Puro</span>
</div>
<span class="font-label-md text-label-md bg-surface-container-lowest/90 text-tertiary-fixed-dim px-2 py-0.5 rounded border border-outline-variant/30 flex items-center gap-1">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary-fixed-dim animate-pulse"></span>
Restinga ZS
</span>
</div>
</div>

<!-- Scrollable Configuration Body -->
<div class="p-space-md sm:p-space-lg overflow-y-auto flex flex-col gap-5 flex-1" id="customizer-scroll-body">
<!-- Title & Intro -->
<div class="flex flex-col gap-1 border-b border-outline-variant/30 pb-3">
<div class="flex items-center justify-between gap-2">
<span class="font-label-md text-label-md text-primary-container uppercase tracking-wider font-bold">Personalize seu burger</span>
<span class="font-label-md text-label-md text-outline">Etapa 1 de 1</span>
</div>
<div class="flex items-baseline justify-between gap-2">
<h2 class="font-headline-lg text-headline-lg sm:text-[34px] text-primary uppercase leading-tight tracking-tight" id="customizer-item-title">Trap Bacon</h2>
<span class="font-price-tag text-price-tag text-primary-container whitespace-nowrap" id="customizer-base-price-display">R$ 34,00</span>
</div>
<p class="font-body-md text-body-md text-on-surface-variant leading-relaxed">
Blend artesanal prensado na chapa ultracozida, queijo derretido, crocantes fatias de bacon rústico, cheddar cremoso e maionese verde artesanal de alho no brioche dourado.
</p>
</div>

<!-- SECTION 1: Ponto da Carne (Obrigatório) -->
<!-- SECTION 1: Escolha seu Pão (Obrigatório) -->
<div class="flex flex-col gap-2.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container text-[20px]">bakery_dining</span>
<h3 class="font-title-md text-title-md text-on-surface uppercase tracking-wide">1. Escolha seu Pão</h3>
</div>
<span class="font-label-md text-label-md bg-primary-container text-on-primary-container px-2 py-0.5 rounded font-bold uppercase tracking-wider text-[11px]">Obrigatório</span>
</div>
<p class="font-body-md text-body-md text-outline">Escolha a base perfeita selada na chapa quente:</p>
<div class="flex flex-col gap-2" id="bread-options">
<!-- Option 1: Pão Brioche (Default Selected) -->
<label class="flex items-center justify-between p-3 rounded-xl bg-surface-container border border-primary-container shadow-[2px_2px_0px_#ffd200] transition-all cursor-pointer group">
<div class="flex items-center gap-3">
<input checked="" class="w-4 h-4 accent-[#ffd200] cursor-pointer" name="burger_bread" type="radio" value="Pão Brioche Artesanal">
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="font-title-md text-title-md text-primary">Pão Brioche Artesanal</span>
<span class="bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase px-1.5 py-0.5 rounded">Recomendado</span>
</div>
<span class="font-body-md text-body-md text-on-surface-variant text-[13px]">Super macio, amanteigado e tostado na manteiga de garrafa</span>
</div>
</div>
<span class="material-symbols-outlined text-primary-container text-[20px]">check_circle</span>
</label>
<!-- Option 2: Pão Australiano -->
<label class="flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer group">
<div class="flex items-center gap-3">
<input class="w-4 h-4 accent-[#ffd200] cursor-pointer" name="burger_bread" type="radio" value="Pão Australiano">
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="font-title-md text-title-md text-on-surface group-hover:text-primary transition-colors">Pão Australiano Escuro</span>
<span class="bg-surface-container-highest text-primary-container text-[10px] font-bold uppercase px-1.5 py-0.5 rounded">Especial</span>
</div>
<span class="font-body-md text-body-md text-outline text-[13px]">Levemente adocicado com toque de cacau e mel, selado na chapa</span>
</div>
</div>
<span class="material-symbols-outlined text-outline group-hover:text-primary-container transition-colors text-[20px]">radio_button_unchecked</span>
</label>
</div>
</div><div class="flex flex-col gap-2.5">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container text-[20px]">local_fire_department</span>
<h3 class="font-title-md text-title-md text-on-surface uppercase tracking-wide">2. Ponto da Carne</h3>
</div>
<span class="font-label-md text-label-md bg-primary-container text-on-primary-container px-2 py-0.5 rounded font-bold uppercase tracking-wider text-[11px]">Obrigatório</span>
</div>
<p class="font-body-md text-body-md text-outline">Escolha como você prefere o ponto do seu smash artesanal:</p>

<div class="flex flex-col gap-2" id="doneness-options">
<!-- Option 1: Mal passado -->
<label class="doneness-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer group">
<div class="flex items-center gap-3">
<input class="doneness-radio w-4 h-4 accent-[#ffd200] cursor-pointer" name="meat_doneness" type="radio" value="Mal passado">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface group-hover:text-primary transition-colors">Mal passado</span>
<span class="font-body-md text-body-md text-outline text-[13px]">Centro vermelho vivo, super suculento</span>
</div>
</div>
<span class="material-symbols-outlined text-outline group-hover:text-primary-container transition-colors text-[20px]">radio_button_unchecked</span>
</label>

<!-- Option 2: Ao ponto pra menos -->
<label class="doneness-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer group">
<div class="flex items-center gap-3">
<input class="doneness-radio w-4 h-4 accent-[#ffd200] cursor-pointer" name="meat_doneness" type="radio" value="Ao ponto para menos">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface group-hover:text-primary transition-colors">Ao ponto pra menos</span>
<span class="font-body-md text-body-md text-outline text-[13px]">Centro avermelhado e textura tenra</span>
</div>
</div>
<span class="material-symbols-outlined text-outline group-hover:text-primary-container transition-colors text-[20px]">radio_button_unchecked</span>
</label>

<!-- Option 3: Ao ponto da casa (Default Selected) -->
<label class="doneness-card flex items-center justify-between p-3 rounded-xl bg-surface-container border border-primary-container shadow-[2px_2px_0px_#ffd200] transition-all cursor-pointer group">
<div class="flex items-center gap-3">
<input checked="" class="doneness-radio w-4 h-4 accent-[#ffd200] cursor-pointer" name="meat_doneness" type="radio" value="Ao ponto da casa">
<div class="flex flex-col">
<div class="flex items-center gap-2">
<span class="font-title-md text-title-md text-primary">Ao ponto da casa</span>
<span class="bg-secondary-container text-on-secondary-container text-[10px] font-bold uppercase px-1.5 py-0.5 rounded">Recomendado</span>
</div>
<span class="font-body-md text-body-md text-on-surface-variant text-[13px]">Rosado no centro, máxima suculência e crosta tostada</span>
</div>
</div>
<span class="material-symbols-outlined text-primary-container text-[20px]">check_circle</span>
</label>

<!-- Option 4: Ao ponto pra bem -->
<label class="doneness-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer group">
<div class="flex items-center gap-3">
<input class="doneness-radio w-4 h-4 accent-[#ffd200] cursor-pointer" name="meat_doneness" type="radio" value="Ao ponto para bem">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface group-hover:text-primary transition-colors">Ao ponto pra bem</span>
<span class="font-body-md text-body-md text-outline text-[13px]">Leve toque rosado, bem estruturado</span>
</div>
</div>
<span class="material-symbols-outlined text-outline group-hover:text-primary-container transition-colors text-[20px]">radio_button_unchecked</span>
</label>

<!-- Option 5: Bem passado -->
<label class="doneness-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer group">
<div class="flex items-center gap-3">
<input class="doneness-radio w-4 h-4 accent-[#ffd200] cursor-pointer" name="meat_doneness" type="radio" value="Bem passado">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface group-hover:text-primary transition-colors">Bem passado</span>
<span class="font-body-md text-body-md text-outline text-[13px]">Sem carne rosada no centro, crosta firme</span>
</div>
</div>
<span class="material-symbols-outlined text-outline group-hover:text-primary-container transition-colors text-[20px]">radio_button_unchecked</span>
</label>
</div>
</div>

<!-- SECTION 2: Turbine seu lanche / Adicionais -->
<div class="flex flex-col gap-2.5 pt-2 border-t border-outline-variant/30">
<div class="flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container text-[20px]">add_circle</span>
<h3 class="font-title-md text-title-md text-on-surface uppercase tracking-wide">3. Turbine Seu Lanche / Adicionais</h3>
</div>
<span class="font-label-md text-label-md text-outline">Opcional (Até 6)</span>
</div>
<p class="font-body-md text-body-md text-outline">Dê um upgrade no seu pedido com os adicionais da casa:</p>

<div class="grid grid-cols-1 sm:grid-cols-2 gap-2" id="toppings-options">
<!-- Topping 1 -->
<label class="topping-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer select-none group">
<div class="flex items-center gap-2.5">
<input class="topping-checkbox w-4 h-4 rounded accent-[#ffd200] cursor-pointer" data-name="Smash extra 90g" data-price="9.00" type="checkbox">
<div class="flex flex-col">
<span class="font-title-md text-[14px] text-on-surface group-hover:text-primary transition-colors">+ Smash extra 90g</span>
<span class="font-body-md text-[12px] text-outline">Prensado na chapa</span>
</div>
</div>
<span class="font-headline-md text-headline-md text-primary-container">+ R$ 9,00</span>
</label>

<!-- Topping 2 -->
<label class="topping-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer select-none group">
<div class="flex items-center gap-2.5">
<input class="topping-checkbox w-4 h-4 rounded accent-[#ffd200] cursor-pointer" data-name="Cheddar derretido extra" data-price="4.50" type="checkbox">
<div class="flex flex-col">
<span class="font-title-md text-[14px] text-on-surface group-hover:text-primary transition-colors">+ Cheddar derretido extra</span>
<span class="font-body-md text-[12px] text-outline">Molho cremoso quente</span>
</div>
</div>
<span class="font-headline-md text-headline-md text-primary-container">+ R$ 4,50</span>
</label>

<!-- Topping 3 -->
<label class="topping-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer select-none group">
<div class="flex items-center gap-2.5">
<input class="topping-checkbox w-4 h-4 rounded accent-[#ffd200] cursor-pointer" data-name="Fatias de bacon crocante extra" data-price="5.00" type="checkbox">
<div class="flex flex-col">
<span class="font-title-md text-[14px] text-on-surface group-hover:text-primary transition-colors">+ Bacon crocante extra</span>
<span class="font-body-md text-[12px] text-outline">Defumado em tiras</span>
</div>
</div>
<span class="font-headline-md text-headline-md text-primary-container">+ R$ 5,00</span>
</label>

<!-- Topping 4 -->
<label class="topping-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer select-none group">
<div class="flex items-center gap-2.5">
<input class="topping-checkbox w-4 h-4 rounded accent-[#ffd200] cursor-pointer" data-name="Cebola caramelizada artesanal" data-price="4.00" type="checkbox">
<div class="flex flex-col">
<span class="font-title-md text-[14px] text-on-surface group-hover:text-primary transition-colors">+ Cebola caramelizada</span>
<span class="font-body-md text-[12px] text-outline">Receita secreta JJ</span>
</div>
</div>
<span class="font-headline-md text-headline-md text-primary-container">+ R$ 4,00</span>
</label>

<!-- Topping 5 -->
<label class="topping-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer select-none group">
<div class="flex items-center gap-2.5">
<input class="topping-checkbox w-4 h-4 rounded accent-[#ffd200] cursor-pointer" data-name="Maionese verde especial da JJ" data-price="3.50" type="checkbox">
<div class="flex flex-col">
<span class="font-title-md text-[14px] text-on-surface group-hover:text-primary transition-colors">+ Maionese verde especial</span>
<span class="font-body-md text-[12px] text-outline">Pote artesanal 40g</span>
</div>
</div>
<span class="font-headline-md text-headline-md text-primary-container">+ R$ 3,50</span>
</label>

<!-- Topping 6 -->
<label class="topping-card flex items-center justify-between p-3 rounded-xl bg-surface-container hover:bg-surface-container-high border border-transparent transition-all cursor-pointer select-none group">
<div class="flex items-center gap-2.5">
<input class="topping-checkbox w-4 h-4 rounded accent-[#ffd200] cursor-pointer" data-name="Picles artesanal da casa" data-price="3.00" type="checkbox">
<div class="flex flex-col">
<span class="font-title-md text-[14px] text-on-surface group-hover:text-primary transition-colors">+ Picles artesanal da casa</span>
<span class="font-body-md text-[12px] text-outline">Agridoce crocante</span>
</div>
</div>
<span class="font-headline-md text-headline-md text-primary-container">+ R$ 3,00</span>
</label>
</div>
</div>

<!-- SECTION 3: Observações do Pedido -->
<div class="flex flex-col gap-2 pt-2 border-t border-outline-variant/30">
<div class="flex items-center justify-between">
<label class="font-title-md text-title-md text-on-surface flex items-center gap-2 uppercase tracking-wide" for="customizer-obs"><span class="material-symbols-outlined text-primary-container text-[20px]">edit_note</span> 4. Observações do Pedido</label>
<span class="font-label-md text-label-md text-outline">Opcional</span>
</div>
<textarea class="w-full rounded-xl bg-surface-container text-on-surface p-3 font-body-md text-body-md placeholder:text-outline border border-outline-variant/40 focus:outline-none focus:ring-2 focus:ring-primary-container transition-all resize-none" id="customizer-obs" placeholder="Ex: sem cebola, molho à parte, bem tostado na chapa..." rows="2"></textarea>
</div>

<!-- SECTION 4: Quantidade e Resumo de Itens -->
<div class="flex items-center justify-between p-3.5 rounded-xl bg-surface-container border border-outline-variant/30">
<div class="flex flex-col">
<span class="font-title-md text-title-md text-on-surface uppercase">Quantidade</span>
<span class="font-label-md text-label-md text-outline" id="customizer-unit-summary">Valor unitário: R$ 34,00</span>
</div>
<div class="flex items-center gap-3">
<button class="w-10 h-10 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-primary-container font-headline-md text-headline-md flex items-center justify-center transition-colors select-none shadow-sm active:scale-95" id="customizer-qty-minus" type="button">-</button>
<span class="font-headline-md text-headline-md text-primary w-6 text-center select-none" id="customizer-qty-val">1</span>
<button class="w-10 h-10 rounded-lg bg-surface-container-high hover:bg-surface-container-highest text-primary-container font-headline-md text-headline-md flex items-center justify-center transition-colors select-none shadow-sm active:scale-95" id="customizer-qty-plus" type="button">+</button>
</div>
</div>
</div>

<!-- Sticky Footer Action -->
<div class="p-space-md sm:p-space-lg bg-surface-container-lowest border-t border-outline-variant/30 flex items-center gap-space-md flex-shrink-0">
<button class="min-h-[52px] w-full rounded-xl bg-primary-container hover:bg-primary-fixed text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider flex items-center justify-center gap-2.5 shadow-[3px_3px_0px_#000000] hover:translate-y-0.5 active:translate-y-1 transition-all group" id="customizer-submit-btn" type="button">
<span class="material-symbols-outlined text-[24px] group-hover:scale-110 transition-transform">add_shopping_cart</span>
<span id="customizer-btn-label">Adicionar à Sacola • R$ 34,00</span>
</button>
</div>
</div>
</div>
<!-- Interactive Drawer: Cart Drawer -->
<div class="fixed inset-0 z-50 bg-black/75 backdrop-blur-sm hidden" id="cart-drawer-overlay">
<div class="absolute top-0 right-0 bottom-0 w-full max-w-md bg-surface-container-high shadow-2xl flex flex-col transform translate-x-full transition-transform duration-300 ease-in-out" id="cart-drawer">
<!-- Drawer Header -->
<div class="p-space-md bg-surface-container-highest flex items-center justify-between">
<div class="flex items-center gap-2">
<span class="material-symbols-outlined text-primary-container text-[24px]">shopping_bag</span>
<h3 class="font-headline-md text-headline-md text-primary uppercase">Sua Sacola</h3>
<span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container font-label-md text-label-md font-bold" id="cart-badge-count">0</span>
</div>
<button class="w-10 h-10 rounded-lg bg-surface-container text-on-surface flex items-center justify-center hover:bg-surface-container-low transition-colors" id="cart-drawer-close" type="button">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<!-- Drawer Items List -->
<div class="flex-1 overflow-y-auto p-space-md flex flex-col gap-space-sm" id="cart-items-container">
            <div class="flex-1 flex flex-col items-center justify-center text-center p-space-lg gap-space-sm my-auto">
              <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-primary-container shadow-inner">
                <span class="material-symbols-outlined text-[36px]">lunch_dining</span>
              </div>
              <h4 class="font-headline-md text-headline-md text-primary uppercase">Sua sacola está vazia</h4>
              <p class="font-body-md text-body-md text-on-surface-variant max-w-xs">
                Nenhum burger ainda? Escolha seus clássicos no cardápio e faça a chapa chiar!
              </p>
              <button type="button" id="btn-empty-back-menu" class="mt-2 px-5 py-2.5 rounded-lg bg-primary-container text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider shadow-[2px_2px_0px_#000000]">
                Ver Cardápio
              </button>
            </div>
          </div>
<!-- Drawer Financial Summary & Checkout -->
<div class="p-space-md bg-surface-container-lowest flex flex-col gap-space-sm" id="cart-footer">
<div class="flex flex-col gap-1 pb-2 font-body-md text-body-md text-on-surface-variant">
<div class="flex items-center justify-between">
<span>Subtotal:</span>
<span class="font-title-md text-title-md text-on-surface" id="cart-subtotal">R$ 0,00</span>
</div>
<div class="flex items-center justify-between text-outline">
<span>Taxa de Entrega:</span>
<span class="font-label-md text-label-md uppercase text-primary-container">A combinar no WhatsApp</span>
</div>
<div class="flex items-center justify-between pt-2">
<span class="font-title-lg text-title-lg text-on-surface">Total:</span>
<span class="font-price-tag text-price-tag text-primary-container" id="cart-total">R$ 0,00</span>
</div>
</div>
<button class="min-h-[52px] w-full rounded-lg bg-tertiary-container hover:bg-tertiary-fixed text-on-tertiary font-title-lg text-title-lg tracking-wide flex items-center justify-center gap-2 shadow-[2px_2px_0px_#000000] active:translate-y-0.5 transition-all opacity-50 cursor-not-allowed" id="btn-checkout-whatsapp" type="button" disabled="">
<span class="material-symbols-outlined text-[24px]">chat</span>
<span>Finalizar Pedido via WhatsApp</span>
</button>
</div>
</div>
</div>
<!-- Inline Micro-interactions & Cart Logic -->
<script>
      const AI_BOT_LINK = <?= json_encode(AI_BOT_LINK) ?>;
    (function() {
      // Cart State
      let cart = [];
      let currentItem = null;
      let modalQuantity = 1;

      // Elements
      const modal = document.getElementById('modal-item-detail');
      const modalCloseBtn = document.getElementById('modal-close-btn');
      const modalTitle = document.getElementById('modal-title');
      const modalDesc = document.getElementById('modal-desc');
      const modalBasePrice = document.getElementById('modal-base-price');
      const modalObs = document.getElementById('modal-obs');
      const modalQtyVal = document.getElementById('modal-qty-val');
      const modalQtyMinus = document.getElementById('modal-qty-minus');
      const modalQtyPlus = document.getElementById('modal-qty-plus');
      const modalSubmitAdd = document.getElementById('modal-submit-add');
      const modalBtnLabel = document.getElementById('modal-btn-label');
      const modalCatBadge = document.getElementById('modal-cat-badge');

      // Cart Drawer Elements
      const drawerOverlay = document.getElementById('cart-drawer-overlay');
      const cartDrawer = document.getElementById('cart-drawer');
      const drawerCloseBtn = document.getElementById('cart-drawer-close');
      const cartItemsContainer = document.getElementById('cart-items-container');
      const cartSubtotalEl = document.getElementById('cart-subtotal');
      const cartTotalEl = document.getElementById('cart-total');
      const cartBadgeCount = document.getElementById('cart-badge-count');
      const cartCounterBtn = document.getElementById('cart-counter-btn');
      const btnOpenCartBanner = document.getElementById('btn-open-cart-banner');
      const btnCheckoutWhatsApp = document.getElementById('btn-checkout-whatsapp');

      // Format currency
      function formatBRL(value) {
        return 'R$ ' + Number(value).toFixed(2).replace('.', ',');
      }

      // Filter Categories
      const catButtons = document.querySelectorAll('.cat-filter-btn');
      const menuCards = document.querySelectorAll('.menu-card');

      catButtons.forEach(btn => {
        btn.addEventListener('click', () => {
          catButtons.forEach(b => {
            b.classList.remove('bg-primary-container', 'text-on-primary-container', 'shadow-[2px_2px_0px_#000000]');
            b.classList.add('bg-surface-container-high', 'text-on-surface');
          });
          btn.classList.remove('bg-surface-container-high', 'text-on-surface');
          btn.classList.add('bg-primary-container', 'text-on-primary-container', 'shadow-[2px_2px_0px_#000000]');

          const cat = btn.getAttribute('data-category');
          menuCards.forEach(card => {
            if (cat === 'all' || card.getAttribute('data-category') === cat) {
              card.style.display = 'flex';
            } else {
              card.style.display = 'none';
            }
          });
        });
      });

      // Open Modal Function
      function openModal(data) {
        currentItem = data;
        modalQuantity = 1;
        modalTitle.textContent = data.name;
        modalDesc.textContent = data.desc;
        modalCatBadge.textContent = data.category || 'Artesanal';
        modalBasePrice.textContent = formatBRL(data.price);
        modalObs.value = '';
        updateModalTotals();
        modal.classList.remove('hidden');
        modal.classList.add('flex');
      }

      function closeModal() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
        currentItem = null;
      }

      function updateModalTotals() {
        modalQtyVal.textContent = modalQuantity;
        if (currentItem) {
          const total = currentItem.price * modalQuantity;
          modalBtnLabel.textContent = `Adicionar à Sacola • ${formatBRL(total)}`;
        }
      }

      modalQtyMinus.addEventListener('click', () => {
        if (modalQuantity > 1) {
          modalQuantity--;
          updateModalTotals();
        }
      });

      modalQtyPlus.addEventListener('click', () => {
        modalQuantity++;
        updateModalTotals();
      });

      modalCloseBtn.addEventListener('click', closeModal);
      modal.addEventListener('click', (e) => {
        if (e.target === modal) closeModal();
      });

      // Bind Item Add Buttons
      const addBtns = document.querySelectorAll('.btn-add-item');
      addBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
          e.stopPropagation();
          const itemData = {
            id: btn.getAttribute('data-id'),
            name: btn.getAttribute('data-name'),
            price: parseFloat(btn.getAttribute('data-price')),
            desc: btn.getAttribute('data-desc'),
            category: btn.getAttribute('data-category')
          };
          openModal(itemData);
        });
      });

      // Submit Item to Cart
      modalSubmitAdd.addEventListener('click', () => {
        if (!currentItem) return;
        const obs = modalObs.value.trim();

        const existingIdx = cart.findIndex(ci => ci.id === currentItem.id && ci.obs === obs);
        if (existingIdx > -1) {
          cart[existingIdx].qty += modalQuantity;
        } else {
          cart.push({
            id: currentItem.id,
            name: currentItem.name,
            price: currentItem.price,
            qty: modalQuantity,
            obs: obs
          });
        }

        closeModal();
        renderCart();
        openDrawer();
      });

      // Drawer Open / Close
      function openDrawer() {
        drawerOverlay.classList.remove('hidden');
        setTimeout(() => {
          cartDrawer.classList.remove('translate-x-full');
        }, 10);
      }

      function closeDrawer() {
        cartDrawer.classList.add('translate-x-full');
        setTimeout(() => {
          drawerOverlay.classList.add('hidden');
        }, 300);
      }

      drawerCloseBtn.addEventListener('click', closeDrawer);
      drawerOverlay.addEventListener('click', (e) => {
        if (e.target === drawerOverlay) closeDrawer();
      });

      if (btnOpenCartBanner) {
        btnOpenCartBanner.addEventListener('click', openDrawer);
      }

      // Also support clicking header cart button if present in App Shell
      const shellBagBtn = document.querySelector('header button[aria-label="Abrir sacola de compras"]');
      if (shellBagBtn) {
        shellBagBtn.addEventListener('click', openDrawer);
      }

      // Render Cart
      function renderCart() {
        const totalItemsCount = cart.reduce((acc, item) => acc + item.qty, 0);
        const subtotal = cart.reduce((acc, item) => acc + (item.price * item.qty), 0);

        // Update counts
        cartBadgeCount.textContent = totalItemsCount;
        if (cartCounterBtn) cartCounterBtn.textContent = totalItemsCount;

        // Shell Header Cart Counter & Subtotal update
        const headerBadge = document.querySelector('header button[aria-label="Abrir sacola de compras"] .absolute');
        if (headerBadge) headerBadge.textContent = totalItemsCount;

        const headerTotal = document.querySelector('header button[aria-label="Abrir sacola de compras"] .text-primary-container');
        if (headerTotal) headerTotal.textContent = formatBRL(subtotal);

        // Financial summary
        cartSubtotalEl.textContent = formatBRL(subtotal);
        cartTotalEl.textContent = formatBRL(subtotal);

        // Empty state vs items
        if (cart.length === 0) {
          cartItemsContainer.innerHTML = `
            <div class="flex-1 flex flex-col items-center justify-center text-center p-space-lg gap-space-sm my-auto">
              <div class="w-16 h-16 rounded-full bg-surface-container flex items-center justify-center text-primary-container shadow-inner">
                <span class="material-symbols-outlined text-[36px]">lunch_dining</span>
              </div>
              <h4 class="font-headline-md text-headline-md text-primary uppercase">Sua sacola está vazia</h4>
              <p class="font-body-md text-body-md text-on-surface-variant max-w-xs">
                Nenhum burger ainda? Escolha seus clássicos no cardápio e faça a chapa chiar!
              </p>
              <button 
                type="button" 
                id="btn-empty-back-menu" 
                class="mt-2 px-5 py-2.5 rounded-lg bg-primary-container text-on-primary-container font-headline-md text-headline-md uppercase tracking-wider shadow-[2px_2px_0px_#000000]"
              >
                Ver Cardápio
              </button>
            </div>
          `;

          const emptyBtn = document.getElementById('btn-empty-back-menu');
          if (emptyBtn) {
            emptyBtn.addEventListener('click', () => {
              closeDrawer();
              document.getElementById('cardapio').scrollIntoView({ behavior: 'smooth' });
            });
          }
          btnCheckoutWhatsApp.disabled = true;
          btnCheckoutWhatsApp.classList.add('opacity-50', 'cursor-not-allowed');
          return;
        }

        btnCheckoutWhatsApp.disabled = false;
        btnCheckoutWhatsApp.classList.remove('opacity-50', 'cursor-not-allowed');

        let html = '';
        cart.forEach((item, index) => {
          const itemTotal = item.price * item.qty;
          html += `
            <div class="p-3 rounded-xl bg-surface-container flex flex-col gap-2 shadow-sm">
              <div class="flex items-start justify-between gap-2">
                <div class="flex flex-col">
                  <h4 class="font-title-md text-title-md text-primary leading-tight">${item.name}</h4>
                  <span class="font-label-md text-label-md text-primary-container">${formatBRL(item.price)} cada</span>
                </div>
                <button type="button" class="btn-del-item text-outline hover:text-error transition-colors p-1" data-index="${index}">
                  <span class="material-symbols-outlined text-[20px]">delete</span>
                </button>
              </div>

              ${item.obs ? `
                <div class="p-2 rounded bg-surface-container-high font-body-md text-label-md text-on-surface-variant italic">
                  Obs: "${item.obs}"
                </div>
              ` : ''}

              <div class="flex items-center justify-between pt-1">
                <div class="flex items-center gap-2">
                  <button type="button" class="btn-cart-minus w-7 h-7 rounded bg-surface-container-high text-primary-container font-headline-md text-headline-md flex items-center justify-center select-none" data-index="${index}">-</button>
                  <span class="font-title-md text-title-md text-on-surface w-6 text-center">${item.qty}</span>
                  <button type="button" class="btn-cart-plus w-7 h-7 rounded bg-surface-container-high text-primary-container font-headline-md text-headline-md flex items-center justify-center select-none" data-index="${index}">+</button>
                </div>
                <span class="font-title-md text-title-md text-primary-container">${formatBRL(itemTotal)}</span>
              </div>
            </div>
          `;
        });

        cartItemsContainer.innerHTML = html;

        // Wire item actions
        cartItemsContainer.querySelectorAll('.btn-del-item').forEach(b => {
          b.addEventListener('click', () => {
            const idx = parseInt(b.getAttribute('data-index'));
            cart.splice(idx, 1);
            renderCart();
          });
        });

        cartItemsContainer.querySelectorAll('.btn-cart-minus').forEach(b => {
          b.addEventListener('click', () => {
            const idx = parseInt(b.getAttribute('data-index'));
            if (cart[idx].qty > 1) {
              cart[idx].qty--;
            } else {
              cart.splice(idx, 1);
            }
            renderCart();
          });
        });

        cartItemsContainer.querySelectorAll('.btn-cart-plus').forEach(b => {
          b.addEventListener('click', () => {
            const idx = parseInt(b.getAttribute('data-index'));
            cart[idx].qty++;
            renderCart();
          });
        });
      }

      // WhatsApp Checkout
      btnCheckoutWhatsApp.addEventListener('click', () => {
        if (cart.length === 0) return;

        let message = `🔥 *NOVO PEDIDO - JJ BURGER ARTESANAL*\n`;
        message += `_O sabor da rua na sua casa!_\n\n`;
        message += `*ITENS DO PEDIDO:*\n`;

        let subtotal = 0;
        cart.forEach((it, i) => {
          const itemTotal = it.price * it.qty;
          subtotal += itemTotal;
          message += `▪ *${it.qty}x ${it.name}* - ${formatBRL(itemTotal)}\n`;
          if (it.obs) {
            message += `   ↳ _Obs: ${it.obs}_\n`;
          }
        });

        message += `\n*Subtotal:* ${formatBRL(subtotal)}`;
        message += `\n*Taxa de Entrega:* A combinar com o atendente\n\n`;
        message += `📍 *Endereço de Entrega ou Retirada:* [Por favor, informe seu nome e endereço na Restinga/ZS]`;

        const encoded = encodeURIComponent(message);
        navigator.clipboard && navigator.clipboard.writeText(message).catch(() => {});
        window.open(AI_BOT_LINK, '_blank');
      });

      // Initial Cart Render
      renderCart();
    })();
  </script>
</div></main><footer class="w-full bg-surface-container-lowest"><div class="max-w-[1200px] mx-auto px-margin py-space-xl"><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-space-xl pb-space-lg"><div class="flex flex-col gap-space-sm"><div class="flex items-center gap-space-sm"><span class="font-headline-lg text-headline-lg text-primary tracking-wide">JJ BURGER</span></div><p class="font-body-md text-body-md text-on-surface-variant italic">"O sabor da rua na sua casa."</p><p class="font-body-md text-body-md text-on-surface-variant mt-space-xs">Smash burgers autênticos, prensados com precisão e alma de rua na Zona Sul de Porto Alegre.</p></div><div class="flex flex-col gap-space-sm"><h3 class="font-title-md text-title-md text-primary uppercase tracking-wider">Localização &amp; Contato</h3><p class="font-body-md text-body-md text-on-surface-variant">Restinga, Zona Sul<br>Porto Alegre - RS</p><a class="inline-flex items-center gap-space-xs text-tertiary-fixed-dim hover:text-tertiary font-title-md text-title-md transition-colors" href="<?= AI_BOT_LINK ?>" rel="noopener noreferrer" target="_blank"><span class="material-symbols-outlined text-[20px]">chat</span>(51) 98033-0830</a></div><div class="flex flex-col gap-space-sm"><h3 class="font-title-md text-title-md text-primary uppercase tracking-wider">Horários de Funcionamento</h3><ul class="flex flex-col gap-space-xs font-body-md text-body-md text-on-surface-variant"><li><strong class="text-on-surface font-title-md">Terça a Domingo:</strong></li><li class="flex items-start gap-1"><span class="text-primary-container">▪</span> 11h às 15h: Delivery exclusivo iFood</li><li class="flex items-start gap-1"><span class="text-primary-container">▪</span> 18h às 00h: Salão aberto &amp; Delivery próprio</li><li class="mt-space-xs text-error font-label-md uppercase tracking-wide">Segunda-feira: Fechado para descanso</li></ul></div><div class="flex flex-col gap-space-sm"><h3 class="font-title-md text-title-md text-primary uppercase tracking-wider">Canais Oficiais</h3><div class="flex flex-col gap-space-xs"><a class="flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors" href="https://instagram.com/jjburger_zs" rel="noopener noreferrer" target="_blank"><span class="material-symbols-outlined text-primary-container">photo_camera</span><span class="font-label-lg text-label-lg text-on-surface">@jjburger_zs</span></a><a class="flex items-center gap-space-sm p-space-sm rounded-lg bg-surface-container-high hover:bg-surface-container-highest transition-colors" href="#" rel="noopener noreferrer" target="_blank"><span class="material-symbols-outlined text-secondary">moped</span><span class="font-label-lg text-label-lg text-on-surface">Peça pelo iFood</span></a></div></div></div><div class="pt-space-md flex flex-col sm:flex-row items-center justify-between gap-space-sm font-label-md text-label-md text-outline"><p>© 2025 JJ Burger Artesanal. Todos os direitos reservados.</p><p class="tracking-wider uppercase text-primary-fixed-dim">Restinga Orgulho ZS • Porto Alegre</p></div></div></footer><aside class="fixed bottom-6 right-6 z-50"><a class="flex items-center gap-space-sm bg-tertiary-container hover:bg-tertiary-fixed text-on-tertiary px-4 py-3 rounded-full shadow-[0_8px_24px_rgba(0,0,0,0.6)] hover:scale-105 transition-all active:scale-95" href="<?= AI_BOT_LINK ?>" rel="noopener noreferrer" target="_blank"><span class="material-symbols-outlined text-[28px]">chat</span><span class="font-title-md text-title-md tracking-wide hidden sm:inline">Pedir pelo Chat IA</span></a></aside>


<?php require_once __DIR__ . '/includes/footer.php'; ?>
