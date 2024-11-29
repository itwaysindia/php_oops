<?php 
header('Content-Type: application/json');

require_once('../includes/config.php');

class API extends db{
    public function getUsers(){
        try{
        $query = "SELECT name, email FROM users";
        $result = $this->mysqli->query($query);

        if(!$result){
            throw new Exception ("Database Query Error: ". $this->mysqli->error);
        }

        $users = [];
        while ($row = $result->fetch_assoc()){
            $users[] = $row;
        }


        echo json_encode([
            'status' => 'success',
            'data' => $users
        ]);
        }
        catch(Exception $e){
            echo json_encode([
                'status' => 'erro',
                'data' => $e->getMessage()
            ]);
        }

    }
}
?>