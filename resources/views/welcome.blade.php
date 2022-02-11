@extends('partials.master')
@section('title', 'Home')
    
@section('content')
    
    <div class="container">
        <div class="row p-3">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <form action="/rides" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <label for="whereto">Where to?</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        
                        <div class="col-md-6 mt-2">
                            <label for="pickup_date">Pickup Date</label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                        
                        <div class="col-md-6 mt-2">
                            <label for="pickup_date">Pickup Time</label>
                            <input type="time" name="" id="" class="form-control">
                        </div>
                        <div class="col-md-12 mt-2">
                            <label for="ride">Choose Ride</label>
                            <select name="ride" id="" class="form-control">
                                <option value="hatchback">Hatch Back</option>
                                <option value="sedan">Sedan</option>
                                <option value="SUV">SUV</option>
                                <option value="Van">Van</option>
                                <option value="mini van">Mini Van</option>
                                <option value="Truck">Truck</option>
                            </select>
                        </div>
                        <div class="col-md-12 mt-2">
                            <button type="submit" class="btnGoRide">Go Ride</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection