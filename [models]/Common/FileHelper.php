<?
class FileHelper{

    function info($path)
    {
        $tmp = getimagesize($path);
        $ret['w'] = $tmp[0];
        $ret['h'] = $tmp[1];
        $ret['ratioStr'] = $tmp[0].' &times; '.$tmp[1];
        $ret['mime'] = $tmp['mime'];
        $a = filesize($path);
        $ret['size'] = $a;
        $ret['sizeStr'] = ' ≈'.Funx::getFileSizeOkon($a);

        return $ret;
    }

}