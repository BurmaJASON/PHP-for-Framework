<?php

class QueryBuilder {
    protected $pdo;
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function selectAll($table) {
        $statement = $this->pdo->prepare("select * from $table");
        $statement->execute();
        $tasks = $statement->fetchAll(PDO::FETCH_OBJ);

        return $tasks;
    }

    public function insert($dataArray, $table) {
        $getDataKeys = array_keys($dataArray);
        $cols = implode(',',$getDataKeys);
        
        $questionMark = '';
        
        foreach($getDataKeys as $key) {
            $questionMark .= "?,";
        }
        
        $questionMark = rtrim($questionMark, ',');
        
        $sql = "insert into $table ($cols) values ($questionMark)";
        
        $statement = $this->pdo->prepare($sql);

        $getDataValues = array_values($dataArray);
        $statement->execute($getDataValues);
    }
    
 }

?>