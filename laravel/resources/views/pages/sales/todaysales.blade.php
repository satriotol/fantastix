@extends('layouts.default-sidebar')
@section('content')
<style>
    .panel {
        background-color: white;
        padding: 20px;
        border-radius: 10px;
    }

    .panel button {
        background-color: #0079c0;
        border-color: #015d93;
        font-family: Arial, Helvetica, sans-serif;
    }

</style>
<div class="col-sm-9 col-sm-offset-10 col-lg-10 col-lg-offset-2 main">
    <div class="container">
        <h1>Today's Sales</h1>
        <form action="" class="mt-2 panel">
            <div class="d-flex">
                <div class="ml-auto bd-highlight"><input class="btn btn-success" type="button" value="Export To Excel">
                </div>
            </div>
            <br>
                <div class="d-flex">
                    <div class="mr-auto bd-highlight">
                        <label> Show <select type="text">
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="500">500</option>
                                <option value="1000">1000</option>
                            </select> Enteris </label>
                    </div>
                        <div class="ml-auto bd-highlight">
                        <label>Search: <input type="text" class="" placeholder="" aria-controls="example"> </label>
                    </div>
                </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped">
                        <thead>
                            <tr class="table">
                                <th>date</th>
                                <th>sale Id</th>
                                <th >Type</th>
                                <th >outlets</th>
                                <th >Customer</th>
                                <th >Item</th>
                                <th>Sub Totals</th>
                                <th>Tax</th>
                                <th >Grand Total</th>
                                <th >Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr style="text-align: center;">
                            <td colspan="10" class="dataTables_empty">No data available in table</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6" style="float: left; padding-top: 10px;">
                    Showing 0 to 0 of 0 entries </div>
            </div>
        </form>
    </div>
</div>

</section>@stop
