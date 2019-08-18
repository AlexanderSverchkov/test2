<?php
namespace App;

class Db
{
    use TSingletone;

    protected $dbh;

    protected function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test', 'root', '');
    }

    public function execute($sql)
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    public function query($sql, $class, $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($params);
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
        return [];
    }
}