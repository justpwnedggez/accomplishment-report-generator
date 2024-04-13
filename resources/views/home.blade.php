@extends('layouts.app')

@section('content')
<style>
    .date-input-container {
    display: flex;
    align-items: center; /* Align items vertically */
}

.date-input-container input {
    margin-right: 10px; /* Add some spacing between the input and the button */
}

</style>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard Calendar') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="col-md-3" id="calendar-options">
                            <label for="year-select">Select Date:</label>
                            <div class="date-input-container">
                                <input type="date" class="form-control" id="date" value="{{ $dateToday }}" required>
                                <button type="button" class="btn btn-primary" onclick="goToDate()">Jump</button>
                            </div>
                        </div>


                        <div id="calendar"></div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
