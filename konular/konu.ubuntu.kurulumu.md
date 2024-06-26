# Ubuntu 22.04 Kurulumu Sonrası Yapılacaklar

### Hızlı Kurulum

```bash
wget https://raw.githubusercontent.com/OsmanKAYI/php_mysql_notlari/main/ubuntu.22.04.kurulumu.sh -O - | sh
```

### Detaylı Anlatım

```bash
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
sudo apt install git npm guake guake-indicator pv meld vim axel ncdu xclip net-tools caffeine vlc chromium-browser magic-wormhole gnome-sushi hwinfo hardinfo gnome-shell-extension-manager software-properties-common apt-transport-https wget curl -y

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

```

## Doğru kurulum yapıldığının test edilmesi

```BASH
npm -v
node -v
php -v
apache2 -v
mysql --version
```

# İLERİ DÜZEY KULLANICILAR İÇİN

## 2 farklı PHP sürümü kurma ve bunları kullanma

```bash
# PHP 7.4 Sürümünü kur
sudo apt install php7.4-intl php7.4-imagick php7.4-dev php7.4-zip php7.4-curl php7.4-xmlrpc php7.4-sqlite3 php7.4-gd php7.4-mysql php7.4-mbstring php7.4-pgsql php7.4-xml php7.4-redis libapache2-mod-php7.4 -y

# PHP 8.1 Sürümünü kur
sudo apt install php8.1-intl php8.1-imagick php8.1-dev php8.1-zip php8.1-curl php8.1-xmlrpc php8.1-sqlite3 php8.1-gd php8.1-mysql php8.1-mbstring php8.1-pgsql php8.1-xml php8.1-redis libapache2-mod-php8.1 -y

# PHP 8.1'i devre dışı bırak
sudo a2dismod php8.1
# PHP 7.4'ü etkinleştir
sudo a2enmod php7.4
# Değişikliğin geçerli olabilmesi için apache servisini yeniden başlat
sudo service apache2 restart

## CLI için PHP sürümü ayarlama
sudo update-alternatives --config php
sudo update-alternatives --set php /usr/bin/php7.4

```

## Sık kullanılan PHP extension'ları:

PHP eklentilerin açıklamalarını şuradan okuyabilirsiniz: https://zeropointdevelopment.com/required-php-extensions-for-wordpress-wpquickies/

## Faydalı Paketler: TODO: Açıklanacak

| Paket                         | Açıklama                      |
| ----------------------------- | ----------------------------- |
| git                           | git                           |
| npm                           | npm                           |
| guake                         | guake                         |
| guake-indicator               | guake-indicator               |
| pv                            | pv                            |
| meld                          | meld                          |
| vim                           | vim                           |
| axel                          | axel                          |
| xclip                         | xclip                         |
| net-tools                     | net-tools                     |
| caffeine                      | caffeine                      |
| vlc                           | vlc                           |
| chromium-browser              | chromium-browser              |
| magic-wormhole                | magic-wormhole                |
| gnome-sushi                   | gnome-sushi                   |
| hwinfo                        | hwinfo                        |
| gnome-shell-extension-manager | gnome-shell-extension-manager |
| software-properties-common    | software-properties-common    |
| apt-transport-https           | apt-transport-https           |
| wget                          | wget                          |
| curl                          | curl                          |
| ncdu                          | ncdu                          |

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
> menüsünden yeni kısayol tanımlanır. Resimler dizinine bu ekran görüntülerini kaydetmek için KOMUT kısmına aşağıdaki kod girilir:

`sh -c 'gnome-screenshot -af /home/$USER/Resimler/$(date "+%Y.%m.%d-%H.%M.%S").png'`

**DİKKAT!** İngilizce arayüz kullanıyorsanız bu bölümdeki `Resimler` yazan her yere `Pictures` yazmanız gerekir!

![Klavye Kısayolu Ekleme](https://github.com/HayatOkulum/Archive/blob/main/Images/2023.02.08-00.08.24.png)

Bu komutu önce terminalde deneyip kullanıcı hesabınızın erişim izni varmı test etmenizi öneriririm. Komutu terminalde test ettiğinizde resimler klasörüne görüntü kaydedilmemişse kullanıcı hesabınızın erişim izni yoktur, izin vermek için aşağıdaki komutu kullanabilirsiniz.

`sudo chmod ugo+rwx /home/$USER/Resimler/*`

Kaldırmayı düşünürseniz tekrar erişim engellemek için bu kodu kullanabilirsiniz.

`sudo chmod ugo-rwx /home/$USER/Resimler/*`

## Terminal'de komut çıktısının clipboard/pano'ya kopyalanması

```BASH
# xclip ile KOPYALA:
# xclip -sel clip

# xclip ile YAPIŞTIR:
# xclip -sel clip -o
cat dosyaadi | xclip -sel clip

```

## Eğitmen Ayarları

```bash
# MySQL için `dbadmin` adında yeni bir kullanıcı tanımla
sudo mysql -u root -p
    create user 'dbadmin'@'localhost' identified by 'dbadmin';
    flush privileges;
    exit;

```

## Depo kullanarak Sublime Merge ve AnydDesk Kurulumu

```bash

sudo apt-get install apt-transport-https


# Install AnyDesk DEB repository
sudo wget -qO - https://keys.anydesk.com/repos/DEB-GPG-KEY | sudo apt-key add -
sudo echo "deb http://deb.anydesk.com/ all main" > /etc/apt/sources.list.d/anydesk-stable.list
sudo cp /etc/apt/trusted.gpg /etc/apt/trusted.gpg.d

apt update
apt install anydesk



# SublimeMerge Install
wget -qO - https://download.sublimetext.com/sublimehq-pub.gpg | gpg --dearmor | sudo tee /etc/apt/trusted.gpg.d/sublimehq-archive.gpg > /dev/null
echo "deb https://download.sublimetext.com/ apt/stable/" | sudo tee /etc/apt/sources.list.d/sublime-text.list

sudo apt update
sudo apt install sublime-merge  

```
