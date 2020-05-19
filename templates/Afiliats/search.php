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
            <?= $this->Form->create() ?>
            <fieldset>
            <legend><?= __('Introdueix les dades del(s) afiliat(s) que estàs cercant:') ?></legend>
            <?php
                //echo $this->Form->control('id', ['label' => __('Número identificador (id)')]);
                echo $this->Form->control('num', ['label' => __('Número d\'afiliat')]);
                echo $this->Form->control('sexe');
                echo $this->Form->control('data_naixement', ['label' => __('Data de naixement')]);
                echo $this->Form->control('codi_postal', ['label' => __('Codi postal')]);
                echo $this->Form->control('poblacio', ['label' => __('Població')]);
                echo $this->Form->control('comarca');
                echo $this->Form->control('provincia', ['label' => __('Província')]);
                echo $this->Form->control('pais', ['label' => __('País')]);
                echo $this->Form->control('data_afiliacio', ['label' => __('Data d\'afiliació')]);
                echo $this->Form->control('centre_treball', ['label' => __('Centre de treball')]);
                echo $this->Form->control('federacio', ['label' => __('Federació')]);
                echo $this->Form->control('sectorial');
                echo $this->Form->control('activitat');
            ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
