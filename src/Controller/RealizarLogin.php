<?php   
    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Entity\Usuario;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;
use Weliton\PhpMvc\Infra\Persistance\VerificaLogin;

class RealizarLogin implements InterfaceControladorRequisicao
{
    private \PDO $pdo;

    public function __construct()
    {
        $conn = new SqliteConn();
        $this->pdo = $conn->startService();
    }

    public function processaRequisicao(): void
    {
        $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);

        if(is_null($email) || $email === false){
            echo "Este Email não é Valido";
            return;
         }
        
        $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);
         
        $dados = 
        [
            'table' => 'usuarios',
            'columns' => 'email,senha',
            'condition1' => 'email',
            'user' => $email,
            'condition2' => 'senha',
            'pass' => $senha
        ];

        $verificaLogin = new VerificaLogin();
        $resultLogin = $verificaLogin->validateLogin($dados);

        if($resultLogin == true){
            
            $_SESSION['logado'] = true;

            header('Location:/listaNotas');
        }else{

            header('Location:/login');
        }


    }
}