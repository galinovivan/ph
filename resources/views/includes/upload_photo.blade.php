<div class="container">
    <div class="row">
        <div class="col-md-6">
    <div class="upload_form">
        <form action="{{ url('/upload_photo')  }}" enctype="multipart/form-data" method="post" id="uploadPhotoForm">
            {{ csrf_field()  }}
         <input type="text" name="photo_label" placeholder="photo" id="label">
         <input type="file" name="image" id="photo">
         <button type="submit">send</button>
         </form>
    </div>
    </div>
        <div class="col-md-6">
            <div class="random_photo">
                <button class="button button-blue">Покажите мне случайное фото</button>
            </div>
        </div>
    </div>
</div>