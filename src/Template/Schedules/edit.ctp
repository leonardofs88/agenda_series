<h1>
    Editar agendamento
</h1>
<hr/>
<div class="form-group">
    <?= $this->Form->create($schedule,['type' => 'PUT'] ) ?>
    <div class="col-12">
        <?= $this->Form->control('user_id', ['options' => $users,'label'=>'<b>Usuário</b>','class'=>'form-control','escape'=>false]); ?>   
    </div>
    <div class="col-12">
        <?= $this->Form->control('serie_id', ['options' => $series, 'label'=>'<b>Série</b>','class'=>'form-control','escape'=>false]) ?>   
    </div>
    <div class="col-12">
        <?= $this->Form->control('date', ['label'=>'<b>Dia</b>','escape'=>false,
                                          'templates' => ['dateWidget' => '{{day}}{{month}}{{year}}'],
                                          'day' => ['class' => "form-control-sm ml-2 mt-2 mr-2"],
                                          'month' => ['class' => "form-control-sm mt-2 mr-2"],
                                          'year' => ['class' => "form-control-sm mt-2 mr-2"],
                                         ]) ?>   
    </div>
    <div class="col-12">
        <?= $this->Form->button('Enviar',['class'=>'btn btn-primary mt-3']) ?>
    </div>
    <?= $this->Form->end() ?>
</div>