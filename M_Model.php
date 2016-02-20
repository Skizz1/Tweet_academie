<?php
use App\Model\Database;
require_once("database.php");
require_once('session_start.php');
class Model
{
    /**
     * @var $table table courrante
     */
    protected $table;

    public function __construct()
    {
        $this->userId = $_SESSION["id"];
    }

    /**
     * Retourne une information
     * @param int $id ID
     * @param string $field le champ à rechercher
     * @return mixed
     */
    public function getField($id, $field)
    {
        $sql = "SELECT {$field} from {$this->table} WHERE id = {$id}";
        $req = Database::get()->prepare($sql);
        $req->execute();
        $data = $req->fetch();
        foreach($data as $key => $value){
            return $value;
        }
    }

    /**
     * Modifie des informations
     * @param int $id l'ID
     * @param array $fieldArray contient les infos à mettre à jour ['champ' => 'value']
     */
    public function update($id, $fieldArray = array())
    {
        $fields = '';
        foreach ($fieldArray as $key => $value)
        {
            $fields .= "$key = '$value', ";
        }
        $fields = substr($fields, 0, -2);
        $sql    = "UPDATE {$this->table} SET {$fields} WHERE id = {$id}";
        $req    = Database::get()->prepare($sql);
        $req->execute();
    }

    /**
     * Crée un nouvel élément dans le tableau
     * @param array $fieldArray contient les infos à créer ['champ' => 'value']
     */
    public function create($fieldArray = array())
    {
        $fields = '';
        $values = '';
        foreach ($fieldArray as $key => $value)
        {
            $fields .= "$key, ";
            $values .= "'$value', ";
        }
        $fields = substr($fields, 0, -2);
        $values = substr($values, 0, -2);

        $sql = ("INSERT INTO {$this->table} ({$fields}) VALUES ({$values})");
        $req = Database::get()->prepare($sql);
        $req->execute();
    }
}