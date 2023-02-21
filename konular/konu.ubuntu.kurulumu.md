
# Ubuntu 22.04 Kurulumu Sonrası Yapılacaklar

```BASH
sudo apt update
sudo apt upgrade

sudo ubuntu-drivers autoinstall # otomatik olarak driverları güncellemek için

gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
gsettings set org.gnome.shell.extensions.dash-to-dock scroll-action 'cycle-windows'

sudo apt install git -y
git config --global user.email "nuriakman@gmail.com"
git config --global user.name "Nuri Akman"

sudo apt install apache2 apache2-utils -y
sudo rm -f /var/www/html/index.html
sudo systemctl enable apache2
sudo service apache2 restart
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
mkdir /var/www/html/adminer
wget -O /var/www/html/adminer/index.php https://www.adminer.org/latest.php

## PHP Kurulumu (Aşağıda)

sudo vi /etc/php/xxxxx/apache2/php.ini
    display_startup_errors = On
    display_errors         = On
    short_open_tag         = On
    opcache.enable         = 0
    upload_max_filesize    = 128M
    upload_max_size        = 128M
    post_max_size          = 128M
    max_input_vars         = 30000
    date.timezone          = "Europe/Istanbul"
    error_reporting        = E_ALL & ~E_DEPRECATED & ~E_STRICT & ~E_NOTICE & ~E_WARNING
    mbstring.language      = Turkish
    mbstring.internal_encoding = UTF-8

sudo apt install mariadb-server mariadb-client -y
sudo systemctl enable mariadb
sudo service mariadb restart
sudo mysql_secure_installation

sudo mysql -u root -p
    create user 'dbadmin'@'localhost' identified by 'dbadmin';
    flush privileges;
    exit;

sudo apt install composer npm guake* pv meld vim axel net-tools caffein* vlc virtualbox chromium-browser magic-wormhole gnome-sushi curl -y
sudo apt install gnome-shell-extension-manager -y


## vscode kurulumu  KAYNAK: https://linuxhint.com/install-visual-studio-code-ubuntu22-04/
sudo apt install software-properties-common apt-transport-https wget -y
wget -O- https://packages.microsoft.com/keys/microsoft.asc | sudo gpg --dearmor | sudo tee /usr/share/keyrings/vscode.gpg
echo deb [arch=amd64 signed-by=/usr/share/keyrings/vscode.gpg] https://packages.microsoft.com/repos/vscode stable main | sudo tee /etc/apt/sources.list.d/vscode.list
sudo apt update
sudo apt install code -y

sudo apt autoremove

npm -v

node -v

php -v

apache2 -v

mysql --version

```


## PHP Kurulumu Yapılması
```BASH

## PHP Kurulumu KAYNAK: https://tecadmin.net/how-to-install-php-on-ubuntu-22-04/


## PHP'nin farklı sürümleri için kurulum
sudo apt install software-properties-common ca-certificates lsb-release apt-transport-https -y
LC_ALL=C.UTF-8
sudo add-apt-repository -y ppa:ondrej/php 
sudo apt update 
sudo apt upgrade


## 2 farklı PHP sürümü kurma ve bunları kullanma
sudo apt install php7.4-fpm php7.4-intl php7.4-imagick php7.4-dev php7.4-zip php7.4-curl php7.4-xmlrpc php7.4-sqlite3 php7.4-gd php7.4-mysql php7.4-mbstring php7.4-xml libapache2-mod-php7.4 -y

sudo apt install php8.1-fpm php8.1-intl php8.1-imagick php8.1-dev php8.1-zip php8.1-curl php8.1-xmlrpc php8.1-sqlite3 php8.1-gd php8.1-mysql php8.1-mbstring php8.1-xml libapache2-mod-php8.1 -y


sudo a2dismod php8.1

sudo a2enmod php7.4

sudo service apache2 restart

## CLI için PHP sürümü ayarlama
sudo update-alternatives --config php
sudo update-alternatives --set php /usr/bin/php7.4

```


## Faydalı Diğer Programlar:
- [VLC Player](https://www.videolan.org/vlc/index.tr.html)
- [AnyDesk](https://anydesk.com/)
- [VirtualBox](https://www.virtualbox.org/)
- [FlameShot](https://flameshot.org/)
- [jDownloader](https://jdownloader.org/)
- [Postman](https://www.postman.com/)
- [SoapUI](https://www.soapui.org/downloads/soapui/)
- [SublimeMerge](https://www.sublimemerge.com/)
- [SublimeText](https://www.sublimetext.com/)
- [Brightness Control](https://linuxhint.com/control-screen-brightness-ubuntu/)

## Bilgiler
- `gnome-sushi` Programı: <kbd>space</kbd> (boşluk çubuğu) tuşu ile dosya ve klasör içeriğinin önizlemesini gösterir (MacOS'daki gibi)
- `sudo snap refresh` Snap güncelleme uyarısı alındığında, açık tüm programlar kapatılır ve bu komut çalıştırılır


## Ekran görüntüsü alma

Shift+PrintScreen tuşuna aşağıdaki komut bağlanınca, bu tuşa basıldığında ekranın seçeceğimiz kısmın ekran görüntüsü diske kaydedilir. KAYNAK: https://askubuntu.com/a/1405337

- `sudo apt install gnome-screenshot`
- `sudo apt install xclip`

Ardından, 
> Ayarlar | Klavye | Klavye Kısayolları | Kısayolları Gör ve Özelleştir | Özel Kısayollar | 
menüsünden yeni kısayol tanımlanır. Resimler dizinine bu ekran görüntülerini kaydetmek için KOMUT kısmına aşağıdaki kod girilir: 

`sh -c 'gnome-screenshot -af /home/$USER/Resimler/$(date "+%Y.%m.%d-%H.%M.%S").png'`

![Klavye Kısayolu Ekleme](https://github.com/HayatOkulum/Archive/blob/main/Images/2023.02.08-00.08.24.png)

Bu komutu önce terminalde deneyip kullanıcı hesabınızın erişim izni varmı test etmenizi öneriririm. Komutu terminalde test ettiğinizde resimler klasörüne görüntü kaydedilmemişse kullanıcı hesabınızın erişim izni yoktur, izin vermek için aşağıdaki komutu kullanabilirsiniz.

`sudo chmod ugo+rwx /home/$USER/Resimler/*`

Kaldırmayı düşünürseniz tekrar erişim engellemek için bu kodu kullanabilirsiniz.

`sudo chmod ugo-rwx /home/$USER/Resimler/*`


