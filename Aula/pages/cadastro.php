
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;  
        }   

        
    </style>
    <title>Cadastro</title>
</head>
<body>
    <div >
        <form action="?p=cadastro" method="post">
            <fieldset>
                <legend><b>Fórmulário de Clientes</b></legend>
                <br>
                <div >
                    <input type="text" name="nome" id="nome"  required>
                    <label for="nome" >Nome completo</label>
                </div>
             
                <div>
                    <input type="text" name="email" id="email"  required>
                    <label for="email" >Email</label>
                </div>
         
                <div >
                    <input type="tel" name="telefone" id="telefone" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br />
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>

                <div >
                    <input type="text" name="cidade" id="cidade"  required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
             
                <div >
                    <input type="text" name="estado" id="estado"  required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
          
                <div>
                    <input type="text" name="endereco" id="endereco"  required>
                    <label for="endereco">Endereço</label>
                </div>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>

