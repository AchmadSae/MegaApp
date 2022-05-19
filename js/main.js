$(document).ready(function(){

    $('.collapsible').collapsible();
  
    $('li').on('click',function(){
        var classname = $(this).attr('class');
        if(classname == 'active'){
            $(this).children('div').children('.material-icons').css('transform','rotate(0deg)');
            $(this).children('div').children('.material-icons').css('transition','0.3s');
        }else{
            $(this).children('div').children('.material-icons').css('transform','rotate(-180deg)');
            $(this).children('div').children('.material-icons').css('transition','0.3s');
    
        }
    });

    $('.dropdown-trigger').dropdown({

        coverTrigger:false,
        hover: true,
    });
    $('th').click(function(){
        var table = $(this).parents('table').eq(0)
        var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
        this.asc = !this.asc
        if (!this.asc){rows = rows.reverse()}
        for (var i = 0; i < rows.length; i++){table.append(rows[i])}
    })

    function comparer(index) {
        return function(a, b) {
            var valA = getCellValue(a, index), valB = getCellValue(b, index)
            return $.isNumeric(valA) && $.isNumeric(valB) ? valA - valB : valA.toString().localeCompare(valB)
        }
    }

    function getCellValue(row, index){ return $(row).children('td').eq(index).text() }

    
    

});

  