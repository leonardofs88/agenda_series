
<h1>
    Editar de série
</h1>
<hr/>
<div class="form-group">
    <?= $this->Form->create($series) ?>
    <div class="col-12">
        <?= $this->Form->control('name',['label'=>'<b>Nome</b>','class'=>'form-control','escape'=>false]) ?>   
    </div>
    <div class="col-12">
        <?= $this->Form->control('category',['label'=>'<b>Categoria</b>','class'=>'form-control','escape'=>false]) ?>   
    </div>
    <div class="col-12">
        <?= $this->Form->control('description',['label'=>'<b>Descrição</b>','class'=>'form-control','escape'=>false]) ?>   
    </div>
    <div class="col-12">
        <?= $this->Form->button('Enviar',['class'=>'btn btn-primary mt-3']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>