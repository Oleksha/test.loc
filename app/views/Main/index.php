<main class="flex-shrink-0">
    <div class="container">
        <h1 class="mt-1">Приходы требующие оплаты</h1>

  </div>
</main>

<div id="payModalMain" class="modal fade" tabindex="-1" data-bs-backdrop="static" aria-labelledby="payModalMain">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Приход оплачен</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <form method="post" action="main/pay-enter" id="pay_enter" role="form" class="was-validated">
                <div class="row g-3 modal-body">
                    <p>Здесь будет форма оплаты</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" class="btn btn-primary">Оплатить</button>
                </div>
            </form>
        </div>
    </div>
</div>