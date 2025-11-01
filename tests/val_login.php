<?php include_once 'config.php'; ?>
<?php

    $usuario_teste = $_POST['usuario'];
    $senha_teste = $_POST['senha'];
    $sql = "SELECT * FROM tb_usuarios WHERE usuario = '$usuario_teste'";
$result = mysqli_query($conexao, $sql);

while ($linha = mysqli_fetch_array($result)) {
    $usuario_bd = $linha['usuario'];
    $senha_bd = $linha['senha'];
}if (password_verify($senha_teste, $senha_bd)) {
    session_start();
    $_SESSION['usuario'] = $usuario_bd;
    header('Location: index.php');
}else{
    header('Location: login.php?erro=1');
}
?>
