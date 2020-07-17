<a id="fechar10">x</a>
	<?php
    if(isset($_POST['modo']) && isset($_POST['id'])){
		require_once('../FaleConosco/BD/banco.php');
		$conex = conexaoMysql('padoka'); 
		 $id = $_POST['id'];
		 $sqli="select * from tbl_nossasLojas where idLojas = ".$id;
    	$comando = mysqli_query($conex,$sqli);

   	 	if($rsNossasLojas = mysqli_fetch_assoc($comando)){
        	$titulo1 = $rsNossasLojas['titulo1'];
	        $titulo2 = $rsNossasLojas['titulo2'];
	        $titulo3 = $rsNossasLojas['titulo3'];
	        
	        $txtL1 = $rsNossasLojas['txtLoja1'];
	        $txtL2 = $rsNossasLojas['txtLoja2'];
	        $txtL3 = $rsNossasLojas['txtLoja3'];
	        
	        $imgL1 = $rsNossasLojas['imgLoja1'];
	        $imgL2 = $rsNossasLojas['imgLoja2'];
	        $imgL3 = $rsNossasLojas['imgLoja3'];
}}
	?>
	 <div class="conteinerLojas" id ="conteinerLojas">
        <div class="loja">
            <div class="imagemLoja">
                <figure class="loja1">
                     <img src="../cms/filesNossasLojas/<?=$imgL1?>" alt="<?=$titulo1?>">
                </figure>
            </div>
            <h2 class="nomeLoja"> <?=$titulo1?> </h2>
            <div class="descrisaoLoja">
                <?=$txtL1?>
            </div>
        </div>
        <div class="loja">
            <h2 class="nomeLoja2"> <?=$titulo2?> </h2>
            <div class="descrisaoLoja2">
                <?=$txtL2?>
            </div>
            <div class="imagemLoja">
                <figure class="loja2">
                    <img src="../cms/filesNossasLojas/<?=$imgL2?>" alt="<?=$titulo2?>">
                 </figure>
            </div>
        </div>
        <div class="loja">
            <div class="imagemLoja">
                <figure class="loja3">
                    <img src="../cms/filesNossasLojas/<?=$imgL3?>" alt="<?=$titulo3?>">
                </figure>
            </div>
            <h2 class="nomeLoja"> <?=$titulo3?> </h2>
            <div class="descrisaoLoja">
                <?=$txtL3?>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        
        const contModal = document.querySelector('#conteinerModal10')
        const fechar = document.getElementById('fechar10')

        fechar.addEventListener('click',()=>{
         contModal.classList.remove('block')
        })

    </script>