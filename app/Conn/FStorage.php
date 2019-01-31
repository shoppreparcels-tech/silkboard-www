<?php
/**
 * Created by PhpStorm.
 * User: vikasjson
 * Date: 3/4/18
 * Time: 9:28 AM
 */

namespace App\Conn;

function getRangeFolder($id)
{
    return ($id - ($id % 10000));
}

function getFileType($file)
{
    $pos = strpos($file, ';');
    $type = explode(':', substr($file, 0, $pos))[1];
    return $type;
}

class FStorage
{
    public static function upload($bucket, $id, $img)
    {
        $mimes = [
            'image/jpeg' => 'jpg'
        ];

        $file_type = getFileType($img);
        if (!array_key_exists($file_type, $mimes)) {
            echo "JPG Files allowed, Please go back and upload jpg image";
            exit;
        }

        $file_name = $id . '_' . time() . "." . $mimes[$file_type];

        $rangeFolder = public_path() . '/uploads/' . $bucket . '/' . getRangeFolder($id);
        if (!file_exists($rangeFolder)) {
            mkdir($rangeFolder, 0777, true);
        }

        $baseFolder = $rangeFolder . '/' . $id;

        if (!file_exists($baseFolder)) {
            mkdir($baseFolder, 0777, true);
        }

        $path = $baseFolder . '/' . $file_name;

        $img = substr($img, strpos($img, ",") + 1);

        $base64data = base64_decode($img);

        return [
            'bucket' => $bucket,
            'object' => $path,
            'file_name' => $file_name,
            'upload_status' => file_put_contents($path, $base64data),
        ];

    }
}
