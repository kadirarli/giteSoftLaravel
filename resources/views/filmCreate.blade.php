<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Films</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-offset-2 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Film Create</h3>
                </div>
                <div class="panel-body">
                    @if(isset($message))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <form method="post" action="{{url('/films/create')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label for="film-name">Name:</label>
                            <input type="text" class="form-control" id="film-name" name="name">
                            @if($errors->has('name'))
                                <span class="help-block">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                            <label for="film-description">Description:</label>
                            <textarea class="form-control" id="film-description" name="description" rows="3"></textarea>
                            @if($errors->has('description'))
                                <span class="help-block">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('release_date') ? 'has-error' : '' }}">
                            <label for="film-releaseDate">Release Data:</label>
                            <input class="form-control" type="date" id="film-releaseDate" name="release_date">
                            @if($errors->has('release_date'))
                                <span class="help-block">{{ $errors->first('release_date') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('rating') ? 'has-error' : '' }}">
                            <label for="film-rating">Rating:</label>
                            <select class="form-control" id="film-rating" name="rating">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            @if($errors->has('rating'))
                                <span class="help-block">{{ $errors->first('rating') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('ticket_price') ? 'has-error' : '' }}">
                            <label for="film-ticketPrice">Ticket Price:</label>
                            <input class="form-control" type="number" value="0" id="film-ticketPrice" name="ticket_price">
                            @if($errors->has('ticket_price'))
                                <span class="help-block">{{ $errors->first('ticket_price') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            <label for="film-country">Country:</label>
                            <input type="text" class="form-control" id="film-country" name="country">
                            @if($errors->has('country'))
                                <span class="help-block">{{ $errors->first('country') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('photo') ? 'has-error' : '' }}">
                            <label class="custom-file" for="film-photo">Photo:</label>
                            <input type="file" id="file" class="film-photo" name="photo">
                            @if($errors->has('photo'))
                                <span class="help-block">{{ $errors->first('photo') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>