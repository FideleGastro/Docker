# Docker

https://docs.docker.com/compose/compose-file/compose-file-v2

docker-compose build // crée/édite des images via leur Dockfile (recharge les src/ en les écransant si l'image existe déjà)
docker-compose up -d // instance tout les composants dans le .yml (prend en compte par défault les "links" pour les ordres d'instances)
docker-compose up -d phpmyadmin-test // lancera phpmyadmin->Mysql  
