<div>
    <form class="form" method="POST" enctype="multipart/form-data" action={{route('background.upload')}}>
    @csrf
        <div class="field">
          <label class="label">Изображение для фона</label>
          <div class="field has-addons">
          <div class="control">
            <input class="input" name="background" type="file" placeholder="Загрузите изображение для фона">
          </div>
          <div class="control">
            <button class="button is-info" type="submit">Загрузить</button>
          </div>
        </div>
    </form>
</div>