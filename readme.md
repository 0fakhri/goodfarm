Extract File

letakan di c: atau d: (bebas)

beri name folder dangan "goodfarm" (bebas juga sih)

buka cmd

pindah ke lokasi tempat file td di taruh (ex: cd /d d:\goodfarm (sesuai lokasi path folder yang tadi))

ketik 

    copy .env.example .env 

kalo udah ketik 

    php artisan key:generate

setelah itu ketik 

    composer install

tunggu hingga selesai (agak lama)

terus buka file .env cari dan edit seperti dibawah :

    DB_DATABASE=goodfarm
    DB_USERNAME=root
    DB_PASSWORD=
    
    MAIL_DRIVER=smtp
    MAIL_HOST=smtp.gmail.com
    MAIL_PORT=587
    MAIL_USERNAME=varshavyanka0@gmail.com
    MAIL_PASSWORD=putin009
    MAIL_ENCRYPTION=tls

terus buka xampp hidupin apache sm mySQL

buat database dengan nama goodfarm

ketik 
    
    php artisan migrate

setelah itu

    php artisan db:seed

terus untuk menjalankkannya ketik

    php artisan serve

buka web browser, ketik http://localhost:8000/
