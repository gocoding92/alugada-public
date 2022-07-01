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
if (!function_exists("helpers_list_all")) {
    function helpers_list_all($connect = null, $table = '')
    {
        $allData = array();
        if ($connect) {
            $builder = $connect->table($table);
            $allData = $builder->get()->getResult();
        }

        return $allData;
    }
}

/**
 * @description Create Data
 * @author Achmad Rizky <rizky271092@gmail.com>
 * @date 2022-01-07
 * @param {connect db} [connect={}]
 * @param {table} [table=String]
 * @param {data_form} [data_form=[]]
 * 
 * @returns
 */
if (!function_exists("helpers_create")) {
    function helpers_create($connect = null, $table = '', $data_form = array())
    {
        $result = false;
        if ($connect) {
            $builder = $connect->table($table);
            $result = $builder->insert($data_form);
        }

        return $result;
    }
}

/**
 * @description Edit Data
 * @author Harto <pakdeharto1967@gmail.com>
 * @date 2022-01-07
 * @param {connect db} [connect={}]
 * @param {table} [table=String]
 * @param {where_value} [where_value=String]
 * @param {where_field} [where_field=String]
 * @param {data_form} [data_form=[]]
 * 
 * @returns
 */
if (!function_exists("helpers_edit")) {
    function helpers_edit($connect = null, $table = '', $where_value = 0, $where_field = '', $data_form)
    {
        $result = false;
        if ($connect) {
            $builder = $connect->table($table);
            $builder->where($where_field, $where_value);
            $result = $builder->update($data_form);
        }
        return $result;
    }
}
