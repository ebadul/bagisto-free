@extends('shopadmin_view::shopadmin.layouts.master')

@section('page_title')
    {{ __('admin::app.dashboard.title') }}
@stop

@section('content-wrapper')

    <div class="content full-page dashboard col-12">
        <div class="page-header">
            
            <div class="page-title mt-5">
                <h1>{{ __('admin::app.dashboard.title') }}</h1>
            </div>

            <div class="page-action">
                <date-filter></date-filter>
            </div>
        </div>

        <div class="page-content">

            <div class="dashboard-stats">

                <div class="row mt-3"><!-- start one -->
                    <div class="col-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('admin::app.dashboard.total-customers') }}</h5>
                                
                                     <h3 class="row mt-4">
                                     
                                        <span class="col-6"> {{ $statistics['total_customers']['current'] }} </span>

                                        <span class="col-6 text-right">
                                            @if ($statistics['total_customers']['progress'] < 0)
                                                <span class="icon graph-down-icon"></span>
                                                {{ __('admin::app.dashboard.decreased', [
                                                        'progress' => -number_format($statistics['total_customers']['progress'], 1)
                                                    ])
                                                }}
                                            @else
                                                <span class="icon graph-up-icon"></span>
                                                {{ __('admin::app.dashboard.increased', [
                                                        'progress' => number_format($statistics['total_customers']['progress'], 1)
                                                    ])
                                                }}
                                            @endif
                                        </span>
                                 </h3>
                               
                            </div>
                        </div>
                    </div><!-- end col-4 -->
                    <div class="col-4">
                         <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ __('admin::app.dashboard.total-orders') }}
                                </h5>
                                
                                <h3 class="row mt-4">
                                    <span class="col-6"> 
                                        {{ $statistics['total_orders']['current'] }}
                                    </span>

                                    <span class="col-6 text-right">
                                        @if ($statistics['total_orders']['progress'] < 0)
                                            <span class="icon graph-down-icon"></span>
                                            {{ __('admin::app.dashboard.decreased', [
                                                    'progress' => -number_format($statistics['total_orders']['progress'], 1)
                                                ])
                                            }}
                                        @else
                                            <span class="icon graph-up-icon"></span>
                                            {{ __('admin::app.dashboard.increased', [
                                                    'progress' => number_format($statistics['total_orders']['progress'], 1)
                                                ])
                                            }}
                                        @endif
                                    </span>
                                 </h3>
                               
                            </div>
                        </div>
                    </div><!-- end col-4 -->
                    <div class="col-4">
                         <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> {{ __('admin::app.dashboard.total-sale') }}</h5>
                                
                                     <h3 class="row mt-4">
                                     
                                        <span class="col-6"> {{ core()->formatBasePrice($statistics['total_sales']['current']) }} </span>

                                        <span class="col-6 text-right">
                                            @if ($statistics['total_sales']['progress'] < 0)
                                                <span class="icon graph-down-icon"></span>
                                                {{ __('admin::app.dashboard.decreased', [
                                                        'progress' => -number_format($statistics['total_sales']['progress'], 1)
                                                    ])
                                                }}
                                            @else
                                                <span class="icon graph-up-icon"></span>
                                                {{ __('admin::app.dashboard.increased', [
                                                        'progress' => number_format($statistics['total_sales']['progress'], 1)
                                                    ])
                                                }}
                                            @endif
                                        </span>
                                 </h3>
                               
                            </div>
                        </div>
                    </div><!-- end col-4 -->
                    <div class="col-4 mt-4">
                         <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ __('admin::app.dashboard.average-sale') }}</h5>
                                     <h3 class="row mt-4">
                                        <span class="col-6"> {{ core()->formatBasePrice($statistics['avg_sales']['current']) }} </span>

                                        <span class="col-6 text-right">
                                            @if ($statistics['avg_sales']['progress'] < 0)
                                                <span class="icon graph-down-icon"></span>
                                                {{ __('admin::app.dashboard.decreased', [
                                                        'progress' => -number_format($statistics['avg_sales']['progress'], 1)
                                                    ])
                                                }}
                                            @else
                                                <span class="icon graph-up-icon"></span>
                                                {{ __('admin::app.dashboard.increased', [
                                                        'progress' => number_format($statistics['avg_sales']['progress'], 1)
                                                    ])
                                                }}
                                            @endif
                                        </span>
                                 </h3>
                               
                            </div>
                        </div>
                    </div><!-- end col-4 -->
                </div><!-- end row one-->
            </div>

            <div class="graph-stats mt-4 row">

                <div class="left-card-container graph col-8">
                    <div class="card" style="overflow: hidden;">
                    <div class="card-body">
                        <div class="card-title" style="margin-bottom: 30px;">
                            {{ __('admin::app.dashboard.sales') }}
                        </div>

                        <div class="card-info" style="height: 100%;">

                            <canvas id="myChart" style="width: 100%; height: 87%"></canvas>

                        </div>
                    </div>
                    </div>
                </div>

                <div class="right-card-container category col-4">
                    <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            {{ __('admin::app.dashboard.top-performing-categories') }}
                        </div>

                        <div class="card-info {{ !count($statistics['top_selling_categories']) ? 'center' : '' }}">
                            <ul>

                                @foreach ($statistics['top_selling_categories'] as $item)

                                    <li>
                                        <a href="{{ route('admin.catalog.categories.edit', $item->category_id) }}">
                                            <div class="description">
                                                <div class="name">
                                                    {{ $item->name }}
                                                </div>

                                                <div class="info">
                                                    {{ __('admin::app.dashboard.product-count', ['count' => $item->total_products]) }}
                                                    &nbsp;.&nbsp;
                                                    {{ __('admin::app.dashboard.sale-count', ['count' => $item->total_qty_invoiced]) }}
                                                </div>
                                            </div>

                                            <span class="icon angle-right-icon"></span>
                                        </a>
                                    </li>

                                @endforeach

                            </ul>

                            @if (! count($statistics['top_selling_categories']))

                                <div class="no-result-found">

                                    <i class="icon no-result-icon"></i>
                                    <p>{{ __('admin::app.common.no-result-found') }}</p>

                                </div>

                            @endif
                        </div>
                    </div>
                    </div>
                </div>

            </div>

            @inject ('productImageHelper', 'Webkul\Product\Helpers\ProductImage')

            <div class="sale-stock mt-4 row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                {{ __('admin::app.dashboard.top-selling-products') }}
                            </div>

                            <div class="card-info {{ !count($statistics['top_selling_products']) ? 'center' : '' }}">
                                <ul>

                                    @foreach ($statistics['top_selling_products'] as $item)

                                        <li>
                                            <a href="{{ route('admin.catalog.products.edit', $item->product_id) }}">
                                                <div class="product image">
                                                    <?php $productBaseImage = $productImageHelper->getProductBaseImage($item->product); ?>

                                                    <img class="item-image" src="{{ $productBaseImage['small_image_url'] }}" />
                                                </div>

                                                <div class="description do-not-cross-arrow">
                                                    <div class="name ellipsis">
                                                        @if (isset($item->name))
                                                            {{ $item->name }}
                                                        @endif
                                                    </div>

                                                    <div class="info">
                                                        {{ __('admin::app.dashboard.sale-count', ['count' => $item->total_qty_invoiced]) }}
                                                    </div>
                                                </div>

                                                <span class="icon angle-right-icon"></span>
                                            </a>
                                        </li>

                                    @endforeach

                                </ul>

                                @if (! count($statistics['top_selling_products']))

                                    <div class="no-result-found">

                                        <i class="icon no-result-icon"></i>
                                        <p>{{ __('admin::app.common.no-result-found') }}</p>

                                    </div>

                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                {{ __('admin::app.dashboard.customer-with-most-sales') }}
                            </div>

                            <div class="card-info {{ !count($statistics['customer_with_most_sales']) ? 'center' : '' }}">
                                <ul>

                                    @foreach ($statistics['customer_with_most_sales'] as $item)

                                        <li>
                                            @if ($item->customer_id)
                                                <a href="{{ route('admin.customer.edit', $item->customer_id) }}">
                                            @endif

                                                <div class="image">
                                                    <span class="icon profile-pic-icon"></span>
                                                </div>

                                                <div class="description do-not-cross-arrow">
                                                    <div class="name ellipsis">
                                                        {{ $item->customer_full_name }}
                                                    </div>

                                                    <div class="info">
                                                        {{ __('admin::app.dashboard.order-count', ['count' => $item->total_orders]) }}
                                                            &nbsp;.&nbsp;
                                                        {{ __('admin::app.dashboard.revenue', [
                                                            'total' => core()->formatBasePrice($item->total_base_grand_total)
                                                            ])
                                                        }}
                                                    </div>
                                                </div>

                                                <span class="icon angle-right-icon"></span>

                                            @if ($item->customer_id)
                                                </a>
                                            @endif
                                        </li>

                                    @endforeach

                                </ul>

                                @if (! count($statistics['customer_with_most_sales']))

                                    <div class="no-result-found">

                                        <i class="icon no-result-icon"></i>
                                        <p>{{ __('admin::app.common.no-result-found') }}</p>

                                    </div>

                                @endif
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-6 mt-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title">
                                {{ __('admin::app.dashboard.stock-threshold') }}
                            </div>

                            <div class="card-info {{ !count($statistics['stock_threshold']) ? 'center' : '' }}">
                                <ul>

                                    @foreach ($statistics['stock_threshold'] as $item)

                                        <li>
                                            <a href="{{ route('admin.catalog.products.edit', $item->product_id) }}">
                                                <div class="image">
                                                    <?php $productBaseImage = $productImageHelper->getProductBaseImage($item->product); ?>

                                                    <img class="item-image" src="{{ $productBaseImage['small_image_url'] }}" />
                                                </div>

                                                <div class="description do-not-cross-arrow">
                                                    <div class="name ellipsis">
                                                        @if (isset($item->product->name))
                                                            {{ $item->product->name }}
                                                        @endif
                                                    </div>

                                                    <div class="info">
                                                        {{ __('admin::app.dashboard.qty-left', ['qty' => $item->total_qty]) }}
                                                    </div>
                                                </div>

                                                <span class="icon angle-right-icon"></span>
                                            </a>
                                        </li>

                                    @endforeach

                                </ul>

                                @if (! count($statistics['stock_threshold']))

                                    <div class="no-result-found">

                                        <i class="icon no-result-icon"></i>
                                        <p>{{ __('admin::app.common.no-result-found') }}</p>

                                    </div>

                                @endif
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- end sale-stock -->
        </div>
    </div>

