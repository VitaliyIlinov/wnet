<h1>Тестовое задание</h1>
<form method="post" action="/">
    <input type="hidden" name="action" value="get_customer">
    <div class="form-group row">
        <label for="customer" class="col-sm-2 col-form-label">Customer</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="customer" id="customer" placeholder="Customer">
            <div class="invalid-feedback">
                Please provide a valid city.
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">Status</div>
        <div class="col-sm-10">
            <div class="form-check">
                <label class="form-check-label">
                    <input name="status[work]" checked class="form-check-input" type="checkbox">work
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input name="status[connecting]" checked class="form-check-input" type="checkbox">connecting
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input name="status[disconnected]" checked class="form-check-input" type="checkbox">disconnected
                </label>
            </div>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>
<table class="table table-striped">
    <tbody>
    <tr>
        <td colspan=2><b>информация про клиента</b></td>
    </tr>
    <tr>
        <td>название клиента</td>
        <td>[name_customer]</td>
    </tr>
    <tr>
        <td>компания</td>
        <td>[ company]</td>
    </tr>
    <tr>
        <td colspan=2><b>информация про договор</b></td>
    </tr>
    <tr>
        <td>номер договора</td>
        <td>[ number]</td>
    </tr>
    <tr>
        <td>дата подписания</td>
        <td>[ date_sign]</td>
    </tr>
    <tr>
        <td colspan=2><b>информация про сервисы</b></td>
    </tr>
    <tr>
        <td colspan=2>
            [services_name]
            <!-- в services_name вывести название сервисов через <br> -->
        </td>
    </tr>

    </tbody>
</table>