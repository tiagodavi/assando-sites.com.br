<?php echo $this->Form->create('Student', array('inputDefaults' => array('div' => false, 'label' => false))) ?>
<div class="row">
	<div class="span9">
	<fieldset>
		<?php echo $this->Html->tag('legend', 'Dados do aluno') ?>
		<?php echo $this->Form->hidden('id') ?>
		
		<div class="clearfix">
			<?php echo $this->Form->label('name', 'Nome') ?>
			<div class="input"><?php echo $this->Form->input('name', array('class' => 'span3')) ?></div>			
		</div>
		
		<div class="clearfix">
			<?php echo $this->Form->label('surname', 'Sobrenome') ?>
			<div class="input"><?php echo $this->Form->input('surname', array('class' => 'span3')) ?></div>			
		</div>
		
		<div class="clearfix">
			<?php echo $this->Form->label('email', 'E-mail') ?>
			<div class="input"><?php echo $this->Form->input('email', array('class' => 'span5')) ?></div>			
		</div>
		
		<div class="clearfix">
			<?php echo $this->Form->label('status_id', 'Status') ?>
			<div class="input"><?php echo $this->Form->input('status_id', array('options' => $Status, 'empty' => false)) ?></div>			
		</div>
		
	</fieldset>
	
	<fieldset>
		<?php echo $this->Html->tag('legend', 'Informações extras') ?>
		<?php echo $this->Form->hidden('Information.id') ?>
		<?php echo $this->Form->hidden('Information.student_id', array('value' => $this->data['Student']['id'])) ?>
		
		<div class="clearfix">
			<?php echo $this->Form->label('Information.cpf', 'CPF') ?>
			<div class="input"><?php echo $this->Form->input('Information.cpf', array('class' => 'span3')) ?></div>			
		</div>
		
		<div class="clearfix">
			<?php echo $this->Form->label('Information.twitter', 'Twitter') ?>
			<div class="input">
				<div class="input-prepend">
					<span class="add-on">@</span>
					<?php echo $this->Form->input('Information.twitter', array('class' => 'span3')) ?>
				</div>
			</div>			
		</div>
		
		<div class="clearfix">
			<?php echo $this->Form->label('Information.phone', 'Telefone') ?>
			<div class="input"><?php echo $this->Form->input('Information.phone', array('class' => 'span4')) ?></div>			
		</div>
		
		<div class="clearfix">
			<?php echo $this->Form->label('Information.city', 'Cidade') ?>
			<div class="input"><?php echo $this->Form->input('Information.city', array('class' => 'span4')) ?></div>			
		</div>
		
	</fieldset>
	</div>
	
	<div class="span6">	
	<fieldset>
		<?php echo $this->Html->tag('legend', 'Turmas', array('style' => 'padding-left: 0')) ?>
		
		<?php echo $this->Form->input('MyClass', array('options' => $MyClass, 'multiple' => 'checkbox')) ?>
		
	</fieldset>
	</div>
</div>
		
	<div class="actions">
		<?php echo $this->Form->submit('Salvar', array('class' => 'btn primary')) ?>			
	</div>
<?php echo $this->Form->end() ?>