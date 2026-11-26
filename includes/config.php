<?php
// Configurações gerais do site JJ Burger
define('SITE_NAME', 'JJ Burger');
define('AI_BOT_LINK', 'https://apps.abacus.ai/chatllm/?appId=c2be51da2'); // Robô de IA (substitui todos os links de WhatsApp)
define('WHATSAPP_NUMBER', '5551980330830');
define('WHATSAPP_NUMBER_FORMATTED', '(51) 98033-0830');
define('WHATSAPP_LINK', AI_BOT_LINK);

// Widget flutuante do chatbot (popup no canto inferior direito)
define('AI_BOT_APP_ID', 'c2be51da2');
define('AI_BOT_WIDGET_SCRIPT', 'https://api.abacus.ai/api/v0/getChatBotWidgetSDKLink?externalApplicationId=' . AI_BOT_APP_ID);
