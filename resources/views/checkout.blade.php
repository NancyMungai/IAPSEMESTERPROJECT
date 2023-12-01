@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2>Checkout</h2>
            <form action= "{{ route ('payment') }}"  method="post">
                @csrf
                <!-- Billing Address Fields -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <!-- ... Other billing address fields ... -->

                <!-- Shipping Address Fields -->
                <div class="card single-accordion">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Shipping Address
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <!-- Shipping address fields go here -->
                            <p>Your shipping address form is here.</p>
                        </div>
                    </div>
                </div>

                <!-- Card Details Fields -->
                <div class="card single-accordion">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Card Details
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <!-- Card details fields go here -->
                            <p>Your card details go here.</p>
                        </div>
                    </div>
                </div>

               

                <!-- Add a hidden input field to pass total amount -->
                <input type="hidden" name="amount" value="20">
                
                <!-- Add a submit button -->
                <button type="submit" class="btn btn-success">Proceed to Payment</button>
                </form>
             </form>
        </div>
    </div>
</div>
@endsection
