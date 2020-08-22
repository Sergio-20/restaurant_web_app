@extends('layouts.app')

@section('content')
<div id="waitlist-page">
    <div class="content-box">
        <div class="row">
            <div class="col-md-6">
                <h1>Get On The List</h1>
                <form>
                    <div class="form-group">
                        <label for="emailInput">Email address</label>
                        <input type="email" name="email" class="form-control" id="emailInput"
                            placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="phoneInput">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" id="phoneInput">
                    </div>
                    <div class="form-group">
                        <label for="guestInput">How Many Guests</label>
                        <select name="guests" class="form-control" id="guestInput">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="timeInput">What Time</label>
                        <select name="time" class="form-control" id="timeInput">
                            <option value="6">6:00 PM</option>
                            <option value="7">7:00 PM</option>
                            <option value="8">8:00 PM</option>
                            <option value="9">9:00 PM</option>
                            <option value="10">10:00 PM</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-submit mb-2 w-100">Reserve Your Spot</button>
                </form>
            </div>
            <div class="col-md-6">
                <p>
                    Please Note: This is <strong>not</strong> a reservation. You will be added to the current waitlist.
                    You may have a short wait when you arrive, while we are preparing your table.
                </p>
                <img class="img-fluid" src="/img/appointment.webp" />
            </div>
        </div>
    </div>
</div>
@endsection