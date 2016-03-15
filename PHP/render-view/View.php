<?php
/**
 * Created by naveedulhassan.
 * Date: 3/3/16
 * Time: 11:40 AM
 */

namespace naveed\general;


class View
{
    public static function render($file,$data=[])
    {
        extract($data);
        ob_start();
        include $file;
        $renderedView = ob_get_clean();
        return $renderedView;
    }
}