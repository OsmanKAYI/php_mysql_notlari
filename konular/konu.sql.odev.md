# Referandum Verileri

## Zorluk Seviyesi 1

### İlçe bilgisi olmayan kayıtları siliniz

<details>
  <summary>Cevap</summary>

```SQL
DELETE FROM referandum WHERE ilce='';
```
</details>

### İl ve ilçeye göre sıralı liste

<details>
  <summary>Cevap</summary>

```SQL
SELECT il, ilce FROM referandum ORDER BY il, ilce;
```
</details>

### Türkiye toplam seçmen adedi

<details>
  <summary>Cevap</summary>

```SQL
SELECT SUM(kayitli) FROM referandum;
```
</details>

### Türkiye toplam geçerli Oy adedi

<details>
  <summary>Cevap</summary>

```SQL
SELECT SUM(gecerli) AS 'GEÇERLİ OY' FROM referandum;
```
</details>

### Türkiye geneli özet

<details>
  <summary>Cevap</summary>

```SQL
SELECT 
    SUM(kayitli) AS 'Kayıtlı Seçmen Sayısı',
    SUM(oykullanan) AS 'Oy Kullanan Seçmen Sayısı',
    SUM(gecerli) AS 'Geçerli Oy Sayısı',
    SUM(gecersiz) AS 'Geçersiz Oy Sayısı',
    SUM(evet) AS 'Evet Sayısı',
    SUM(hayir) AS 'Hayır Sayısı' 
FROM referandum;
```
</details>

### İlçe nüfusu 1500 kişiden daha az ilçeler

<details>
  <summary>Cevap</summary>

```SQL
SELECT * FROM referandum WHERE kayitli < 1500;
```
</details>

## Zorluk Seviyesi 2

### En çok geçersiz oy kullanan il (Adet olarak)

<details>
  <summary>Cevap</summary>

```SQL
SELECT il, SUM(gecersiz) AS 'Geçersiz Oy Sayısı' FROM referandum 
GROUP BY il 
ORDER BY 2 DESC 
LIMIT 1;
```
</details>

### En fazla geçerli oy kullanan ilk 3 il

<details>
  <summary>Cevap</summary>

```SQL
SELECT il, SUM(gecerli) AS 'Geçerli Oy Sayısı' FROM referandum 
GROUP BY il 
ORDER BY 2 DESC 
LIMIT 3;
```
</details>

### Ankara, İstanbul ve İzmirdeki geçersiz oylar toplamı

<details>
  <summary>Cevap1</summary>

```SQL
SELECT SUM(gecersiz) FROM referandum 
WHERE il='Ankara' OR il='İstanbul' OR il='İzmir';
```
</details>

<details>
  <summary>Cevap2</summary>

```SQL
SELECT SUM(gecersiz) FROM referandum 
WHERE il IN ('Ankara', 'İstanbul', 'İzmir');
```
</details>

### Adana ve Diyarbakır hariç Evet oylar toplamı

<details>
  <summary>Cevap</summary>

```SQL
SELECT SUM(evet) FROM referandum 
WHERE il NOT IN ('Diyarbakır', 'Adana');
```
</details>

### Her ilin ilçe sayısı

<details>
  <summary>Cevap</summary>

```SQL
SELECT count(1) FROM referandum GROUP BY il;
```
</details>

## Zorluk Seviyesi 3

### İl nüfusuna oranla en yüksek geçersiz oy kullanan il

<details>
  <summary>Cevap</summary>

```SQL
SELECT il, SUM(gecersiz)/SUM(kayitli) AS 'Geçersiz Oy Oranı' FROM referandum 
GROUP BY il 
ORDER BY 2 DESC
LIMIT 1;
```
</details>

### A, B ve C harfi ile başlayan şehirlerin hayır adedi

<details>
  <summary>Cevap1</summary>

```SQL
SELECT il, SUM(hayir) AS 'Hayır Adedi' FROM referandum 
WHERE il LIKE 'A%' 
OR il LIKE 'B%' 
OR il LIKE 'C%'
GROUP BY il;
```
</details>

<details>
  <summary>Cevap2</summary>

```SQL
SELECT il, SUM(hayir) AS 'Hayır Adedi' FROM referandum 
WHERE LEFT(il,1) IN ('A', 'B', 'C') 
GROUP BY il;
```
</details>

## Zorluk Seviyesi 4

### oykullanmayan adlı sahayı tanımlayın ve değerlerini doldurun

<details>
  <summary>Cevap</summary>

```SQL
UPDATE referandum SET oykullanmayan = kayitli - oykullanan;
```
</details>

### Tabloya, evet_oran ve hayir_oran adlı 2 saha ekleyin. Veri hassasiyeti 4 hane olsun.

<details>
  <summary>Cevap</summary>

```SQL
ALTER TABLE referandum
ADD evet_oran decimal(6,2) NOT NULL,
ADD hayir_oran decimal(6,2) NOT NULL AFTER evet_oran;
```
</details>

### Bu iki sahanın değerlerini şu formüle göre doldurun:

```BASH
evet_oran = evet / geçerli * 100;
hayir_oran = hayir / geçerli * 100;
```

<details>
  <summary>Cevap</summary>

```SQL
UPDATE referandum SET evet_oran = (evet/gecerli)*100;
UPDATE referandum SET hayir_oran = (hayir/gecerli)*100;
```
</details>

### Veriler üzerinde tutarlılık kontrolleri yapınız

```BASH
Örnek:

- Evet+Hayır = Geçerli
- kayitli >= geçerli+geçersiz
- Geçerli+Geçersiz = Oy kullanan
```

<details>
  <summary>Cevap</summary>

```SQL
SELECT * FROM referandum WHERE evet+hayir-gecerli <> 0;
SELECT * FROM referandum WHERE gecerli+gecersiz < kayitli;
SELECT * FROM referandum WHERE gecerli+gecersiz-oykullanan != 0;
```
</details>