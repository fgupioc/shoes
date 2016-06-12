<script>
    $(function (){

    $(".ubigeo").change(function (){
        var id = $(this).attr('id');
        var value = $(this).val();
        var cadena = (id.search('department') >= 0) ? 'Provincia': 'Distrito';
        var id_2;
        var newOptions = {
            '' : cadena
        };
        if (id.search('department') >= 0){
            clean_district(id);
            department(newOptions,value);
            id_2 = id.replace('department', 'province');
        }else{
            province(newOptions, value);
            id_2 = id.replace('province', 'district');
        }
        var options;
        var selectedOption = '';
        var select = $('#'+id_2);
        if(select.prop){
          options = select.prop('options');
        }
        else {
          options = select.attr('options');
        }
        $('option', select).remove();

        $.each(newOptions, function(val, text) {
            options[options.length] = new Option(text, val);
        });
        select.val(selectedOption);
    });

    function department(options,value){
        @foreach($location_list as $location)
            if ("{{$location->department}}" == value){
                options["{{$location->province}}"] = "{{$location->province}}";
            }
        @endforeach
    }

    function province(options, value){
        @foreach($location_list as $location)
            if ("{{$location->province}}" == value){
                options["{{$location->district}}"] = "{{$location->district}}";
            }
        @endforeach
    }

    function clean_district(ids){
        var newOptions = {
            '' : 'Distrito'
        };
        var selectedOption = '';
        var id = ids.replace('department', 'district');
        var select = $('#' + id);
        var options;
        if(select.prop){
          options = select.prop('options');
        }
        else {
          options = select.attr('options');
        }
        $('option', select).remove();

        $.each(newOptions, function(val, text) {
            options[options.length] = new Option(text, val);
        });
        select.val(selectedOption);
    }
});

</script>