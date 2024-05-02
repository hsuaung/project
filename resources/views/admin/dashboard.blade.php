@extends('layouts.adminlayouts')

@section('title', 'Dashboard')

@section('content')

    <section class="graph">
            <div class="date">
                <p>01/01/2023 - 01/01/2023</p>
                <img src="/image/calendar.png" alt="">
            </div>
            <div class="sales box">
                <div class="content">
                    <p>Todays Sales</p>
                    <h1>$20.4K</h1>
                    <p>We have sold 123 items</p>
                </div>
                <div class="sale-img">
                    <img src="/image/sale.png" alt="">
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <p>Todays Revenue</p>
                    <h1>$8.2K</h1>
                    <p>Availabale to payout</p>
                </div>
                <div class="sale-img">
                    <img src="/image/revenue.svg" alt="">
                </div>
            </div>
            <div class="box">
                <div class="content">
                    <p>Todays Orders</p>
                    <h1>$18.2K</h1>
                    <p>Availabale to payout</p>
                </div>
                <div class="sale-img">
                    <img src="/image/order.svg" alt="">
                </div>
            </div>
            <div class="bar-graph">
                <div class="totalRevenue">
                    <h3>Total Revenue</h3>
                    <div class="profitLoss">
                        <div>
                            <p class="dot dot-profit"> </p><span>profit</span>
                        </div>
                        <div>
                            <p class="dot dot-loss"> </p><span>loss</span>
                        </div>
                    </div>
                </div>
                <h2>$50.4K <span> &uarr; 5% than last month</span></h2>
                <div id="column-example-14">
                      <table class="charts-css column show-labels  show-primary-axis  data-spacing-5 datasets-spacing-4">
                        <caption> Column Example #14 </caption>


                        <tbody>
                            <tr>
                                <th scope="row"> Jan </th>
                                <td style="--size: 1.0;"></td>
                                <td style="--size: 0.7;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> Feb </th>

                                <td style="--size: 0.6;"></td>
                                <td style="--size: 0.8;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> Mar </th>
                                <td style="--size: 1.0;"></td>
                                <td style="--size: 0.7;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> Apr </th>

                                <td style="--size: 0.6;"></td>
                                <td style="--size: 0.8;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> May </th>
                                <td style="--size: 1.0;"></td>
                                <td style="--size: 0.7;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> Jun </th>

                                <td style="--size: 0.6;"></td>
                                <td style="--size: 0.8;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> Jul </th>
                                <td style="--size: 1.0;"></td>
                                <td style="--size: 0.7;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> Aug </th>

                                <td style="--size: 0.6;"></td>
                                <td style="--size: 0.8;"></td>
                            </tr>
                            <tr>
                                <th scope="row"> Sep </th>

                                <td style="--size: 0.6;"></td>
                                <td style="--size: 0.8;"></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="progressBar">
                <h1>Most Sold Items</h1>
                <div>
                    <div class="label">
                        <p>Bed</p>
                        <p>70%</p>
                    </div>
                    <div class="line-wrapper">
                        <div class="line bed"></div>
                    </div>

                </div>
                <div>
                    <div class="label">
                        <p>Sofa</p>
                        <p>40%</p>
                    </div>
                    <div class="line-wrapper">
                        <div class="line sofa"></div>
                    </div>

                </div>
                <div>
                    <div class="label">
                        <p>Lamp</p>
                        <p>60%</p>
                    </div>
                    <div class="line-wrapper">
                        <div class="line lamp"></div>
                    </div>

                </div>
                <div>
                    <div class="label">
                        <p>Cabinet</p>
                        <p>60%</p>
                    </div>
                    <div class="line-wrapper">
                        <div class="line cabinet"></div>
                    </div>

                </div>
                <div>
                    <div class="label">
                        <p>Others</p>
                        <p>20%</p>
                    </div>
                    <div class="line-wrapper">
                        <div class="line others"></div>
                    </div>

                </div>
            </div>

        </section>
        <div class="staffList">
            <div class="staffListTitle">
                <p>Latest Orders</p>

            </div>
            <div class="staffListTable">
                <div class="order-row staffListHeader">
                    <div><input type="checkbox"></div>
                    <div>Product Name</div>
                    <div>Order ID</div>
                    <div>Date</div>
                    <div>Customer Name</div>
                    <div>Status</div>
                    <div>Amount</div>
                    <div>Action</div>
                </div>
                <div class="order-row ">
                    <div><input type="checkbox"></div>
                    <div>Morden Sofa</div>
                    <div>EE72823</div>
                    <div>2023 Nov 22</div>
                    <div>Sofia Mia</div>
                    <div>
                        <span class="dot dot-deliver"></span> Delivered
                    </div>
                    <div>250.000 MMK</div>
                    <div>
                        <img src="/image/edit.svg" alt="">
                        <img src="/image/trashbin.svg" alt="">
                    </div>
                </div>
                <div class="order-row ">
                    <div><input type="checkbox"></div>
                    <div>Morden Sofa</div>
                    <div>EE72823</div>
                    <div>2023 Nov 22</div>
                    <div>Sofia Mia</div>
                    <div>
                        <span class="dot dot-pending"></span> Pending
                    </div>
                    <div>250.000 MMK</div>
                    <div>
                        <img src="/image/edit.svg" alt="">
                        <img src="/image/trashbin.svg" alt="">
                    </div>
                </div>
                <div class="order-row ">
                    <div><input type="checkbox"></div>
                    <div>Morden Sofa</div>
                    <div>EE72823</div>
                    <div>2023 Nov 22</div>
                    <div>Sofia Mia</div>
                    <div>
                        <span class="dot dot-pending"></span> Pending
                    </div>
                    <div>250.000 MMK</div>
                    <div>
                        <img src="/image/edit.svg" alt="">
                        <img src="/image/trashbin.svg" alt="">
                    </div>
                </div>
                <div class="order-row ">
                    <div><input type="checkbox"></div>
                    <div>Morden Sofa</div>
                    <div>EE72823</div>
                    <div>2023 Nov 22</div>
                    <div>Sofia Mia</div>
                    <div>
                        <span class="dot dot-deliver"></span> Delivered
                    </div>
                    <div>250.000 MMK</div>
                    <div>
                        <img src="/image/edit.svg" alt="">
                        <img src="/image/trashbin.svg" alt="">
                    </div>
                </div>
                <div class="order-row ">
                    <div><input type="checkbox"></div>
                    <div>Morden Sofa</div>
                    <div>EE72823</div>
                    <div>2023 Nov 22</div>
                    <div>Sofia Mia</div>
                    <div>
                        <span class="dot dot-pending"></span> Pending
                    </div>
                    <div>250.000 MMK</div>
                    <div>
                        <img src="/image/edit.svg" alt="">
                        <img src="/image/trashbin.svg" alt="">
                    </div>
                </div>
                <div class="order-row ">
                    <div><input type="checkbox"></div>
                    <div>Morden Sofa</div>
                    <div>EE72823</div>
                    <div>2023 Nov 22</div>
                    <div>Sofia Mia</div>
                    <div>
                        <span class="dot dot-cancel"></span> Canceled
                    </div>
                    <div>250.000 MMK</div>
                    <div>
                        <img src="/image/edit.svg" alt="">
                        <img src="/image/trashbin.svg" alt="">
                    </div>
                </div>
                <div class="order-row ">
                    <div><input type="checkbox"></div>
                    <div>Morden Sofa</div>
                    <div>EE72823</div>
                    <div>2023 Nov 22</div>
                    <div>Sofia Mia</div>
                    <div>
                        <span class="dot dot-deliver"></span> Delivered
                    </div>
                    <div>250.000 MMK</div>
                    <div>
                        <img src="/image/edit.svg" alt="">
                        <img src="/image/trashbin.svg" alt="">
                    </div>
                </div>


            </div>

        </div>
@endsection