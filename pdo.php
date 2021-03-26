<?php 
define('MYSQL_HOST','localhost');       //definir constantes para armazenar os dados de conexão
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','');
define('MYSQL_DB_NAME','teste');

class Conexao{
    protected $PDO;
    function __construct(){
        $this->PDO = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME,MYSQL_USER,MYSQL_PASSWORD);  //dados de conexão como parâmetro ao instanciarmos a classe PDO
                                                                                                            //Isso funciona. Mas caso a conexão falhe, será disparada uma exceção (OQUE É EXCEÇÃO?) e a execução será interrompida. Para evitarmos isso, devemos colocar esse trecho em um bloco try…catch e tratar a exceção PDOException.
        try{                                                                                                //try consegue recuperar erros que possam ocorrer no código fornecido em seu bloco.
            $this->PDO = new PDO('mysql:host='.MYSQL_HOST.';dbname='.MYSQL_DB_NAME,MYSQL_USER,MYSQL_PASSWORD);
        } catch (PDOException $e)                                                                           //representa um erro criado pelo PDO. ISSO É DE UM ERRO ESPECIFICO, OU DE QUALQUER ERRO?
        {                                                                                                   //catch por sua vez faz o tratamento dos erros que aconteceram.
            echo 'Erro ao conectar com o MySQL: '.$e->getMessage();
        }
    }                                                                                                       //OK, conexão criada.
    function consultar(){
        $sql = "SELECT * FROM agenda";
        $resultado = $this->PDO->query($sql);
        $linhas = $resultado->fetchAll();                                                                   //retorna um array contendo todos as linhas de resultados
        print_r($linhas);
    }
    function cadastrar(&$nome, &telefone){
        $sql = "INSERT INTO agenda VALUES('".$nome."','".$telefone."', NULL)";
        $resultado = $this->PDO->query($sql);
        return $this->PDO->lastInsertId();
    }
}

$teste = new Conexao;                                                                                       //conectei o código com a classe
$visualizar = $teste->consultar();                                                                          //pedi que a função fosse executada

?>