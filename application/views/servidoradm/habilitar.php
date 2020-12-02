<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #228B22; border-color: #228B22;">
	<div class="container">
		<a class="navbar-brand" id="color">Sistema de Questionários IFSUL</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('menu')?>" id="color">Voltar</a>
							</li>
					</ul>
			</div>
	</div>
</nav>
<main class="forms-form" id="color">
    <div class="cotainer" >
        <div class="row justify-content-center" >
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="background-color: #228B22; border-color:#228B22">Habilitar Usuários</div>
                    	<div class="card-body">
                        <form action="<?php echo base_url('usuarios/index')?>" method="POST">
													<div id="color2"><?php echo validation_errors('<p>','</p>'); ?></div>
														<?php if($this->session->flashdata('msn')): ?>
														<?php $alert = $this->session->flashdata('msn')['alert'];?>
														<?php $mensagem = $this->session->flashdata('msn')['mensagem'];?>
														<div class="alert alert-<?php echo($alert);?> alert-dismissible fade show" role="alert">
															  <strong><?php echo($mensagem); ?></strong>
														</div>
													<?php endif; ?>
													<table class="table table-hover" id="tabela">
	  											<thead>
		    								<tr>
												<th scope="col">Código</th>
											    <th scope="col">Nome do Usuario</th>
												<th scope="col">Tipo Usuário</th>
												<th scope="col">Status</th>
												<th scope="col">Operação</th>
										    </tr>
									  </thead>
									  <tbody>
									  		<?php foreach ($usuarios as $linha):?>
											    <tr>
												     <th scope="row"><?= $linha->id_usuario ?></th>
												     <td><?= $linha->nm_usuario?></td>
													 <td><?= $linha->us_tipo?></td>
													<td><?= $linha->us_situacao?></td>
													<td>
															<?php if ($linha->us_cods==2) { ?>
																	<?= anchor('usuarios/ativo/'. $linha->id_usuario,'Ativar', array('title' => 'Desativar', 'class'=>'btn btn-success')); ?>
															<?php } else { ?>
																	<?= anchor('usuarios/inativo/'. $linha->id_usuario,'Desativar', array('title' => 'Ativar', 'class'=>'btn btn-danger')); ?>

															<?php }  ?>
												     </td>
											    </tr>
											<?php endforeach; ?>
									  </tbody>
								</table>
