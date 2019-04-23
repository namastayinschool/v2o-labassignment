@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Volunteers Matched to {{Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ url('volorg') }}">Back to Main Page</a>
                    <h2>List of volunteers interested in your cause</h2>
                    <br>

                    <style type="text/css">
                        .tg  {border-collapse:collapse;border-spacing:0;border-width:1px;border-style:solid;border-color:#ccc;}
                        .tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#fff;}
                        .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:0px;overflow:hidden;word-break:normal;border-color:#ccc;color:#333;background-color:#f0f0f0;}
                        .tg .tg-buh4{background-color:#f9f9f9;text-align:left;vertical-align:top}
                        .tg .tg-ddb2{font-family:serif !important;;text-align:center;vertical-align:top}
                        .tg .tg-0lax{text-align:left;vertical-align:top}
                    </style>
                    
                <table class="tg">
                  <tr>
                    <th class="tg-ddb2">First Name</th>
                    <th class="tg-0lax">Last Name</th>
                    <th class="tg-0lax">Address</th>
                    <th class="tg-0lax">Cell</th>
                    <th class="tg-0lax">Home</th>
                    <th class="tg-0lax">E-mail</th>
                  </tr>

                    @foreach ($matched_volunteers as $matched_volunteer)
                  <tr>
                    <td class="tg-buh4">{{ $matched_volunteer->firstName }}</td>
                    <td class="tg-buh4">{{ $matched_volunteer->lastName }}</td>
                    <td class="tg-buh4">{{ $matched_volunteer->homeAddress }}</td>
                    <td class="tg-buh4">{{ $matched_volunteer->cellNumber }}</td>
                    <td class="tg-buh4">{{ $matched_volunteer->homeNumber }}</td>
                    <td class="tg-buh4">{{ $matched_volunteer->emailAddress }}</td>
                  </tr>
                @endforeach
                </table>
                    
                <a href="{{ url('volorg') }}">Back to Main Page</a>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



