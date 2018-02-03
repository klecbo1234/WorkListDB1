@extends('templates.main')
@section('content')

    <div class="container">
        <div class="row page-title text-center wow bounce"  data-wow-delay="1s">
            <h5>Add job</h5>

        </div>
        <div class="row jobs">
            <div class="col-md-9">
                <form action="/add" method="POST"  class=" form-inline">
                    <div class="form-group">
                        {{ csrf_field() }}
                        <input type="text" name="title" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <select name="city" id="" class="form-control">
                            <option>Search city</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" name="company" class="form-control" placeholder="Company">
                    </div>
                    <div class="form-group">
                        <input type="text" name="info" class="form-control" placeholder="Info">
                    </div>
                    <div class="form-group">
                        <input type="text" name="salary" class="form-control" placeholder="salary">
                    </div>
                    <input type="submit" class="btn" value="submit">


                </form>
                </div>

            </div>

        </div>
    </div>
    <hr>



    </div>
@endsection