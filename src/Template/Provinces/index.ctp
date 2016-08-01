<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Province'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="provinces index large-9 medium-8 columns content">
    <h3><?= __('Provinces') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('slug') ?></th>
                <th><?= $this->Paginator->sort('page_url') ?></th>
                <th><?= $this->Paginator->sort('google_administrative_area_level_1') ?></th>
                <th><?= $this->Paginator->sort('google_administrative_area_level_2') ?></th>
                <th><?= $this->Paginator->sort('seo_title') ?></th>
                <th><?= $this->Paginator->sort('country_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($provinces as $province): ?>
            <tr>
                <td><?= $this->Number->format($province->id) ?></td>
                <td><?= h($province->name) ?></td>
                <td><?= h($province->slug) ?></td>
                <td><?= h($province->page_url) ?></td>
                <td><?= h($province->google_administrative_area_level_1) ?></td>
                <td><?= h($province->google_administrative_area_level_2) ?></td>
                <td><?= h($province->seo_title) ?></td>
                <td><?= $province->has('country') ? $this->Html->link($province->country->name, ['controller' => 'Countries', 'action' => 'view', $province->country->id]) : '' ?></td>
                <td><?= h($province->created) ?></td>
                <td><?= h($province->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $province->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $province->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $province->id], ['confirm' => __('Are you sure you want to delete # {0}?', $province->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
