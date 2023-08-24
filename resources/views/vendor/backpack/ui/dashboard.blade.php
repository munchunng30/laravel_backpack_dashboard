@extends(backpack_view('blank'))

{{-- @php
    $widgets['before_content'][] = [
        'type'        => 'jumbotron',
        'heading'     => trans('backpack::base.welcome'),
        'content'     => trans('backpack::base.use_sidebar'),
        'button_link' => backpack_url('logout'),
        'button_text' => trans('backpack::base.logout'),
    ];
@endphp --}}

@php
$widgets['before_content'][] = [
    'type'         => 'alert',
    'class'        => 'alert alert-light mb-2 bg-dark',
    'heading'      => 'Welcome to <b>Digital Collaboration System (DCS)</b> Demo.',
    'content'      => 'DCS provides solutions to digitize the entire wealth management process, encompassing client onboarding, transaction management, dashboard, and reporting by leveraging advanced digital technologies and implementing a state-of-the-art digital wealth platform.',
    'close_button' => true, // show close button or not
];

$widgets['before_content'][] = [
    'type'    => 'div',
    'class'   => 'row',
    'content' => [ // widgets
        ['type' => 'progress_white', 
        'class'       => 'card text-white bg-primary mb-2',
        'value'       => 'RM 750,000.00',
        'description' => 'Total AUM',
        'progress'    => 75, // integer
        'hint'        => 'RM 250,000 until next milestone.',
        ],
        ['type' => 'progress_white', 
        'class'       => 'card text-white bg-secondary mb-2',
        'value'       => 'RM 10,888.00',
        'description' => 'Average Sale Price',
        'progress'    => 55, // integer
        'hint'        => 'Out of 25 transactions',
        ],
        ['type' => 'progress_white', 
        'class'       => 'card text-white bg-success mb-2',
        'value'       => '24 Transactions',
        'description' => 'Total Transactions This Month',
        'progress'    => 55, // integer
        'hint'        => '26 more transactions to hit target',
        ],
        ['type' => 'progress_white', 
        'class'       => 'card text-white bg-warning mb-2',
        'value'       => '0 Customer(s)',
        'description' => 'Total New Customers This Month',
        'progress'    => 55, // integer
        'hint'        => 'Please Work Harder!!!',
        ],
        ['type' => 'card', 
            'content' => ['header' => 'Latest Market News',
                          'body' => '<img width="400" height="150" src="https://apicms.thestar.com.my/uploads/images/2023/08/23/2245514.jpeg"></img><br>
                            Gas Malaysia remains attractive dividend play (Wednesday, 23 Aug 2023)<p>
                            PETALING JAYA: Gas Malaysia Bhd remains an attractive dividend play, 
                            despite expectations of lower earnings. Analysts n…</p>
                            <a href="https://www.thestar.com.my/business/business-news/2023/08/23/gas-malaysia-remains-attractive-dividend-play" target="_blank">Click Here For Details</a>'] 
        ],
    ]
];


@endphp

@section('content')

@endsection