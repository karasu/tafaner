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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $afiliat->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $afiliat->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Afiliats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="afiliats form content">
            <?= $this->Form->create($afiliat) ?>
            <fieldset>
                <legend><?= __('Edit Afiliat') ?></legend>
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
                    echo $this->Form->control('email');
                    echo $this->Form->control('situacio_personal');
                    echo $this->Form->control('relacio');
                    echo $this->Form->control('grup');
                    echo $this->Form->control('situacio');
                    echo $this->Form->control('delegat');
                    echo $this->Form->control('empresa');
                    echo $this->Form->control('email_professional');
                    echo $this->Form->control('territorial');
                    echo $this->Form->control('ocupacio');
                    echo $this->Form->control('tipus_treballador');
                    echo $this->Form->control('cos_docent');
                    echo $this->Form->control('seccio_sindical');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
