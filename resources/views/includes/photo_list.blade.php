@foreach($photos as $photo)
    <div class="col-xs-6 col-md-4">
    <div class="photo">
        <img src="{{ 'photo/' . $photo->filename  }}" class="img-responsive" />
    </div>
    <div class="label">
        <h2>{{  $photo->label }}</h2>
    </div>
    </div>
@endforeach