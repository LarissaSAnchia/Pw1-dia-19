<style type="text/css">
fieldset{
	text-align: justify;
	width: 540px;
	height: auto;
	position: relative;
	left: 210px;
	border: 3px solid black;
	border-radius: 15px;
}
</style>

<?php
echo "<meta charset=utf-8>";
	
echo "<fieldset>";

	echo "<center><h2>Formulário/Enquetes</h2></center><br/>";

	if(isset($_POST['pergunta1'])){
		echo "Pergunta 1: " .$_POST['pergunta1'];
	echo "<br>";}

	if(isset($_POST['pergunta2'])){
		echo "Pergunta 2: " .$_POST['pergunta2'];
	echo "<br>";}

	
echo "</fieldset>";

	?>
	