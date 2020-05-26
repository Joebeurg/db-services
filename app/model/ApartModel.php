<?php


class ApartModel extends Database {

//    private $table = __CLASS__;

    public function list(array $criteria = []) {
        return $this->find($criteria);
    }
    public function get(string $id) {
        return $this->findOne(['id' => $id]);
    }

    public function createApart(array $data) {
        return $this->addApart($data);
    }

}