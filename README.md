Aplicativos de notificações via SMS e E-Mail.

Processo de instalação.

-Verificar uso de PHP 8.0
-Verificar uso das portas 80 e 3306

Configurar Arquivo .ENV com credenciais Mailtrap.io e NEXMO (KEY E SECRET), bem como adicionar 
WWWGROUP=1000
WWWUSER=1000

Na pasta do projeto
digitar linhas de comando

##composer install
##docker-compose up --build -d

##./vendor/bin/sail artisan migrate

PARA TESTE UNITARIOS
##./vendor/bin/phpunit

após as imagens do docker estar funcionando testar aplicação pela rota localhost/contact
