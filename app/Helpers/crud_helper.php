<?php

/**
 * @description List Data All
 * @author Achmad Rizky <rizky271092@gmail.com>
 * @date 2022-30-06
 * @param {connect db} [connect={}]
 * @param {table} [table=String]
 * 
 * @returns
 */
if (!function_exists("list_all")) {
    function list_all($connect = null, $table = '')
    {
        $allData = array();
        if ($connect) {
            $builder = $connect->table($table);
            $allData = $builder->get()->getResult();
        }
		
        return $allData;
    }
}
