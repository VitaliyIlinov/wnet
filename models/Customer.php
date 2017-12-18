<?php

namespace models;

use components\classes\Db;
use components\core\Model;

class Customer extends Model {

    public function getData($request){
        @$this->db=Db::getInstance()->connection;
        if($this->db->connect_error){
           $this->error=$this->db->connect_error;
           return false;
        }


        $cid=$request['customer'];
        $status=$this->addStatus($request);

        $sql="SELECT
                      `cust`.`id_customer`,
                      `cust`.`name_customer`,
                      `cust`.`company`,
                      group_concat(`con`.`number`) number,
                      group_concat(`con`.`date_sign`) date_sign,
                      group_concat(`s`.`title_service`) title_service
                FROM `obj_contracts` `con`
                      LEFT JOIN `obj_customers` `cust` ON `cust`.`id_customer` = `con`.`id_customer`
                      LEFT JOIN `obj_services` `s` ON `s`.`id_contract` = `con`.`id_contract`
                WHERE `con`.`id_customer` = '{$cid}' {$status}";
        return $this->getRows($sql);

    }

    private function addStatus($request){
        $result='';
        if(isset($request['status'])){
            foreach ($request['status'] as $key=> $item) {
                $result[]=$key;
            }
            $result="and `s`.`status` in('".implode("','",$result)."')";
        }
        return $result;
    }

    private function getRows($sql){
        $result=$this->db->query($sql);
        while ($row=$result->fetch_assoc()){
            $data=$row;
        }
        return $data['id_customer']!==null?$data:false;
    }

}