<!-- Page Header -->
<div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-4 mb-sm-0">
        <?php if(isset($title)): ?>
        <span class="text-uppercase page-subtitle"><?php echo $title ?></span>
        <?php endif; ?>
        <?php if(isset($heading)): ?>
        <h3 class="page-title"><?php echo $heading ?></h3>
        <?php endif; ?>
    </div>
    <div class="col-12 col-sm-4 d-flex align-items-center">
        <div class="btn-group btn-group-sm btn-group-toggle d-inline-flex mb-4 mb-sm-0 mx-auto" role="group" aria-label="Page actions">
            <a href="index.html" class="btn btn-white active"> Traffic </a>
            <a href="ecommerce.html" class="btn btn-white"> Sales </a>
        </div>
    </div>
    <div class="col-12 col-sm-4 d-flex align-items-center">
        <div id="analytics-overview-date-range" class="input-daterange input-group input-group-sm ml-auto">
            <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="analytics-overview-date-range-1">
            <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="analytics-overview-date-range-2">
            <span class="input-group-append">
                    <span class="input-group-text">
                      <i class="material-icons">&#xE916;</i>
                    </span>
                  </span>
        </div>
    </div>
</div>
<!-- End Page Header -->

<!-- Small Stats Blocks -->
<div class="row">
    <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="stats-small card card-small">
            <div class="card-body px-0 pb-0">
                <div class="d-flex px-3">
                    <div class="stats-small__data">
                        <span class="stats-small__label mb-1 text-uppercase">Users</span>
                        <h6 class="stats-small__value count m-0">2,390</h6>
                    </div>
                    <div class="stats-small__data text-right align-items-center">
                        <span class="stats-small__percentage stats-small__percentage--increase">12.4%</span>
                    </div>
                </div>
                <canvas height="60" class="analytics-overview-stats-small-1"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="stats-small card card-small">
            <div class="card-body px-0 pb-0">
                <div class="d-flex px-3">
                    <div class="stats-small__data">
                        <span class="stats-small__label mb-1 text-uppercase">Sessions</span>
                        <h6 class="stats-small__value count m-0">8,391</h6>
                    </div>
                    <div class="stats-small__data text-right align-items-center">
                        <span class="stats-small__percentage stats-small__percentage--decrease">7.21%</span>
                    </div>
                </div>
                <canvas height="60" class="analytics-overview-stats-small-2"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="stats-small card card-small">
            <div class="card-body px-0 pb-0">
                <div class="d-flex px-3">
                    <div class="stats-small__data">
                        <span class="stats-small__label mb-1 text-uppercase">Pageviews</span>
                        <h6 class="stats-small__value count m-0">21,293</h6>
                    </div>
                    <div class="stats-small__data text-right align-items-center">
                        <span class="stats-small__percentage stats-small__percentage--increase">3.71%</span>
                    </div>
                </div>
                <canvas height="60" class="analytics-overview-stats-small-3"></canvas>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="stats-small card card-small">
            <div class="card-body px-0 pb-0">
                <div class="d-flex px-3">
                    <div class="stats-small__data">
                        <span class="stats-small__label mb-1 text-uppercase">Pages / Session</span>
                        <h6 class="stats-small__value count m-0">6.43</h6>
                    </div>
                    <div class="stats-small__data text-right align-items-center">
                        <span class="stats-small__percentage stats-small__percentage--decrease">2,71%</span>
                    </div>
                </div>
                <canvas height="60" class="analytics-overview-stats-small-4"></canvas>
            </div>
        </div>
    </div>
</div>
<!-- End Small Stats Blocks -->

