
```BASH
sudo apt update
sudo apt upgrade

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

sudo apt install php php-pear php-fpm php-dev php-zip php-curl php-xmlrpc php-sqlite3 php-gd php-mysql php-mbstring php-xml libapache2-mod-php -y

sudo vi /etc/php/8.1/apache2/php.ini
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

sudo apt install composer npm guake* pv meld vim axel net-tools caffein* vlc virtualbox chromium-browser magic-wormhole -y


## vscode kurulumu
sudo apt install software-properties-common apt-transport-https wget gpg
wget -qO- https://packages.microsoft.com/keys/microsoft.asc | gpg --dearmor > packages.microsoft.gpg
sudo install -D -o root -g root -m 644 packages.microsoft.gpg /etc/apt/keyrings/packages.microsoft.gpg
sudo sh -c 'echo "deb [arch=amd64,arm64,armhf signed-by=/etc/apt/keyrings/packages.microsoft.gpg] https://packages.microsoft.com/repos/code stable main" > /etc/apt/sources.list.d/vscode.list'
rm -f packages.microsoft.gpg

sudo apt update
sudo apt install code

sudo apt autoremove

npm -v

node -v

php -v

apache2 -v

mysql --version

```



### Diğer Programlar:
- VLC Player
- AnyDesk
- VirtualBox
- FlameShot
- jDownloader
- Postman
- SoapUI
- SublimeMerge
- SublimeText
- Brightness Control (Sadece Ubuntu 20'de çalışıyor)



