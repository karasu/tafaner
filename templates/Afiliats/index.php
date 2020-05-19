<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Afiliat[]|\Cake\Collection\CollectionInterface $afiliats
 */
?>
<div class="afiliats index content">
    <?= $this->Html->link(__('New Afiliat'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Afiliats') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('num') ?></th>
                    <th><?= $this->Paginator->sort('sexe') ?></th>
                    <th><?= $this->Paginator->sort('data_naixement') ?></th>
                    <th><?= $this->Paginator->sort('codi_postal') ?></th>
                    <th><?= $this->Paginator->sort('poblacio') ?></th>
                    <th><?= $this->Paginator->sort('comarca') ?></th>
                    <th><?= $this->Paginator->sort('provincia') ?></th>
                    <th><?= $this->Paginator->sort('pais') ?></th>
                    <th><?= $this->Paginator->sort('data_afiliacio') ?></th>
                    <th><?= $this->Paginator->sort('centre_treball') ?></th>
                    <th><?= $this->Paginator->sort('federacio') ?></th>
                    <th><?= $this->Paginator->sort('sectorial') ?></th>
                    <th><?= $this->Paginator->sort('activitat') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('situacio_personal') ?></th>
                    <th><?= $this->Paginator->sort('relacio') ?></th>
                    <th><?= $this->Paginator->sort('grup') ?></th>
                    <th><?= $this->Paginator->sort('situacio') ?></th>
                    <th><?= $this->Paginator->sort('delegat') ?></th>
                    <th><?= $this->Paginator->sort('empresa') ?></th>
                    <th><?= $this->Paginator->sort('email_professional') ?></th>
                    <th><?= $this->Paginator->sort('territorial') ?></th>
                    <th><?= $this->Paginator->sort('ocupacio') ?></th>
                    <th><?= $this->Paginator->sort('tipus_treballador') ?></th>
                    <th><?= $this->Paginator->sort('cos_docent') ?></th>
                    <th><?= $this->Paginator->sort('seccio_sindical') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($afiliats as $afiliat): ?>
                <tr>
                    <td><?= $this->Number->format($afiliat->id) ?></td>
                    <td><?= $this->Number->format($afiliat->num) ?></td>
                    <td><?= h($afiliat->sexe) ?></td>
                    <td><?= h($afiliat->data_naixement) ?></td>
                    <td><?= h($afiliat->codi_postal) ?></td>
                    <td><?= h($afiliat->poblacio) ?></td>
                    <td><?= h($afiliat->comarca) ?></td>
                    <td><?= h($afiliat->provincia) ?></td>
                    <td><?= h($afiliat->pais) ?></td>
                    <td><?= h($afiliat->data_afiliacio) ?></td>
                    <td><?= h($afiliat->centre_treball) ?></td>
                    <td><?= h($afiliat->federacio) ?></td>
                    <td><?= h($afiliat->sectorial) ?></td>
                    <td><?= h($afiliat->activitat) ?></td>
                    <td><?= h($afiliat->email) ?></td>
                    <td><?= h($afiliat->situacio_personal) ?></td>
                    <td><?= h($afiliat->relacio) ?></td>
                    <td><?= h($afiliat->grup) ?></td>
                    <td><?= h($afiliat->situacio) ?></td>
                    <td><?= h($afiliat->delegat) ?></td>
                    <td><?= h($afiliat->empresa) ?></td>
                    <td><?= h($afiliat->email_professional) ?></td>
                    <td><?= h($afiliat->territorial) ?></td>
                    <td><?= h($afiliat->ocupacio) ?></td>
                    <td><?= h($afiliat->tipus_treballador) ?></td>
                    <td><?= h($afiliat->cos_docent) ?></td>
                    <td><?= h($afiliat->seccio_sindical) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $afiliat->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $afiliat->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $afiliat->id], ['confirm' => __('Are you sure you want to delete # {0}?', $afiliat->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