<div class="row">
    <div class="col col-lg-8 col-md-12 col-sm-12 mb-4">
        <div class="card card-small h-100">
            <div class="card-header border-bottom">
                <h6 class="m-0">Sessions</h6>
                <div class="block-handle"></div>
            </div>
            <div class="card-body pt-0">
                <div class="row border-bottom py-2 bg-light">
                    <div class="col-12 col-sm-6 d-flex mb-2 mb-sm-0">
                        <div class="btn-group btn-group-sm btn-group-toggle d-flex my-auto mx-auto mx-sm-0" data-toggle="buttons">
                            <label class="btn btn-white active">
                                <input type="radio" name="options" id="option1" autocomplete="off" checked=""> Hour </label>
                            <label class="btn btn-white">
                                <input type="radio" name="options" id="option2" autocomplete="off"> Day </label>
                            <label class="btn btn-white">
                                <input type="radio" name="options" id="option3" autocomplete="off"> Week </label>
                            <label class="btn btn-white">
                                <input type="radio" name="options" id="option4" autocomplete="off"> Month </label>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div id="sessions-overview-date-range" class="input-daterange input-group input-group-sm my-auto ml-auto mr-auto ml-sm-auto mr-sm-0" style="max-width: 350px;">
                            <input type="text" class="input-sm form-control" name="start" placeholder="Start Date" id="analytics-overview-sessions-date-range-1">
                            <input type="text" class="input-sm form-control" name="end" placeholder="End Date" id="analytics-overview-sessions-date-range-2">
                            <span class="input-group-append">
                            <span class="input-group-text">
                              <i class="material-icons"></i>
                            </span>
                          </span>
                        </div>
                    </div>
                </div>
                <div id="analytics-overview-sessions-legend"></div>
                <canvas height="120" style="max-width: 100% !important;" class="analytics-overview-sessions"></canvas>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
        <!-- Users by device -->
        <div class="card ubd-stats card-small h-100">
            <div class="card-header border-bottom">
                <h6 class="m-0">Users by device</h6>
                <div class="block-handle"></div>
            </div>
            <div class="card-body d-flex flex-column">
                <canvas width="100" class="analytics-users-by-device mt-3 mb-4"></canvas>
                <div class="ubd-stats__legend w-75 m-auto pb-4">
                    <div class="ubd-stats__item">
                        <i class="material-icons" style="color: rgba(1, 123 ,255, 0.9);">&#xE30B;</i>
                        <span class="ubd-stats__category">Desktop</span>
                        <span class="ubd-stats__value">68.3%</span>
                    </div>
                    <div class="ubd-stats__item">
                        <i class="material-icons" style="color: rgba(1, 123 ,255, 0.5);">&#xE32F;</i>
                        <span class="ubd-stats__category">Tablet</span>
                        <span class="ubd-stats__value">24.2%</span>
                    </div>
                    <div class="ubd-stats__item">
                        <i class="material-icons" style="color: rgba(1, 123, 255, 0.3);">&#xE325;</i>
                        <span class="ubd-stats__category">Mobile</span>
                        <span class="ubd-stats__value">7.5%</span>
                    </div>
                </div>
            </div>
            <div class="card-footer border-top">
                <div class="row">
                    <div class="col">
                        <select class="custom-select custom-select-sm" style="max-width: 130px;">
                            <option selected>Last Week</option>
                            <option value="1">Today</option>
                            <option value="2">Last Month</option>
                            <option value="3">Last Year</option>
                        </select>
                    </div>
                    <div class="col text-right view-report">
                        <a href="#">View full report &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Users by device -->
    </div>
    <div class="col-lg-3 col-sm-6 mb-4">
        <div class="card card-small">
            <div class="card-header border-bottom">
                <h6 class="m-0">Top Referrals</h6>
                <div class="block-handle"></div>
            </div>
            <div class="card-body p-0">
                <ul class="list-group list-group-small list-group-flush">
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">GitHub</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">19,291</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Stack Overflow</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">11,201</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Hacker News</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">9,291</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Reddit</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">8,281</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">The Next Web</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">7,128</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Tech Crunch</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">6,218</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">YouTube</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">1,218</span>
                    </li>
                    <li class="list-group-item d-flex px-3">
                        <span class="text-semibold text-fiord-blue">Adobe</span>
                        <span class="ml-auto text-right text-semibold text-reagent-gray">1,171</span>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row">
                    <div class="col">
                        <select class="custom-select custom-select-sm">
                            <option selected>Last Week</option>
                            <option value="1">Today</option>
                            <option value="2">Last Month</option>
                            <option value="3">Last Year</option>
                        </select>
                    </div>
                    <div class="col text-right view-report">
                        <a href="#">Full report &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 mb-4">
        <div class="card card-small go-stats">
            <div class="card-header border-bottom">
                <h6 class="m-0">Goals Overview</h6>
                <div class="block-handle"></div>
            </div>
            <div class="card-body py-0">
                <ul class="list-group list-group-small list-group-flush">
                    <li class="list-group-item d-flex row px-0">
                        <div class="col-lg-6 col-md-8 col-sm-8 col-6">
                            <h6 class="go-stats__label mb-1">Newsletter Signups</h6>
                            <div class="go-stats__meta">
                            <span class="mr-2">
                              <strong>291</strong> Completions</span>
                                <span class="d-block d-sm-inline">
                              <strong class="text-success">$192.00</strong> Value</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4 col-6 d-flex">
                            <div class="go-stats__value text-right ml-auto">
                                <h6 class="go-stats__label mb-1">57.2%</h6>
                                <span class="go-stats__meta">Conversion Rate</span>
                            </div>
                            <div class="go-stats__chart d-flex ml-auto">
                                <canvas style="width: 45px; height: 45px;" class="my-auto" id="analytics-overview-goal-completion-1"></canvas>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex row px-0">
                        <div class="col-lg-6 col-md-8 col-sm-8 col-6">
                            <h6 class="go-stats__label mb-1">Social Shares</h6>
                            <div class="go-stats__meta">
                            <span class="mr-2">
                              <strong>451</strong> Completions</span>
                                <span class="d-block d-sm-inline">
                              <strong class="text-success">$0.00</strong> Value</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4 col-6 d-flex">
                            <div class="go-stats__value text-right ml-auto">
                                <h6 class="go-stats__label mb-1">45.5%</h6>
                                <span class="go-stats__meta">Conversion Rate</span>
                            </div>
                            <div class="go-stats__chart d-flex ml-auto">
                                <canvas style="width: 45px; height: 45px;" class="my-auto" id="analytics-overview-goal-completion-2"></canvas>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex row px-0">
                        <div class="col-lg-6 col-md-8 col-sm-8 col-6">
                            <h6 class="go-stats__label mb-1">eBook Downloads</h6>
                            <div class="go-stats__meta">
                            <span class="mr-2">
                              <strong>12</strong> Completions</span>
                                <span class="d-block d-sm-inline">
                              <strong class="text-success">$129.11</strong> Value</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4 col-6 d-flex">
                            <div class="go-stats__value text-right ml-auto">
                                <h6 class="go-stats__label mb-1">5.2%</h6>
                                <span class="go-stats__meta">Conversion Rate</span>
                            </div>
                            <div class="go-stats__chart d-flex ml-auto">
                                <canvas style="width: 45px; height: 45px;" class="my-auto" id="analytics-overview-goal-completion-3"></canvas>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item d-flex row px-0">
                        <div class="col-lg-6 col-md-8 col-sm-8 col-6">
                            <h6 class="go-stats__label mb-1">Account Creations</h6>
                            <div class="go-stats__meta">
                            <span class="mr-2">
                              <strong>281</strong> Completions</span>
                                <span class="d-block d-sm-inline">
                              <strong class="text-success">$218.12</strong> Value</span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-4 col-6 d-flex">
                            <div class="go-stats__value text-right ml-auto">
                                <h6 class="go-stats__label mb-1">30.2%</h6>
                                <span class="go-stats__meta">Conversion Rate</span>
                            </div>
                            <div class="go-stats__chart d-flex ml-auto">
                                <canvas style="width: 45px; height: 45px;" class="my-auto" id="analytics-overview-goal-completion-4"></canvas>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="card-footer border-top">
                <div class="row">
                    <div class="col">
                        <select class="custom-select custom-select-sm" style="max-width: 130px;">
                            <option selected>Last Week</option>
                            <option value="1">Today</option>
                            <option value="2">Last Month</option>
                            <option value="3">Last Year</option>
                        </select>
                    </div>
                    <div class="col text-right view-report">
                        <a href="#">View full report &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 mb-4">
        <div class="card card-small country-stats">
            <div class="card-header border-bottom">
                <h6 class="m-0">Users by country</h6>
                <div class="block-handle"></div>
            </div>
            <div class="card-body p-0">
                <div id="users-by-country-map" width="100%" height="100%" style="width: 100%; height: 180px;"></div>
                <table class="table m-0">
                    <tbody>
                    <tr>
                        <td>
                            <?php echo assets_img('flags/flag-us.png', array('class'=>'country-flag mr-1')) ?> United States</td>
                        <td class="text-right">12,219</td>
                        <td class="text-right">32.4%</td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo assets_img('flags/flag-uk.png', array('class'=>'country-flag mr-1')) ?> United Kingdom</td>
                        <td class="text-right">11,192</td>
                        <td class="text-right">18.8%</td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo assets_img('flags/flag-au.png', array('class'=>'country-flag mr-1')) ?> Australia</td>
                        <td class="text-right">9,291</td>
                        <td class="text-right">12.3%</td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo assets_img('flags/flag-jp.png', array('class'=>'country-flag mr-1')) ?> Japan</td>
                        <td class="text-right">2,291</td>
                        <td class="text-right">8.14%</td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="card-footer border-top">
                <div class="row">
                    <div class="col">
                        <select class="custom-select custom-select-sm" style="max-width: 130px;">
                            <option selected>Last Week</option>
                            <option value="1">Today</option>
                            <option value="2">Last Month</option>
                            <option value="3">Last Year</option>
                        </select>
                    </div>
                    <div class="col text-right view-report">
                        <a href="#">View full report &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
