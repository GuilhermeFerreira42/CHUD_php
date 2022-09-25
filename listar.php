<h1>LISTAR</h1>

  <table class="table table-hover table-striped table-dordered">
    <tr>
      <td>CÓDIGO</td>
      <td>NOME</td>
      <td>MARCA</td>
      <td>ESTOQUE</td>
      <td>PREÇO</td>
      <td>AÇÕES</td>
      <td></td>
      <td></td>
    </tr>
    
    <?php 
     require('conexao.php');
     $retorno = mysqli_query($conexao, "SELECT * FROM produtos ORDER BY id ASC");
   
      while($row = mysqli_fetch_assoc($retorno)){
        echo "<tr>";
          echo "<td>".$row['id']."</td>";
          echo "<td>".$row['descricao']."</td>";
          echo "<td>".$row['marca']."</td>";
          echo "<td>".$row['estoque']."</td>";
          echo "<td>".$row['preco']."</td>";
          echo "<td><a class='btn btn-primary' href='editar.php?id=".$row['id']."'>Editar</a></td>";
          echo "<td><a class='btn btn-danger' href='delete.php?id=".$row['id']."'>Excluir</a></td>";
        echo "</tr>";
      }?>    
      
  </table>
  
</body>
</html>

