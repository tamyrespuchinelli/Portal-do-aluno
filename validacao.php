 <?php




// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
if (!empty($_POST) AND (empty($_POST['matricula']) OR empty($_POST['senha']))) {
    header("Location: index.php?fEr=2");
    exit;
}

session_start();
session_destroy();

require("conexao.php");
$matricula   = mysqli_real_escape_string($conexao, $_POST['matricula']);
$senha       = mysqli_real_escape_string($conexao, $_POST['senha']);

// Validação do usuário/senha digitados ALUNO
$sql = "SELECT `a_nome` FROM `aluno` WHERE (`a_matricula` = '" . $matricula . "') AND (`senha` = '" . ($senha) . "') ";

$query = mysqli_query($conexao, $sql);

if (mysqli_num_rows($query) != 1) {
    // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
    // Validação do usuário/senha digitados PROFESSOR
    
    $sql = "SELECT `p_nome` FROM `professor` WHERE (`matricula` = '" . $matricula . "') AND (`senha` = '" . ($senha) . "') ";
    
    $query = mysqli_query($conexao, $sql);
    
    if (mysqli_num_rows($query) != 1) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        // Validação do usuário/senha digitados COORD
        
        $sql = "SELECT `c_nome` FROM `coordenador` WHERE (`c_matricula` = '" . $matricula . "') AND (`senha` = '" . ($senha) . "') ";
        
        $query = mysqli_query($conexao, $sql);
        
        if (mysqli_num_rows($query) != 1) {
            // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
header("Location: index.php?fEr=7");
        } else {
            // Salva os dados encontados na variável $resultado
            $resultado = mysqli_fetch_assoc($query);
            // Se a sessão não existir, inicia uma
            
            session_start();
            // Salva os dados encontrados na sessão coordenador
            $_SESSION['c_matricula'] = $matricula;
            $_SESSION['nome']      = $resultado['c_nome'];
			header("Location: menu-coordenador.php");
           
        }
    } else {
        // Salva os dados encontados na variável $resultado
        $resultado = mysqli_fetch_assoc($query);
        // Se a sessão não existir, inicia uma
        
        session_start();
        // Salva os dados encontrados na sessão prof
        $_SESSION['matricula'] = $matricula;
        $_SESSION['nome']    = $resultado['p_nome'];
        header("Location: menu-professor.php");
    }
} else {
    // Salva os dados encontados na variável $resultado
    $resultado = mysqli_fetch_assoc($query);
    // Se a sessão não existir, inicia uma
    
    session_start();
    // Salva os dados encontrados na sessão aluno
    $_SESSION['a_matricula'] = $matricula;
    $_SESSION['nome']      = $resultado['a_nome'];
    header("Location: menu.php");
}
?> 