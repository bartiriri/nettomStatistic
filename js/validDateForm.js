const VALID_DATE_FORM=(function(){

    const indexForm = () => {
        let $from = document.getElementById('index_from');
        let $to = document.getElementById('index_to');
        $('#index_search').click(function(){
            if($from.value > $to.value){
                alert('"From" date is later than "To" date');
            }
            else{
                alert('ok');
            }
        });
    }
    const detailsForm = () => {
        let $from = document.getElementById('details_from');
        let $to = document.getElementById('details_to');
        $('#details_search').click(function(){
            if($from.value > $to.value){
                alert('"From" date is later than "To" date');
            }
            else{
                alert('ok');
            }
        });
    }

    return{
        'indexForm': indexForm,
        'detailsForm': detailsForm
    }
})();