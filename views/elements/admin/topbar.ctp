<div class="topbar" data-dropdown="dropdown">
	<div class="topbar-inner">
		<div class="container">
			<h3><?php echo $this->Html->link('Assando Sites', array('controller' => 'students', 'action' => 'dashboard')) ?></h3>
			
			<ul class="nav">
				<li><?php echo $this->Html->link('Alunos', array('controller' => 'students', 'action' => 'index')) ?></li>
				<li><?php echo $this->Html->link('Pagamentos', array('controller' => 'payments', 'action' => 'index')) ?></li>
				<li class="dropdown">
					<?php echo $this->Html->link('Turmas', array('controller' => 'my_classes', 'action' => 'index'), array('class' => 'dropdown-toggle')) ?>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Ver turmas', array('controller' => 'my_classes', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Criar nova turma', array('controller' => 'my_classes', 'action' => 'add')) ?></li>
						<li class="divider"><!--  --></li>
						<li><?php echo $this->Html->link('Ver aulas', array('controller' => 'lessons', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Agendar aula', array('controller' => 'lessons', 'action' => 'add')) ?></li>
					</ul>
				</li>
				<li class="dropdown">
					<?php echo $this->Html->link('Arquivos', array('controller' => 'my_files', 'action' => 'index'), array('class' => 'dropdown-toggle')) ?>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Ver arquivos', array('controller' => 'my_files', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Fazer upload', array('controller' => 'my_files', 'action' => 'add')) ?></li>
					</ul>
				</li>
			</ul>
			
			<?php echo $this->Form->create('Student', array('action' => 'index', 'class' => 'pull-left')) ?>
				<?php echo $this->Form->input('search', array('placeholder' => 'Buscar aluno', 'div' => false, 'label' => false)) ?>
			<?php echo $this->Form->end() ?>
			
			<ul class="nav secondary-nav">
				<li class="dropdown">
					<?php echo $this->Html->link('Thiago Belem', array('controller' => 'users', 'action' => 'index'), array('class' => 'dropdown-toggle')) ?>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Meu perfil', array('controller' => 'users', 'action' => 'edit')) ?></li>
						<li class="divider"><!--  --></li>
						<li><?php echo $this->Html->link('Ver usuários', array('controller' => 'users', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Criar usuário', array('controller' => 'users', 'action' => 'add')) ?></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout'), array('class' => 'label important')) ?></li>
			</ul>
		</div>
	</div>
</div>