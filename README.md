# install
<br>
php artisan vendor:publish --tag="telegraph-migrations" &&
php artisan vendor:publish --tag="telegraph-config" &&
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
<br>
npm install && npm run dev

