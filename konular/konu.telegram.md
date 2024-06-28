# Telegram Bot'u İle Mesaj Gönderme

## Özet:

- BotFather aracılığıyla `/newbot` komutu ile bir Telegram BOT'u oluşturun (örneğin: ABC123456_bot)
- Oluşturulan bot'un `TOKEN` bilgisini alın (örneğin: `6468124398:AAGEYxUoCMg39WVUZVwHfAumfBZj2Dxm27o`)
- Genele açık (gizli olmayan!) bir Telegram kanalı oluşturun (örneğin: XYZGRUBU)
- ABC123456_bot'u telegram kanalınıza/grubunuza **YÖNETİCİ** olarak ekleyin.
- `sendMessage` metodu ile botunuzun gruba mesaj gönderimini sağlayın.
- Mesaj göndermeyi tarayıcınızın adres satırından da şu şekilde yapabilirsiniz:
- https://api.telegram.org/bot6468124398:AAGEYxUoCMg39WVUZVwHfAumfBZj2Dxm27o/sendMessage?chat_id=@XYZGRUBU&text=Selam
**NOTE:** `TOKEN` bilgisi buradaki `______` ile ifade edilen yere yaılır: `https://api.telegram.org/bot______/sendMessage?chat_id=@XYZGRUBU&text=Selam`


## 1.) Botumuzu Oluşturalım
- Telegram'a girin
- Arama bölümüne `botfather` yazın ve gelen sonuca tıklayın
- Açılan sohbet ekranında `/newbot` yazın ve Enter basın
- Bot'umuzun görünen adını yazalım. Örnek: `Yaz Kampı Haber Botu` ve Enter basın
- Bot'umuza sonu `bot` veya `_bot` ile biten ve benzersiz bir kullanıcı adı verelim. Örnek : `KampHaber_bot`
  - Bu isim daha önce alınmışsa uyarı alırız. Tekrar yeni bir isim vermemiz
- İşlem başarılı olursa `6487774889:AAGEYxUoCMg39WVUZVwHfAumfBZj2Dxm27o-XIGTv2E` gibi anahtarımız (Token) olacak:

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

$MyToken  = "6468124398:AAGEYxUoCMg39WVUZVwHfAumfBZj2Dxm27o";
$AliciAdi = "@YazKampiUyeleri";
$Mesaj    = "Merhaba Dünya !";

TelegramdanMesajGonder($MyToken, $AliciAdi, $Mesaj);

```

- Bu kod çalıştığında Telegram grubunuza mesaj `Merhaba Dünya!` mesajı iletilecektir








# Ekstra Bilgiler

### Web arayüzü ile BOT deneme

- Aşağıdaki sayfa ile denemelerinizi yapıp, lazım olan PHP, JS vb kaynak koldara ulaşabilirsiniz:
- https://telegram-bot-sdk.readme.io/reference/sendmessage

### **getMe** ile Bot hakkındaki bilgilere ulaşma

- Bot hakkında temel bilgileri bir Kullanıcı nesnesi biçiminde döndürür:
- https://api.telegram.org/bot6468124398:AAGEYxUoCMg39WVUZVwHfAumfBZj2Dxm27o/getMe
- yukarıdaki adrese kendi Token bilginizi girmeyi unutmayın!

```json
{
  "ok": true,
  "result": {
    "id": 6468124398,
    "is_bot": true,
    "first_name": "phpbotu",
    "username": "phpsinifi_bot",
    "can_join_groups": true,
    "can_read_all_group_messages": false,
    "supports_inline_queries": false
  }
}
```


### HTML veya MarkDown mesaj gönderme

- `parse_mode` parametresine `HTML` hazarak HTML mesaj gönderebilirsiniz.
- `parse_mode` parametresine `Markdown` hazarak HTML mesaj gönderebilirsiniz.

### Mesajınızla gönderilecek Link için önizleme oluşturma

- `disable_web_page_preview` parameteresini `true` olarak belirlerseniz linkin önizlemesi mesaja eklenir

### Kullanabileceğiniz Markdown Kodlaması:

````
    *bold \*text*
    _italic \*text_
    __underline__
    ~strikethrough~
    ||spoiler||
    *bold _italic bold ~italic bold strikethrough ||italic bold strikethrough spoiler||~ __underline italic bold___ bold*
    [inline URL](http://www.example.com/)
    [inline mention of a user](tg://user?id=123456789)
    ![👍](tg://emoji?id=5368324170671202286)
    `inline fixed-width code`
    ```
    pre-formatted fixed-width code block
    ```
    ```python
    pre-formatted fixed-width code block written in the Python programming language
    ```
````

### Kullanabileceğiniz HTML Kodlaması:

```
    <b>bold</b>, <strong>bold</strong>
    <i>italic</i>, <em>italic</em>
    <u>underline</u>, <ins>underline</ins>
    <s>strikethrough</s>, <strike>strikethrough</strike>, <del>strikethrough</del>
    <span class="tg-spoiler">spoiler</span>, <tg-spoiler>spoiler</tg-spoiler>
    <b>bold <i>italic bold <s>italic bold strikethrough <span class="tg-spoiler">italic bold strikethrough spoiler</span></s> <u>underline italic bold</u></i> bold</b>
    <a href="http://www.example.com/">inline URL</a>
    <a href="tg://user?id=123456789">inline mention of a user</a>
    <tg-emoji emoji-id="5368324170671202286">👍</tg-emoji>
    <code>inline fixed-width code</code>
    <pre>pre-formatted fixed-width code block</pre>
    <pre><code class="language-python">pre-formatted fixed-width code block written in the Python programming language</code></pre>
