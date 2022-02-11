<?php

use App\Setting;
use Carbon\Carbon;

if (!function_exists('routeController')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function routeController($prefix, $controller)
    {
        $name = str_replace("/", ".", $prefix);
        $prefix = trim($prefix, '/') . '/';

        if (substr($controller, 0, 1) != "\\") {
            $controller = "\App\Http\Controllers\\" . $controller;
        }

        $exp = explode("\\", $controller);
        $controller_name = end($exp);

        try {
            Route::get($prefix, ['uses' => $controller . '@getIndex', 'as' => $name]);

            $controller_class = new \ReflectionClass($controller);
            $controller_methods = $controller_class->getMethods(\ReflectionMethod::IS_PUBLIC);
            $wildcards = '/{one?}/{two?}/{three?}/{four?}/{five?}';
            foreach ($controller_methods as $method) {

                if ($method->class != 'Illuminate\Routing\Controller' && $method->name != 'getIndex') {
                    if (substr($method->name, 0, 3) == 'get') {
                        $method_name = substr($method->name, 3);
                        $slug = array_filter(preg_split('/(?=[A-Z])/', $method_name));
                        $as = $name . '.' . strtolower(implode('.', $slug));
                        $slug = strtolower(implode('-', $slug));
                        $slug = ($slug == 'index') ? '' : $slug;
                        Route::get($prefix . $slug . $wildcards, ['uses' => $controller . '@' . $method->name, 'as' => $as]);
                    } elseif (substr($method->name, 0, 4) == 'post') {
                        $method_name = substr($method->name, 4);
                        $slug = array_filter(preg_split('/(?=[A-Z])/', $method_name));
                        $as = $name . '.' . strtolower(implode('.', $slug));
                        $slug = strtolower(implode('-', $slug));
                        Route::post($prefix . $slug . $wildcards, [
                            'uses' => $controller . '@' . $method->name,
                            'as' => $as,
                        ]);
                    }
                }
            }
        } catch (\Exception $e) {
        }
    }
}

if (!function_exists('Alert')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function Alert($type, $proccess = null)
    {
        if (empty($proccess)) {
            $proccess = 'Undefined Proccess';
        }

        if (fSet('custom-alert')->is_active == 1) {
            $custom = ['custom' => fSet('custom-alert')->content];
        } else {
            $custom = ['trying' => 'null'];
        }

        if ($type == 'success') {
            $alert = ['success' => 'Data Berhasil Di ' . $proccess];
        } else {
            $alert = ['danger' => 'Data Tidak Berhasil Di ' . $proccess];
        }
        return array_merge($alert, $custom);
    }
}

if (!function_exists('getSet')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function getSet($slug)
    {
        $data = Setting::where('slug', $slug)->get();

        return $data;
    }
}

if (!function_exists('fSet')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function fSet($slug)
    {
        $data = Setting::where('slug', $slug)->first();

        return $data;
    }
}

if (!function_exists('percent')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function percent($value, $amount)
    {
        $data = ($value / $amount) * 100;


        return $data;
    }
}

if (!function_exists('cb')) {

    /**
     * description
     *
     * @param
     * @return
     */
    function cb($date = null, $format = null)
    {
        if ($date) {
            if ($format) {
                $date = Carbon::createFromFormat($date, $format);
            } else {
                $date = Carbon::parse($date);
            }
        } else {
            $date = Carbon::now();
        }

        return $date;
    }
}
