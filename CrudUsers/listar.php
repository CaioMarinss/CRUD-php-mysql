<h1>Lista de usuários</h1>
<?php

    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql); 
    $qtd = $res->num_rows;

    if($qtd>0){
        echo "<table class='table table-hover table-bordered'>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Nome</th>";
            echo "<th>Email</th>";
            echo "<th>Data de Nascimento</th>";
            echo "<th>Ações</th>";
            echo "</tr>";
            //
        while($row = $res->fetch_object()){
            
            echo "<tr>";
            echo "<td>".$row->ID."</td>";
            echo "<td>".$row->NOME."</td>";
            echo "<td>".$row->EMAIL."</td>";
            echo "<td>".$row->DATA_NASC."</td>";
            echo "<td>
                <button onclick=\"location.href='?page=editar&id=".$row->ID."'\"class='btn btn-success'>Editar</button>
                <button onclick=\"if(confirm('Deseja mesmo excluir do banco de dados?')){location.href='?page=salvar&acao=excluir&id=".$row->ID."'}else{false}\" class='btn btn-danger'>Apagar</button>
                 </td>";
            echo "</tr>";
        }
        echo "</table>";
    }else{
        echo "<p class='alert alert-danger'>0 resultados encontrados</p>";
    }

?>