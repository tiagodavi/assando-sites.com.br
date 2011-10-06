<div class="topbar" data-dropdown="dropdown">
	<div class="topbar-inner">
		<div class="container">
			<h3><?php echo $this->Html->link('Assando Sites', array('controller' => 'alunos', 'action' => 'dashboard')) ?></h3>
			
			<ul class="nav">
				<li><?php echo $this->Html->link('Dashboard', array('controller' => 'alunos', 'action' => 'dashboard')) ?></li>
				<li><?php echo $this->Html->link('Alunos', array('controller' => 'alunos', 'action' => 'index')) ?></li>
				<li class="dropdown">
					<?php echo $this->Html->link('Turmas', array('controller' => 'turmas', 'action' => 'index'), array('class' => 'dropdown-toggle')) ?>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Ver turmas', array('controller' => 'turmas', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Criar nova turma', array('controller' => 'turmas', 'action' => 'add')) ?></li>
						<li class="divider"><!--  --></li>
						<li><?php echo $this->Html->link('Ver aulas', array('controller' => 'aulas', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Agendar aula', array('controller' => 'aulas', 'action' => 'add')) ?></li>
					</ul>
				</li>
				<li class="dropdown">
					<?php echo $this->Html->link('Arquivos', array('controller' => 'arquivos', 'action' => 'index'), array('class' => 'dropdown-toggle')) ?>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Ver arquivos', array('controller' => 'arquivos', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Fazer upload', array('controller' => 'arquivos', 'action' => 'add')) ?></li>
					</ul>
				</li>
			</ul>
			
			<?php echo $this->Form->create('Aluno', array('class' => 'pull-left')) ?>
				<?php echo $this->Form->input('nome', array('placeholder' => 'Buscar aluno', 'div' => false, 'label' => false)) ?>
			<?php echo $this->Form->end() ?>
			
			<ul class="nav secondary-nav">
				<li class="dropdown">
					<?php echo $this->Html->link('Usuários', array('controller' => 'users', 'action' => 'index'), array('class' => 'dropdown-toggle')) ?>
					<ul class="dropdown-menu">
						<li><?php echo $this->Html->link('Ver usuários', array('controller' => 'users', 'action' => 'index')) ?></li>
						<li><?php echo $this->Html->link('Criar usuário', array('controller' => 'users', 'action' => 'add')) ?></li>
					</ul>
				</li>
				<li><?php echo $this->Html->link('Sair', array('controller' => 'users', 'action' => 'logout')) ?></li>
			</ul>
		</div
	</div>
</div>