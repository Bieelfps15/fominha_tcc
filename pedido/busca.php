<?php
	//Incluir a conexão com banco de dados
	include_once('connect.php');
	
	//Recuperar o valor da palavra
	$cursos = $_POST['palavra'];
	
	//Pesquisar no banco de dados nome do curso referente a palavra digitada pelo usuário
	$cursos = "SELECT * FROM produtos WHERE id LIKE '%$cursos%'";
	$resultado_cursos = mysqli_query($conn, $cursos);
	
	if(mysqli_num_rows($resultado_cursos) <= 0){
		echo "Nenhum curso encontrado...";
	}else{
		while($rows = mysqli_fetch_assoc($resultado_cursos)){
		?>
        <tr:nth-child(even) style="background-color: #dddddd">
                    
                        <td style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: #DA0000;">
                            <h5>Nome </h5>
                        </td>
                        <td style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: #DA0000;">
                            <h5> Preço </h5>
                        </td>
                        <td style="border: 1px solid black;text-align: left;color:white;padding: 8px;background-color: #DA0000;">
                            <h5>Adicionar</h5>
                        </td>
                        </tr>
		<td style="border: 1px solid black;text-align: left;padding: 8px;">
				<h5><?= $rows['pro_nome'] ?></h5>
				<p><?= $rows['pro_descricao'] ?></p>
		</td>
		<td style="border: 1px solid black;text-align: center;padding: 8px;">
			<h5>R$ <?= $rows['pro_preco'] ?></h5>
		</td>
		<td style="border: 1px solid black;text-align: left;padding: 8px;">
			<a href="pedido.php?add=pedido&id=<?= $rows['id'] ?>">
				<i style="color: red;" class="medium material-icons">add_circle</i>
			 </a>
		</td>
 </tr>
		<?php
		}
	}
?>