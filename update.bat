docker-compose exec phpMain php artisan cache:clear
docker-compose exec phpMain php artisan config:clear
docker-compose exec phpMain php artisan view:clear
docker-compose exec phpMain php artisan route:clear