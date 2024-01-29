<x-dashboard-layout>
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Website Analytics</h3>
                                <div class="nk-block-des text-soft">
                                    <p>Welcome to Analytics Dashboard.</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light" data-bs-toggle="dropdown"><em class="d-none d-sm-inline icon ni ni-calender-date"></em><span><span class="d-none d-md-inline">Last</span> 30 Days</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>Last 30 Days</span></a></li>
                                                            <li><a href="#"><span>Last 6 Months</span></a></li>
                                                            <li><a href="#"><span>Last 1 Years</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-lg-7 col-xxl-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group pb-3 g-2">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Audience Overview</h6>
                                                <p>How have your users, sessions, bounce rate metrics trended.</p>
                                            </div>
                                            <div class="card-tools shrink-0 d-none d-sm-block">
                                                <ul class="nav nav-switch-s2 nav-tabs bg-white">
                                                    <li class="nav-item"><a href="#" class="nav-link">7 D</a></li>
                                                    <li class="nav-item"><a href="#" class="nav-link active">1 M</a></li>
                                                    <li class="nav-item"><a href="#" class="nav-link">3 M</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="analytic-ov">
                                            <div class="analytic-data-group analytic-ov-group g-3">
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Users</div>
                                                    <div class="amount">2.57K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>12.37%</div>
                                                </div>
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Sessions</div>
                                                    <div class="amount">3.98K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>47.74%</div>
                                                </div>
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Users</div>
                                                    <div class="amount">28.49%</div>
                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>12.37%</div>
                                                </div>
                                                <div class="analytic-data analytic-ov-data">
                                                    <div class="title">Users</div>
                                                    <div class="amount">7m 28s</div>
                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>0.35%</div>
                                                </div>
                                            </div>
                                            <div class="analytic-ov-ck">
                                                <canvas class="analytics-line-large" id="analyticOvData"></canvas>
                                            </div>
                                            <div class="chart-label-group ms-5">
                                                <div class="chart-label">01 Jan, 2020</div>
                                                <div class="chart-label d-none d-sm-block">15 Jan, 2020</div>
                                                <div class="chart-label">30 Jan, 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-lg-5 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start pb-3 g-2">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Active Users</h6>
                                                <p>How do your users visited in the time.</p>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Users of this month"></em>
                                            </div>
                                        </div>
                                        <div class="analytic-au">
                                            <div class="analytic-data-group analytic-au-group g-3">
                                                <div class="analytic-data analytic-au-data">
                                                    <div class="title">Monthly</div>
                                                    <div class="amount">9.28K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                                </div>
                                                <div class="analytic-data analytic-au-data">
                                                    <div class="title">Weekly</div>
                                                    <div class="amount">2.69K</div>
                                                    <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                </div>
                                                <div class="analytic-data analytic-au-data">
                                                    <div class="title">Daily (Avg)</div>
                                                    <div class="amount">0.94K</div>
                                                    <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                                </div>
                                            </div>
                                            <div class="analytic-au-ck">
                                                <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                                            </div>
                                            <div class="chart-label-group">
                                                <div class="chart-label">01 Jan, 2020</div>
                                                <div class="chart-label">30 Jan, 2020</div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-lg-5 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group align-start pb-3 g-2">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Website Performance</h6>
                                                <p>How has performend this month.</p>
                                            </div>
                                            <div class="card-tools">
                                                <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Performance of this month"></em>
                                            </div>
                                        </div>
                                        <div class="analytic-wp">
                                            <div class="analytic-wp-group g-3">
                                                <div class="analytic-data analytic-wp-data">
                                                    <div class="analytic-wp-graph">
                                                        <div class="title">Bounce Rate <span>(avg)</span></div>
                                                        <div class="analytic-wp-ck">
                                                            <canvas class="analytics-line-small" id="BounceRateData"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-wp-text">
                                                        <div class="amount amount-sm">23.59%</div>
                                                        <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                                                        <div class="subtitle">vs. last month</div>
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-wp-data">
                                                    <div class="analytic-wp-graph">
                                                        <div class="title">Pageviews <span>(avg)</span></div>
                                                        <div class="analytic-wp-ck">
                                                            <canvas class="analytics-line-small" id="PageviewsData"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-wp-text">
                                                        <div class="amount amount-sm">5.48</div>
                                                        <div class="change down"><em class="icon ni ni-arrow-long-down"></em>-1.48%</div>
                                                        <div class="subtitle">vs. last month</div>
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-wp-data">
                                                    <div class="analytic-wp-graph">
                                                        <div class="title">New Users <span>(avg)</span></div>
                                                        <div class="analytic-wp-ck">
                                                            <canvas class="analytics-line-small" id="NewUsersData"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-wp-text">
                                                        <div class="amount amount-sm">549</div>
                                                        <div class="change up"><em class="icon ni ni-arrow-long-up"></em>6.8%</div>
                                                        <div class="subtitle">vs. last month</div>
                                                    </div>
                                                </div>
                                                <div class="analytic-data analytic-wp-data">
                                                    <div class="analytic-wp-graph">
                                                        <div class="title">Time on Site <span>(avg)</span></div>
                                                        <div class="analytic-wp-ck">
                                                            <canvas class="analytics-line-small" id="TimeOnSiteData"></canvas>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-wp-text">
                                                        <div class="amount amount-sm">3m 35s</div>
                                                        <div class="change up"><em class="icon ni ni-arrow-long-up"></em>1.4%</div>
                                                        <div class="subtitle">vs. last month</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-lg-7 col-xxl-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner mb-n2">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Traffic Channel</h6>
                                                <p>Top traffic channels metrics.</p>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list is-loose traffic-channel-table">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-channel"><span>Channel</span></div>
                                            <div class="nk-tb-col nk-tb-sessions"><span>Sessions</span></div>
                                            <div class="nk-tb-col nk-tb-prev-sessions"><span>Prev Sessions</span></div>
                                            <div class="nk-tb-col nk-tb-change"><span>Change</span></div>
                                            <div class="nk-tb-col nk-tb-trend tb-col-sm text-end"><span>Trend</span></div>
                                        </div><!-- .nk-tb-head -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-channel">
                                                <span class="tb-lead">Organic Search</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-sessions">
                                                <span class="tb-sub tb-amount"><span>4,305</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-prev-sessions">
                                                <span class="tb-sub tb-amount"><span>4,129</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-change">
                                                <span class="tb-sub"><span>4.29%</span> <span class="change up"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-trend text-end">
                                                <div class="traffic-channel-ck ms-auto">
                                                    <canvas class="analytics-line-small" id="OrganicSearchData"></canvas>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-channel">
                                                <span class="tb-lead">Social Media</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-sessions">
                                                <span class="tb-sub tb-amount"><span>859</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-prev-sessions">
                                                <span class="tb-sub tb-amount"><span>936</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-change">
                                                <span class="tb-sub"><span>15.8%</span> <span class="change down"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-trend text-end">
                                                <div class="traffic-channel-ck ms-auto">
                                                    <canvas class="analytics-line-small" id="SocialMediaData"></canvas>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-channel">
                                                <span class="tb-lead">Referrals</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-sessions">
                                                <span class="tb-sub tb-amount"><span>482</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-prev-sessions">
                                                <span class="tb-sub tb-amount"><span>793</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-change">
                                                <span class="tb-sub"><span>41.3%</span> <span class="change down"><em class="icon ni ni-arrow-long-down"></em></span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-trend text-end">
                                                <div class="traffic-channel-ck ms-auto">
                                                    <canvas class="analytics-line-small" id="ReferralsData"></canvas>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-channel">
                                                <span class="tb-lead">Others</span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-sessions">
                                                <span class="tb-sub tb-amount"><span>138</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-prev-sessions">
                                                <span class="tb-sub tb-amount"><span>97</span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-change">
                                                <span class="tb-sub"><span>12.6%</span> <span class="change up"><em class="icon ni ni-arrow-long-up"></em></span></span>
                                            </div>
                                            <div class="nk-tb-col nk-tb-trend text-end">
                                                <div class="traffic-channel-ck ms-auto">
                                                    <canvas class="analytics-line-small" id="OthersData"></canvas>
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Traffic Channel</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="traffic-channel">
                                            <div class="traffic-channel-doughnut-ck">
                                                <canvas class="analytics-doughnut" id="TrafficChannelDoughnutData"></canvas>
                                            </div>
                                            <div class="traffic-channel-group g-2">
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq" data-bg="#3fbd9a"></span><span>Organic Search</span></div>
                                                    <div class="amount">4,305 <small>58.63%</small></div>
                                                </div>
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq" data-bg="#f65c5f"></span><span>Social Media</span></div>
                                                    <div class="amount">859 <small>23.94%</small></div>
                                                </div>
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq" data-bg="#ff947b"></span><span>Referrals</span></div>
                                                    <div class="amount">482 <small>12.94%</small></div>
                                                </div>
                                                <div class="traffic-channel-data">
                                                    <div class="title"><span class="dot dot-lg sq" data-bg="#1b7a7a"></span><span>Others</span></div>
                                                    <div class="amount">138 <small>4.49%</small></div>
                                                </div>
                                            </div><!-- .traffic-channel-group -->
                                        </div><!-- .traffic-channel -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Users by Country</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="analytics-map">
                                            <div class="vector-map" id="worldMap"></div>
                                            <table class="analytics-map-data-list">
                                                <tr class="analytics-map-data">
                                                    <td class="country">United States</td>
                                                    <td class="amount">12,094</td>
                                                    <td class="percent">23.54%</td>
                                                </tr>
                                                <tr class="analytics-map-data">
                                                    <td class="country">India</td>
                                                    <td class="amount">7,984</td>
                                                    <td class="percent">7.16%</td>
                                                </tr>
                                                <tr class="analytics-map-data">
                                                    <td class="country">Turkey</td>
                                                    <td class="amount">6,338</td>
                                                    <td class="percent">6.54%</td>
                                                </tr>
                                                <tr class="analytics-map-data">
                                                    <td class="country">Bangladesh</td>
                                                    <td class="amount">4,749</td>
                                                    <td class="percent">5.29%</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-xxl-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner mb-n2">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Browser Used</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list is-loose">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Browser</span></div>
                                            <div class="nk-tb-col text-end"><span>Users</span></div>
                                            <div class="nk-tb-col"><span>% Users</span></div>
                                            <div class="nk-tb-col tb-col-sm text-end"><span>Bounce Rate</span></div>
                                        </div><!-- .nk-tb-head -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="icon-text">
                                                    <em class="text-primary icon ni ni-globe"></em>
                                                    <span class="tb-lead">Google Chrome</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>1,641</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="progress progress-md progress-alt bg-transparent">
                                                    <div class="progress-bar" data-progress="72.84"></div>
                                                    <div class="progress-amount">72.84%</div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm text-end">
                                                <span class="tb-sub">22.62%</span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="icon-text">
                                                    <em class="text-danger icon ni ni-globe"></em>
                                                    <span class="tb-lead">Mozilla Firefox</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>497</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="progress progress-md progress-alt bg-transparent">
                                                    <div class="progress-bar" data-progress="7.93"></div>
                                                    <div class="progress-amount">7.93%</div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm text-end">
                                                <span class="tb-sub">20.49%</span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="icon-text">
                                                    <em class="text-info icon ni ni-globe"></em>
                                                    <span class="tb-lead">Safari Browser</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>187</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="progress progress-md progress-alt bg-transparent">
                                                    <div class="progress-bar" data-progress="4.87"></div>
                                                    <div class="progress-amount">4.87%</div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm text-end">
                                                <span class="tb-sub">21.34%</span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="icon-text">
                                                    <em class="text-orange icon ni ni-globe"></em>
                                                    <span class="tb-lead">UC Browser</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>96</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="progress progress-md progress-alt bg-transparent">
                                                    <div class="progress-bar" data-progress="2.46"></div>
                                                    <div class="progress-amount">2.46%</div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm text-end">
                                                <span class="tb-sub">20.33%</span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="icon-text">
                                                    <em class="text-blue icon ni ni-globe"></em>
                                                    <span class="tb-lead">Edge / IE</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>28</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="progress progress-md progress-alt bg-transparent">
                                                    <div class="progress-bar" data-progress="1.14"></div>
                                                    <div class="progress-amount">1.14%</div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm text-end">
                                                <span class="tb-sub">21.34%</span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <div class="icon-text">
                                                    <em class="text-purple icon ni ni-globe"></em>
                                                    <span class="tb-lead">Other Browser</span>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>683</span></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="progress progress-md progress-alt bg-transparent">
                                                    <div class="progress-bar" data-progress="10.76"></div>
                                                    <div class="progress-amount">10.76%</div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-sm text-end">
                                                <span class="tb-sub">20.49%</span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner mb-n2">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Pages View by Users</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="nk-tb-list is-compact">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col"><span>Page</span></div>
                                            <div class="nk-tb-col text-end"><span>Page Views</span></div>
                                        </div><!-- .nk-tb-head -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>2,879</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/subscription/index.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>2,094</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/general/index.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>1,634</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/crypto/index.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>1,497</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/invest/index.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>1,349</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/subscription/profile.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>984</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/general/index-crypto.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>879</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/apps/messages/index.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>598</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col">
                                                <span class="tb-sub"><span>/general/index-crypto.html</span></span>
                                            </div>
                                            <div class="nk-tb-col text-end">
                                                <span class="tb-sub tb-amount"><span>436</span></span>
                                            </div>
                                        </div><!-- .nk-tb-item -->
                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card -->
                            </div><!-- .col -->
                            <div class="col-md-6 col-xxl-3">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner h-100 stretch flex-column">
                                        <div class="card-title-group">
                                            <div class="card-title card-title-sm">
                                                <h6 class="title">Sessions by Device</h6>
                                            </div>
                                            <div class="card-tools">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle dropdown-indicator btn btn-sm btn-outline-light btn-white" data-bs-toggle="dropdown">30 Days</a>
                                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><span>7 Days</span></a></li>
                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                            <li><a href="#"><span>30 Days</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="device-status my-auto">
                                            <div class="device-status-ck">
                                                <canvas class="analytics-doughnut" id="deviceStatusData"></canvas>
                                            </div>
                                            <div class="device-status-group">
                                                <div class="device-status-data">
                                                    <em data-color="#6fcdb3" class="icon ni ni-monitor"></em>
                                                    <div class="title">Desktop</div>
                                                    <div class="amount">84.5%</div>
                                                    <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>4.5%</div>
                                                </div>
                                                <div class="device-status-data">
                                                    <em data-color="#f65c5f" class="icon ni ni-mobile"></em>
                                                    <div class="title">Mobile</div>
                                                    <div class="amount">14.2%</div>
                                                    <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>133.2%</div>
                                                </div>
                                                <div class="device-status-data">
                                                    <em data-color="#ff947b" class="icon ni ni-tablet"></em>
                                                    <div class="title">Tablet</div>
                                                    <div class="amount">1.3%</div>
                                                    <div class="change up text-danger"><em class="icon ni ni-arrow-long-up"></em>25.3%</div>
                                                </div>
                                            </div><!-- .device-status-group -->
                                        </div><!-- .device-status -->
                                    </div>
                                </div><!-- .card -->
                            </div><!-- .col -->
                        </div><!-- .row -->
                    </div><!-- .nk-block -->
    </x-dashboard-layout>
