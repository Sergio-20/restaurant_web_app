@extends('layouts.app')

@section('content')
<div id="offers-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Sign Up For Great Deals!</h1>
                <form>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="firstNameInput">First Name</label>
                                <input type="text" name="fname" class="form-control" id="firstNameInput"
                                    placeholder="John">
                            </div>
                            <div class="form-group">
                                <label for="lastNameInput">Last Name</label>
                                <input type="text" name="lname" class="form-control" id="lastNameInput"
                                    placeholder="Doe">
                            </div>
                            <p>
                                By signing up I acknowledge that I am 18 years of age or older, want to receive email
                                offers from Billy's Burgers and, if I select to join Dine Rewards, agree to the terms
                                and conditions of the program.
                            </p>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="emailInput">Email address</label>
                                <input type="email" name="email" class="form-control" id="emailInput"
                                    placeholder="name@example.com">
                            </div>
                            <div class="form-group">
                                <label for="phoneInput">Phone Number</label>
                                <input type="tel" name="phone" class="form-control" id="phoneInput">
                            </div>
                            <button type="submit" class="btn btn-submit mb-2 w-100">Sign Up</button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection