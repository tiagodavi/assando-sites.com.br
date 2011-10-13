<?php $this->set('subtitle_for_layout', '&ndash; ' . $this->Paginator->counter(array('format' => '%count%')) . ' alunos') ?>

<?php if (!empty($data)) { ?>
<table class="zebra-striped">
<thead>
	<tr>
		<th>#</th>
		<th>Nome</th>
		<th>Contatos</th>
		<th>Status</th>
		<th>Cadastro</th>
	</tr>
</thead>
<tbody>
	<?php
	foreach ($data AS $row):
		extract($row);
		
		switch ($Status['id']) {
			case Status::STATUS_STUDENT_INSCRICAO_PENDENTE:
				$labelClass = 'warning';
				break;
			case Status::STATUS_STUDENT_INSCRICAO_CONFIRMADA:
				$labelClass = 'success';
				break;
			case Status::STATUS_STUDENT_DELETADO:
				$labelClass = 'important';
				break;
		}
	?>
	<tr class="status-<?php echo $Status['id'] ?>">
		<td><?php echo $Student['id'] ?></td>
		<td><?php echo $this->Html->link($Student['fullname'], array('action' => 'edit', $Student['id'])) ?></td>
		<td><?php echo $Student['email'] ?></td>
		<td>
			<?php echo $this->Html->tag('span', $Status['name'], array('class' => 'label ' . $labelClass)) ?>
			<?php foreach ($MyClass AS $class): ?>
			<?php echo $this->Html->tag('span', $class['code'], array('class' => 'label')) ?>
			<?php endforeach ?>
		</td>
		<td><?php echo $this->Time->format('d/m ~ H:i', $Student['created']) ?></td>
	</tr>
	<?php endforeach ?>
</tbody>
</table>

<?php echo $this->element('admin/pagination') ?>

<?php } else echo $this->element('admin/alerts/inline', array('class' => 'warning', 'message' => 'Nenhum aluno encontrado')) ?>