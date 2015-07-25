# PHP QR Code Reader / Decoder
This is a PHP library to detect and decode QR-codes. <br>
This is QR code reader that works without extensions. <br>
This library supports PSR-4. <br>
Based on [QR code decoder / reader for PHP](https://github.com/khanamiryan/php-qrcode-detector-decoder) <br>
Ported from [ZXing library](https://github.com/zxing/zxing) <br>

## Installation 
Use [Composer](https://getcomposer.org/):
```
composer require libern/qr-code-reader
```

## Usage 
```php
$QRCodeReader = new Libern\QRCodeReader\QRCodeReader();
$qrcode_text = $QRCodeReader->decode("path_to_qr_code");
echo $qrcode_text;
```

## Requirements 
* PHP >= 5.3
* GD Library

## Contributing

You can help the project by adding features, cleaning the code, adding composer and other.
 
1. Fork it
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request