<?php include 'includes/header.php' ?>
<div class="blue-div-normal">
    <div>
        <h5>Home > Booking</h5>
        <h3>Booking</h3>

    </div>
    <div class="rect-div">
        <img src="bootstrap/images/rectangle-small.webp" alt="">
    </div>
    <div class="rect-div-small">
        <img src="bootstrap/images/rectangle-small.webp" alt="">
    </div>
</div>
<div class="container-div">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="car-card">
                <div class="car-img">
                    <img src="bootstrap/images/card-car.webp" alt="Innova Crysta">
                </div>
                <div class="car-info">
                    <h2>Innova Crysta <small>or equivalent</small></h2>
                    <div class="features">
                        <p>Extra Km Fare</p>
                        <div class="inner-div">
                            <div><img src="bootstrap/images/extra-km.webp" class="me-2" alt=""><span>Extra Km Fare</span>
                            </div>
                            <div>₹14.3/km <small>after</small> 149 kms</div>
                        </div>
                        <div class="inner-div">
                            <div><img src="bootstrap/images/fuel.webp" class="me-2" alt=""><span>Fuel Type</span></div>
                            <div>CNG with refill breaks</div>
                        </div>
                        <div class="inner-div">
                            <div class="d-flex me-4"><img src="bootstrap/images/cancellation.webp" class="me-2"
                                    alt=""><span>Cancellation</span></div>
                            <div>Free till 1 hour of departure</div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="booking-card">
            <div class="location-flex">
                <div>
                    <img src="bootstrap/images/locationn.webp" alt="">
                </div>
               <div>
               <div>
                    <h3>Pick-up</h3>
                    <p>pune, maharashtra, india</p>
                </div>
                <div>
                <h3>Trip destination</h3>
                <p>pune, maharashtra, india</p>
                </div>
               </div>
            </div>

        </div>

        </div>

    </div>
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="booking-card">
                <h4>Enter the details</h4>
                <div class="form-row-contact row">
                    <div class="col-lg-6 col-md-12 col-sm-12"> <label for="">
                            Pickup
                        </label>
                        <input type="text" placeholder="Enter the pickup city" required>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for="">Date And Time</label>
                        <input type="text" placeholder="Enter Date And Time" required>
                    </div>
                </div>
                <div class="form-row-contact row">
                    <div class="col-lg-6 col-md-12 col-sm-12"> <label for="">
                            FIRST NAME
                        </label>
                        <input type="text" placeholder="Enter first name" required>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for="">LAST NAME</label>
                        <input type="text" placeholder="Enter last name" required>
                    </div>
                </div>
                <div class="form-row-contact row">
                    <div class="col-lg-6 col-md-12 col-sm-12"> <label for="">
                            Email
                        </label>
                        <input type="email" placeholder="Enter Email" required>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <label for="">phone number</label>
                        <input type="number" placeholder="Enter number" required>
                    </div>
                </div>
                <button class="booking-btn">Submit</button>


            </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="booking-card">
            <h4>Booking details</h4>
            <div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
               <p class="fw-semibold"> Pickup City: </p>
               
              
              
              
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
<p>pune</p>





</div>

                </div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="fw-semibold">Trip Type:</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <p>Local (8hr/80 km)</p>
                </div></div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6"><p class="fw-semibold">Car Type</p></div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <p >tata tiago</p>
                </div></div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="fw-semibold">Dropoff:</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0"><p>mumbai</p>
                
                </div></div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="fw-semibold">Date&Time:</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                <p>13-11-24 at 7:00 AM</p>
                </div></div>
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                <p class="fw-semibold">Total Fare :</p>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 p-0"><p>₹ 11500</p></div></div>
               
            </div>

</div>
        </div>




    </div>
    <div class="row">
        <div class="col-lg-8 col-md-6 col-sm-12">
            <div class="booking-card">
                <div class="payment-options ">
                    <a class="option" id="card-option"><img src="bootstrap/images/card.webp" alt=""> Card</a>
                    <a class="option" id="googlepay-option"><img src="bootstrap/images/Gpay.webp" alt=""> Google Pay</a>
                    <a class="option" id="bank-option"><img src="bootstrap/images/bank.webp" alt=""> Bank</a>
                    <a class="option-small" id="bank-option"><img src="bootstrap/images/icon-dot.webp" alt=""></a>

                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12"> <label>Card Number</label>
                        <div class="position-relative form-row-contact">
                            <input type="text"> <img class="card-group" src="bootstrap/images/creditCardBrands.webp"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-row-contact">
                        <label>Country</label>
                        <div class="form-row-contact">
                            <select name="" id=""></select>
                        </div>



                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 form-row-contact">
                        <label>Expiration</label>

                        <input type="number">


                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-row-contact">

                        <label>CVC</label>
                        <input type="number">
                    </div>
                </div>
                
            </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-12">
                    <div>
                        <div class="border-div">
                            
                        <div class="row ">
                            <div class="col-lg-8 col-sm-6">
                                <h4>Total Amount</h4>
                                <label for="">inc. of tolls and taxes</label>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <h4>₹11500</h4>
                            </div>

                        </div>

                        </div>
                        <div class="amount-card">
                        <div class="radio-options">
          <label><input type="radio" name="payment" checked> Make part payment now  <label for="">₹5000</label></label> 
          <label><input type="radio" name="payment"> Make full payment now  <label for="">₹11500</label></label> 
        </div>
       <div class="button-card">
       <button class="booking-btn w-100">Confirm</button>
       </div>

        </div>
                    </div>
                </div>
    </div>
</div>
<?php include 'includes/footer.php' ?>