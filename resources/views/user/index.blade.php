@extends('layout.master')
@section('title')
<title>Zam Studio</title>
@stop
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">All Records</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">New Item</button>
</div>
<div style="height: 400px; overflow: auto;">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Website</th>
                <th scope="col">Company Name</th>
                <th scope="col">Contact First Name</th>
                <th scope="col">Contact Last Name</th>
                <th scope="col">Contact Email</th>
                <th scope="col">Twitter</th>
                <th scope="col">Note</th>
                <th scope="col">Created At</th>
                <th scope="col">Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($prospects as $prospect)
            <tr>
                <td>{{ $prospect->website }}</td>
                <td>{{ $prospect->company_name }}</td> 
                <td>{{ $prospect->contact_first_name }}</td>
                <td>{{ $prospect->contact_last_name }}</td>
                <td>{{ $prospect->contact_email }}</td>
                <td>{{ $prospect->twitter }}</td>
                <td>{{ $prospect->note }}</td>
                <td>{{ $prospect->created_at }}</td>
                <td>{{ $prospect->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('prospects.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="website">Website</label>
                        <input type="text" class="form-control" name="website"
                            placeholder="Website">
                        @if ($errors->has('website'))
                            <span class="text-danger">{{ $errors->first('website') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="companyName">Company Name</label>
                        <input type="text" class="form-control" name="company_name"
                            placeholder="Enter Your company Name">
                    </div>
                    <div class="form-group">
                        <label for="contactFirstName">Contact First Name</label>
                        <input type="text" class="form-control" name="contact_first_name"
                            placeholder="Contact First Name">
                    </div>
                    <div class="form-group">
                        <label for="contactLastName">Contact Last Name</label>
                        <input type="text" class="form-control" name="contact_last_name"
                            placeholder="Contact Last Name">
                    </div>
                    <div class="form-group">
                        <label for="contactEmail">Contact Email</label>
                        <input type="email" class="form-control" name="contact_email"
                            placeholder="Contact Email">
                    </div>
                    <div class="form-group">
                        <label for="linkedin">Linkedin</label>
                        <input type="text" class="form-control" name="linkedin"
                            placeholder="Linkedin">
                    </div>
                    <div class="form-group">
                        <label for="twitter">Twitter</label>
                        <input type="text" class="form-control" name="twitter"
                            placeholder="Twitter">
                    </div>
                    <div class="form-group">
                        <label for="numberOfEmployees">Number of Employees</label>
                        <input type="number" class="form-control" name="number_of_employees"
                            placeholder="Number of Employees">
                    </div>
                    <div class="form-group">
                        <label for="industry">Industry</label>
                        <input type="text" class="form-control" name="industry"
                            placeholder="Industry">
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" name="status"
                            placeholder="Status">
                    </div>
                    <div class="form-group">
                        <label for="note">Note</label>
                        <textarea class="form-control" name="note" rows="4" placeholder="Note"></textarea>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>
</div>
@stop