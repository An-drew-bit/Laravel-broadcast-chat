## About Laravel

### Чистый запуск
```
{%project_folder%}: cp ./env.example ./.env
{%project_folder%}: composer install
{%project_folder%}: npm install
{%project_folder%}: artisan migrate --seed
```

### Для локального запуска
```
{%project_folder%}: php artisan serve
http://127.0.0.1:8000
```

### Для использования pusher
```
{%project_folder%}: в ./env 
BROADCAST_DRIVER=pusher
PUSHER_APP_ID=your app id
PUSHER_APP_KEY=your app key
PUSHER_APP_SECRET=your app secret
PUSHER_APP_CLUSTER=eu
```
