<h1>
	Cadastro de usuários
</h1>
<hr/>
<?= $this->Form->create(null,['type'=>'POST'])?>
<div class="form-group">
	<div class="col-12">
		<?= $this->Form->control('name',['label'=>'<b>Nome</b>','class'=>'form-control','escape'=>false]) ?>
	</div>
	<div class="col-12">
		<?= $this->Form->control('username',['label'=>'<b>Nome do usuário</b>','class'=>'form-control','escape'=>false]) ?>
	</div>
	<div class="col-12">
		<?= $this->Form->control('password',['label'=>'<b>Senha</b>','type'=>'password','class'=>'form-control','escape'=>false]) ?>
	</div>
	<div class="col-12">
		<?= $this->Form->control('email',['label'=>'<b>Email</b>','class'=>'form-control','escape'=>false]) ?>
	</div>
	<div class="col-12">
		<?= $this->Form->control('description',['label'=>'<b>Descrição</b>','class'=>'form-control','escape'=>false]) ?>
	</div>
	<div class="col-12">
		<?= $this->Form->button('Enviar',['class'=>'btn btn-primary mt-3']) ?>
	</div>
</div>
<?= $this->Form->end() ?>