@stop

@push('scripts')

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>

    <script type="text/x-template" id="date-filter-template">
        <div>
            <div class="control-group date">
                <date @onChange="applyFilter('start', $event)" hide-remove-button="1"><input type="text" class="control" id="start_date" value="{{ $startDate->format('Y-m-d') }}" placeholder="{{ __('admin::app.dashboard.from') }}" v-model="start"/></date>
            </div>

            <div class="control-group date">
                <date @onChange="applyFilter('end', $event)" hide-remove-button="1"><input type="text" class="control" id="end_date" value="{{ $endDate->format('Y-m-d') }}" placeholder="{{ __('admin::app.dashboard.to') }}" v-model="end"/></date>
            </div>
        </div>
    </script>

    <script>
        Vue.component('date-filter', {

            template: '#date-filter-template',

            data: function() {
                return {
                    start: "{{ $startDate->format('Y-m-d') }}",
                    end: "{{ $endDate->format('Y-m-d') }}",
                }
            },

            methods: {
                applyFilter: function(field, date) {
                    this[field] = date;

                    window.location.href = "?start=" + this.start + '&end=' + this.end;
                }
            }
        });

        $(document).ready(function () {

            var ctx = document.getElementById("myChart").getContext('2d');

            var data = @json($statistics['sale_graph']);

            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: data['label'],
                    datasets: [{
                        data: data['total'],
                        backgroundColor: 'rgba(34, 201, 93, 1)',
                        borderColor: 'rgba(34, 201, 93, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false
                    },
                    scales: {
                        xAxes: [{
                            maxBarThickness: 20,
                            gridLines : {
                                display : false,
                                drawBorder: false,
                            },
                            ticks: {
                                beginAtZero: true,
                                fontColor: 'rgba(162, 162, 162, 1)'
                            }
                        }],
                        yAxes: [{
                            gridLines: {
                                drawBorder: false,
                            },
                            ticks: {
                                padding: 20,
                                beginAtZero: true,
                                fontColor: 'rgba(162, 162, 162, 1)'
                            }
                        }]
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                        displayColors: false,
                        callbacks: {
                            label: function(tooltipItem, dataTemp) {
                                return data['formated_total'][tooltipItem.index];
                            }
                        }
                    }
                }
            });
        });
    </script>

@endpush