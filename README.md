# ContactForm

-Bu projede Laravel, Docker(Sail) ve PostgreSQL kullanarak kullanıcıdan isim ve emailden oluşan iletişim bilgileri alınarak bir veritabanına kaydediliyor.

# Adımlar

-Docker Desktop kurduktan sonra terminalden yeni proje oluşturuldu. PostgreSQL tercihinden dolayı proje içine eklendi:
  curl -s "https://laravel.build/hipotenus?with=pgsql" | bash

-Proje klasörüne(hipotenus) girilip Laravel Sail ile containerlar çalıştırılmaya çalışıldı:
  cd hipotenus
  ./vendor/bin/sail up -d

-Default port kullanım halinde olduğundan Docker container portu docker-compose.yml içinde değiştirildi. Laravel güvenlik anahtarı oluşturuldu ve her şeyin çalışır durumda olduğu kontrol edildi:
  ./vendor/bin/sail artisan key:generate
  ./vendor/bin/sail ps

-Migration ile contacts tablosu oluşturuldu ve database/migrations/xxx_create_contacts_table.php dosyasının içinde tablo tanımlandı:
  ./vendor/bin/sail artisan make:migration create_contacts_table
  ./vendor/bin/sail artisan migrate

-routes/web.php dosyası içinde gelen "welcome" sayfası yorum haline getirildi ve yeni route'lar eklendi.

-Controller oluşturuldu ve dosyasının içine create() ve store() metodları eklendi:
  ./vendor/bin/sail artisan make:Controller ContactController

-Contact Model oluşturuldu ve içine $fillable eklendi:
  ./vendor/bin/sail artisan make:model Contact

-resources/views klasörüne contact_form.blade.php dosyası oluşturuldu ve içine html kodu yazıldı.

-PostgreSQL'a bağlanılarak kayıtlar kontrol edildi ve çıkıldı:
  ./vendor/bin/sail psql
  \dt;
  SELECT * FROM contacts;
  \q

-Projeyi kapatmak için:
  ./vendor/bin/sail down
