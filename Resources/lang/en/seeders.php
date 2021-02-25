<?php
use Illuminate\Support\Str;

return [
    'data_rows'  => [
        'unique_id'        => 'Unique ID',
        'author_id'        => 'User ID',
        'author'           => 'User',
        'avatar'           => 'Avatar',
        'id'               => 'ID',
        'name'             => 'Name',
        'title'            => 'Title',
        'order'            => 'Order',
        'slug'             => 'Slug',
        'status'           => 'Status',
        'title'            => 'Title',
        'display_name'     => 'Display Name',
        'created_at'       => 'Created At',
        'updated_at'       => 'Updated At',
    ],
    'data_types' => [
        'support' => [
            'singular' => Str::singular('Support'),
            'plural'   => Str::plural('Support'),
        ],
    ],
    'menu_items' => [
        'support'   => 'Support',
    ],
];