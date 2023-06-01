<?php
    switch($_REQUEST["acao"]){
        case 'cadastrar':
            $nome = $_POST["nome"];
            $senha = md5($_POST["senha"]); 
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "INSERT INTO usuarios(nome, senha, email, data_nasc) VALUES ('{$nome}','{$senha}','{$email}','{$data_nasc}')";

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Cadastrado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possivel cadastrar');</script>";
                echo "<script>location.href='?page=listar';</script>";    
            }

            break;

        case "editar":
            $nome = $_POST["nome"];
            $senha = md5($_POST["senha"]); 
            $email = $_POST["email"];
            $data_nasc = $_POST["data_nasc"];

            $sql = "UPDATE usuarios SET nome='{$nome}', senha='{$senha}', email='{$email}', data_nasc='{$data_nasc}' 
            WHERE id=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Editado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possivel editar');</script>";
                echo "<script>location.href='?page=listar';</script>";    
            }

            break;

        case "excluir":
            $sql = "DELETE FROM usuarios WHERE id=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res==true){
                echo "<script>alert('Excluido com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            }else{
                echo "<script>alert('Não foi possivel excluir');</script>";
                echo "<script>location.href='?page=listar';</script>";    
            }
            break;

    }

?>