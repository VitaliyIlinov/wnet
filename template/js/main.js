function validate(el) {
    var error = null;
    el.removeClass('is-valid is-invalid');
    if (el.val().search(/^[0-9]+$/) >= 0) {
        el.addClass('is-valid');
        return true;
    }
    error = 'This field is required. Only number';
    el.addClass('is-invalid');
    el.next().text(error);
    return false;
}
$(document).ready(function () {

    $('form [name="customer"]').on('change', function () {
        validate($(this));
    });
    $('form').on('submit', function (e) {
        e.preventDefault();
        if(validate($(this).find('[name="customer"]'))){
            $.ajax({
                url:location.href,
                data:$(this).serialize(),
                dataType:"json",
                method:$(this).attr('method'),
                success:function (response) {
                    if(response.result!==false){
                        alert(response.result);
                    }else if(response.data==false){
                        alert('There is no client with this id or status;')
                    }else{
                        var tablInfo=$('table tbody');
                        var response=response.data;
                        console.log(response);
                        tablInfo.find('td:eq(2)').text(response.name_customer);
                        tablInfo.find('td:eq(4)').text(response.company);
                        tablInfo.find('td:eq(7)').text(response.number);
                        tablInfo.find('td:eq(9)').text(response.date_sign);
                        tablInfo.find('td:eq(11)').text(response.title_service);
                    }

                }
            });
        }
    })
});