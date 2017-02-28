<?php

/**
 * Created by PhpStorm.
 * User: joye
 * Date: 2017/2/28
 * Time: 16:56
 */
class  ExportController extends BaseController
{
    public function  exportCVS()
    {
        $sheet_name = date('YmdHis', time()) . '±í¸ñ';
        Excel::create($sheet_name, function ($excel) use ($sheet_name) {

            $excel->sheet($sheet_name, function ($sheet) {
                $sheet->row(1,['authorization date', 'company name']);
               $sheet->setMergeColumn(array(
                  'columns' =>array(
                      'A',
                      'B'
                  ) , 'rows'=>(
                       array(array(2,2))
                   )
               ));

                $data = array(date('Y-m-d H:i:s'), 'IBOS Inc');
                $sheet->row(2,$data);
            });
        })->download('csv');

    }
}