<template>

    <div class="card">
        <div class="card-header">
            میزان بازدید و &amp; فروش
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-12 col-lg-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="callout callout-info">
                                <small class="text-muted">مشتریان جدید</small>
                                <br>
                                <strong class="h4">9,123</strong>
                                <div class="chart-wrapper">
                                    <canvas id="sparkline-chart-1" width="100" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                            <div class="callout callout-danger">
                                <small class="text-muted">مشتریان قدیم</small>
                                <br>
                                <strong class="h4">22,643</strong>
                                <div class="chart-wrapper">
                                    <canvas id="sparkline-chart-2" width="100" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <hr class="mt-0">
                    <ul class="horizontal-bars">
                        <li>
                            <div class="title">
                                شنبه
                            </div>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar"
                                         style="width: 34%" aria-valuenow="34" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: 78%" aria-valuenow="78" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                یک شنبه
                            </div>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar"
                                         style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: 94%" aria-valuenow="94" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                دو شنبه
                            </div>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar"
                                         style="width: 12%" aria-valuenow="12" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: 67%" aria-valuenow="67" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                سه شنبه
                            </div>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar"
                                         style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: 91%" aria-valuenow="91" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                جهار شنبه
                            </div>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar"
                                         style="width: 22%" aria-valuenow="22" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: 73%" aria-valuenow="73" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                پنج شنبه
                            </div>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar"
                                         style="width: 53%" aria-valuenow="53" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: 82%" aria-valuenow="82" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="title">
                                جمعه
                            </div>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-info" role="progressbar"
                                         style="width: 9%" aria-valuenow="9" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-danger" role="progressbar"
                                         style="width: 69%" aria-valuenow="69" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="legend">
                            <span class="badge badge-pill badge-info"></span>
                            <small>مشتریان جدید</small> &nbsp;
                            <span class="badge badge-pill badge-danger"></span>
                            <small>مشتریان قدیمی</small>
                        </li>
                    </ul>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="callout callout-warning">
                                <small class="text-muted">بازدید صفحات</small>
                                <br>
                                <strong class="h4">78,623</strong>
                                <div class="chart-wrapper">
                                    <canvas id="sparkline-chart-3" width="100" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                            <div class="callout callout-success">
                                <small class="text-muted">Organic</small>
                                <br>
                                <strong class="h4">49,123</strong>
                                <div class="chart-wrapper">
                                    <canvas id="sparkline-chart-4" width="100" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <hr class="mt-0">
                    <ul class="horizontal-bars type-2">
                        <li>
                            <i class="icon-user"></i>
                            <span class="title">مرد</span>
                            <span class="value">43%</span>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                         style="width: 43%" aria-valuenow="43" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="icon-user-female"></i>
                            <span class="title">زن</span>
                            <span class="value">37%</span>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-warning" role="progressbar"
                                         style="width: 37%" aria-valuenow="37" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <i class="icon-globe"></i>
                            <span class="title">Organic Search</span>
                            <span class="value">191,235
                            <span class="text-muted small">(56%)</span>
                          </span>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar"
                                         style="width: 56%" aria-valuenow="56" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="icon-social-facebook"></i>
                            <span class="title">Facebook</span>
                            <span class="value">51,223
                            <span class="text-muted small">(15%)</span>
                          </span>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar"
                                         style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="icon-social-twitter"></i>
                            <span class="title">Twitter</span>
                            <span class="value">37,564
                            <span class="text-muted small">(11%)</span>
                          </span>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar"
                                         style="width: 11%" aria-valuenow="11" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <i class="icon-social-linkedin"></i>
                            <span class="title">LinkedIn</span>
                            <span class="value">27,319
                            <span class="text-muted small">(8%)</span>
                          </span>
                            <div class="bars">
                                <div class="progress progress-xs">
                                    <div class="progress-bar bg-success" role="progressbar"
                                         style="width: 8%" aria-valuenow="8" aria-valuemin="0"
                                         aria-valuemax="100"></div>
                                </div>
                            </div>
                        </li>
                        <li class="divider text-center">
                            <button type="button" class="btn btn-sm btn-link text-muted"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="show more"><i class="icon-options"></i>
                            </button>
                        </li>
                    </ul>
                </div>
                <!--/.col-->
                <div class="col-sm-6 col-lg-4">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="callout">
                                <small class="text-muted">CTR</small>
                                <br>
                                <strong class="h4">23%</strong>
                                <div class="chart-wrapper">
                                    <canvas id="sparkline-chart-5" width="100" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                        <div class="col-sm-6">
                            <div class="callout callout-primary">
                                <small class="text-muted">Bounce Rate</small>
                                <br>
                                <strong class="h4">5%</strong>
                                <div class="chart-wrapper">
                                    <canvas id="sparkline-chart-6" width="100" height="30"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--/.col-->
                    </div>
                    <!--/.row-->
                    <hr class="mt-0">
                    <ul class="icons-list">
                        <li>
                            <i class="icon-screen-desktop bg-primary"></i>
                            <div class="desc">
                                <div class="title">iMac 4k</div>
                                <small>لرم اپیزوم اسپوت لرم اپیزوم اسپوت </small>
                            </div>
                            <div class="value">
                                <div class="small text-muted">فروش در هفته</div>
                                <strong>1.924</strong>
                            </div>
                            <div class="actions">
                                <button type="button" class="btn btn-link text-muted"><i
                                    class="icon-settings"></i></button>
                            </div>
                        </li>
                        <li>
                            <i class="icon-screen-smartphone bg-info"></i>
                            <div class="desc">
                                <div class="title">Samsung Galaxy Edge</div>
                                <small>لرم اپیزوم اسپوت لرم اپیزوم اسپوت </small>
                            </div>
                            <div class="value">
                                <div class="small text-muted">فروش در هفته</div>
                                <strong>1.224</strong>
                            </div>
                            <div class="actions">
                                <button type="button" class="btn btn-link text-muted"><i
                                    class="icon-settings"></i></button>
                            </div>
                        </li>
                        <li>
                            <i class="icon-screen-smartphone bg-warning"></i>
                            <div class="desc">
                                <div class="title">iPhone 6S</div>
                                <small>لرم اپیزوم اسپوت لرم اپیزوم اسپوت </small>
                            </div>
                            <div class="value">
                                <div class="small text-muted">فروش در هفته</div>
                                <strong>1.163</strong>
                            </div>
                            <div class="actions">
                                <button type="button" class="btn btn-link text-muted"><i
                                    class="icon-settings"></i></button>
                            </div>
                        </li>
                        <li>
                            <i class="icon-user bg-danger"></i>
                            <div class="desc">
                                <div class="title">Premium accounts</div>
                                <small>لرم اپیزوم اسپوت لرم اپیزوم اسپوت </small>
                            </div>
                            <div class="value">
                                <div class="small text-muted">فروش در هفته</div>
                                <strong>928</strong>
                            </div>
                            <div class="actions">
                                <button type="button" class="btn btn-link text-muted"><i
                                    class="icon-settings"></i></button>
                            </div>
                        </li>
                        <li>
                            <i class="icon-social-spotify bg-success"></i>
                            <div class="desc">
                                <div class="title">Spotify Subscriptions</div>
                                <small>لرم اپیزوم اسپوت لرم اپیزوم اسپوت </small>
                            </div>
                            <div class="value">
                                <div class="small text-muted">فروش در هفته</div>
                                <strong>893</strong>
                            </div>
                            <div class="actions">
                                <button type="button" class="btn btn-link text-muted"><i
                                    class="icon-settings"></i></button>
                            </div>
                        </li>
                        <li>
                            <i class="icon-cloud-download bg-danger"></i>
                            <div class="desc">
                                <div class="title">کتاب الکترونیکی</div>
                                <small>لرم اپیزوم اسپوت لرم اپیزوم اسپوت </small>
                            </div>
                            <div class="value">
                                <div class="small text-muted">دانلودها</div>
                                <strong>121.924</strong>
                            </div>
                            <div class="actions">
                                <button type="button" class="btn btn-link text-muted"><i
                                    class="icon-settings"></i></button>
                            </div>
                        </li>
                        <li>
                            <i class="icon-camera bg-warning"></i>
                            <div class="desc">
                                <div class="title">تصاویر</div>
                                <small>لرم اپیزوم اسپوت لرم اپیزوم اسپوت </small>
                            </div>
                            <div class="value">
                                <div class="small text-muted">بارگذاری ها</div>
                                <strong>12.125</strong>
                            </div>
                            <div class="actions">
                                <button type="button" class="btn btn-link text-muted"><i
                                    class="icon-settings"></i></button>
                            </div>
                        </li>
                        <li class="divider text-center">
                            <button type="button" class="btn btn-sm btn-link text-muted"
                                    data-toggle="tooltip" data-placement="top" title="show more"><i
                                class="icon-options"></i></button>
                        </li>
                    </ul>
                </div>
                <!--/.col-->
            </div>
            <!--/.row-->
            <br>
            <table class="table table-responsive-sm table-hover table-outline mb-0">
                <thead class="thead-light">
                <tr>
                    <th class="text-center"><i class="icon-people"></i></th>
                    <th>کاربر</th>
                    <th class="text-center">کشور</th>
                    <th>مصرف</th>
                    <th class="text-center">روش پرداهت</th>
                    <th>فعالیت</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img src="img/avatars/1.jpg" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </td>
                    <td>
                        <div>علی احمدی</div>
                        <div class="small text-muted">
                            <span>جدید</span> | ثبت نام : فروردین 1395
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="flag-icon flag-icon-us h4 mb-0" title="us" id="us"></i>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>50%</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted">اردیبهشت 97</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 50%"
                                 aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="fa fa-cc-mastercard" style="font-size:24px"></i>
                    </td>
                    <td>
                        <div class="small text-muted">آخرین بازدید</div>
                        <strong>10 ثانیه فبل</strong>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img src="img/avatars/2.jpg" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-danger"></span>
                        </div>
                    </td>
                    <td>
                        <div>رضا اکبری</div>
                        <div class="small text-muted">

                            <span>بازگشت</span> | ثبت نام: فروردین 97
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="flag-icon flag-icon-br h4 mb-0" title="br" id="br"></i>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>10%</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted">اردیبهشت 97</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 10%"
                                 aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="fa fa-cc-visa" style="font-size:24px"></i>
                    </td>
                    <td>
                        <div class="small text-muted">آخرین بازدید</div>
                        <strong>5 دقیقه قبل</strong>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img src="img/avatars/3.jpg" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-warning"></span>
                        </div>
                    </td>
                    <td>
                        <div>محمد حسینی</div>
                        <div class="small text-muted">
                            <span>جدید</span> | ثبت نام: فروردین 96
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="flag-icon flag-icon-in h4 mb-0" title="in" id="in"></i>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>74%</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted">اردیبهشت 97</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 74%"
                                 aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="fa fa-cc-stripe" style="font-size:24px"></i>
                    </td>
                    <td>
                        <div class="small text-muted">آخرین بازدید</div>
                        <strong>1 ساعت قبل</strong>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img src="img/avatars/4.jpg" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-secondary"></span>
                        </div>
                    </td>
                    <td>
                        <div>مهدی خیری</div>
                        <div class="small text-muted">
                            <span>جدید</span> | ثبت نام: فروردین 96
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="flag-icon flag-icon-fr h4 mb-0" title="fr" id="fr"></i>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>98%</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted">اردیبهشت 97</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 98%"
                                 aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="fa fa-paypal" style="font-size:24px"></i>
                    </td>
                    <td>
                        <div class="small text-muted">آخرین بازدید</div>
                        <strong>ماه گذشته</strong>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img src="img/avatars/5.jpg" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </td>
                    <td>
                        <div>عباس امیری</div>
                        <div class="small text-muted">
                            <span>جدید</span> | ثبت نام: فروردین 96
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="flag-icon flag-icon-es h4 mb-0" title="es" id="es"></i>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>22%</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted">اردیبهشت 97</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 22%"
                                 aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="fa fa-google-wallet" style="font-size:24px"></i>
                    </td>
                    <td>
                        <div class="small text-muted">آخرین بازدید</div>
                        <strong>هفته گذشته</strong>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">
                        <div class="avatar">
                            <img src="img/avatars/6.jpg" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-danger"></span>
                        </div>
                    </td>
                    <td>
                        <div>حسین محمدی</div>
                        <div class="small text-muted">
                            <span>جدید</span> | ثبت نام: فروردین 1396
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="flag-icon flag-icon-pl h4 mb-0" title="pl" id="pl"></i>
                    </td>
                    <td>
                        <div class="clearfix">
                            <div class="float-left">
                                <strong>43%</strong>
                            </div>
                            <div class="float-right">
                                <small class="text-muted">اردیبهشت 97</small>
                            </div>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 43%"
                                 aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </td>
                    <td class="text-center">
                        <i class="fa fa-cc-amex" style="font-size:24px"></i>
                    </td>
                    <td>
                        <div class="small text-muted">آخرین بازدید</div>
                        <strong>دیروز</strong>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
    export default {
        name: "statBox"
    }
</script>

<style scoped>

</style>
