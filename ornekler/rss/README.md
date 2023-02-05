# PHP ile RSS Kullanımı

## RSS Verisini Array olarak alma
```PHP
    $URL       = "http://www.hurriyet.com.tr/rss/ekonomi";
    $xml       = simplexml_load_file($URL);
    $json_str  = json_encode($xml); // $mxl değişkeninin JSON karşılığını içeren bir dizge döndürür. 
    $arr_sonuc = json_decode($json_str, TRUE); // Kodlanmış bir JSON dizgesini çözümler ve PHP değişkenine çevirir. 
    // echo "<pre>"; print_r($arr_sonuc); die();

    $Haberler  = $arr_sonuc["channel"]["item"];
    // echo "<pre>"; print_r($Haberler); die();
```

## `$arr_sonuc` dizisinin içeriği:
```TXT
Array
(
[@attributes] => Array
(
    [version] => 2.0
)

[channel] => Array
(
    [title] => Hürriyet
    [description] => TÜRKİYE'NİN AÇILIŞ SAYFASI
    [link] => Array
    (
        [0] => https://www.hurriyet.com.tr/ekonomi/
        [1] => https://www.hurriyet.com.tr/ekonomi/
    )

    [image] => Array
    (
        [url] => file://s.hurriyet.com.tr/static/images/hurriyet/hurriyet-logo.png
        [title] => Hürriyet
        [link] => https://www.hurriyet.com.tr/ekonomi/
    )
    [item] => Array
    (
        [0] => Array
        (
            [link] => https://www.hurriyet.com.tr/ekonomi/bakan-kirisci-suda-kayip-kacak-oranini-asagiya-cekmeliyiz-42215355
            [title] => Bakan Kirişci: Suda kayıp kaçak oranını aşağıya çekmeliyiz
            [description] => Tarım ve Orman Bakanı Vahit Kirişci, içme ve sulama suyu konusunda yeni adımlar atılması gerektiğini belirterek, "Ortalaması yüzde 33,5 olan kayıp kaçak oranını daha aşağıya çekmeliyiz. Buna ilişkin her bir belediyenin alması gereken tedbirler var. Ve bu çerçevede de yeni hedefler koyduk. Bu 33,5; yüzde 25'e indirilmeli hatta mümkünse daha aşağılara indirmeliyiz" dedi.
            [pubDate] => Sun, 05 Feb 2023 14:15:05 Z
            [guid] => https://www.hurriyet.com.tr/ekonomi/bakan-kirisci-suda-kayip-kacak-oranini-asagiya-cekmeliyiz-42215355
            [controlIxName] => Array
            (
            )

            [controlTitle] => Array
            (
            )

            [category] => Ekonomi
            [subcategory] => Ekonomi
            [modified] => 5.02.2023 14:15:05 +00:00
            [thumbnail] => Array
            (
                [@attributes] => Array
                (
                    [url] => https://i4.hurimg.com/i/hurriyet/75/620x350/63dfb9e84e3fe10814cf46e4.jpg
                    [type] => image/jpeg
                )

            )

            [content] => Array
            (
                [@attributes] => Array
                (
                    [url] => https://i4.hurimg.com/i/hurriyet/75/620x350/63dfb9e84e3fe10814cf46e4.jpg
                )

                [thumbnail] => Array
                (
                    [@attributes] => Array
                    (
                        [url] => https://i4.hurimg.com/i/hurriyet/75/620x350/63dfb9e84e3fe10814cf46e4.jpg
                        [type] => image/jpeg
                    )

                )

                [title] => Array
                (
                )

                [text] => Array
                (
                )

                [credit] => Array
                (
                )

            )

            [enclosure] => Array
            (
                [@attributes] => Array
                (
                    [url] => https://i4.hurimg.com/i/hurriyet/75/620x350/63dfb9e84e3fe10814cf46e4.jpg
                    [type] => image/jpeg
                    [length] => 50000
                )

            )

        )

```

## Haberlerin Listelenmesi
```PHP
    echo "<h1>Hürriyet Ekonomi</h1>";
    $c=0;
    foreach ($Haberler as $key => $haber) {
        $c++;
        if($c > 6) continue;
        $resim = $haber['thumbnail']['@attributes']['url'];
        $link  = $haber['link'];
        $baslik= $haber['title'];
        $ozet  = $haber['description'];
        echo "<p> 
                <img src='$resim' width='200'>
                <br>
                <a href='{$link}'>{$baslik}</a>
                <br>
                $ozet
            </p>";
        
    }

```

## Haberlerin Tablo İle Listelenmesi
```PHP
    echo "<h1>Hürriyet Ekonomi</h1>";
    echo "<table border='1' cellpadding='10' cellspacing='5' width='800'>";
    $c=0;
    foreach ($Haberler as $key => $haber) {
        $c++;
        if($c > 6) continue;
        $resim = $haber['thumbnail']['@attributes']['url'];
        $link  = $haber['link'];
        $baslik= $haber['title'];
        $ozet  = $haber['description'];
        echo "<tr>
                <td>
                    <img src='$resim' width='200'>
                </td>
                <td>
                    <a href='{$link}'>{$baslik}</a>
                    <br>
                    $ozet
                </td>
            </tr>
        ";
        
    }
    echo "</table>";

```
