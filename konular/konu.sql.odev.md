# Referandum Verileri


# Zorluk Seviyesi 1

  

### İlçe bilgisi olmayan kayıtları siliniz

  

### İl ve ilçeye göre sıralı liste

  

### Türkiye toplam seçmen adedi

  

### Türkiye toplam geçerli Oy adedi

  

### Türkiye geneli özet

  

### İlçe nufusu 1500 kişiden daha az ilçeler

  

# Zorluk Seviyesi 2

  

### En çok geçersiz oy kullanan il (Adet olarak)

  

### En fazla geçerli oy kullanan ilk 3 il

  

### Ankara, İstanbul ve İzmirdeki geçersiz oylar toplamı

  

### Adana ve Diyarbakır hariç Evet oylar toplamı

  

### Her ilin ilçe sayısı

  

# Zorluk Seviyesi 3

  

### İl nufusuna oranla en yüksek geçersiz oy kullanan il

  

### A, B ve C harfi ile başlayan şehirlerin hayır adedi

  
  

# Zorluk Seviyesi 4

  

### oykullanmayan adlı sahayı tanımlayın ve değerlerini doldurun

  

### Tabloya, evet_oran ve hayir_oran adlı 2 saha ekleyin. Veri hassasiyeti 4 hane olsun.

  

### Bu iki sahanın değerlerini şu formüle göre doldurun:

evet_oran = evet / geçerli * 100

hayir_oran = hayir / geçerli * 100

  

### Veriler üzerinde tutarlılık kontrolleri yapınız

Örnek:

- Evet+Hayır = Geçerli

- kayitli >= geçerli+geçersiz

- Geçerli+Geçersiz = Oy kullanan

  

-- select * from referandum where evet+hayir-gecerli <> 0

-- select * from referandum where gecerli+gecersiz > kayitli

-- select * from referandum where gecerli+gecersiz-oykullanan != 0


<details>
  <summary>Soru</summary>

```SQL
select * from referandum
```

  </details>


