# Instruções para Funcionamento

### Para ter esse sistema funcionando em seu computador, siga as instruções a seguir

Abra o seu terminal ou git bash antes mesmo de conectar na máquina virtual

Acesse a pasta Code

Dentro dela, rode o comando

    git clone git@github.com:goislimat/brasileiro.git

Abra seu arquiv de hosts e adicione a linha:

    192.168.10.10   brasileiro.app

Acesse seu arquivo ~/.homestead/Homestead.yaml e adicione a linha

    - map: brasileiro.app
       to: /home/vagrant/Code/Brasileiro/public
       
Dentro da pasta ~/Homestead rode:
    
    vagrant provision && vagrant ssh
    
Espere a sua máquina virtual iniciar. Quando ela tiver finalizado a inicialização, crie o banco de dados. Para isso digite no terminal, quando já estiver conectado na sua VM:

    mysql -u root -p
    
Digite a senha do seu banco de dados e então:

    create database brasileiro;

Saia do console do mysql com o exit.

Acesse a pasta da aplicação:

    cd ~/Code/Brasileiro
    
Agora, você precisa atualizar sua aplicação para baixar as pastas que não fazem parte do controle de versão. Faça isso com:

    composer update
    
Feito isso, copie o arquivo .env.example e o renomeie para .env

Troque o nome do banco de dados para brasileiro:

    DB_DATABASE=brasileiro
    
Gere uma key para a sua aplicação com:

    php artisan key:generate
    
Execute as migrações:

    php artisan migrate
    
Semeie o banco de dados:

    php artisan db:seed
    
Processo finalizado. Basta acessar a aplicação no seu browser.