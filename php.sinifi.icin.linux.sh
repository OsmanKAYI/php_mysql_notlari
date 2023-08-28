# PHP Sınıfı İçin Linux

## update & upgrade & autoremove & snap refresh
sudo apt update && sudo apt upgrade -y && sudo apt autoremove -y && sudo snap refresh

## İstanbul Saat Ayarları
sudo timedatectl set-timezone Europe/Istanbul
## timezone u manuel olarak seçmek için: sudo dpkg-reconfigure tzdata

## auxiliary paketi
sudo apt-get install ntp ntpdate -y

## NTP server
sudo ntpdate ntp.ubuntu.com

## timezone ve güncel zamanı ayarla
timedatectl status

## klavye ayarlarını Türkçe yap
setxkbmap tr

## visual studio code
sudo apt install software-properties-common apt-transport-https wget -y
wget -O- https://packages.microsoft.com/keys/microsoft.asc | sudo gpg --dearmor | sudo tee /usr/share/keyrings/vscode.gpg
echo deb [arch=amd64 signed-by=/usr/share/keyrings/vscode.gpg] https://packages.microsoft.com/repos/vscode stable main | sudo tee /etc/apt/sources.list.d/vscode.list
sudo apt install code -y

## apache
sudo apt install apache2 apache2-utils -y
sudo rm -f /var/www/html/index.html
sudo systemctl enable apache2
sudo service apache2 restart
## apache ayarları
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/

## php nin eski versiyonlarını indirebilmek için
sudo apt install software-properties-common ca-certificates lsb-release apt-transport-https
LC_ALL=C.UTF-8
sudo add-apt-repository -y ppa:ondrej/php
sudo apt update
sudo apt upgrade

## php
sudo apt install php7.4-fpm php7.4-intl php7.4-imagick php7.4-dev php7.4-zip php7.4-curl php7.4-xmlrpc php7.4-sqlite3 php7.4-gd php7.4-mysql php7.4-mbstring php7.4-xml libapache2-mod-php7.4 -y
sudo service apache2 restart

## mysql
sudo apt install mariadb-server mariadb-client -y
sudo systemctl enable mariadb
sudo service mariadb restart
sudo mysql -u root
  show databases;
  use mysql;
  update user set plugin='' where User='root';
  flush privileges;
  exit;
sudo mysql_secure_installation
## mysql parola sıfırlama
mysql --user="root" --password="" --execute="SET PASSWORD FOR 'root'@'localhost' = PASSWORD('root');"

## servisleri yeniden başlat
sudo service apache2 restart
sudo service mariadb restart
sudo systemctl enable mariadb
sudo systemctl enable apache2

## html ayarları
sudo adduser $USER www-data
sudo chown -R $USER:www-data /var/www/html/
cd ~
cd ~/Desktop
ln -s /var/www/html/
sudo rm -f /var/www/html/index.html

## adminer
cd /var/www/html
mkdir adminer
cd adminer
wget -O index.php https://www.adminer.org/latest.php