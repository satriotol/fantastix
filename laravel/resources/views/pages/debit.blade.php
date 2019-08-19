@extends('layouts.default-sidebar')
@section('content')
<div class="col-sm-9 col-lg-10">
    <div class="container menu">
        <h1>Debit</h1>
        <form action="" class="mt-2 master-form">
            <div class="d-flex">
                <div class="ml-auto bd-highlight">
                    <input class="btn btn-success" type="button" value="Export To Excel">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="">Customer Name</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">Date From</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="form-group">
                        <label for="">Date To</label>
                        <input class="form-control" type="text">
                    </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-group">
                        <label for="">&nbsp</label><br>
                        <button class="btn btn-primary" style="width: 100%;">Search</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Sale ID</th>
                            <th scope="col">Date</th>
                            <th scope="col">Outlets</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Grand Total</th>
                            <th scope="col">Unpaid Amount</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Bastuti</td>
                            <td>bastuti@gmail.com</td>
                            <td>089238918391</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </form>
    </div>
</div>
</section>
@stop
