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
                <th scope="col">state_province</th>
                <th scope="col"> postal_zip_code</th>
                <th scope="col">country</th>
                <th scope="col">registration_number</th>
                <th scope="col">social_media_links</th>
                <th scope="col">website_url</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
            <tr>
                <td>{{ $city->state_province }}</td>
                <td>{{ $city->postal_zip_code }}</td>
                <td>{{ $city->country }}</td>
                <td>{{ $city->registration_number }}</td>
                <td>{{ $city->social_media_links }}</td>
                <td>{{ $city->website_url }}</td>
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
                <form action="{{ route('cities.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="website">state province</label>
                        <input type="text" class="form-control" name="state_province"
                            placeholder="Enter your state_province">
                        @if ($errors->has('state_province'))
                            <span class="text-danger">{{ $errors->first('state_province') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="companyName">postal zip code</label>
                        <input type="text" class="form-control" name="postal_zip_code"
                            placeholder="Enter Your postal_zip_code">
                    </div>
                    <div class="form-group">
                        <label for="contactFirstName">country</label>
                        <input type="text" class="form-control" name="country"
                            placeholder="country">
                    </div>
                    <div class="form-group">
                        <label for="contactLastName">registration number</label>
                        <input type="text" class="form-control" name="registration_number"
                            placeholder="registration_number">
                    </div>
                    <div class="form-group">
                        <label for="contactEmail">social media links</label>
                        <input type="email" class="form-control" name="social_media_links"
                            placeholder="social_media_links">
                    </div>
                    <div class="form-group">
                        <label for="linkedin">website url</label>
                        <input type="text" class="form-control" name="website_url"
                            placeholder="website_url">
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