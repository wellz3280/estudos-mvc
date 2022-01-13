<?php  
    namespace Weliton\PhpMvc\Infra\Persistance;

    use Weliton\PhpMvc\Infra\Persistance\SqliteConn;
/*
    Crie um array associativo  

    $array = [
        'table' => 'tableName',
        'columns' => 'email,password',
        'condition1' => 'email',
        'user' => 'user@email.com',
        'condition2' => 'password',
        'pass'=> 'mypassword'];
    
    SQL 
        SELECT email,password FROM tableName WHERE email = user@email.com AND senha = mypassword
 */
use PDO;
use Weliton\PhpMvc\Entity\Usuario;

class VerificaLogin 
{   
    private \PDO $pdo;
    private array $data;

    public function __construct()
    {
        $conn =  new SqliteConn();    
        $this->pdo = $conn->startService();
    }

    public function validateLogin(array $data):bool
    {
        extract($data);
        $param1 = ':'.$condition1;
        $param2 = ':'.$condition2;
        
        $hashPass = new Usuario();
        $senhaMd5 =  $hashPass->verificaSenha($pass);
        
        
        $sql = "SELECT $columns FROM {$table} WHERE 
        $condition1 = $param1 AND $condition2 = $param2 ";
        
        $query = $this->pdo->prepare($sql);
        $query->bindParam($param1,$user,PDO::PARAM_STR);
        $query->bindParam($param2,$senhaMd5,PDO::PARAM_STR);
        $query->execute();
        
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        if(!empty($result)){
            return true;
        }else{
            return false;
        }
          
    }   

}


