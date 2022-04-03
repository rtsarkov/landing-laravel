<div class="modal popup" id="product">
    <div class="popup__body">
        <div class="row">
            <div class="col-12 col-lg-4 popup__image">
                <img src="/storage/images/{{ $product->image->name }}">
            </div>
            <div class="col-12 col-lg-8">
                <div class="popup-title text-center">{{ $product->name }}</div>
                <div class="row popup-content">
                    <div class="col-12 col-lg-6 field">
                        <span class="field__name">Производитель</span>
                        <div class="field__text">{{ $product->manufacturer }}</div>
                    </div>
                    <div class="col-12 col-lg-6 field">
                        <span class="field__name">Гарантийный период (мес.)</span>
                        <div class="field__text">{{ $product->warranty }}</div>
                    </div>
                    <div class="col-12 col-lg-6 field">
                        <span class="field__name">Назначение товара</span>
                        <div class="field__text">{{ $product->description }}</div>
                    </div>
                    <div class="col-12 col-lg-6 field">
                        <span class="field__name">Товар в наличии</span>
                        <div class="field__text">{{ $product->products }}</div>
                    </div>
                    <div class="col-12 col-lg-6 field">
                        <span class="field__name">Преимущества</span>
                        <div class="field__text">{{ $product->benefits }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blue-form">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="blue-form__title">Получить консультацию</div>
            </div>
            <div class="col-12 col-lg-8">
                <form class="modal__footer modal__footer_blue" method="POST" data-name="product">
                    <input type="hidden" name="product_name" value="{{ $product->name }}">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" value="" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" name="phone" placeholder="Телефон">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="company" placeholder="Организация">
                    </div>
                    <div class="buttons">
                        <input class="btn btn-primary" type="submit" value="Отправить">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
