# recruitment_exam

## appコンテナへ入るコマンド
docker compose exec app bash

## MySQLにアクセスするコマンド
docker compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'
