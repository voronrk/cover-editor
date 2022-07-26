<div>
    <form class="form" method="POST" enctype="multipart/form-data" action={{route('upload')}}>
        @csrf
        <div class="field">
          <label class="label">Изображение для фона</label>
          <div class="control">
            <input class="input" name="background" type="file" placeholder="Загрузите изображение для фона">
          </div>
        </div>

        <div class="field">
          <label class="label">Название</label>
          <div class="control">
            <input class="input" name="title" type="text" placeholder="Введите название">
          </div>
        </div>

        <div class="control">
          <button class="button is-info" type="submit">Ok</button>
        </div>
        
    </form>
</div>