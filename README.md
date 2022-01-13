# recruitment_exam

- docker compose up -d --buildでコンテナ立ち上げ
- appコンテナ内で composer install を実行し、Laravelをインストール
- appコンテナ内で下記コマンドを実行
`npm install -D vue`
`npm install -D vue-template-compiler`
`npm install`
`npm audit fix`
`npm run dev`


## appコンテナへ入るコマンド
docker compose exec app bash

## MySQLにアクセスするコマンド
docker compose exec db bash -c 'mysql -u${MYSQL_USER} -p${MYSQL_PASSWORD} ${MYSQL_DATABASE}'

