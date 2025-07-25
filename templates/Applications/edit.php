<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Application $application
 * @var \Cake\Collection\CollectionInterface|string[] $staffs
 * @var \Cake\Collection\CollectionInterface|string[] $departments
 * @var \Cake\Collection\CollectionInterface|string[] $types
 */
?>
<!--Header-->
<div class="row text-body-secondary">
	<div class="col-10">
		<h1 class="my-0 page_title"><?php echo $title; ?></h1>
		<h6 class="sub_title text-body-secondary"><?php echo $system_name; ?></h6>
	</div>
	<div class="col-2 text-end">
		<div class="dropdown mx-3 mt-2">
			<button class="btn p-0 border-0" type="button" id="orederStatistics" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<i class="fa-solid fa-bars text-primary"></i>
			</button>
				<div class="dropdown-menu dropdown-menu-end" aria-labelledby="orederStatistics">
            <?= $this->Html->link(__('List Applications'), ['action' => 'index'], ['class' => 'dropdown-item', 'escapeTitle' => false]) ?>
				</div>
		</div>
    </div>
</div>
<div class="line mb-4"></div>
<!--/Header-->

<div class="card rounded-0 mb-3 bg-body-tertiary border-0 shadow">
    <div class="card-body text-body-secondary">
            <?= $this->Form->create($application, ['type' => 'file']) ?>
            <fieldset>

                
                    <?php echo $this->Form->control('staff_id', ['options' => $staffs, 'class'=>'form-control form-select', 'empty'=>'Select Staff']); ?>
                    <?php echo $this->Form->control('department_id', ['options' => $departments, 'class'=>'form-control form-select', 'empty'=>'Select Department']); ?>
                    <?php echo $this->Form->control('type_id', ['options' => $types, 'class'=>'form-control form-select', 'empty'=>'Select Leave Type']); ?>
                    <?php echo $this->Form->control('start_date'); ?>
                    <?php echo $this->Form->control('end_date'); ?>
                    <?php echo $this->Form->control('reason'); ?>
                    <label>Upload Document</label>
                    <?php echo $this->Form->control('image', ['type'=>'file', 'label' => '']); ?>
                    <?php echo $this->Form->hidden('image_dir'); ?>
               
            </fieldset>
				<div class="text-end">
				  <?= $this->Form->button('Reset', ['type' => 'reset', 'class' => 'btn btn-outline-warning']); ?>
				  <?= $this->Form->button(__('Submit'),['type' => 'submit', 'class' => 'btn btn-outline-primary']) ?>
                </div>
        <?= $this->Form->end() ?>
    </div>
</div>