```

### Botum neden mesaj gönderemiyor?

Telegram botları, kullanıcı henüz botla konuşmaya başlamadıysa veya bot sohbette bulunmuyorsa (grup sohbeti ise) kullanıcıya mesaj gönderemez. Bu sorun kütüphane ile ilgili değildir, bu sadece Telegram kısıtlamasıdır, böylece botlar kullanıcılara izinleri olmadan spam gönderemez.

Özetle, Botun size mesaj gönderebilmesi için önce bota bir mesaj göndermeniz gerekir.


### Gizli gruba mesaj gönderme

KAYNAK: https://medium.com/@borabzdgnn/telegram-bot-api-kullan%C4%B1m%C4%B1-15bd8277a05e

- Bazen gizli bilgileri paylaşmamız gerekebiliyor.
- Bunun için herkese açık olan kanallar bizler için risk teşkil edebiliyor.
- Kanalımızı özel yapmadan önce tarayıcıdan `sendMessage` ile gruba bir mesaj atıyoruz ve dönen veriyi ekranda görüyoruz. 
- Json verisi içerisinde bulunan `id`’yi kopyalıyoruz (eksi kısmıyla beraber) ardından kanalımızı gizli yapabiliriz.
- `chat_id` kısmına bu `id`'yi yazıp işlemlerinize kaldığı yerden devam edebilirsiniz.


# ÖRNEK 1

### Linux'da Disk Doluluğu Durumu İçin Otomatik Mesaj Gönderme

- Aşağıdaki örnek kod, sistemdeki kalan boş alan `%80` seviyesini geçerse Telegram botunun mesaj atmasını sağlar

Kaynak: https://medium.com/linux-shots/setup-telegram-bot-to-get-alert-notifications-90be7da4444

#### `root-volume-alert.sh` dosyası içeriği

```bash
#!/usr/bin/env bash
used_space_perc=$(df -h / | tail -1 | tr -s " " | cut -d " " -f 5 | tr -d "%")
if [ $used_space_perc -gt 80 ]; then
  curl -X POST https://api.telegram.org/bot<bot-api-token>/sendMessage -H 'Content-Type: application/json' -d '{"chat_id": "<chat-id>", "text": "ALERT! Root volume is about to be full. Current usage is $used_space_perc %"}'
fi
```

#### crontab ayarı:

`crontab -e`

```bash
# Add below line to execute it every 30 minutes
0,30 * * * * bash /path/to/script/root-volume-alert.sh
```



# Örnek 2

### Send Telegram Message Linux Scripts

Kaynak: https://linuxscriptshub.com/send-telegram-message-linux-scripts/

**Step 1: Create a Telegram Bot**

The first step is to create a Telegram bot by following these steps:

- Open Telegram and search for the BotFather account.
- Start a chat with BotFather and type /newbot to create a new bot.
- Follow the prompts and enter a name and username for your bot.
- BotFather will provide you with a unique API token for your bot. Save this token, as you’ll need it later to send messages to your bot.

**Step 2: Install the Required Libraries**

To interact with the Telegram API, we’ll need to install the “curl” library on our Linux system. You can do this by running the following command:

`sudo apt-get install curl`

**Step 3: Create the Bash Shell Script**

Now it’s time to create the bash shell script that will send messages or notifications to your Telegram bot. Open a text editor and create a new file called “send_telegram.sh”. Then copy and paste the following code into the file:

```bash
	#!/bin/bash
	TOKEN="your_bot_token"
	CHAT_ID="your_chat_id"
	MESSAGE="Hello, world!"
	curl -s -X POST https://api.telegram.org/bot$TOKEN/sendMessage -d chat_id=$CHAT_ID -d text="$MESSAGE" > /dev/null
```

Replace `your_bot_token` with the API token provided by BotFather, and `your_chat_id` with the ID of the chat where you want to receive the message. You can find your chat ID by sending a message to your bot and then using the following command in your web browser:

https://api.telegram.org/bot/getUpdates

Look for the `chat` object in the response and copy the `id` value. Finally, customize the message variable to include the message you want to send.

