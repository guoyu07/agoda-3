# Introducing: IndoCPA Authentification System

Sejak offer Travel (Agoda) ini, akan diberlakukan pemakaian IndoCPA Auth, dimana dipergunakan untuk kontrol sistem yang lebih baik.

Secara default, Auth IndoCPA akan mempunyai limit 10000 maximum request per user. Mohon dijaga penggunaan token Anda, jangan sampai dipakai orang lain, bahkan teman Anda sendiri. Penggunaan token yang tidak benar akan mempengaruhi tracking URL dan berujung ke earning. 
Apabila memerlukan tambahan bisa kontak wisnu@indocpa.co.id


Berikut beberapa contoh penggunaan resource data IndoCPA melewati Auth system

### Bash
```sh
curl -H 'Authorization: Bearer 20972971-c2a9-45af-a37b-06x8ed83067c7' 'https://auth.indocpa.me/user'
```
#### output
```json
{"status":"success","data":{"id":"8800bd97-ffa4-47e2-a3db-4dc8f8bb1923","name":"Wisnu Hendro W","email":"wisnu@indocpa.co.id","hasOfferId":3668,"monthlyQuota":10000}}
```

### PHP
```php
function IndoCPA($TOKEN, $url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $headers = array();
    $headers[] = 'Authorization: Bearer ' . $TOKEN;
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    $server_output = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);
    return $server_output;
}
```

## Travel Endpoints

#### hotel_id
```json
https://auth.indocpa.me/hotel/{hotel_id}
```
#### user info
```json
https://auth.indocpa.me/user
```
#### star_rating
```json
https://auth.indocpa.me/hotel/?star_rating=3
```
#### country
```json
https://auth.indocpa.me/hotel/?country=india
```
#### city
```json
https://auth.indocpa.me/hotel/?city=paris
```
#### rates_from
```json
https://auth.indocpa.me/hotel/?rates_from=100
```
#### max_rate
```json
https://auth.indocpa.me/hotel/?max_rate=100
```
#### min_rate
```json
https://auth.indocpa.me/hotel/?min_rate=100
```
#### recentlyBooked
```json
https://auth.indocpa.me/hotel/recentlyBooked/{city_id}
```
