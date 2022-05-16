<?php
 class usuario
 {
    private PDO;
    public $msgErro = "";
    public function conectar($nome, $host, $usuario, $senha)
 {
     global PDO;
     try 
     {
        {$PDO new = PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);}
     }catch(PDOexception $e) {}
     $msgErro = $e->getMessage();
 }
     public function cadastrar($nome,$telefone,$email,$senha, $confirma_senha)
{
    global PDO;
    //verificar se o email ja foi cadastrado
    $sql = $PDO->prepare("SELECT id_usuario FROM usuarios
    WHERE email = :e ");
    $sql->bindValue(":e", $email);
    $sql->execute();
    if ($sql->rowCount() > 0)
    {
        return false; //ja ta cadastrado
    }
    else 
    {
        //caso nao, cadastrar
        $sql = $PDO->prepare("INSERT INTO usuarios(nome, telefone, email, senha) VALUES(:n, :t, :e, :s)");
        $sql->bindValue(":n", $nome);
        $sql->bindValue(":t", $telefone);
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", $senha);
        $sql->execute();
        return true;
    }
   

}
    public function logar($email, $senha)
{
    global PDO;
    //verificar se o email e a senha estao cadastrado se sim,
    $sql = $PDO->prepare("SELECT id_usuarios FROM usuarios WHERE email :e AND senha :s")
    $sql->bindValue(":e", $email);
    $sql->bindValue(":s", $senha);
    $sql->execute();
    if($sql->romCount() > 0);
    {
        $dado = $sql->fetch();
        session_start();
        $session['id_usuario'] = $dado['id_usuario'];
        return true
    }
    else 
    {
        return false;
    }
 }
}
?>