<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../css/style_main.css">
    <title>Chamados</title>
</head>
<body>
    <div class="main">
        <h1>Criar Novo Usuário</h1>
        <form id="forms">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" >
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" >
            
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" >
            
            <button type="button" value="Criar Usuário" class="btn-submit">Criar Usuario</button>
        </form>
        <?php include '../components/modal.php'; ?>
    </div>

    

    <script>
        let nameUser = document.querySelector('#nome');
        let emailUser = document.querySelector('#email');
        let passwordUser = document.querySelector('#senha');
        let button = document.querySelector(".btn-submit");
        let modal = document.querySelector(".modal-bases");
        

        button.addEventListener('click', function(event) {
            modal.style.display = 'flex';
        $.ajax({
            url: '_userCreate.php',
            type: 'post',
            data: {
                nome: nameUser.value,
                email: emailUser.value,
                senha: passwordUser.value
            },
            dataType: 'json', 
            success: function(response) {
                
                
            },                                 
            error: function(xhr, status, error) { 
                console.error('Erro:', error);
            }
        }); 
    });

    </script>
</body>
</html>
