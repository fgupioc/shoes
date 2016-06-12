
$(function (){
    $(".ubigeo").change(function (){
        var id = $(this).attr('id');
        var value = $(this).val();
        var cadena = (id.search('departamento') >= 0) ? 'Provincia': 'Distrito';
        var id_2;
        var newOptions = {
            '' : cadena
        }
        if (id.search('departamento') >= 0){
            clean_district(id)
            department(newOptions,value);
            id_2 = id.replace('departamento', 'provincia');
        }else{
            province(newOptions, value);
            id_2 = id.replace('provincia', 'distrito');
        }

        var selectedOption = '';
        var select = $('#'+id_2);
        if(select.prop){
            var options = select.prop('options');
        }
        else {
            var options = select.attr('options');
        }
        $('option', select).remove();

        $.each(newOptions, function(val, text) {
            options[options.length] = new Option(text, val);
        });
        select.val(selectedOption);


    });

    function department(options,value){
        {% for a in  lista %}
        if ("{{a.departamento}}" == value ) {
            options["{{a.provincia}}"] = "{{a.provincia}}"
        }
        {% endfor %}
    }

    function province(options, value){
        {% for a in  lista %}
        if ("{{a.provincia}}" == value ) {
            options["{{a.distrito}}"] = "{{a.distrito}}"
        }
        {% endfor %}
    }


    function clean_district(id){
        var newOptions = {
            '' : 'Distrito'
        }
        var selectedOption = '';
        var id = id.replace('departamento', 'distrito')
        var select = $('#' + id);
        if(select.prop){
            var options = select.prop('options');
        }
        else {
            var options = select.attr('options');
        }
        $('option', select).remove();

        $.each(newOptions, function(val, text) {
            options[options.length] = new Option(text, val);
        });
        select.val(selectedOption);
    }

});

