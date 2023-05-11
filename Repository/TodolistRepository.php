<?php

namespace Repository
{

    use Entity\Todolist;
    use PDO;

    interface TodolistReposiroty
    {

        function save(Todolist $todolist): void;
    
        function remove(int $number): bool;
    
        function findAll(): array;
    
    }

    class TodolistRepositoryImpl implements TodolistReposiroty
    {

        public array $todolist = array();

        private PDO $connection;

        public function __construct(PDO $connection)
        {
            $this->connection = $connection;
        }

        function save(Todolist $todolist): void
        {
            // $numbers = sizeof($this->todolist) + 1;
            // $this->todolist[$numbers] = $todolist;

            $sql = "INSERT INTO todolist(todo) VALUES (?)";
            $statement = $this->connection->prepare($sql);
            $statement->execute([$todolist->getTodo()]);
        }

        function remove(int $number): bool
        {
            if ($number > count($this->todolist)) {
                return false;
            }
        
            for ($i = $number; $i < count($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i+1];
            }
        
            unset($this->todolist[count($this->todolist)]);
        
            return true;
        }

        function findAll(): array
        {
            return $this->todolist;
        }

    }
    
}

// untuk mengolah data