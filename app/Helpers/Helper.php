<?php

use App\Models\setting;

function getConfigValueFromSettingTable($configkey){
    $setting = setting::where('config_key',$configkey)->first();
    if(!empty($setting)){
        return $setting->config_value;
    }
    return null;
}
