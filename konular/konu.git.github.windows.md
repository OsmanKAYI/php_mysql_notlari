# Git ve GitHub Kurulumu 

## İndir ve Kur

- Git yazılımını buradan indirin: [burada](https://git-scm.com/download/win).
- İndirdikten sonra, sadece 'Next' (Sonraki) butonuna birkaç kez tıklatarak kurun (özel bir ayar yapmanıza gerek yok).

# GitHub Yapılandırmaları

- `ssh-keygen` komutu ile yeni bir ssh anahtarı oluşturun ve `sshKeygenName` adını verin (yoksa `id_rsa` olacaktır).
- GitHub hesabınızın `Settings` (Ayarlar) bölümüne gidin ve `SSH and GPG keys` (SSH ve GPG Anahtarları) butonuna basın.
- `New SSH key` (Yeni SSH Anahtarı) butonuna tıklayın.
- Bir `Başlık` verin ve `sshKeygenName.pub` dosyasının içeriğini `Key` adı altında yapıştırın.
- Aşağıdaki komutları Git Bash kullanarak bilgisayarınıza tanıtın.

```BASH
git config --global user.name "username"
git config --global user.email "email"
git config --global user.password "password"
git config --global credential.helper store
```

- SSH-agent'ınızı aşağıdaki komutla etkinleştirin:

```BASH
eval `ssh-agent -s`
```

- Kimliğinizi `ssh-add -l` komutu ile ekleyin.
- sshKeygenName adını `ssh-add ~/.ssh/id_rsa` komutu ile ekleyin.
- Şimdi, `git clone git@github.com:kullanıcıadı/repositoryname.git` komutunu kullanmaya hazırsınız.

**Note:** Komutları çalıştırmak için Git Bash'i terminaliniz olarak kullanın.
**Note2:** Bu adımlar başarılı bir şekilde tamamlandı ve bir süre sonra bir sorunla karşılaşırsanız, aşağıdaki komutları yeniden çalıştırın.

```BASH
eval `ssh-agent`
ssh-add -l
ssh-add ~/.ssh/id_rsa
```