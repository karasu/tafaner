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
            <?= $this->Html->link(__('Edit Afiliat'), ['action' => 'edit', $afiliat->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Afiliat'), ['action' => 'delete', $afiliat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $afiliat->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Afiliats'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Afiliat'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="afiliats view content">
            <h3><?= h($afiliat->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sexe') ?></th>
                    <td><?= h($afiliat->sexe) ?></td>
                </tr>
                <tr>
                    <th><?= __('Codi Postal') ?></th>
                    <td><?= h($afiliat->codi_postal) ?></td>
                </tr>
                <tr>
                    <th><?= __('Poblacio') ?></th>
                    <td><?= h($afiliat->poblacio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Comarca') ?></th>
                    <td><?= h($afiliat->comarca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Provincia') ?></th>
                    <td><?= h($afiliat->provincia) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pais') ?></th>
                    <td><?= h($afiliat->pais) ?></td>
                </tr>
                <tr>
                    <th><?= __('Centre Treball') ?></th>
                    <td><?= h($afiliat->centre_treball) ?></td>
                </tr>
                <tr>
                    <th><?= __('Federacio') ?></th>
                    <td><?= h($afiliat->federacio) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sectorial') ?></th>
                    <td><?= h($afiliat->sectorial) ?></td>
                </tr>
                <tr>
                    <th><?= __('Activitat') ?></th>
                    <td><?= h($afiliat->activitat) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($afiliat->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num') ?></th>
                    <td><?= $this->Number->format($afiliat->num) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Naixement') ?></th>
                    <td><?= h($afiliat->data_naixement) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Afiliacio') ?></th>
                    <td><?= h($afiliat->data_afiliacio) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
