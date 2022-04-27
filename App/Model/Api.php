<?php
namespace TncBzkrt\App\Model;
use TncBzkrt\Config\Database;
class Api
{
        public function Company(){
           $Company=Database::get("select *  from company where c_enable=?",array(1));
           return $Company;
        }
         public function Products($Company){
            $Products=Database::get("select *  from products where company=?",array($Company));
            return $Products;
       }
}