<?php namespace Libern\QRCodeReader;


use Zxing\QrReader;

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
     * @return bool|string decoded text from QR Code
     */
    public function decode($path_to_image)
    {
        $qrcode = new QrReader($path_to_image);
        $text = $qrcode->text();
        return $text;
    }

}
