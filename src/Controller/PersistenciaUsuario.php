<?php  
    namespace Weliton\PhpMvc\Controller;

use PDOException;
use Weliton\PhpMvc\Entity\Usuario;
use Weliton\PhpMvc\Helper\FlashMessageTrait;
use Weliton\PhpMvc\Infra\Persistance\QueryBuilder;
use Weliton\PhpMvc\Infra\Persistance\SqliteConn;

class PersistenciaUsuario implements InterfaceControladorRequisicao
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
        try
        {
            $email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);
            $senha = filter_input(INPUT_POST,'senha',FILTER_SANITIZE_STRING);

            
            if(is_null($email) || $email === false){
                // metodo da trait    
                $this->defineMensagem('danger','Usuario Invalido');
                return;
            }
            
            if(is_null($senha) || $senha === false){
                // metodo da trait    
                $this->defineMensagem('danger','Senha Invalida');
                return;
            }

            $novoUsuario = new Usuario();
            $novoUsuario->setEmail($email);
            $senhaHash = $novoUsuario->verificaSenha($senha);
      
            $query = new QueryBuilder($this->pdo);

            $query->parameters(['email' => $novoUsuario->getEmail(),
            'senha' => $senhaHash])
            ->from('usuarios')
            ->get('insert');

            // metodo da trait    
            $this->defineMensagem('success','Usuário cadastrado com sucesso.');
      
            
            header('Location:/login',302);

        }catch(PDOException $e){
            echo "Error: ".$e->getMessage();
        }
    }
}