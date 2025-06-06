<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PMS | Drive Out</title>
    <link rel="icon" href="/img/logo3.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        label {
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: large;
        }

        div.col-md-6 {
            margin-bottom: 15px;
            margin-top: 15px;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        p{
            color: #2F4858;
            font-weight: bolder;
            font-size: larger;
            font-family: "Nunito", sans-serif;
            font-optical-sizing: auto;
            font-style: normal;
        }

        .custom-light-table {
            background-color: white;
            color: black;
        }

        .custom-light-table thead {
            background-color: #f8f9fa; /* Light gray header */
            color: black;
        }

    </style>
</head>

<body>
    @extends('layouts.header')

    @section('content')
    <div class="container" style="margin-top: 50px;">
    <p>{{session('msg')}}</p>
        <form class="row g-3" action="/driveOut" method="POST">
            @csrf
        
            <div class="col-md-6">
                <label for="num" class="form-label">Phone Number</label>
                <input type="number" class="form-control" placeholder="XXX-XXX-XXXX" name="num" id="num" requires>
            </div>
            <div class="col-md-6">
                <label for="reg_num" class="form-label" require>License Plate Number</label>
                <input type="text" class="form-control" name="reg_num" id="reg_num" placeholder="XXX0000" required>
            </div>

            <div class="col-md-5">
                <div class="form-check">

                </div>
            </div>
            <div class="col-md-12">
                <button type="submit" style="background-color: #05396b;" class="btn btn-primary btn-lg btn-block">Park Out</button>
            </div>
            
        </form>
        <div class="card-body">
            <table class="table table-bordered table-striped table-hover custom-light-table">
                <thead>
                    <h2>Current Rates</h2>
                    <tr class="text-black">
                        <th>Vehicle Type</th>
                        <th>Rate/Hr</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item->category }}</td>
                        <td>$ {{ $item->rate }}</td>
                    </tr>
                    @endforeach
            </table>
        </div>
    </div>
    @endsection



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>