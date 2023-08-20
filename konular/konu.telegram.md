# Telegram Bot'u İle Mesaj Gönderme

## 1.) Botumuzu Oluşturalım
- Telegram'a girin
- Arama bölümüne `botfather` yazın ve gelen sonuca tıklayın
- Açılan sohbet ekranında `/newbot` yazın ve Enter basın
- Bot'umuzun görünen adını yazalım. Örnek: `Yaz Kampı Haber Botu` ve Enter basın
- Bot'umuza sonu `bot` veya `_bot` ile biten ve benzersiz bir kullanıcı adı verelim. Örnek : `KampHaber_bot`
  - Bu isim daha önce alınmışsa uyarı alırız. Tekrar yeni bir isim vermemiz
- İşlem başarılı olursa `6487774889:abcuPG2xZ4VZoTQnRpca_wwqYOH-XIGTv2E` gibi anahtarımız (Token) olacak:

## 2.) Botumuzun profil resmini ve adını değiştirelim
- Telegram'a girin
- Arama bölümüne `botfather` yazın ve gelen sonuca tıklayın
- Açılan sohbet ekranında `/mybots` yazın ve Enter basın
- Üzerinde çalışmak istediğiniz botu seçin
- `Edit Bot` seçeneğini seçin
- `Edit Description Picture` seçeneği ile profil resmi yüklemek istediğimizi belirtiriz
- Sohbet sahasındaki `ataç` sembolü ile bir resim seçer ve Enter basarız, açılan eranda `Send/Gönder` düğmesine basarız
- Resim belirtilen ölçülere değilse uyarı verir. Sadece 640x360 ölçüsünü kabul eder.
- Başarı ile yüklendiğinde artık hazırız!
- Dilerseniz, `back to bot` düğmesi ile geri dönüp botun diğer ayarlarını değiştirebilirsiniz:
  - `Edit Name`, Bot adını değiştirir
  - `Edit About`, Bot hakkında açıklama ekler vb.


## 3-A) Telegram grubumuza Bot'umuzu ekleyelim

- Mesaj göndermek istediğiniz grubu açın,
- Grup üyeleri arasına yukarıda tanımladığınız botun adını yazın (örneğimizde: KampHaber_bot)
- Arama sonucunda bulduğunuz botun yanındaki kutucuğu işaretleyin sağ alttaki `ileri` düğmesine basın
- Artık hazırsınız! Botunuz bu gruba mesaj göndermeye hazır!
- Bot'ların bir gruba mesaj gönderebilmesi için, o gruba üye olarak eklenmiş olması şarttır!
- Bot, gruptan çıkarılırsa artık o gruba mesaj gönderemez!


## 3.B) Bot'un bir Gruba değil de kişiye mesaj göndermesini mi istiyorsunuz?

- O kişiye, arama bölümünden botumuzu bulmasını ve "merhaba" gibi bir mesaj ile ilk etkileşimi yapmasını sağlayınız.
- Botun kendinize (size) mesaj göndermesi için de aynı işlemi yapmalısınız.
- Bot'ların bir kişiye mesaj gönderebilmesi için, o kişiden bir defa bile olsa mesaj alması şarttır!


## 4.) PHP ile Bot'umuzun mesaj göndermesini sağlayalım

- Aşağıdaki kodda yer alan Alıcı Adı ve Bot Anahtarınızı (Token) değiştirmeyi unutmayınız!

```PHP
<?php

function TelegramdanMesajGonder($Token, $AliciAdi, $Mesaj)
{
  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.telegram.org/bot{$Token}/sendMessage",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
      'text' => "{$Mesaj}",
      'disable_web_page_preview' => false,
      'disable_notification' => false,
      'reply_to_message_id' => null,
      'chat_id' => "{$AliciAdi}"
    ]),
    CURLOPT_HTTPHEADER => [
      "accept: application/json",
      "content-type: application/json"
    ],
  ]);

  $response = curl_exec($curl);
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
    echo $response;
  }
}

$MyToken  = "6468124398:abcuPG2xZ4VZoTQnRpca_wwqYOH";
$AliciAdi = "@KampHaber_bot";
$Mesaj    = "Merhaba Dünya !";

TelegramdanMesajGonder($MyToken, $AliciAdi, $Mesaj);

```

- Bu kod çalıştığında Telegram grubunuza mesaj `Merhaba Dünya!` mesajı iletilecektir


