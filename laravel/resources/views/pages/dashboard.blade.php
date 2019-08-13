@extends('layouts.default')
@section('content')
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar collapse in" style="">
    <ul class="nav menu">
        <li class="active">
            <a href="#">Dashboard</a>
        </li>
        <li>
            <a href="#">Customers</a>
        </li>

        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-gift">
                Gift Card </a>
            <ul class="children  collapse " id="sub-item-gift">
                <li>
                    <a href="#">
                        Add Gift Card </a>
                </li>
                <li>
                    <a href="#">
                        List Gift Card </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#">Debit</a>
        </li>

        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-sales">
                Sales </a>
            <ul class="children  collapse " id="sub-item-sales">
                <li>
                    <a href="#">
                        Today's Sales </a>
                </li>
                <li>
                    <a href="#">
                        Opened Bill </a>
                </li>
            </ul>
        </li>

        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-reports">
                Reports </a>
            <ul class="children  collapse " id="sub-item-reports">
                <li>
                    <a href="#">
                        Sales Report </a>
                </li>

                <li>
                    <a href="#">
                        Sold By Product </a>
                </li>
            </ul>
        </li>



        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-expenses">
                Expenses </a>
            <ul class="children  collapse " id="sub-item-expenses">
                <li>
                    <a href="#">
                        Expenses </a>
                    <a href="#">
                        Expenses Category </a>
                </li>
            </ul>
        </li>



        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-pnlreport">
                Profit &amp; Loss </a>
            <ul class="children  collapse " id="sub-item-pnlreport">
                <li>
                    <a href="#">
                        Profit &amp; Loss </a>
                    <a href="#">
                        Profit &amp; Loss Report </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#">POS</a>
        </li>

        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-return">
                Return Order </a>
            <ul class="children  collapse " id="sub-item-return">
                <li>
                    <a href="#">
                        Create Return Order </a>
                </li>
                <li>
                    <a href="#">
                        Return Order Report </a>
                </li>
            </ul>
        </li>



        <li>
            <a href="#">Inventory</a>
        </li>

        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-product">
                Products </a>
            <ul class="children  collapse " id="sub-item-product">
                <li>
                    <a href="#">
                        List Products </a>
                </li>
                <li>
                    <a href="#">
                        Print Product Label </a>
                </li>
                <li>
                    <a href="#">
                        Product Category </a>
                </li>
            </ul>
        </li>


        <li>
            <a href="#">Purchase Order</a>
        </li>

        <li class="parent">
            <a data-toggle="collapse" href="#sub-item-1">
                Setting </a>
            <ul class="children  collapse " id="sub-item-1">
                <li>
                    <a href="#">
                        Outlets </a>
                </li>
                <li>
                    <a href="#">
                        Users </a>
                </li>
                <li>
                    <a href="#">
                        Suppliers </a>
                </li>
                <li>
                    <a href="#">
                        System Setting </a>
                </li>
                <li>
                    <a href="#">
                        Payment Methods </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
    </ul>

