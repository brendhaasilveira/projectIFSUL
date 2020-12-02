<nav class="navbar navbar-expand-lg navbar-light navbar-laravel" style="background-color: #228B22; border-color: #228B22;">
	<div class="container">
		<a class="navbar-brand" id="color">Sistema de Questionários IFSUL</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
							<li class="nav-item">
									<a class="nav-link" href="<?php echo base_url('opcao/index')?>" id="color">Voltar</a>
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
                    <div class="card-header" style="background-color: #228B22; border-color:#228B22">Alterar Opção</div>
                    	<div class="card-body">
                        <form action="<?php echo base_url("opcao/editar/$opcao->id_opcao")?>" method="POST">
													<div id="color2"><?php echo validation_errors('<p>','</p>'); ?></div>
													<?php if($this->session->flashdata('msg')): ?>
													<?php $alert = $this->session->flashdata('msg')['alert'];?>
													<?php $mensagem = $this->session->flashdata('msg')['mensagem'];?>
													<div class="alert alert-<?php echo($alert);?> alert-dismissible fade show" role="alert">
															<strong><?php echo($mensagem); ?></strong>
													</div>
												<?php endif; ?>
													<input type="hidden" name="id_opcao" value="<?php echo($opcao->id_opcao); ?>">
														<div class="form-group row">
																<label for="ds_opcao" class="col-md-4 col-form-label text-md-right" id="color2">Opção:</label>
																<div class="col-md-6">
																		<input name="ds_opcao" type="text" placeholder="Digite a Opção" value="<?php echo set_value('ds_opcao',$opcao->ds_opcao) ?>" class="form-control input-md">
																</div>
														</div>

														<div class="col-md-6 offset-md-4">
																<button type="submit" class="btn btn-success" name="alterar" value="Alterar">
																		Alterar
																</button>
														</div>
												</div>
											</form>
									</div>
							</div>
					</div>
			</div>
	</main>
