<main role="main" class="flex-shrink-0">
    <div class="container">
        <div class="d-flex justify-content-between">
            <h1 class="mt-1">Список бюджетных операций</h1>
        </div>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?=PATH;?>">Главная</a></li>
                <li class="breadcrumb-item "><a href="<?=PATH;?>/budget/upload">Загрузка данных</a></li>
                <li class="breadcrumb-item active" aria-current="page">Бюджетные операции</li>
            </ol>
        </nav>
        <div class="breadcrumb filters">
            <div class="col-auto me-3">
                <div class="input-group">
                    <label class="input-group-text" for="select_year">Год</label>
                    <select class="form-select" id="select_year">
                        <option value="2021" <?php /** @var string $year */
                        if ($year == '2021') echo ' selected'; ?>>2021</option>
                        <option value="2022" <?php if ($year == '2022') echo ' selected'; ?>>2022</option>
                    </select>
                </div>
            </div>
            <div class="col-auto">
                <div class="input-group">
                    <label class="input-group-text" for="select_month">Месяц</label>
                    <select class="form-select" id="select_month">
                        <option value="01" <?php /** @var string $month */
                        if ($month == '01') echo ' selected'; ?>>Январь</option>
                        <option value="02" <?php if ($month == '02') echo ' selected'; ?>>Февраль</option>
                        <option value="03" <?php if ($month == '03') echo ' selected'; ?>>Март</option>
                        <option value="04" <?php if ($month == '04') echo ' selected'; ?>>Апрель</option>
                        <option value="05" <?php if ($month == '05') echo ' selected'; ?>>Май</option>
                        <option value="06" <?php if ($month == '06') echo ' selected'; ?>>Июнь</option>
                        <option value="07" <?php if ($month == '07') echo ' selected'; ?>>Июль</option>
                        <option value="08" <?php if ($month == '08') echo ' selected'; ?>>Август</option>
                        <option value="09" <?php if ($month == '09') echo ' selected'; ?>>Сентябрь</option>
                        <option value="10" <?php if ($month == '10') echo ' selected'; ?>>Октябрь</option>
                        <option value="11" <?php if ($month == '11') echo ' selected'; ?>>Ноябрь</option>
                        <option value="12" <?php if ($month == '12') echo ' selected'; ?>>Декабрь</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="product-one">

        </div>
    </div>
</main>