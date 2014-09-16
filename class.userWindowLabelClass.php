<?php

class user_WindowLabelClass
{

    function getWindowLabel(&$params, &$pObj)
    {
        $mylabel = $params['row']['day']
                . '.12. -- ';

        if ($params['row']['record_type'] == 1) {
            $mylabel .= 'Veranstaltung: ' . $params['row']['event_id'];
        } else {
            $mylabel .= 'Fenster: ' . $params['row']['name'];
        }
        $params['title'] = $mylabel;
    }

}
