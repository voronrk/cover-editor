# Задание 19

В качестве темы задания выбрана реализация примитивного веб-редактора для создания книжных обложек.

Интерфейс приложения состоит из одного апи-роута для загрузки данных (фоновое изображение, название, размеры и положение названия на обложке). Для тестов создана простая форма и страница для получения ссылки на превью и на скачивание полноразмерного результата.

Для хранения загруженных изображений в файле filesystems.php зарегистрирован диск 'bg', для хранения результатов - диск 'cover'. Отдельный диск или папку для хранения превью сделать не успел. Там же прописаны публичные ссылки для этих дисков (создаются artisan-командой storage:link);

Ресурсный контроллер BackgroundController принимает данные, сохраняет их в базу (из-за недостатка времени верификация не сделана), сохраняет на диск 'bg' загруженное изображение и производит редирект на роут 'result' с передачей ID созданной модели.

На странице result используется компонент result, конструктор которого вызывает класс Cover, в котором реализована вся работа с изображением.

Класс Cover изменяет размер загруженного изображения в соответствии с переданными значениями, размещает на нём переданный текст, кодирует в формат TIF и сохраняет на диск 'cover', а также создаёт превью в формате png и сохраняет её на тот же диск. Для различения превью и печатной версии используются префиксы 'preview_' и 'cover_' соответственно. 

Пути к печатной версии и превью сохраняются в модели (поля cover и preview) и возвращаются из класса Cover.

<a href="https://imgbb.com/"><img src="https://i.ibb.co/jTK8QTs/1.png" alt="1" border="0"></a>

<a href="https://ibb.co/Lz6bXgx"><img src="https://i.ibb.co/bgLqMvs/2.png" alt="2" border="0"></a>

