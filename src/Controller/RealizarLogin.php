<?php   
    namespace Weliton\PhpMvc\Controller;

use Weliton\PhpMvc\Entity\Usuario;
use Weliton\PhpMvc\Helper\FlashMessageTrait;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;
use Weliton\PhpMvc\Infra\Persistance\VerificaLogin;

class RealizarLogin implements InterfaceControladorRequisicao
{
    use FlashMessageTrait;

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
            // methodo FlashMensageTrait
            $this->defineMensagem('danger','Este Email não é Valido');
            
            header('Location:/login');
            
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
            // methodo FlashMensageTrait
            $this->defineMensagem('danger','Usuario ou Senha Invalidos');
            header('Location:/login');
        }


    }
}