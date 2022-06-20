<?php ?>
<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome/CSS/all.css">
    <title>Rating's And Review's of The Products</title>
    <script src="jquery/jquery.js"></script>
</head>
<body>
    <div class="container">
        <div class="rating-review">
            <div class="tri table-flex">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                <div class="rnb rvl">
                                    <h3>1.5.5.0</h3>
                                </div>
                                <div class="pdt-rate">
                                    <div class="pro-rating">
                                        <div class="clearfix rating mart8">
                                            <div class="rating-stars">
                                                <div class="grey-stars"></div>
                                                <div class="filled-stars" style="width:60%"></div>
                                            </div></div>
                                    </div>
                                </div>
                                <div class="rnrn">
                                    <p class="rars">No Reviews</p>
                                </div>
                            </td>
                            <td>
                                <div class="rpb">
                                    <div class="rnpb">
                                        <label>5 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:20%"></div>
                                        </div>
                                        <div class="label">(1)</div>
                                    </div>

                                    <div class="rnpb">
                                        <label>4 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:50%"></div>
                                        </div>
                                        <div class="label">(1)</div>
                                    </div>

                                    <div class="rnpb">
                                        <label>3 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:80%"></div>
                                        </div>
                                        <div class="label">(15)</div>
                                    </div>

                                    <div class="rnpb">
                                        <label>2 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:30%"></div>
                                        </div>
                                        <div class="label">(11)</div>
                                    </div>

                                    <div class="rnpb">
                                        <label>1 <i class="fa fa-star"></i></label>
                                        <div class="ropb">
                                            <div class="ripb" style="width:40%"></div>
                                        </div>
                                        <div class="label">(13)</div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="rrb">
                                    <p>Please Review Our Product!</p>
                                    <button class="rbtn opmd">Add Review</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="review-modal">
                    <div class="reviw-bg"></div>
                    <div class="rmp">
                        <div class="rpc">
                            <span><i class="far fa-times"></i></span>
                        </div>
                        <div class="rps" align="center">
                            <i class="far fa-star" data-index="0" style="display:none"></i>
                            <i class="far fa-star" data-index="1"></i>
                            <i class="far fa-star" data-index="2"></i>
                            <i class="far fa-star" data-index="3"></i>
                            <i class="far fa-star" data-index="4"></i>
                            <i class="far fa-star" data-index="5"></i>
                        </div>
                        <input type="hidden" value="" class="starRateV">
                        <input type="hidden" value="" class="rateDate">
                        <div class="rptf" align="center">
                            <input type="text" class="raterName" placeholder="Enter Your Name...">
                        </div>

                        <div class="rptf" align="center">
                            <textarea class="rateMsg" placeholder="Describe Your Experience"></textarea>
                        </div>
                        <div class="rate-error" align="center"></div>
                        <div class="rpsb" align="center">
                            <button class="rpbtn">Post Review</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bri">
                <div class="uscm">
                    <div class="uscm-secs">
                        <div class="us-img">
                            <p>B</p>
                        </div>
                        <div class="uscms">
                            <div class="us-rate">
                            <div class="pdt-rate">
                                    <div class="pro-rating">
                                        <div class="clearfix rating mart8">
                                            <div class="rating-stars">
                                                <div class="grey-stars"></div>
                                                <div class="filled-stars" style="width:60%"></div>
                                            </div></div>
                                    </div>
                                </div>
                            </div>
                            <div class="us-cmt">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet consequatur porro unde vero laudantium repellendus natus maxime sapiente alias quibusdam suscipit ipsam aliquid ea eos, ducimus doloremque autem? Commodi, vero!</p>
                            </div>
                            <div class="us-nm">
                                <p><i>By <span class="cmnm">Bright</span>on <span class="cmdt">jan 21 2020</span></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>