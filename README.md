# Laravel Playground
Laravel の遊び場

## 参考

https://github.com/Laradock/laradock

## Laravel の立ち上げまで
### docker 起動
```bash
docker compose up -d workspace nginx
```

### workspace コンテナに入る
```bash
docker compose exec workspace bash
```
### プロジェクトの作成
以下のコマンドを実行すると、src ディレクトリ以下にプロジェクトファイルが生成される
```bash
root@0588fd116abd:/var/www# composer create-project laravel/laravel . --prefer-dist
```


### アクセス
http://localhost/ にアクセスすると Laravel のトップページになることを確認