</div>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Dashboard</h1>
        </div>
    </div>
    <!--/.row-->

    <div class="row">
        <div class="col-xs-6 col-md-2">
            <div class="panel panel-default">
                <a href="#" style="text-decoration: none">
                    <div class="panel-body easypiechart-panel" style="padding-bottom: 30px;">
                        <h4>Point of Sales</h4>
                        <i class="icono-tiles" style="color: #30a5ff;"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-md-2">
            <div class="panel panel-default">
                <a href="#" style="text-decoration: none">
                    <div class="panel-body easypiechart-panel" style="padding-bottom: 30px;">
                        <h4>Sales</h4>
                        <i class="icono-cart" style="color: #30a5ff;"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-md-2">
            <div class="panel panel-default">
                <a href="#" style="text-decoration: none">
                    <div class="panel-body easypiechart-panel" style="padding-bottom: 30px;">
                        <h4>Reports</h4>
                        <i class="icono-barChart" style="color: #30a5ff;"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-md-2">
            <div class="panel panel-default">
                <a href="#" style="text-decoration: none">
                    <div class="panel-body easypiechart-panel" style="padding-bottom: 30px;">
                        <h4>Outlets</h4>
                        <i class="icono-market" style="color: #30a5ff;"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-md-2">
            <div class="panel panel-default">
                <a href="#" style="text-decoration: none;">
                    <div class="panel-body easypiechart-panel" style="padding-bottom: 30px;">
                        <h4>Users</h4>
                        <i class="icono-user" style="color: #30a5ff;"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-xs-6 col-md-2">
            <div class="panel panel-default">
                <a href="#" style="text-decoration: none;">
                    <div class="panel-body easypiechart-panel" style="padding-bottom: 30px;">
                        <h4>System Setting</h4>
                        <i class="icono-gear" style="color: #30a5ff;"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--/.row-->



    <script src="http://localhost/Version4.0/Project/assets/js/highcharts.js"></script>
    <script src="http://localhost/Version4.0/Project/assets/js/exporting.js"></script>
    <script type="text/javascript">
        $(document).on('ready', function () {
            $(function () {
                $('#sales_chart').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: 'Monthly Sales by Outlets'
                    },
                    subtitle: {
                        text: ''
                    },
                    xAxis: {
                        categories: [
                            'Aug 2019', 'Jul 2019', 'Jun 2019', 'May 2019', 'Apr 2019',
                            'Mar 2019', 'Feb 2019', 'Jan 2019', 'Dec 2018', 'Nov 2018',
                            'Oct 2018', 'Sep 2018',
                        ],
                        crosshair: true
                    },
                    yAxis: {
                        min: 0,
                        title: {
                            text: 'Amount (SGD)'
                        }
                    },
                    tooltip: {
                        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                            '<td style="padding:0"><b> {point.y:.2f}</b></td></tr>',
                        footerFormat: '</table>',
                        shared: true,
                        useHTML: true
                    },
                    plotOptions: {
                        column: {
                            pointPadding: 0.2,
                            borderWidth: 0
                        }
                    },
                    series: [{
                            name: 'Uniqlo - Bugis Outlet',
                            data: [
                                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                            ]
                        },
                        {
                            name: 'Uniqlo - Changi Outlet',
                            data: [
                                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                            ]
                        },
                        {
                            name: 'Uniqlo - NEX Outlet',
                            data: [
                                0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0,
                            ]
                        },
                    ]
                });
            });
        });

    </script>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <!-- <div class="panel-heading">Sales Chart</div> -->
                <div class="panel-body">

                    <div id="sales_chart" style="min-width: 310px; height: 400px;" data-highcharts-chart="0">
                        <div class="highcharts-container" id="highcharts-0"
                            style="position: relative; overflow: hidden; width: 1033px; height: 400px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                            <svg version="1.1"
                                style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;"
                                xmlns="http://www.w3.org/2000/svg" width="1033" height="400">
                                <desc>Created with Highcharts 4.2.6</desc>
                                <defs>
                                    <clipPath id="highcharts-1">
                                        <rect x="0" y="0" width="963" height="266"></rect>
                                    </clipPath>
                                </defs>
                                <rect x="0" y="0" width="1033" height="400" fill="#FFFFFF"
                                    class=" highcharts-background"></rect>
                                <g class="highcharts-grid"></g>
                                <g class="highcharts-grid">
                                    <path fill="none" d="M 60 186.5 L 1023 186.5" stroke="#D8D8D8" stroke-width="1"
                                        opacity="1"></path>
                                </g>
                                <g class="highcharts-axis">
                                    <path fill="none" d="M 139.5 319 L 139.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 220.5 319 L 220.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 300.5 319 L 300.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 380.5 319 L 380.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 460.5 319 L 460.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 541.5 319 L 541.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 621.5 319 L 621.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 701.5 319 L 701.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 781.5 319 L 781.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 862.5 319 L 862.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 942.5 319 L 942.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 1023.5 319 L 1023.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 59.5 319 L 59.5 329" stroke="#C0D0E0" stroke-width="1"
                                        opacity="1"></path>
                                    <path fill="none" d="M 60 319.5 L 1023 319.5" stroke="#C0D0E0" stroke-width="1">
                                    </path>
                                </g>
                                <g class="highcharts-axis"><text x="27.984375" text-anchor="middle"
                                        transform="translate(0,0) rotate(270 27.984375 186)"
                                        class=" highcharts-yaxis-title" style="color:#707070;fill:#707070;" y="186">
                                        <tspan>Amount (SGD)</tspan>
                                    </text></g>
                                <g class="highcharts-series-group">
                                    <g class="highcharts-series highcharts-series-0 highcharts-tracker"
                                        transform="translate(60,53) scale(1 1)" style="" clip-path="url(#highcharts-1)">
                                        <rect x="19" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="100" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="180" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="260" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="340" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="421" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="501" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="581" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="661" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="742" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="822" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                        <rect x="902" y="134" width="10" height="0" fill="#7cb5ec" rx="0" ry="0"></rect>
                                    </g>
                                    <g class="highcharts-markers highcharts-series-0"
                                        transform="translate(60,53) scale(1 1)" clip-path="none"></g>
                                    <g class="highcharts-series highcharts-series-1 highcharts-tracker"
                                        transform="translate(60,53) scale(1 1)" style="" clip-path="url(#highcharts-1)">
                                        <rect x="35" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="116" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="196" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="276" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="356" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="437" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="517" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="597" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="677" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="758" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="838" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                        <rect x="918" y="134" width="10" height="0" fill="#434348" rx="0" ry="0"></rect>
                                    </g>
                                    <g class="highcharts-markers highcharts-series-1"
                                        transform="translate(60,53) scale(1 1)" clip-path="none"></g>
                                    <g class="highcharts-series highcharts-series-2 highcharts-tracker"
                                        transform="translate(60,53) scale(1 1)" style="" clip-path="url(#highcharts-1)">
                                        <rect x="51" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="132" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="212" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="292" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="372" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="453" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="533" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="613" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="693" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="774" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="854" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                        <rect x="934" y="134" width="10" height="0" fill="#90ed7d" rx="0" ry="0"></rect>
                                    </g>
                                    <g class="highcharts-markers highcharts-series-2"
                                        transform="translate(60,53) scale(1 1)" clip-path="none"></g>
                                </g>
                                <g class="highcharts-button" style="cursor:default;" stroke-linecap="round"
                                    transform="translate(999,10)">
                                    <title>Chart context menu</title>
                                    <rect x="0.5" y="0.5" width="24" height="22" fill="white" stroke="none"
                                        stroke-width="1" rx="2" ry="2"></rect>
                                    <path fill="#E0E0E0" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                                        stroke="#666" stroke-width="3"></path><text x="0"
                                        style="color:black;fill:black;" y="12"></text>
                                </g><text x="517" text-anchor="middle" class="highcharts-title"
                                    style="color:#333333;font-size:18px;fill:#333333;width:969px;" y="24">
                                    <tspan>Monthly Sales by Outlets</tspan>
                                </text>
                                <g class="highcharts-legend" transform="translate(263,356)">
                                    <g>
                                        <g>
                                            <g class="highcharts-legend-item" transform="translate(8,3)"><text x="21"
                                                    style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                                    text-anchor="start" y="15">
                                                    <tspan>Uniqlo - Bugis Outlet</tspan>
                                                </text>
                                                <rect x="0" y="4" width="16" height="12" fill="#7cb5ec"></rect>
                                            </g>
                                            <g class="highcharts-legend-item" transform="translate(177.875,3)"><text
                                                    x="21" y="15"
                                                    style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                                    text-anchor="start">
                                                    <tspan>Uniqlo - Changi Outlet</tspan>
                                                </text>
                                                <rect x="0" y="4" width="16" height="12" fill="#434348"></rect>
                                            </g>
                                            <g class="highcharts-legend-item" transform="translate(357.34375,3)"><text
                                                    x="21" y="15"
                                                    style="color:#333333;font-size:12px;font-weight:bold;cursor:pointer;fill:#333333;"
                                                    text-anchor="start">
                                                    <tspan>Uniqlo - NEX Outlet</tspan>
                                                </text>
                                                <rect x="0" y="4" width="16" height="12" fill="#90ed7d"></rect>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                                <g class="highcharts-axis-labels highcharts-xaxis-labels"><text x="100.125"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Aug 2019</tspan>
                                    </text><text x="180.375"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Jul 2019</tspan>
                                    </text><text x="260.625"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Jun 2019</tspan>
                                    </text><text x="340.875"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>May 2019</tspan>
                                    </text><text x="421.125"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Apr 2019</tspan>
                                    </text><text x="501.375"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Mar 2019</tspan>
                                    </text><text x="581.625"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Feb 2019</tspan>
                                    </text><text x="661.875"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Jan 2019</tspan>
                                    </text><text x="742.125"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Dec 2018</tspan>
                                    </text><text x="822.375"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Nov 2018</tspan>
                                    </text><text x="902.625"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Oct 2018</tspan>
                                    </text><text x="982.875"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:74px;text-overflow:clip;"
                                        text-anchor="middle" transform="translate(0,0)" y="338" opacity="1">
                                        <tspan>Sep 2018</tspan>
                                    </text></g>
                                <g class="highcharts-axis-labels highcharts-yaxis-labels"><text x="45"
                                        style="color:#606060;cursor:default;font-size:11px;fill:#606060;width:331px;text-overflow:clip;"
                                        text-anchor="end" transform="translate(0,0)" y="189" opacity="1">
                                        <tspan>0</tspan>
                                    </text></g>
                                <g class="highcharts-tooltip"
                                    style="cursor:default;padding:0;pointer-events:none;white-space:nowrap;"
                                    transform="translate(0,-9000000000)">
                                    <path fill="none"
                                        d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                        isShadow="true" stroke="black" stroke-opacity="0.049999999999999996"
                                        stroke-width="5" transform="translate(1, 1)"></path>
                                    <path fill="none"
                                        d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                        isShadow="true" stroke="black" stroke-opacity="0.09999999999999999"
                                        stroke-width="3" transform="translate(1, 1)"></path>
                                    <path fill="none"
                                        d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5"
                                        isShadow="true" stroke="black" stroke-opacity="0.15" stroke-width="1"
                                        transform="translate(1, 1)"></path>
                                    <path fill="rgba(249, 249, 249, .85)"
                                        d="M 3.5 0.5 L 13.5 0.5 C 16.5 0.5 16.5 0.5 16.5 3.5 L 16.5 13.5 C 16.5 16.5 16.5 16.5 13.5 16.5 L 3.5 16.5 C 0.5 16.5 0.5 16.5 0.5 13.5 L 0.5 3.5 C 0.5 0.5 0.5 0.5 3.5 0.5">
                                    </path>
                                </g><text x="1023" text-anchor="end"
                                    style="cursor:pointer;color:#909090;font-size:9px;fill:#909090;" y="395"></text>
                            </svg>
                            <div class="highcharts-tooltip"
                                style="position: absolute; left: 0px; top: -9e+09px; opacity: 1;"><span
                                    style="position: absolute; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; white-space: nowrap; color: rgb(51, 51, 51); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>

</div>
@stop
