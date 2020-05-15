<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Afiliat $afiliat
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Afiliats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="afiliats form content">
            <?= $this->Form->create($afiliat) ?>
            <fieldset>
                <legend><?= __('Add Afiliat') ?></legend>
                <?php
                    echo $this->Form->control('num');
                    echo $this->Form->control('sexe');
                    echo $this->Form->control('data_naixement', ['empty' => true]);
                    echo $this->Form->control('codi_postal');
                    echo $this->Form->control('poblacio');
                    echo $this->Form->control('comarca');
                    echo $this->Form->control('provincia');
                    echo $this->Form->control('pais');
                    echo $this->Form->control('data_afiliacio', ['empty' => true]);
                    echo $this->Form->control('centre_treball');
                    echo $this->Form->control('federacio');
                    echo $this->Form->control('sectorial');
                    echo $this->Form->control('activitat');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
