<div>

<div>
<img src="">
</div>
<form class="form" method="POST" action={{route('add-text')}}>
@csrf
    <div class="field">
      <label class="label">Имя автора</label>
      <div class="control">
        <input class="input" name="author" type="text" placeholder="Введите имя автора">
      </div>
    </div>
    <div class="field">
      <label class="label">Название</label>
      <div class="control">
        <input class="input" name="title" type="text" placeholder="Введите название">
      </div>
      <div class="control">
        <button class="button is-info" type="submit">Ok</button>
      </div>
    </div>
</form>

<?php
        echo "<pre>";
        echo print_r($_REQUEST,true);
        echo "</pre>";
?>
</div>