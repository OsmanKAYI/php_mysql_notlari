# Depolarda yer alan paketlerin güncel listesini indir
sudo apt update
# Mevcut paketlerin yenisi varsa yükle
sudo apt upgrade

# Sürücülerin (driver) güncel dosyalarını yükle
sudo ubuntu-drivers autoinstall

# Apache kurulumu
sudo apt install apache2 apache2-utils -y
# Apache varsayılan dosyasını sil
sudo rm -f /var/www/html/index.html
# Sistem açıldığında apache servisini otomatik başlat
sudo systemctl enable apache2
# Apache servisini yeniden başlat
sudo service apache2 restart
# Aktif kullanıcıyı Apache'nin varsayılan grubuna ekle (www-data)
sudo adduser $USER www-data
# Apache'nin varsayılan dizinine aktif kullanıcıyı yetkilendir
sudo chown -R $USER:www-data /var/www/html/

# Adminer'in en son sürümünü /adminer adresine kur
mkdir /var/www/html/adminer
wget -O /var/www/html/adminer/index.php https://www.adminer.org/latest.php

# MySQL / MariaDB kurulumu
sudo apt install mariadb-server mariadb-client -y
# Sistem açıldığında MySQL servisini otomatik başlat
sudo systemctl enable mariadb
# MySQL servisini yeniden başlat
sudo service mariadb restart

# MySQL Root kullanıcısı için şifreyi değiştir
# sudo mysql_secure_installation
sudo mysql --user="root" --password="" --execute="SET PASSWORD FOR 'root'@'localhost' = PASSWORD('root');"

# Sık kullanılan faydalı paketleri kur
sudo apt install git npm guake guake-indicator pv meld vim ncdu axel xclip net-tools caffeine vlc chromium-browser magic-wormhole gnome-sushi hwinfo gnome-shell-extension-manager software-properties-common apt-transport-https wget curl -y

# Sistem genelinde karakter set olarak UTF8 kullan
LC_ALL=C.UTF-8

# vscode kurulumu
## vscode için güvenilir depolara vscode'un kendi deposunu ve imzasını ekle
wget -O- https://packages.microsoft.com/keys/microsoft.asc | sudo gpg --dearmor | sudo tee /usr/share/keyrings/vscode.gpg
echo deb [arch=amd64 signed-by=/usr/share/keyrings/vscode.gpg] https://packages.microsoft.com/repos/vscode stable main | sudo tee /etc/apt/sources.list.d/vscode.list
## Depolarda yer alan paketlerin güncel listesini indir
sudo apt update
## vscode paketini kur
sudo apt install code -y

# Dilediğimiz herhangi bir PHP sürümünü yükleyebilmek için
# PHP  için güvenilir depolara PHP'nin kendi deposunu ekle
sudo add-apt-repository -y ppa:ondrej/php 
## Depolarda yer alan paketlerin güncel listesini indir
sudo apt update 

## PHP 8.1 Sürümünü kur
sudo apt install php8.1-common php8.1-curl php8.1-dev  php8.1-gd php8.1-imagick php8.1-intl php8.1-mbstring php8.1-mcrypt php8.1-memcache php8.1-memcached php8.1-mysql php8.1-pgsql php8.1-redis php8.1-soap php8.1-sqlite3 php8.1-xdebug php8.1-xml php8.1-xmlrpc php8.1-zip libapache2-mod-php8.1 -y

## PHP composer paketini kur
sudo apt install composer -y
## PHP'nin çalışmaya başlaması için Apache'yi yeniden başlat
sudo service apache2 restart


# Fare için ayarlar
## Dock ünitesinde program simgesine tıklayınca küçült/büyült
gsettings set org.gnome.shell.extensions.dash-to-dock click-action 'minimize'
## Dock ünitesinde program simgesinde tekeri çevirince pencelere arasında gezin
gsettings set org.gnome.shell.extensions.dash-to-dock scroll-action 'cycle-windows'

## Kurulum sonrasında varsa gereksiz paketleri temizle
sudo apt autoremove -y

# GIT ayarları
git config --global user.email 'nuriakman@gmail.com'
git config --global user.name 'Nuri Akman'

echo "\n\n\n"
echo "\nŞu komutları kendiniz için uyarlayınız:\n"
echo "\ngit config --global user.email 'nuriakman@gmail.com'"
echo "\ngit config --global user.name 'Nuri Akman'"

echo "\n\n\n=== KURULUM TAMAMLANDI ===\n\n\n"
