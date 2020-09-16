<?php

/**
 * @Author: Whx
 * @Date:   2020-09-15 18:01:40
 * @Last Modified by:   Whx
 * @Last Modified time: 2020-09-16 11:18:53
 */

function route_class() {
    return str_replace('.', '-', Route::currentRouteName());
}
