<?php

class Sqlconnector{
    function __construct(){
        $this->dsn = "mysql:host=localhost;dbname=todolist";
        $this->user = "todouser";
        $this->passwd = "bob";
        $this->pdo = new PDO($this->dsn, $this->user, $this->passwd);
    }
    
    public function getTasks($with_deleted){
        if ($with_deleted == 1){
            $result = $this->pdo->query("SELECT * from todo;");
        }
        else{
            $result = $this->pdo->query("SELECT * from todo WHERE is_deleted=0;");
        }
        return($result->fetchAll(PDO::FETCH_ASSOC));
    }

    public function deleteTask($id_task){
        $this->pdo->exec("UPDATE todo set is_deleted=1 WHERE id=$id_task;");
    }

    public function addTask($title_task,$desc_task){
        $this->pdo->exec("INSERT INTO todo (titre,description,is_deleted) VALUES (\"$title_task\",\"$desc_task\",\"0\");");
    }

    public function updateTask($id_task,$newtitle_task,$newdesc_task){
        $this->pdo->exec("UPDATE todo SET titre=\"$newtitle_task\", description=\"$newdesc_task\" WHERE id=$id_task;");
    }
}
#$bob = new Sqlconnector();
#$bob->deleteTask(2);
#$bob->addTask("title 2","Rien faire pendant 3 jour (stellaris)");
#$bob->updateTask(3,'Tache 3','jouer a stellaris');
#print_r($bob->getTasks(1));