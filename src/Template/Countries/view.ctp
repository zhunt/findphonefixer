<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Country'), ['action' => 'edit', $country->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Country'), ['action' => 'delete', $country->id], ['confirm' => __('Are you sure you want to delete # {0}?', $country->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cities'), ['controller' => 'Cities', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New City'), ['controller' => 'Cities', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Provinces'), ['controller' => 'Provinces', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Province'), ['controller' => 'Provinces', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Venues'), ['controller' => 'Venues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Venue'), ['controller' => 'Venues', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="countries view large-9 medium-8 columns content">
    <h3><?= h($country->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($country->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Slug') ?></th>
            <td><?= h($country->slug) ?></td>
        </tr>
        <tr>
            <th><?= __('Page Url') ?></th>
            <td><?= h($country->page_url) ?></td>
        </tr>
        <tr>
            <th><?= __('Google Administrative Area Level 1') ?></th>
            <td><?= h($country->google_administrative_area_level_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Google Country') ?></th>
            <td><?= h($country->google_country) ?></td>
        </tr>
        <tr>
            <th><?= __('Country Seo Title') ?></th>
            <td><?= h($country->country_seo_title) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($country->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($country->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($country->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Country Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($country->country_desc)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Cities') ?></h4>
        <?php if (!empty($country->cities)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Name') ?></th>
                <th><?= __('Slug') ?></th>
                <th><?= __('Page Url') ?></th>
                <th><?= __('Google Locality') ?></th>
                <th><?= __('Description') ?></th>
                <th><?= __('Seo Title') ?></th>
                <th><?= __('Image Id') ?></th>
                <th><?= __('Geo Cords') ?></th>
                <th><?= __('Province Id') ?></th>
                <th><?= __('Country Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->cities as $cities): ?>
            <tr>
                <td><?= h($cities->id) ?></td>
                <td><?= h($cities->name) ?></td>
                <td><?= h($cities->slug) ?></td>
                <td><?= h($cities->page_url) ?></td>
                <td><?= h($cities->google_locality) ?></td>
                <td><?= h($cities->description) ?></td>
                <td><?= h($cities->seo_title) ?></td>
                <td><?= h($cities->image_id) ?></td>
                <td><?= h($cities->geo_cords) ?></td>
                <td><?= h($cities->province_id) ?></td>
                <td><?= h($cities->country_id) ?></td>
                <td><?= h($cities->created) ?></td>
                <td><?= h($cities->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cities', 'action' => 'view', $cities->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cities', 'action' => 'edit', $cities->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cities', 'action' => 'delete', $cities->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cities->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Provinces') ?></h4>
        <?php if (!empty($country->provinces)): ?>
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
                <th><?= __('Country Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($country->provinces as $provinces): ?>
            <tr>
                <td><?= h($provinces->id) ?></td>
                <td><?= h($provinces->name) ?></td>
                <td><?= h($provinces->slug) ?></td>
                <td><?= h($provinces->page_url) ?></td>
                <td><?= h($provinces->google_administrative_area_level_1) ?></td>
                <td><?= h($provinces->google_administrative_area_level_2) ?></td>
                <td><?= h($provinces->description) ?></td>
                <td><?= h($provinces->seo_title) ?></td>
                <td><?= h($provinces->country_id) ?></td>
                <td><?= h($provinces->created) ?></td>
                <td><?= h($provinces->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Provinces', 'action' => 'view', $provinces->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Provinces', 'action' => 'edit', $provinces->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Provinces', 'action' => 'delete', $provinces->id], ['confirm' => __('Are you sure you want to delete # {0}?', $provinces->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Venues') ?></h4>
        <?php if (!empty($country->venues)): ?>
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
            <?php foreach ($country->venues as $venues): ?>
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
