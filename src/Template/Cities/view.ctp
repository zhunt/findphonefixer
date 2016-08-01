<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit City'), ['action' => 'edit', $city->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete City'), ['action' => 'delete', $city->id], ['confirm' => __('Are you sure you want to delete # {0}?', $city->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Neighbourhoods'), ['controller' => 'Neighbourhoods', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Neighbourhood'), ['controller' => 'Neighbourhoods', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cities view large-9 medium-8 columns content">
    <h3><?= h($city->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($city->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($city->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Page Url') ?></th>
            <td><?= h($city->page_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Google Locality') ?></th>
            <td><?= h($city->google_locality) ?></td>
        </tr>
        <tr>
            <th><?= __('Seo Title') ?></th>
            <td><?= h($city->seo_title) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= $city->has('image') ? $this->Html->link($city->image->name, ['controller' => 'Images', 'action' => 'view', $city->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Province') ?></th>
            <td><?= $city->has('province') ? $this->Html->link($city->province->name, ['controller' => 'Provinces', 'action' => 'view', $city->province->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Country') ?></th>
            <td><?= $city->has('country') ? $this->Html->link($city->country->name, ['controller' => 'Countries', 'action' => 'view', $city->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($city->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($city->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($city->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($city->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Geo Cords') ?></h4>
        <?= $this->Text->autoParagraph(h($city->geo_cords)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Neighbourhoods') ?></h4>
        <?php if (!empty($city->neighbourhoods)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Page Url') ?></th>
                <th><?= __('Google Administrative Area Level 1') ?></th>
                <th><?= __('Google Administrative Area Level 2') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Seo Title') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($city->neighbourhoods as $neighbourhoods): ?>
            <tr>
                <td><?= h($neighbourhoods->id) ?></td>
                <td><?= h($neighbourhoods->name) ?></td>
                <td><?= h($neighbourhoods->slug) ?></td>
                <td><?= h($neighbourhoods->page_url) ?></td>
                <td><?= h($neighbourhoods->google_administrative_area_level_1) ?></td>
                <td><?= h($neighbourhoods->google_administrative_area_level_2) ?></td>
                <td><?= h($neighbourhoods->description) ?></td>
                <td><?= h($neighbourhoods->seo_title) ?></td>
                <td><?= h($neighbourhoods->city_id) ?></td>
                <td><?= h($neighbourhoods->created) ?></td>
                <td><?= h($neighbourhoods->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Neighbourhoods', 'action' => 'view', $neighbourhoods->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Neighbourhoods', 'action' => 'edit', $neighbourhoods->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Neighbourhoods', 'action' => 'delete', $neighbourhoods->id], ['confirm' => __('Are you sure you want to delete # {0}?', $neighbourhoods->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Venues') ?></h4>
        <?php if (!empty($city->venues)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Seo Title') ?></th>
                <th><?= __('Seo Desc') ?></th>
                <th><?= __('Page Url') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Province Id') ?></th>
                <th><?= __('Country Id') ?></th>
                <th><?= __('City Id') ?></th>
                <th><?= __('Geo Cords') ?></th>
                <th><?= __('Neighbourhood Id') ?></th>
                <th><?= __('Establishment Type Id') ?></th>
                <th><?= __('Flag Mall') ?></th>
                <th><?= __('Flag Closed') ?></th>
                <th><?= __('Inside Venue Id') ?></th>
                <th><?= __('Phone 1') ?></th>
                <th><?= __('Phone 2') ?></th>
                <th><?= __('Website Url') ?></th>
                <th><?= __('Address') ?></th>
                <th><?= __('Hours Sun') ?></th>
                <th><?= __('Hours Mon') ?></th>
                <th><?= __('Hours Tue') ?></th>
                <th><?= __('Hours Wed') ?></th>
                <th><?= __('Hours Thu') ?></th>
                <th><?= __('Hours Fri') ?></th>
                <th><?= __('Hours Sat') ?></th>
                <th><?= __('Hours Holidays') ?></th>
                <th><?= __('User Rating') ?></th>
                <th><?= __('User Votes') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($city->venues as $venues): ?>
            <tr>
                <td><?= h($venues->id) ?></td>
                <td><?= h($venues->name) ?></td>
                <td><?= h($venues->slug) ?></td>
                <td><?= h($venues->seo_title) ?></td>
                <td><?= h($venues->seo_desc) ?></td>
                <td><?= h($venues->page_url) ?></td>
                <td><?= h($venues->description) ?></td>
                <td><?= h($venues->province_id) ?></td>
                <td><?= h($venues->country_id) ?></td>
                <td><?= h($venues->city_id) ?></td>
                <td><?= h($venues->geo_cords) ?></td>
                <td><?= h($venues->neighbourhood_id) ?></td>
                <td><?= h($venues->establishment_type_id) ?></td>
                <td><?= h($venues->flag_mall) ?></td>
                <td><?= h($venues->flag_closed) ?></td>
                <td><?= h($venues->inside_venue_id) ?></td>
                <td><?= h($venues->phone_1) ?></td>
                <td><?= h($venues->phone_2) ?></td>
                <td><?= h($venues->website_url) ?></td>
                <td><?= h($venues->address) ?></td>
                <td><?= h($venues->hours_sun) ?></td>
                <td><?= h($venues->hours_mon) ?></td>
                <td><?= h($venues->hours_tue) ?></td>
                <td><?= h($venues->hours_wed) ?></td>
                <td><?= h($venues->hours_thu) ?></td>
                <td><?= h($venues->hours_fri) ?></td>
                <td><?= h($venues->hours_sat) ?></td>
                <td><?= h($venues->hours_holidays) ?></td>
                <td><?= h($venues->user_rating) ?></td>
                <td><?= h($venues->user_votes) ?></td>
                <td><?= h($venues->created) ?></td>
                <td><?= h($venues->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Venues', 'action' => 'view', $venues->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Venues', 'action' => 'edit', $venues->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Venues', 'action' => 'delete', $venues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $venues->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
