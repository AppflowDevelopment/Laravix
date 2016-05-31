<?php

function settings($param)
{
    static $settings;

    if(is_null($settings))
    {
        $settings = Cache::remember('settings', 24*60, function() {
            return array_pluck(
				\DB::table('settings')->get(), 'value', 'param'
			);
        });
    }

    return (is_array($param)) ? array_only($settings, $param) : $settings[$param];
}