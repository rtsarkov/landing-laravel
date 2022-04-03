<div class="modal" id="callback" style="max-width: 800px;padding:0;">
    <div class="modal__head modal__head_blue">
        <div class="modal__title text-center">Остались вопросы? — Пишите</div>
    </div>
    <div class="modal__body">
        <form method="POST" data-name="callback" data-form-ajax>
            <div>
                <input class="form-control" type="text" name="name" placeholder="Имя">
            </div>
            <div>
                <input class="form-control" type="tel" name="phone" placeholder="Телефон">
            </div>
            <div>
                <input class="form-control" type="text" name="company" placeholder="Организация">
            </div>
            <div>
                <input class="form-control" type="email" name="email" placeholder="Email">
            </div>
            <div>
                <textarea class="form-control" name="question" id="question" placeholder="Задайте вопрос"></textarea>
            </div>
            <div class="form-action pt-4">
                <input class="btn btn-primary" type="submit" value="Отправить">
            </div>
        </form>
    </div>
</div>

<script>
    let im = new Inputmask("+7-(999)-999-99-99");
    im.mask(document.querySelector('[name="phone"]'));
</script>
