<?php
require_class("Dao_User");
class Bll_User {
        public function addUser($email,$userpass,$saltkey){
            $daouser=new Dao_User();
            $insertid=$daouser->insert(array(
                   "email"=>$email,
                   "saltkey"=>$saltkey,
                   "password"=>$userpass,
                   "idate"=>time()
                ));
            return $insertid;
        }

       public function findByEmail($email){
           $daouser=new Dao_User();
           return $daouser->getInfoByEamil($email);
       }
} 