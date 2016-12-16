@extends('layouts.app')

@section('content')
    <div class="container" ng-app="Home" ng-controller="workController">
        What is your name <input type="text" ng-model="name">
        <h1><% name %></h1>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input name='title' class="form-control" id="title" type='text'  placeholder="Title" ng-model="work.title">
                    </div>
                    <button type="submit" class="btn btn-primary" ng-click="addWork()">Save</button>
                </form>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <table class="table table-striped">

                </table>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Data list</div>
            <table class="table">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat='work in works'>
                    <td><% work.title %></td>
                    <td><button class="btn btn-danger" ng-click="deleteWork($index)"></button></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
