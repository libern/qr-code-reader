<?php namespace Libern\QRCodeReader;

/**
 * Created for QRCodeReader.
 * User: Libern
 * Date: 25/7/15
 * Time: 12:33 PM
 */
class QRCodeReader
{

    /**
     * @param $path_to_image
     * @return bool|text decoded text from QR Code
     */
    public static function decode($path_to_image)
    {
        include_once(__DIR__ . './lib/QrReader.php');
        $qrcode = new QrReader($path_to_image);
        $text = $qrcode->text();
        return $text;
    }

}