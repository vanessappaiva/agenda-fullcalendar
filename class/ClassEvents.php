<?php

namespace Classes;

use Models\ModelConect;

class ClassEvents extends ModelConect
{
    #Trazer os dados de evento do banco
    public function getEvents()
    {
        $b = $this->conectDB()->prepare("SELECT * FROM events");
        $b->execute();
        $f = $b->fetchAll(\PDO::FETCH_ASSOC);

        return json_encode($f);
    }

    #Criação da consulta no banco
    public function createEvent($id = 0, $title, $description, $color = 'blue', $start, $end)
    {
        $b = $this->conectDB()->prepare("INSERT INTO events VALUES(?,?,?,?,?,?)");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->bindParam(2, $title, \PDO::PARAM_STR);
        $b->bindParam(3, $description, \PDO::PARAM_STR);
        $b->bindParam(4, $color, \PDO::PARAM_STR);
        $b->bindParam(5, $start, \PDO::PARAM_STR);
        $b->bindParam(6, $end, \PDO::PARAM_STR);

        $b->execute();
    }

    #Buscar evento pelo ID
    public function getEventsById($id)
    {
        $b = $this->conectDB()->prepare("SELECT * FROM events WHERE id=?");
        $b->bindParam(1, $id, \PDO::PARAM_INT);
        $b->execute();
        $f = $b->fetch(\PDO::FETCH_ASSOC);

        return $f;
    }

    #Atualizar no banco de dados
    public function updateEvent($id, $title, $description, $start)
    {
        $b = $this->conectDB()->prepare("UPDATE events SET title=?, description=?, start=? WHERE id=?");

        $b->bindParam(1, $title, \PDO::PARAM_STR);
        $b->bindParam(2, $description, \PDO::PARAM_STR);
        $b->bindParam(3, $start, \PDO::PARAM_STR);
        $b->bindParam(4, $id, \PDO::PARAM_INT);

        $b->execute();
    }

    #Apagar no banco de dados
    public function deleteEvent($id)
    {
        $b = $this->conectDB()->prepare("DELETE FROM events WHERE id=?");

        $b->bindParam(1, $id, \PDO::PARAM_INT);

        $b->execute();
    }
}
